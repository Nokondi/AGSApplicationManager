<?php /* Smarty version 2.6.18, created on 2016-12-14 19:39:26
         compiled from ../../modules/submission_accounts/templates/admin/tab_html.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../modules/submission_accounts/templates/admin/tab_html.tpl', 8, false),)), $this); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="margin_bottom_large">
    <?php echo $this->_tpl_vars['text_html_tab']; ?>

  </div>

  <input type="hidden" id="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />
  <input type="hidden" id="username_field_label" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['username_field_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
  <input type="hidden" id="password_field_label" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['password_field_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
  <input type="hidden" id="login_button_label" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['module_settings']['login_button_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

  <table cellspacing="0" cellpadding="0" width="100%" class="margin_bottom">
  <tr>
    <td nowrap width="30"><input type="checkbox" id="use_redirect_url" onchange="lf_ns.generate()" /></td>
    <td nowrap width="50"><label class="pad_right" for="use_redirect_url"><?php echo $this->_tpl_vars['L']['phrase_redirect_failed_logins_c']; ?>
</label></td>
    <td><input type="text" style="width:100%" id="redirect_url" onkeyup="lf_ns.generate()" /></td>
  </tr>
  <tr>
    <td>
      <input type="checkbox" id="include_forget_password_link" <?php if ($this->_tpl_vars['submission_account']['email_field_id'] == ""): ?>disabled<?php endif; ?>
        onchange="lf_ns.generate()" />
    </td>
    <td colspan="2">
      <label for="include_forget_password_link">
        <?php echo $this->_tpl_vars['L']['text_include_forget_password']; ?>

      </label>
    </td>
  </tr>
  </table>

  <div style="border: 1px solid #666666; padding: 3px">
    <textarea name="html" id="html" style="width:100%; height:200px"></textarea>
  </div>

  <script>
  var html_editor = new CodeMirror.fromTextArea("html", <?php echo '{'; ?>

  parserfile: ["parsexml.js"],
  path: "<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/codemirror/js/",
  stylesheet: "<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/codemirror/css/xmlcolors.css"
  <?php echo '});'; ?>

  </script>