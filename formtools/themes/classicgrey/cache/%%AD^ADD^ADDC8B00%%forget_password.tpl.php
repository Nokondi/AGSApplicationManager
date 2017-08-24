<?php /* Smarty version 2.6.18, created on 2016-12-14 19:58:24
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/forget_password.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/forget_password.tpl', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><img src="images/icon_submission_accounts.gif" width="34" height="34" /></td>
    <td class="title"><?php echo $this->_tpl_vars['LANG']['phrase_forgot_password']; ?>
</td>
  </tr>
  </table>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'messages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="margin_bottom_large">
    <?php echo $this->_tpl_vars['text_forgot_password']; ?>

  </div>

  <form name="forget_password" action="<?php echo $this->_tpl_vars['same_page']; ?>
<?php echo $this->_tpl_vars['g_query_params']; ?>
" method="post"
    onsubmit="return rsv.validate(this, rules)">

    <div class="login_panel margin_bottom_large">
      <div class="login_panel_inner">
        <table cellpadding="0" cellspacing="1">
        <tr>
          <td class="login_table_text"><?php echo $this->_tpl_vars['LANG']['word_email']; ?>
</td>
          <td><input type="textbox" size="25" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
"></td>
          <td align="center"><input type="submit" name="send_password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_email'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" /></td>
        </tr>
        </table>
        <div class="clear"></div>
      </div>
    </div>
  </form>

  <div>
    <a href="login.php"><?php echo $this->_tpl_vars['LANG']['phrase_login_panel_leftarrows']; ?>
</a>
  </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>