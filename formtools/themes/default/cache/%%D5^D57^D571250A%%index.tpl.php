<?php /* Smarty version 2.6.18, created on 2017-03-24 14:58:17
         compiled from /home1/allcapsc/public_html/workshop/formtools/themes/default/clients/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/home1/allcapsc/public_html/workshop/formtools/themes/default/clients/index.tpl', 1, false),array('modifier', 'escape', '/home1/allcapsc/public_html/workshop/formtools/themes/default/clients/index.tpl', 29, false),array('modifier', 'count', '/home1/allcapsc/public_html/workshop/formtools/themes/default/clients/index.tpl', 32, false),array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/themes/default/clients/index.tpl', 98, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => 'header.tpl'), $this);?>


  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/icon_forms.gif" width="34" height="34" /></td>
    <td class="title"><?php echo $this->_tpl_vars['LANG']['word_forms']; ?>
</td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file' => "messages.tpl"), $this);?>


  <?php if ($this->_tpl_vars['forms_page_default_message']): ?>
    <div class="margin_bottom_large">
      <?php echo $this->_tpl_vars['forms_page_default_message']; ?>

    </div>
  <?php endif; ?>

    <?php if (count ( $this->_tpl_vars['num_client_forms'] ) == 0): ?>
    <b><?php echo $this->_tpl_vars['LANG']['text_client_no_forms']; ?>
</b>
  <?php else: ?>

    <div id="search_form" class=" margin_bottom_large">
      <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
        <table cellspacing="2" cellpadding="0" id="search_form_table">
        <tr>
          <td class="blue" width="70"><?php echo $this->_tpl_vars['LANG']['word_search']; ?>
</td>
          <td>
            <input type="text" size="20" name="keyword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search_criteria']['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
            <input type="submit" name="search_forms" value="<?php echo $this->_tpl_vars['LANG']['word_search']; ?>
" />
            <input type="button" name="reset" onclick="window.location='<?php echo $this->_tpl_vars['same_page']; ?>
?reset=1'"
              <?php if (count($this->_tpl_vars['forms']) < $this->_tpl_vars['num_client_forms']): ?>
                value="<?php echo $this->_tpl_vars['LANG']['phrase_show_all']; ?>
 (<?php echo $this->_tpl_vars['num_client_forms']; ?>
)" class="bold"
              <?php else: ?>
                value="<?php echo $this->_tpl_vars['LANG']['phrase_show_all']; ?>
" class="light_grey" disabled
              <?php endif; ?> />
          </td>
        </tr>
        </table>
      </form>
    </div>

    <?php if (count($this->_tpl_vars['forms']) == 0): ?>
      <div class="notify yellow_bg">
        <div style="padding: 8px">
          <?php if ($this->_tpl_vars['num_client_forms'] == 0): ?>
            <?php echo $this->_tpl_vars['LANG']['text_no_forms_found']; ?>

          <?php else: ?>
            <?php echo $this->_tpl_vars['LANG']['text_no_forms_found_search']; ?>

          <?php endif; ?>
        </div>
      </div>
    <?php else: ?>
	    <table class="list_table" cellpadding="1" cellspacing="1" style="width:600px">
	    <tr>
	      <?php $this->assign('up_down', ""); ?>
          <?php if ($this->_tpl_vars['search_criteria']['order'] == "form_name-DESC"): ?>
	        <?php $this->assign('order_col', "order=form_name-ASC"); ?>
	        <?php $this->assign('up_down', "<img src=\"".($this->_tpl_vars['theme_url'])."/images/sort_down.gif\" />"); ?>
	      <?php elseif ($this->_tpl_vars['search_criteria']['order'] == "form_name-ASC"): ?>
	        <?php $this->assign('order_col', "order=form_name-DESC"); ?>
	        <?php $this->assign('up_down', "<img src=\"".($this->_tpl_vars['theme_url'])."/images/sort_up.gif\" />"); ?>
	      <?php else: ?>
	        <?php $this->assign('order_col', "order=form_name-DESC"); ?>
	      <?php endif; ?>
          <th class="sortable_col<?php if ($this->_tpl_vars['up_down']): ?> over<?php endif; ?>">
            <a href="<?php echo $this->_tpl_vars['same_page']; ?>
?<?php echo $this->_tpl_vars['order_col']; ?>
"><?php echo $this->_tpl_vars['LANG']['word_form']; ?>
 <?php echo $this->_tpl_vars['up_down']; ?>
</a>
          </th>
	      </th>
	      <th width="80"><?php echo $this->_tpl_vars['LANG']['word_status']; ?>
</th>
	      <th width="100"><?php echo $this->_tpl_vars['LANG']['word_submissions']; ?>
</th>
	    </tr>

	    	    <?php $_from = $this->_tpl_vars['forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['form_info']):
?>
	      <?php $this->assign('form_id', $this->_tpl_vars['form_info']['form_id']); ?>

	      <tr style="height: 20px;">
	        <td class="pad_left_small">
              <?php if ($this->_tpl_vars['form_info']['form_type'] == 'external'): ?>
                <?php echo $this->_tpl_vars['form_info']['form_name']; ?>

                <a href="<?php echo $this->_tpl_vars['form_info']['form_url']; ?>
" class="show_form" target="_blank" title="Open form in dialog window"></a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['form_info']['form_name']; ?>

              <?php endif; ?>
	        </td>
	        <td align="center">
	          <?php if ($this->_tpl_vars['form_info']['is_active'] == 'no'): ?>
	            <span class="red"><?php echo $this->_tpl_vars['LANG']['word_offline']; ?>
</span>
	          <?php else: ?>
	            <span class="light_green"><?php echo $this->_tpl_vars['LANG']['word_online']; ?>
</span>
	          <?php endif; ?>
	        </td>
	        <td align="center">
              <div class="form_info_link">
  	            <?php $this->assign('form_num_submissions_key', "form_".($this->_tpl_vars['form_id'])."_num_submissions"); ?>
	            <?php $this->assign('num_submissions', $this->_tpl_vars['SESSION'][$this->_tpl_vars['form_num_submissions_key']]); ?>
	            <a href="forms/index.php?form_id=<?php echo $this->_tpl_vars['form_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_view'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<span class="num_submissions_box"><?php echo $this->_tpl_vars['num_submissions']; ?>
</span></a>
              </div>
	        </td>
	      </tr>
	    <?php endforeach; endif; unset($_from); ?>

	    </table>

	  <?php endif; ?>

  <?php endif; ?>

<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>