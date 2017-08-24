<?php /* Smarty version 2.6.18, created on 2016-12-14 13:33:52
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/index.tpl', 20, false),array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/index.tpl', 32, false),array('function', 'display_view_name', '/home1/allcapsc/public_html/workshop/formtools/modules/module-submission_accounts-master/templates/index.tpl', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_submission_accounts.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules"><?php echo $this->_tpl_vars['LANG']['word_modules']; ?>
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

  <div class="margin_bottom_large">
    <?php echo $this->_tpl_vars['L']['module_description']; ?>

  </div>

  <?php if (count($this->_tpl_vars['submission_accounts']) == 0): ?>

    <div class="notify yellow_bg" class="margin_bottom_large">
      <div style="padding:8px">
        <?php echo $this->_tpl_vars['L']['notify_no_submission_accounts']; ?>

      </div>
    </div>

  <?php else: ?>

    <table cellspacing="1" cellpadding="0" class="list_table" width="100%">
    <tr>
      <th width="30"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_id'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
      <th><?php echo $this->_tpl_vars['LANG']['word_form']; ?>
</th>
      <th><?php echo $this->_tpl_vars['LANG']['word_view']; ?>
</th>
      <th>Uses View Override(s)?</th>
      <th width="120"><?php echo $this->_tpl_vars['LANG']['word_status']; ?>
</th>
      <th class="edit"></th>
      <th class="del"></th>
    </tr>
    <?php $_from = $this->_tpl_vars['submission_accounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info']):
?>
    <tr>
      <td class="medium_grey" align="center"><?php echo $this->_tpl_vars['info']['form_id']; ?>
</td>
      <td class="pad_left_small"><a href="../../admin/forms/submissions.php?form_id=<?php echo $this->_tpl_vars['info']['form_id']; ?>
"><?php echo $this->_tpl_vars['info']['form_name']; ?>
</a></td>
      <td class="pad_left_small"><a href="../../admin/forms/edit.php?form_id=<?php echo $this->_tpl_vars['info']['form_id']; ?>
&view_id=<?php echo $this->_tpl_vars['info']['view_id']; ?>
&page=edit_view"><?php echo smarty_function_display_view_name(array('view_id' => $this->_tpl_vars['info']['view_id']), $this);?>
</a></td>
      <td align="center">
        <?php if (count($this->_tpl_vars['info']['view_overrides']) == 0): ?>
          <?php echo $this->_tpl_vars['LANG']['word_no']; ?>

        <?php else: ?>
          <?php echo $this->_tpl_vars['LANG']['word_yes']; ?>

        <?php endif; ?>
      </td>
      <td align="center">
        <?php if ($this->_tpl_vars['info']['submission_account_is_active'] == 'yes'): ?>
          <span class="light_green"><?php echo $this->_tpl_vars['LANG']['word_active']; ?>
</span>
        <?php else: ?>
          <span class="red"><?php echo $this->_tpl_vars['LANG']['word_disabled']; ?>
</span>
        <?php endif; ?>
      </td>
      <td class="edit"><a href="admin/edit.php?form_id=<?php echo $this->_tpl_vars['info']['form_id']; ?>
"></a></td>
      <td class="del"><a href="#" onclick="return page_ns.delete_form(<?php echo $this->_tpl_vars['info']['form_id']; ?>
)"></a></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>

  <?php endif; ?>

  <form action="admin/add.php" method="post">
    <div class="margin_top_large">
      <input type="submit" name="add_form" value="<?php echo $this->_tpl_vars['L']['phrase_configure_new_form']; ?>
" />
    </div>
  </form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>