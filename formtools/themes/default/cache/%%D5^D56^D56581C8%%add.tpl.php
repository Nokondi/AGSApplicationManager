<?php /* Smarty version 2.6.18, created on 2016-12-14 13:33:58
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/admin/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'forms_dropdown', '/home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/admin/add.tpl', 32, false),array('function', 'themes_dropdown', '/home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/admin/add.tpl', 48, false),array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/admin/add.tpl', 121, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <span id="loading_icon" style="display:none"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/ajax_loading.gif" /></span>

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="../"><img src="../images/icon_submission_accounts.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../../admin/modules"><?php echo $this->_tpl_vars['LANG']['word_modules']; ?>
</a>
      <span class="joiner">&raquo;</span>
      <a href="../"><?php echo $this->_tpl_vars['L']['module_name']; ?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $this->_tpl_vars['L']['phrase_configure_new_form']; ?>

    </td>
  </tr>
  </table>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="margin_bottom_large">
    <?php echo $this->_tpl_vars['L']['text_add_submission_account_intro']; ?>

  </div>

  <form action="../index.php" method="post" onsubmit="return rsv.validate(this, rules)">
    <input type="hidden" name="num_view_override_rows" id="num_view_override_rows" value="1" />

    <table cellspacing="1" cellpadding="0" class="list_table margin_bottom_large">
    <tr>
      <td width="15" class="red" align="center">*</td>
      <td class="pad_left_small" width="140"><?php echo $this->_tpl_vars['LANG']['word_form']; ?>
</td>
      <td>
        <?php echo smarty_function_forms_dropdown(array('name_id' => 'form_id','omit_forms' => $this->_tpl_vars['omit_forms'],'include_blank_option' => true,'onchange' => "sa_ns.select_form(this.value); sa_ns.update_view_override_table_fields()"), $this);?>

      </td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['word_view']; ?>
</td>
      <td>
        <select name="view_id" id="view_id" disabled onchange="sa_ns.update_view_override_table_fields()">
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select_form']; ?>
</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['word_theme']; ?>
</td>
      <td><?php echo smarty_function_themes_dropdown(array('name_id' => 'theme','default' => $this->_tpl_vars['submission_account']['theme']), $this);?>
</td>
    </tr>
    <tr>
      <td class="red" align="center"> </td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['L']['phrase_email_field']; ?>
</td>
      <td>
        <select name="email_field_id" id="email_field_id" disabled>
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select_form']; ?>
</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['L']['phrase_username_field']; ?>
</td>
      <td>
        <select name="username_field_id" id="username_field_id" disabled>
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select_form']; ?>
</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['L']['phrase_password_field']; ?>
</td>
      <td>
        <select name="password_field_id" id="password_field_id" disabled>
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select_form']; ?>
</option>
        </select>
      </td>
    </tr>
    </table>

    <div class="grey_box">
      <div style="margin_top">
        <a href="#" onclick="return sa_ns.toggle_view_override_settings()"><?php echo $this->_tpl_vars['L']['phrase_view_override_settings_rightarrow']; ?>
</a>
      </div>

      <div style="display:none" id="view_override_settings">
        <div>
          <?php echo $this->_tpl_vars['L']['text_view_override_intro']; ?>

        </div>

        <table cellspacing="1" cellpadding="0" width="100%" id="view_override_table" class="list_table margin_top_large margin_bottom_large">
        <tbody><tr>
          <th width="160" class="blue"><?php echo $this->_tpl_vars['L']['phrase_if_field']; ?>
</th>
          <th><?php echo $this->_tpl_vars['L']['phrase_has_values']; ?>
</th>
          <th><?php echo $this->_tpl_vars['L']['phrase_then_use_view']; ?>
</th>
          <th class="del"></th>
        </tr>
        <tr id="row_1">
          <td>
            <select name="view_override_field_1" id="view_override_field_1" disabled>
              <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
            </select>
          </td>
          <td>
            <input type="text" style="width:98%" name="view_override_values_1" id="view_override_values_1" disabled />
          </td>
          <td>
            <select name="view_override_view_1" id="view_override_view_1" disabled>
              <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
            </select>
          </td>
          <td class="del"><a href="#" onclick="return sa_ns.delete_row(1)"></a></td>
        </tr>
        </tbody></table>

        <div class="margin_bottom_large">
          <a href="#" onclick="return sa_ns.add_view_override_row()"><?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
</a>
        </div>
      </div>
    </div>

    <div class="margin_top_large">
      <input type="submit" name="add_form" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_add'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" />
    </div>

  </form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>