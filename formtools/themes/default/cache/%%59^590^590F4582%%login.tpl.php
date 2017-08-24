<?php /* Smarty version 2.6.18, created on 2017-01-12 10:54:40
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/login.tpl', 46, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if ($this->_tpl_vars['main_error']): ?>

    <div class="error" id="ft_message_inner">
      <div style="padding:8px">
        <?php echo $this->_tpl_vars['error']; ?>

      </div>
    </div>

  <?php else: ?>

    <table cellpadding="0" cellspacing="0">
    <tr>
      <td width="45"><img src="images/icon_submission_accounts.gif" width="34" height="34" /></td>
      <td class="title"><?php echo $this->_tpl_vars['module_settings']['login_form_heading']; ?>
</td>
    </tr>
    </table>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['module_settings']['login_form_welcome_text'] || $this->_tpl_vars['submission_account']['email_field_id']): ?>
      <div class="margin_bottom_large">
        <?php echo $this->_tpl_vars['module_settings']['login_form_welcome_text']; ?>

        <?php if ($this->_tpl_vars['submission_account']['email_field_id']): ?>
          <?php echo $this->_tpl_vars['L']['text_forget_password_link']; ?>

        <?php endif; ?>
      </div>
    <?php endif; ?>

    <form name="login" action="<?php echo $this->_tpl_vars['same_page']; ?>
<?php echo $this->_tpl_vars['query_params']; ?>
" method="post">
      <div class="login_panel margin_bottom_large">
        <div class="login_panel_inner">
          <table cellpadding="0" cellspacing="1">
          <tr>
            <td><?php echo $this->_tpl_vars['module_settings']['username_field_label']; ?>
</td>
            <td><input type="text" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" /></td>
          </tr>
          <tr>
            <td><?php echo $this->_tpl_vars['module_settings']['password_field_label']; ?>
</td>
            <td><input type="password" name="password" value="" /></td>
          </tr>
          </table>

          <script>
          document.write('<input type="submit" class="login_submit" name="login" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['login_button_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />');
          </script>
          <div class="clear"></div>
        </div>

        <?php if ($this->_tpl_vars['error']): ?>
          <div>
            <div class="login_error pad_left"><?php echo $this->_tpl_vars['error']; ?>
</div>
          </div>
        <?php endif; ?>
      </div>
    </form>

    <noscript>
      <div class="error" style="padding:6px;">
        <?php echo $this->_tpl_vars['LANG']['text_js_required']; ?>

      </div>
    </noscript>
  <?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>