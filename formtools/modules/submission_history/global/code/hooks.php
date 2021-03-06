<?php

/**
 * This file contains all the various hooks that update the submission history tables for each form
 * when submissions are added, updated and deleted, when the form content (columns) are updated and
 * so on.
 */

// ------------------------------------------------------------------------------------------------


function sh_register_hooks()
{
  // these hook shadow the core functions so that any time the form tables change, the history table columns
  // are also updated accordingly
  ft_register_hook("code", "submission_history", "end", "ft_add_form_fields", "sh_hook_add_form_fields");
  ft_register_hook("code", "submission_history", "end", "ft_delete_form_fields", "sh_hook_delete_form_fields");
  ft_register_hook("code", "submission_history", "end", "ft_finalize_form", "sh_hook_finalize_form");
  ft_register_hook("code", "submission_history", "start", "ft_delete_form", "sh_hook_delete_form");
  ft_register_hook("code", "submission_history", "end", "_ft_alter_table_column", "sh_rename_table_column");

  // submissions
  ft_register_hook("code", "submission_history", "end", "ft_create_blank_submission", "sh_hook_create_blank_submission");
  ft_register_hook("code", "submission_history", "end", "ft_process_form", "sh_hook_process_form");
  ft_register_hook("code", "submission_history", "start", "ft_delete_submission", "sh_hook_delete_submission");
  ft_register_hook("code", "submission_history", "start", "ft_delete_submissions", "sh_hook_delete_submissions");
  ft_register_hook("code", "submission_history", "end", "ft_update_submission", "sh_hook_update_submission");
  ft_register_hook("code", "submission_history", "start", "ft_update_submission", "sh_hook_update_submission_init");
  ft_register_hook("code", "submission_history", "end", "ft_file_delete_file_submission", "sh_hook_delete_file_submission");

  // display the submission history on the administrator's Edit Submission page
  ft_register_hook("template", "submission_history", "admin_edit_submission_bottom", "", "sh_hook_display_submission_changelog");
  ft_register_hook("code", "submission_history", "main", "ft_display_page", "sh_hook_include_module_resources");
}


/**
 * This hook is called after the administrator adds one or more fields to a form. Rather than re-doing
 * the work done by ft_add_form_fields, this just examines the content of the form table and adds those
 * columns not already in the history table.
 *
 * @param $postdata
 */
function sh_hook_add_form_fields($postdata)
{
  global $g_table_prefix, $g_field_sizes;

  $form_id = $postdata["form_id"];

  // get column names of form table
  $col_name_hash = ft_get_form_column_names($form_id);
  $original_col_names = array_keys($col_name_hash);

  // get column names of history table
  $history_table_col_names = sh_get_history_table_col_names($form_id);

  // figure out which columns exist in the table that AREN'T in the history table
  $new_columns = array_diff($original_col_names, $history_table_col_names);

  // loop through each new field and find out the database size (stored in ft_form_fields table).
  // for each, add the new column to the history table
  foreach ($new_columns as $new_column_name)
  {
    // get the field size of this form - that's all we really need to know
    $field_info = ft_get_form_field_by_colname($form_id, $new_column_name);
    $field_size = $field_info["field_size"];
    $new_field_size = $g_field_sizes[$field_size]["sql"];
    list($is_success, $err_message) = _ft_add_table_column("{$g_table_prefix}form_{$form_id}_history", $new_column_name, $new_field_size);
  }
}


/**
 * Updated in 1.1.4, this deletes the coresponding form fields in the history table when the admin
 * deletes them from the Edit Form -> Fields tab.
 *
 * By the time this function is called, the actual fields have been removed from the database. This
 * function wasn't properly working prior to 1.1.4. This module now REQUIRES Form Tools Core 2.1.6 or later. :-(
 *
 * @param array $postdata
 */
