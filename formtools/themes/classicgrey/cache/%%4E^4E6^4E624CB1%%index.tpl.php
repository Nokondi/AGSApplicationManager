<?php /* Smarty version 2.6.18, created on 2016-12-14 20:07:37
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/users/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/users/index.tpl', 2, false),array('function', 'template_hook', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/users/index.tpl', 11, false),array('function', 'edit_custom_field', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/users/index.tpl', 42, false),array('modifier', 'count', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/users/index.tpl', 13, false),array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/modules/submission_accounts/templates/users/index.tpl', 30, false),)), $this); ?>
<?php $this->assign('g_omit_top_bar', true); ?>
<?php echo smarty_function_ft_include(array('file' => 'header.tpl'), $this);?>


  <div class="edit_submission">
    <table cellpadding="0" cellspacing="0" width="100%" class="margin_bottom_large">
    <tr>
      <td><span class="title"><?php echo $this->_tpl_vars['edit_submission_page_label']; ?>
</span></td>
    </tr>
    </table>

    <?php echo smarty_function_template_hook(array('location' => 'submission_accounts_modules_edit_submission_top'), $this);?>


    <?php if (count($this->_tpl_vars['tabs']) > 0): ?>
      <?php echo smarty_function_ft_include(array('file' => 'tabset_open.tpl'), $this);?>

    <?php endif; ?>

    <?php echo smarty_function_ft_include(array('file' => "messages.tpl"), $this);?>


    <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" name="edit_submission_form" id="edit_submission_form" enctype="multipart/form-data">
            <input type="hidden" name="form_id" id="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />
      <input type="hidden" name="submission_id" id="submission_id" value="<?php echo $this->_tpl_vars['submission_id']; ?>
" />
      <input type="hidden" name="tab" id="tab" value="<?php echo $this->_tpl_vars['tab_number']; ?>
" />

      <?php $_from = $this->_tpl_vars['grouped_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['curr_group']):
?>
        <?php $this->assign('group', $this->_tpl_vars['curr_group']['group']); ?>
        <?php $this->assign('fields', $this->_tpl_vars['curr_group']['fields']); ?>

        <?php if ($this->_tpl_vars['group']['group_name']): ?>
          <h3><?php echo ((is_array($_tmp=$this->_tpl_vars['group']['group_name'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</h3>
        <?php endif; ?>

        <?php if (count($this->_tpl_vars['fields']) > 0): ?>
          <table class="list_table" cellpadding="1" cellspacing="1" border="0" width="100%">
        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['curr_field']):
?>
          <?php $this->assign('field_id', $this->_tpl_vars['field']['field_id']); ?>
          <tr>
            <td width="150" class="pad_left_small" valign="top"><?php echo $this->_tpl_vars['curr_field']['field_title']; ?>
 <span class="req"><?php if ($this->_tpl_vars['curr_field']['is_required']): ?>*<?php endif; ?></span></td>
            <td valign="top">
              <?php echo smarty_function_edit_custom_field(array('form_id' => $this->_tpl_vars['form_id'],'submission_id' => $this->_tpl_vars['submission_id'],'field_info' => $this->_tpl_vars['curr_field'],'field_types' => $this->_tpl_vars['field_types'],'settings' => $this->_tpl_vars['settings']), $this);?>

            </td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>

        <?php if (count($this->_tpl_vars['fields']) > 0): ?>
          </table>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>

      <input type="hidden" name="field_ids" value="<?php echo $this->_tpl_vars['page_field_ids_str']; ?>
" />

            <?php if (count($this->_tpl_vars['page_field_ids']) == 0): ?>
        <div class="margin_bottom_large"><?php echo $this->_tpl_vars['LANG']['notify_no_fields_in_tab']; ?>
</div>
      <?php endif; ?>

      <div style="position:relative">
                <?php if (count($this->_tpl_vars['page_field_ids']) > 0 && $this->_tpl_vars['tab_has_editable_fields']): ?>
          <input type="submit" name="update" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_update'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" />
        <?php endif; ?>
      </div>
    </form>

    <?php if (count($this->_tpl_vars['tabs']) > 0): ?>
      <?php echo smarty_function_ft_include(array('file' => 'tabset_close.tpl'), $this);?>

    <?php endif; ?>

    <?php echo smarty_function_template_hook(array('location' => 'submission_accounts_modules_edit_submission_bottom'), $this);?>

  </div>

<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>