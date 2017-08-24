<?php /* Smarty version 2.6.18, created on 2017-01-12 14:31:36
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/submission_id_manager/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_submission_id_manager.gif" border="0" width="34" height="34" /></a></td>
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
    <?php echo $this->_tpl_vars['L']['text_module_summary']; ?>

  </div>

  <table cellspacing="1" cellpadding="0" class="list_table margin_bottom_large">
  <tr>
    <th class="pad_left_small" style="text-align:left">&nbsp;<?php echo $this->_tpl_vars['L']['phrase_change_submission_id']; ?>
</th>
  </tr>
  <tr>
    <td valign="top">
      <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" id="change_submission_id_form" method="post">
        <table cellspacing="2" cellpadding="1">
        <tr>
          <td width="260">&nbsp;<?php echo $this->_tpl_vars['L']['phrase_select_form']; ?>
</td>
          <td>
            <select name="form_id">
              <?php $_from = $this->_tpl_vars['dropdown_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                <option value="<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;<?php echo $this->_tpl_vars['L']['phrase_change_next_submission_id_to_c']; ?>
</td>
          <td>
            <input type="text" name="next_submission_id" id="next_submission_id" size="10" />
          </td>
        </tr>
        </table>
        <div class="pad_top_large">
          <input type="submit" name="update" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
        </div>
      </form>
    </td>
  </tr>
  </table>

  <table cellspacing="1" cellpadding="0" class="list_table margin_bottom_large">
  <tr>
    <th class="pad_left" style="text-align:left">&nbsp;<?php echo $this->_tpl_vars['L']['phrase_delete_form_submissions_and_reset']; ?>
</th>
  </tr>
  <tr>
    <td valign="top">
      <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" id="truncate_form" method="post">
        <input type="hidden" name="delete" value="1" />

        <table cellspacing="2" cellpadding="1">
        <tr>
          <td width="260">&nbsp;<?php echo $this->_tpl_vars['L']['phrase_select_form']; ?>
</td>
          <td>
            <select name="form_id">
              <?php $_from = $this->_tpl_vars['dropdown_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                <option value="<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </td>
        </tr>
        </table>
        <div class="pad_top_large">
          <input type="button" id="delete" value="<?php echo $this->_tpl_vars['L']['phrase_delete_submissions']; ?>
" />
        </div>
      </form>
    </td>
  </tr>
  </table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>