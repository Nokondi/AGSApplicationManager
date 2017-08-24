<?php /* Smarty version 2.6.18, created on 2016-12-14 19:40:19
         compiled from ../../modules/submission_accounts/templates/admin/tab_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '../../modules/submission_accounts/templates/admin/tab_menu.tpl', 4, false),array('modifier', 'escape', '../../modules/submission_accounts/templates/admin/tab_menu.tpl', 28, false),array('function', 'user_pages_dropdown', '../../modules/submission_accounts/templates/admin/tab_menu.tpl', 25, false),)), $this); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" onsubmit="sa_ns.update_menu_submit()">
      <input type="hidden" name="num_rows" id="num_rows" value="<?php echo count($this->_tpl_vars['submission_account']['menu_items']); ?>
" />

      <div class="sortable groupable edit_sa_menu" id="<?php echo $this->_tpl_vars['sortable_id']; ?>
">
        <ul class="header_row">
          <li class="col1"><?php echo $this->_tpl_vars['LANG']['word_order']; ?>
</li>
          <li class="col2"><?php echo $this->_tpl_vars['LANG']['word_page']; ?>
</li>
          <li class="col3"><?php echo $this->_tpl_vars['LANG']['phrase_display_text']; ?>
</li>
          <li class="col4"><?php echo $this->_tpl_vars['LANG']['word_options']; ?>
</li>
          <li class="col5"><?php echo $this->_tpl_vars['LANG']['word_submenu']; ?>
</li>
          <li class="col6 colN del"></li>
        </ul>
        <div class="clear"></div>
        <ul class="rows check_areas" id="rows">
        <?php $_from = $this->_tpl_vars['submission_account']['menu_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['edit_menu_items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['edit_menu_items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
        $this->_foreach['edit_menu_items']['iteration']++;
?>
          <li class="sortable_row">
            <div class="row_content">
              <div class="row_group<?php if (($this->_foreach['edit_menu_items']['iteration'] == $this->_foreach['edit_menu_items']['total'])): ?> rowN<?php endif; ?>">
                <input type="hidden" class="sr_order" value="<?php echo $this->_tpl_vars['i']['list_order']; ?>
" />
                <ul>
                  <li class="col1 sort_col"><?php echo $this->_tpl_vars['i']['list_order']; ?>
</li>
                  <li class="col2">
                    <?php echo smarty_function_user_pages_dropdown(array('selected' => $this->_tpl_vars['i']['page_identifier'],'name_id' => "page_identifier_".($this->_tpl_vars['i']['list_order'])), $this);?>

                  </li>
                  <li class="col3">
                    <input type="text" name="display_text_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" id="display_text_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['display_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
                  </li>
                  <li class="col4" id="row_<?php echo $this->_tpl_vars['i']['list_order']; ?>
_options">
                    <?php if ($this->_tpl_vars['i']['page_identifier'] == 'custom_url'): ?>
                      URL:&nbsp;<input type="text" name="custom_options_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" id="custom_options_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="width:150px" />
                    <?php else: ?>
                      <span class="medium_grey"><?php echo $this->_tpl_vars['LANG']['word_na']; ?>
</span>
                    <?php endif; ?>
                  </li>
                  <li class="col5 check_area"><input type="checkbox" name="submenu_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" <?php if ($this->_tpl_vars['i']['is_submenu'] == 'yes'): ?>checked<?php endif; ?> /></li>
                  <li class="col6 colN del"><a href="#" onclick="return sa_ns.remove_menu_item_row(<?php echo $this->_tpl_vars['i']['list_order']; ?>
)"></a></li>
                </ul>
                <div class="clear"></div>
              </div>

            </div>
            <div class="clear"></div>
          </li>
        <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>

      <script>
      sa_ns.num_rows = <?php echo count($this->_tpl_vars['submission_account']['menu_items']); ?>
;
      </script>

      <p>
        <a href="#" onclick="return sa_ns.add_menu_item_row()"><?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
</a>
      </p>

      <div id="menu_options" style="display:none">
        <?php echo smarty_function_user_pages_dropdown(array('name_id' => "page_identifier_%%X%%"), $this);?>

      </div>

      <p>
        <input type="submit" name="update" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
      </p>
    </form>