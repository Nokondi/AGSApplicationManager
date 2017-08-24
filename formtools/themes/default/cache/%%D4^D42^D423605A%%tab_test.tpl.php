<?php /* Smarty version 2.6.18, created on 2017-03-24 15:18:17
         compiled from ../../modules/swift_mailer/templates/tab_test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../modules/swift_mailer/templates/tab_test.tpl', 12, false),)), $this); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="margin_bottom_large">
    <?php echo $this->_tpl_vars['L']['text_test_desc']; ?>

  </div>

  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" onsubmit="return rsv.validate(this, rules)">

    <table cellpadding="0" cellspacing="1">
    <tr>
      <td class="medium_grey" width="120"><?php echo $this->_tpl_vars['L']['phrase_recipient_email']; ?>
</td>
      <td><input type="text" name="recipient_email" style="width:200px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['recipient_email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
    </tr>
    <tr>
      <td class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_from_email']; ?>
</td>
      <td><input type="text" name="from_email" style="width:200px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['from_email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
    </tr>
    </table>

    <p>
      <input type="radio" name="test_email_format" value="text" id="ex1" <?php if ($this->_tpl_vars['test_email_format'] == 'text'): ?>checked<?php endif; ?> />
        <label for="ex1"><?php echo $this->_tpl_vars['L']['phrase_plain_text_email']; ?>
</label><br />
      <input type="radio" name="test_email_format" value="html" id="ex2" <?php if ($this->_tpl_vars['test_email_format'] == 'html'): ?>checked<?php endif; ?> />
        <label for="ex2"><?php echo $this->_tpl_vars['L']['phrase_html_email']; ?>
</label><br />
      <input type="radio" name="test_email_format" value="multipart" id="ex3" <?php if ($this->_tpl_vars['test_email_format'] == 'multipart'): ?>checked<?php endif; ?> />
        <label for="ex3"><?php echo $this->_tpl_vars['L']['phrase_multipart_email']; ?>
</label>
    </p>

    <p>
      <input type="submit" name="send" value="<?php echo $this->_tpl_vars['L']['phrase_send_test_email']; ?>
" />
    </p>

  </form>