<?php /* Smarty version 2.6.18, created on 2016-12-14 13:37:49
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/admin/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/admin/settings.tpl', 23, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
      <?php echo $this->_tpl_vars['L']['module_name']; ?>

    </td>
  </tr>
  </table>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">

    <table cellspacing="1" cellpadding="0" class="list_table">
    <tr>
      <td class="pad_left_small" width="240">Login Page Heading</td>
      <td><input type="text" name="login_form_heading" style="width:300px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['login_form_heading'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
    </tr>
    <tr>
      <td class="pad_left_small" valign="top">Login Page Intro Text</td>
      <td><textarea name="login_form_welcome_text" style="width:98%; height: 60px"><?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['login_form_welcome_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
    </tr>
    <tr>
      <td class="pad_left_small">Login Page Username / Email login field label</td>
      <td><input type="text" name="username_field_label" style="width:300px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['username_field_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
    </tr>
    <tr>
      <td class="pad_left_small">Login Page Password Field Label</td>
      <td><input type="text" name="password_field_label" style="width:200px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['password_field_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
    </tr>
    <tr>
      <td class="pad_left_small">Login Button Label</td>
      <td><input type="text" name="login_button_label" style="width:200px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['login_button_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
    </tr>
    <tr>
      <td class="pad_left_small">Logout URL</td>
      <td>
        <input type="radio" id="ll1" name="logout_location" value="login_page" <?php if ($this->_tpl_vars['module_settings']['logout_location'] == 'login_page'): ?>checked<?php endif; ?> />
          <label for="ll1">The appropriate login page</label><br />
        <input type="radio" id="ll2" name="logout_location" value="custom_url"
          <?php if ($this->_tpl_vars['module_settings']['logout_location'] == 'custom_url' || $this->_tpl_vars['module_settings']['logout_location'] == ""): ?>checked<?php endif; ?> />
          <label for="ll2">Custom URL:</label>
          <input type="text" name="logout_url" style="width:370px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['logout_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
      </td>
    </tr>
    <tr>
      <td class="pad_left_small">Num Users Listed Per Page</td>
      <td><input type="text" name="num_logged_in_users_per_page" style="width:30px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['num_logged_in_users_per_page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
    </tr>
    </table>

    <p>
      <input type="submit" name="update_settings" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
    </p>
  </form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>