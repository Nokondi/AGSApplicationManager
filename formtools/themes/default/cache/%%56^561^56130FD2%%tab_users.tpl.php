<?php /* Smarty version 2.6.18, created on 2016-12-14 19:40:43
         compiled from ../../modules/submission_accounts/templates/admin/tab_users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '../../modules/submission_accounts/templates/admin/tab_users.tpl', 21, false),array('modifier', 'custom_format_date', '../../modules/submission_accounts/templates/admin/tab_users.tpl', 31, false),)), $this); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="margin_bottom_large">
    This tab lists all users that have logged in to view or update their submission.
  </div>

  <?php if ($this->_tpl_vars['num_results'] == 0): ?>

    <div class="notify yellow_bg" class="margin_bottom_large">
      <div style="padding:8px">
        No-one has logged in.
      </div>
    </div>

  <?php else: ?>

    <?php echo $this->_tpl_vars['pagination']; ?>


    <table class="list_table" style="width:550px" cellpadding="1" cellspacing="1">
    <tr style="height: 20px;">
      <th width="50" class="nowrap pad_left pad_right"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_submission_id'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
      <th><?php echo $this->_tpl_vars['module_settings']['username_field_label']; ?>
</th>
      <th><?php echo $this->_tpl_vars['LANG']['phrase_last_logged_in']; ?>
</th>
      <th width="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_view'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
    </tr>
    <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['submission']):
        $this->_foreach['row']['iteration']++;
?>
    <tr>
      <td align="center" class="medium_grey"><?php echo $this->_tpl_vars['submission']['submission_id']; ?>
</td>
      <td><?php echo $this->_tpl_vars['submission'][$this->_tpl_vars['username_col']]; ?>
</td>
      <td>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['submission']['last_logged_in'])) ? $this->_run_mod_handler('custom_format_date', true, $_tmp, $this->_tpl_vars['SESSION']['account']['timezone_offset'], $this->_tpl_vars['SESSION']['account']['date_format']) : smarty_modifier_custom_format_date($_tmp, $this->_tpl_vars['SESSION']['account']['timezone_offset'], $this->_tpl_vars['SESSION']['account']['date_format'])); ?>

      </td>
      <td align="center"><a href="../../../admin/forms/edit_submission.php?submission_id=<?php echo $this->_tpl_vars['submission']['submission_id']; ?>
&form_id=<?php echo $this->_tpl_vars['form_id']; ?>
&view_id=<?php echo $this->_tpl_vars['submission_account']['view_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_view'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>

    <p>
      <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
        <input type="submit" name="clear_results" value="<?php echo $this->_tpl_vars['L']['phrase_clear_results']; ?>
" />
      </form>
    </p>

  <?php endif; ?>