<?php /* Smarty version 2.6.18, created on 2016-12-14 19:01:56
         compiled from ../../modules/submission_accounts/templates/admin/tab_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '../../modules/submission_accounts/templates/admin/tab_main.tpl', 6, false),array('modifier', 'escape', '../../modules/submission_accounts/templates/admin/tab_main.tpl', 103, false),array('modifier', 'upper', '../../modules/submission_accounts/templates/admin/tab_main.tpl', 120, false),array('function', 'views_dropdown', '../../modules/submission_accounts/templates/admin/tab_main.tpl', 28, false),array('function', 'themes_dropdown', '../../modules/submission_accounts/templates/admin/tab_main.tpl', 34, false),)), $this); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" onsubmit="return rsv.validate(this, rules)">
    <input type="hidden" id="form_id" name="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />
    <input type="hidden" id="default_view_id" value="<?php echo $this->_tpl_vars['submission_account']['view_id']; ?>
" />
    <input type="hidden" name="num_view_override_rows" id="num_view_override_rows" value="<?php echo count($this->_tpl_vars['submission_account']['view_overrides']); ?>
" />

    <table cellspacing="1" cellpadding="0" class="list_table margin_bottom_large">
    <tr>
      <td width="15" class="red" align="center">*</td>
      <td width="140" class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['word_active']; ?>
</td>
      <td>
        <input type="radio" name="is_active" id="is_active1" value="yes" <?php if ($this->_tpl_vars['submission_account']['submission_account_is_active'] == 'yes'): ?>checked<?php endif; ?> />
          <label for="is_active1" class="green"><?php echo $this->_tpl_vars['LANG']['word_yes']; ?>
</label>
        <input type="radio" name="is_active" id="is_active2" value="no" <?php if ($this->_tpl_vars['submission_account']['submission_account_is_active'] == 'no'): ?>checked<?php endif; ?> />
          <label for="is_active2" class="red"><?php echo $this->_tpl_vars['LANG']['word_no']; ?>
</label>
      </td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small" ><?php echo $this->_tpl_vars['LANG']['word_form']; ?>
</td>
      <td class="medium_grey"><?php echo $this->_tpl_vars['submission_account']['form_name']; ?>
</td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['word_view']; ?>
</td>
      <td>
        <?php echo smarty_function_views_dropdown(array('name_id' => 'view_id','form_id' => $this->_tpl_vars['form_id'],'selected' => $this->_tpl_vars['submission_account']['view_id']), $this);?>

      </td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['LANG']['word_theme']; ?>
</td>
      <td><?php echo smarty_function_themes_dropdown(array('name_id' => 'theme','default' => $this->_tpl_vars['submission_account']['theme'],'default_swatch' => $this->_tpl_vars['submission_account']['swatch']), $this);?>
</td>
    </tr>
    <tr>
      <td class="red" align="center"> </td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['L']['phrase_email_field']; ?>
</td>
      <td>
        <select name="email_field_id" id="email_field_id">
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
          <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
            <option value="<?php echo $this->_tpl_vars['field']['field_id']; ?>
" <?php if ($this->_tpl_vars['submission_account']['email_field_id'] == $this->_tpl_vars['field']['field_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['field']['field_title']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['L']['phrase_username_field']; ?>
</td>
      <td>
        <select name="username_field_id" id="username_field_id">
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
          <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
            <option value="<?php echo $this->_tpl_vars['field']['field_id']; ?>
" <?php if ($this->_tpl_vars['submission_account']['username_field_id'] == $this->_tpl_vars['field']['field_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['field']['field_title']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </td>
    </tr>
    <tr>
      <td width="15" class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $this->_tpl_vars['L']['phrase_password_field']; ?>
</td>
      <td>
        <select name="password_field_id" id="password_field_id">
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
          <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
            <option value="<?php echo $this->_tpl_vars['field']['field_id']; ?>
" <?php if ($this->_tpl_vars['submission_account']['password_field_id'] == $this->_tpl_vars['field']['field_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['field']['field_title']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </td>
    </tr>
    </table>

    <div class="grey_box">
      <div style="margin_top">
        <a href="#" onclick="return sa_ns.toggle_view_override_settings()"><?php echo $this->_tpl_vars['L']['phrase_view_override_settings_rightarrow']; ?>
</a>
      </div>

      <div <?php if (count($this->_tpl_vars['submission_account']['view_overrides']) == 0): ?>style="display:none"<?php endif; ?> id="view_override_settings">
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
        <?php $_from = $this->_tpl_vars['submission_account']['view_overrides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
          <?php $this->assign('row', $this->_tpl_vars['i']['process_order']); ?>
          <tr id="row_<?php echo $this->_tpl_vars['row']; ?>
">
            <td>
              <select name="view_override_field_<?php echo $this->_tpl_vars['row']; ?>
" id="view_override_field_<?php echo $this->_tpl_vars['row']; ?>
">
                <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
                <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                  <option value="<?php echo $this->_tpl_vars['field']['field_id']; ?>
" <?php if ($this->_tpl_vars['i']['field_id'] == $this->_tpl_vars['field']['field_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['field']['field_title']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </td>
            <td>
              <input type="text" style="width:98%" name="view_override_values_<?php echo $this->_tpl_vars['row']; ?>
" id="view_override_values_<?php echo $this->_tpl_vars['row']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['match_values'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
            </td>
            <td>
              <?php echo smarty_function_views_dropdown(array('name_id' => "view_override_view_".($this->_tpl_vars['row']),'form_id' => $this->_tpl_vars['form_id'],'selected' => $this->_tpl_vars['i']['view_id']), $this);?>

            </td>
            <td class="del"><a href="#" onclick="return sa_ns.delete_row(<?php echo $this->_tpl_vars['row']; ?>
)"></a></td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tbody></table>

        <div class="margin_bottom_large">
          <a href="#" onclick="return sa_ns.add_view_override_row()"><?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
</a>
        </div>
      </div>
    </div>

    <div class="margin_top_large">
      <input type="submit" name="update" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_update'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" />
    </div>

  </form>