function sh_hook_delete_form_fields($postdata)
{
  global $g_table_prefix;

  $form_id = $postdata["form_id"];
  if (!isset($postdata["field_ids"]) || !is_array($postdata["field_ids"]) || !isset($postdata["deleted_field_info"]))
    return;

  foreach ($postdata["field_ids"] as $field_id)
  {
  	$field_info = array();
  	foreach ($postdata["deleted_field_info"] as $curr_field_info)
  	{
  		if ($field_id == $curr_field_info["field_id"])
  		{
  			$field_info = $curr_field_info;
  			break;
  		}
  	}

  	if (!empty($field_info))
  	{
      $col_name = $field_info["col_name"];
      @mysql_query("ALTER TABLE {$g_table_prefix}form_{$form_id}_history DROP $col_name");
  	}
  }
}


/**
 * Our shadow for the ft_create_blank_submission function.
 *
 * @param array $postdata
 */
function sh_hook_create_blank_submission($postdata)
{
  global $g_table_prefix;

  $form_id = $postdata["form_id"];

  if (!sh_is_tracking_form($form_id))
    return;

  $data = array(
    "submission_id"      => $postdata["new_submission_id"],
    "ip_address"         => $postdata["ip"],
    "submission_date"    => $postdata["now"],
    "last_modified_date" => $postdata["now"],
  );
  sh_add_history_row($form_id, $postdata["new_submission_id"], "new", $data);
}


/**
 * Called when a single submission is deleted. This is called at the START of the ft_delete_submission
 * function, so we can rely on the submission still being in the main forms table.
 *
 * @param $postdata
 */
function sh_hook_delete_submission($postdata)
{
  global $g_table_prefix;

  $submission_id = $postdata["submission_id"];
  $form_id       = $postdata["form_id"];
  $submission_info = ft_get_submission_info($form_id, $submission_id);
  sh_add_history_row($form_id, $submission_id, "delete", $submission_info);
}


/**
 * Called when multiple submissions are deleted. This function could potentially create a serious
 * lag in the UI if the number of submissions being deleted are in the hundreds or thousands. It
 * creates a new entry in the history table for each and every submission being deleted. Unfortunately
 * there's not much we can do to get around this...
 *
 * @param $postdata
 */
function sh_hook_delete_submissions($postdata)
{
  $form_id = $postdata["form_id"];
  $submissions_to_delete = $postdata["submissions_to_delete"];

  foreach ($submissions_to_delete as $submission_id)
  {
    $submission_info = ft_get_submission_info($form_id, $submission_id);
    sh_add_history_row($form_id, $submission_id, "delete", $submission_info);
  }
}


/**
 * Called after finalizing a form. It creates the new history table. If the user has indicated that they want all
 * new forms tracked, this adds the form ID to the tracked_form_ids settings so it's automatically picked
 * up by the other hooks.
 *
 * @param $postdata
 */
function sh_hook_finalize_form($postdata)
{
  $form_id = $postdata["form_id"];
  sh_create_history_table($form_id);

  $settings = ft_get_module_settings(array("tracked_form_ids", "track_new_forms"));
  if ($settings["track_new_forms"] == "yes")
  {
    $form_ids = explode(",", $settings["tracked_form_ids"]);
    $form_ids[] = $form_id;
    $updated_form_id_str = implode(",", $form_ids);

    $updated_settings = array(
      "tracked_form_ids" => $updated_form_id_str
    );
    ft_set_module_settings($updated_settings);
  }
}


function sh_hook_delete_form($postdata)
{
  global $g_table_prefix;

  $form_id = $postdata["form_id"];
  @mysql_query("DROP TABLE {$g_table_prefix}form_{$form_id}_history");
}


function sh_hook_process_form($postdata)
{
  $form_id       = $postdata["form_id"];
  $submission_id = $postdata["submission_id"];
  $submission_info = ft_get_submission_info($form_id, $submission_id);
  sh_add_history_row($form_id, $submission_id, "new", $submission_info);
}


/**
 * This function is called after every ft_update_submission call - after the submission info is
 * updated in the database.
 *
 * @param array $postdata
 */
function sh_hook_update_submission($postdata)
{
  $form_id       = $postdata["form_id"];
  $submission_id = $postdata["submission_id"];
  $context = (isset($postdata["infohash"]["context"]) && $postdata["infohash"]["context"] == "submission_accounts") ? "submission" : "update";
  $submission_info = ft_get_submission_info($form_id, $submission_id);
  sh_add_history_row($form_id, $submission_id, $context, $submission_info);
}

