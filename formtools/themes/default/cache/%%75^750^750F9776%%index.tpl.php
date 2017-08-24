<?php /* Smarty version 2.6.18, created on 2017-01-08 18:06:04
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/report_builder/templates/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_report_builder.png" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules"><?php echo $this->_tpl_vars['LANG']['word_modules']; ?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $this->_tpl_vars['L']['module_name']; ?>

    </td>
  </tr>
  </table>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'messages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if (! $this->_tpl_vars['export_manager_available']): ?>
    <div class="error margin_bottom_large">
      <div style="padding: 6px">
        <?php echo $this->_tpl_vars['LANG']['report_builder']['text_export_manager_not_available']; ?>

      </div>
    </div>
  <?php endif; ?>

  <div class="margin_bottom_large">
    <?php echo $this->_tpl_vars['L']['text_module_intro']; ?>

  </div>

  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">

    <div class="subtitle underline margin_bottom_large"><?php echo $this->_tpl_vars['LANG']['word_settings']; ?>
</div>

	  <table cellspacing="0" cellpadding="1" class="list_table">
	  <tr>
	    <td width="300" class="pad_left_small"><label for="setting1a"><?php echo $this->_tpl_vars['L']['phrase_show_reports_icon']; ?>
</label></td>
	    <td>
	      <input type="radio" name="show_reports_icon_on_submission_listing_page" id="setting1a" value="yes"
	        <?php if ($this->_tpl_vars['module_settings']['show_reports_icon_on_submission_listing_page'] == 'yes'): ?>checked="checked"<?php endif; ?> />
	        <label for="setting1a"><?php echo $this->_tpl_vars['LANG']['word_yes']; ?>
</label>
	      <input type="radio" name="show_reports_icon_on_submission_listing_page" id="setting1b" value="no"
	        <?php if ($this->_tpl_vars['module_settings']['show_reports_icon_on_submission_listing_page'] == 'no'): ?>checked="checked"<?php endif; ?> />
	        <label for="setting1b"><?php echo $this->_tpl_vars['LANG']['word_no']; ?>
</label>
	    </td>
	  </tr>
	  <tr>
	    <td class="pad_left_small"><label for="ib1"><?php echo $this->_tpl_vars['L']['phrase_icon_behaviour']; ?>
</label></td>
	    <td>
	      <input type="radio" name="icon_behaviour" id="ib1" value="dialog"
	        <?php if ($this->_tpl_vars['module_settings']['icon_behaviour'] == 'dialog'): ?>checked="checked"<?php endif; ?> />
	        <label for="ib1">Dialog</label>
	      <input type="radio" name="icon_behaviour" id="ib2" value="window"
	        <?php if ($this->_tpl_vars['module_settings']['icon_behaviour'] == 'window'): ?>checked="checked"<?php endif; ?> />
	        <label for="ib2">New window</label>
	    </td>
	  </tr>
	  <tr>
	    <td class="pad_left_small"><label for="ed1"><?php echo $this->_tpl_vars['L']['phrase_expand_reports_desc']; ?>
</label></td>
	    <td>
	      <input type="radio" name="expand_by_default" id="ed1" value="yes"
	        <?php if ($this->_tpl_vars['module_settings']['expand_by_default'] == 'yes'): ?>checked="checked"<?php endif; ?> />
	        <label for="ed1"><?php echo $this->_tpl_vars['LANG']['word_yes']; ?>
</label>
	      <input type="radio" name="expand_by_default" id="ed2" value="no"
	        <?php if ($this->_tpl_vars['module_settings']['expand_by_default'] == 'no'): ?>checked="checked"<?php endif; ?> />
	        <label for="ed2"><?php echo $this->_tpl_vars['LANG']['word_no']; ?>
</label>
	    </td>
	  </tr>
	  </table>

    <p>
      <input type="submit" name="update" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
    </p>

  </form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>