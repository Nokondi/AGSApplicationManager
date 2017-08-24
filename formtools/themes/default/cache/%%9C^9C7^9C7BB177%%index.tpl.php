<?php /* Smarty version 2.6.18, created on 2017-01-08 18:07:12
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/index.tpl', 30, false),array('modifier', 'count', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/index.tpl', 51, false),array('function', 'forms_dropdown', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_pre_parser/templates/index.tpl', 54, false),)), $this); ?>
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
      <?php echo $this->_tpl_vars['L']['module_name']; ?>

    </td>
  </tr>
  </table>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'messages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if ($this->_tpl_vars['num_results'] == 0): ?>

    <div class="notify" class="margin_bottom_large">
      <div style="padding:8px">
        <?php echo $this->_tpl_vars['L']['notify_no_rules']; ?>

      </div>
    </div>

  <?php else: ?>

    <?php echo $this->_tpl_vars['pagination']; ?>


    <table class="list_table" style="width:100&" cellpadding="1" cellspacing="1">
    <tr style="height: 20px;">
      <th width="20"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_rule_id'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
      <th><?php echo $this->_tpl_vars['L']['phrase_rule_name']; ?>
</th>
      <th><?php echo $this->_tpl_vars['LANG']['word_status']; ?>
</th>
      <th><?php echo $this->_tpl_vars['LANG']['word_form_sp']; ?>
</th>
      <th class="edit"></th>
      <th class="del"></th>
    </tr>

    <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['result']):
        $this->_foreach['row']['iteration']++;
?>
      <?php $this->assign('rule_id', $this->_tpl_vars['result']['rule_id']); ?>
      <tr>
        <td class="medium_grey" align="center"><?php echo $this->_tpl_vars['result']['rule_id']; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']['rule_name']; ?>
</td>
        <td align="center">
          <?php if ($this->_tpl_vars['result']['status'] == 'enabled'): ?>
             <span class="green"><?php echo $this->_tpl_vars['LANG']['word_enabled']; ?>
</span>
          <?php else: ?>
             <span class="red"><?php echo $this->_tpl_vars['LANG']['word_disabled']; ?>
</span>
          <?php endif; ?>
        </td>
        <td class="pad_left_small">
          <?php if (count($this->_tpl_vars['result']['form_ids']) == 0): ?>
            <span class="medium_grey"><?php echo $this->_tpl_vars['LANG']['phrase_no_forms']; ?>
</span>
          <?php else: ?>
            <?php echo smarty_function_forms_dropdown(array('name_id' => 'tmp','display_single_form_as_text' => true,'only_show_forms' => $this->_tpl_vars['result']['form_ids']), $this);?>

          <?php endif; ?>
        </td>
        <td class="edit"><a href="edit.php?rule_id=<?php echo $this->_tpl_vars['rule_id']; ?>
"></a></td>
        <td class="del"><a href="#" onclick="return page_ns.delete_rule(<?php echo $this->_tpl_vars['rule_id']; ?>
)"></a></td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>

    </table>

  <?php endif; ?>

  <form action="add.php" method="post">
    <p>
      <input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['L']['phrase_add_rule'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" />
    </p>
  </form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>