/**
 * This is a workaround, but not a terribly bad one. It's called at the BEGINNING of the ft_update_submission
 * function, prior to updating the database. Since this module doesn't initially prepopulate the history
 * tables with copies of all the data (too much work, too much wasted db space), this function checks to see if
 * the submission already has history. If it doesn't, it creates a new record of the EXISTING submission content
 * (prior to update. The sh_hook_update_submission function then logs the updated content right after.
 *
 * @param array $postdata
 */
function sh_hook_update_submission_init($postdata)
{
  $form_id       = $postdata["form_id"];
  $submission_id = $postdata["submission_id"];

  if (!sh_submission_has_history($form_id, $submission_id))
  {
    $submission_info = ft_get_submission_info($form_id, $submission_id);
    sh_add_history_row($form_id, $submission_id, "original", $submission_info);
  }
}


/**
 * Called on page load on the admin's Edit Submission page. This actually does nothing other than show the
 * submission history row (if the form is being tracked). If the user has selected the auto-load history
 * option, the markup inserted by this function will load the history via an Ajax call.
 *
 * @param string $location
 * @param array $info
 */
function sh_hook_display_submission_changelog($location, $info)
{
  global $g_table_prefix, $g_root_dir, $g_smarty, $g_smarty_use_sub_dirs;

  $form_id = $info["form_id"];
  if (!sh_is_tracking_form($form_id))
    return;

  $module_settings = ft_get_module_settings("", "submission_history");

  $g_smarty->template_dir = "$g_root_dir/themes/default";
  $g_smarty->compile_dir  = "$g_root_dir/themes/default/cache";
  $g_smarty->use_sub_dirs = $g_smarty_use_sub_dirs;
  $g_smarty->assign("L", ft_get_module_lang_file_contents("submission_history"));
  $g_smarty->assign("module_settings", $module_settings);
  $g_smarty->display("$g_root_dir/modules/submission_history/templates/admin_edit_submission.tpl");
}


function sh_hook_include_module_resources($postdata)
{
  global $g_root_url;

  if (!isset($postdata["page_vars"]["page"]))
    return;
  if ($postdata["page_vars"]["page"] != "admin_edit_submission")
    return;

  $g_smarty = $postdata["g_smarty"];
  $head_string = $g_smarty->_tpl_vars["head_string"];
  $head_string .=<<<EOF
  <link rel="stylesheet" type="text/css" media="all" href="{$g_root_url}/modules/submission_history/global/css/styles.css" />
  <script src="{$g_root_url}/modules/submission_history/global/scripts/scripts.js?v110"></script>
EOF;

  $postdata["g_smarty"]->assign("head_string", $head_string);
  return $postdata;
}


/**
 * Called when the admin / client deletes a file in a submission.
 *
 * @param array $postdata
 */
function sh_hook_delete_file_submission($postdata)
{
  $form_id = $postdata["form_id"];
  if (!sh_is_tracking_form($form_id))
    return;

  $submission_id = $postdata["submission_id"];
  $submission_info = ft_get_submission_info($form_id, $submission_id);

  sh_add_history_row($form_id, $submission_id, "update", $submission_info);
}


/**
 * Used to handle cases where the user changes the database column name. This changed in 1.1.4
 * to actually WORK with Form Tools Core 2.1.x (needs 2.1.7 or later).
 *
 * This hook call extends the core _ft_alter_table_column function, called whenever ANY table
 * is altered. This function figures out if
 *
 * @param array $postdata
 */
function sh_rename_table_column($info)
{
  global $g_field_sizes, $g_table_prefix;

  if (!preg_match("/{$g_table_prefix}form_(\d)+/", $info["table"], $matches))
    continue;

  $form_id = $matches[1];

  // just blithely attempt to update the database table. It may not exist, but that's fine.
  $history_table = "{$info["table"]}_history";
  $old_col_name = $info["old_col_name"];
  $new_col_name = $info["new_col_name"];
  $col_type     = $info["col_type"];
  @mysql_query("
    ALTER TABLE $history_table
    CHANGE      $old_col_name $new_col_name $col_type
  ");
}
