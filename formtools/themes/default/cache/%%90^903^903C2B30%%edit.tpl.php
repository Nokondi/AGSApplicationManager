<?php /* Smarty version 2.6.18, created on 2017-03-31 11:06:56
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'in_array', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/edit.tpl', 35, false),array('modifier', 'escape', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/edit.tpl', 47, false),array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/edit.tpl', 73, false),array('function', 'forms_dropdown', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/edit.tpl', 51, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_preparser.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules"><?php echo $this->_tpl_vars['LANG']['word_modules']; ?>
</a>
      <span class="joiner">&raquo;</span>
      <a href="./"><?php echo $this->_tpl_vars['L']['module_name']; ?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $this->_tpl_vars['L']['phrase_edit_rule']; ?>

    </td>
  </tr>
  </table>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'messages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
    <input type="hidden" name="rule_id" value="<?php echo $this->_tpl_vars['rule_info']['rule_id']; ?>
" />

    <table cellspacing="1" cellpadding="1" border="0">
    <tr>
      <td width="100"><?php echo $this->_tpl_vars['LANG']['word_status']; ?>
</td>
      <td>
        <input type="radio" name="status" value="enabled" id="status1" <?php if ($this->_tpl_vars['rule_info']['status'] == 'enabled'): ?>checked<?php endif; ?> />
          <label for="status1" class="green"><?php echo $this->_tpl_vars['LANG']['word_enabled']; ?>
</label>
        <input type="radio" name="status" value="disabled" id="status2" <?php if ($this->_tpl_vars['rule_info']['status'] == 'disabled'): ?>checked<?php endif; ?> />
          <label for="status2" class="red"><?php echo $this->_tpl_vars['LANG']['word_disabled']; ?>
</label>
      </td>
    </tr>
    <tr>
      <td valign="top"><?php echo $this->_tpl_vars['L']['phrase_when_executed']; ?>
</td>
      <td>
        <input type="checkbox" name="event[]" value="ft_process_form" id="event1"
          <?php if (((is_array($_tmp='ft_process_form')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['rule_info']['event']) : in_array($_tmp, $this->_tpl_vars['rule_info']['event']))): ?>checked<?php endif; ?> />
          <label for="event1"><?php echo $this->_tpl_vars['LANG']['phrase_on_form_submission']; ?>
</label><br />
        <input type="checkbox" name="event[]" value="ft_api_process_form" id="event2"
          <?php if (((is_array($_tmp='ft_api_process_form')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['rule_info']['event']) : in_array($_tmp, $this->_tpl_vars['rule_info']['event']))): ?>checked<?php endif; ?> />
          <label for="event2"><?php echo $this->_tpl_vars['L']['phrase_on_form_submission_via_api']; ?>
</label><br />
        <input type="checkbox" name="event[]" value="ft_update_submission" id="event3"
          <?php if (((is_array($_tmp='ft_update_submission')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['rule_info']['event']) : in_array($_tmp, $this->_tpl_vars['rule_info']['event']))): ?>checked<?php endif; ?> />
          <label for="event3"><?php echo $this->_tpl_vars['LANG']['phrase_when_submission_is_edited']; ?>
</label>
      </td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['L']['phrase_rule_name']; ?>
</td>
      <td><input type="text" name="rule_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rule_info']['rule_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="width:300px" maxlength="255" /></td>
    </tr>
    <tr>
      <td valign="top"><?php echo $this->_tpl_vars['LANG']['word_form_sp']; ?>
</td>
      <td><?php echo smarty_function_forms_dropdown(array('name_id' => "form_ids[]",'is_multiple' => true,'default' => $this->_tpl_vars['rule_info']['form_ids']), $this);?>
</td>
    </tr>
    <tr>
      <td valign="top"><?php echo $this->_tpl_vars['L']['phrase_php_code']; ?>
</td>
      <td>
        <div style="border: 1px solid #666666; padding: 3px">
          <textarea name="php_code" id="php_code" style="width:550px; height:200px"><?php echo $this->_tpl_vars['rule_info']['php_code']; ?>
</textarea>
        </div>

        <script type="text/javascript">
        var html_editor = new CodeMirror.fromTextArea("php_code", <?php echo '{'; ?>

        parserfile: ["parsejavascript.js", "tokenizejavascript.js"],
        path: "<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/codemirror/js/",
        stylesheet: "<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/codemirror/css/jscolors.css"
        <?php echo '});'; ?>

        </script>

      </td>
    </tr>
    </table>

    <p>
      <input type="submit" name="update_rule" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_update'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" />
    </p>

  </form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>