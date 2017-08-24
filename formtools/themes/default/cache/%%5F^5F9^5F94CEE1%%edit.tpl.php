<?php /* Smarty version 2.6.18, created on 2017-03-24 14:56:10
         compiled from /home1/allcapsc/public_html/workshop/formtools/themes/default/admin/clients/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/home1/allcapsc/public_html/workshop/formtools/themes/default/admin/clients/edit.tpl', 1, false),array('function', 'template_hook', '/home1/allcapsc/public_html/workshop/formtools/themes/default/admin/clients/edit.tpl', 17, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => 'header.tpl'), $this);?>


  <table width="100%" cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="./"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/icon_accounts.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="./"><?php echo $this->_tpl_vars['LANG']['word_clients']; ?>
</a>
      <span class="joiner">&raquo;</span> <?php echo $this->_tpl_vars['client_info']['first_name']; ?>
 <?php echo $this->_tpl_vars['client_info']['last_name']; ?>

      (<span class="identifier"><?php echo $this->_tpl_vars['client_id']; ?>
</span>)
    </td>
    <td align="right">
      <a href="index.php?login=<?php echo $this->_tpl_vars['client_id']; ?>
" title="<?php echo $this->_tpl_vars['LANG']['phrase_login_as_user']; ?>
"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/login.png" border="0" /></a>
    </td>
  </tr>
  </table>

  <?php echo smarty_function_template_hook(array('location' => 'admin_edit_client_pages_top'), $this);?>


  <?php echo smarty_function_ft_include(array('file' => 'tabset_open.tpl'), $this);?>


    <?php if ($this->_tpl_vars['page'] == 'main'): ?>
      <?php echo smarty_function_ft_include(array('file' => 'admin/clients/tab_main.tpl'), $this);?>

    <?php elseif ($this->_tpl_vars['page'] == 'settings'): ?>
      <?php echo smarty_function_ft_include(array('file' => 'admin/clients/tab_settings.tpl'), $this);?>

    <?php elseif ($this->_tpl_vars['page'] == 'forms'): ?>
      <?php echo smarty_function_ft_include(array('file' => 'admin/clients/tab_forms.tpl'), $this);?>

    <?php else: ?>
      <?php echo smarty_function_ft_include(array('file' => 'admin/clients/tab_main.tpl'), $this);?>

    <?php endif; ?>

  <?php echo smarty_function_ft_include(array('file' => 'tabset_close.tpl'), $this);?>


  <?php echo smarty_function_template_hook(array('location' => 'admin_edit_client_pages_bottom'), $this);?>


<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>