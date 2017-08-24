<?php /* Smarty version 2.6.18, created on 2017-03-28 12:36:25
         compiled from /home1/allcapsc/public_html/workshop/formtools/themes/default/../../modules/custom_fields/templates/tab_add_setting.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/home1/allcapsc/public_html/workshop/formtools/themes/default/../../modules/custom_fields/templates/tab_add_setting.tpl', 7, false),)), $this); ?>
  <?php if ($this->_tpl_vars['field_type_info']['is_editable'] == 'no' && ! $this->_tpl_vars['g_cf_allow_editing_of_non_editable_fields']): ?>
    <?php $this->assign('g_success', true); ?>
    <?php $this->assign('g_message', $this->_tpl_vars['L']['text_non_editable_field_type']); ?>
  <?php endif; ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="subtitle underline margin_bottom_large"><?php echo ((is_array($_tmp=$this->_tpl_vars['L']['phrase_add_setting'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</div>

  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
    <input type="hidden" name="page" value="add_setting" />

    <table cellspacing="1" cellpadding="1" border="0">
    <tr>
      <td valign="top" width="150"><?php echo $this->_tpl_vars['L']['phrase_field_label']; ?>
</td>
      <td>
        <input type="text" name="field_label" id="field_label" class="full_width" value="" />
        <div class="light_grey"><?php echo $this->_tpl_vars['L']['phrase_setting_label_desc']; ?>
</div>
      </td>
    </tr>
    <tr>
      <td valign="top"><?php echo $this->_tpl_vars['LANG']['word_identifier']; ?>
</td>
      <td>
        <input type="text" name="field_setting_identifier" value="" class="full_width" maxlength="50" />
        <div class="light_grey"><?php echo $this->_tpl_vars['L']['text_field_setting_desc']; ?>
</div>
      </td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['LANG']['phrase_field_type']; ?>
</td>
      <td>
        <select name="field_type" id="field_type">
          <option value=""><?php echo $this->_tpl_vars['LANG']['phrase_please_select']; ?>
</option>
          <optgroup label="<?php echo $this->_tpl_vars['L']['phrase_static_field_types']; ?>
">
            <option value="textbox"><?php echo $this->_tpl_vars['LANG']['word_textbox']; ?>
</option>
            <option value="textarea"><?php echo $this->_tpl_vars['LANG']['word_textarea']; ?>
</option>
            <option value="radios"><?php echo $this->_tpl_vars['LANG']['phrase_radio_buttons']; ?>
</option>
            <option value="checkboxes"><?php echo $this->_tpl_vars['LANG']['word_checkboxes']; ?>
</option>
            <option value="select"><?php echo $this->_tpl_vars['LANG']['word_dropdown']; ?>
</option>
            <option value="multi-select"><?php echo $this->_tpl_vars['LANG']['phrase_multi_select']; ?>
</option>
          </optgroup>
          <optgroup label="<?php echo $this->_tpl_vars['L']['phrase_dynamic_field_types']; ?>
">
            <option value="option_list_or_form_field"><?php echo $this->_tpl_vars['LANG']['phrase_option_list']; ?>
 / <?php echo $this->_tpl_vars['LANG']['phrase_form_field']; ?>
</option>
          </optgroup>
        </select>
      </td>
    </tr>
    </table>

    <div id="field_type_default_value">
      <table cellspacing="1" cellpadding="1" border="0">
      <tr>
        <td width="150" valign="top"><?php echo $this->_tpl_vars['L']['phrase_default_value']; ?>
</td>
        <td>
          <table cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top" width="25">
              <input type="radio" name="default_value_type" value="static" id="dvt1" checked />
            </td>
            <td width="120" valign="top"><label for="dvt1"><?php echo $this->_tpl_vars['L']['phrase_static_value']; ?>
</label></td>
            <td>
              <input type="text" name="default_value_static" id="dv1" class="med_width" />
            </td>
          </tr>
          <tr>
            <td valign="top">
              <input type="radio" name="default_value_type" value="dynamic" id="dvt2" />
            </td>
            <td valign="top"><label for="dvt2"><?php echo $this->_tpl_vars['L']['phrase_dynamic_value']; ?>
</label></td>
            <td>
              <input type="text" name="default_value_dynamic" id="dv2" class="med_width" disabled="disabled"  />
              <div class="light_grey"><?php echo $this->_tpl_vars['L']['phrase_dynamic_value_format_desc']; ?>
</div>
            </td>
          </tr>
          </table>
        </td>
      </tr>
      </table>
    </div>

    <div class="grey_box margin_top_large hidden" id="field_options">
      <div style="padding: 6px">

        <div class="orientation hidden">
          <table cellspacing="0" cellpadding="0" width="100%" class="margin_top">
          <tr>
            <td width="160"><label for="field_orientation"><?php echo $this->_tpl_vars['L']['word_orientation']; ?>
</label></td>
            <td>
              <input type="radio" name="field_orientation" id="fo1" value="horizontal" checked="checked" />
                <label for="fo1"><?php echo $this->_tpl_vars['LANG']['word_horizontal']; ?>
</label>
              <input type="radio" name="field_orientation" id="fo2" value="vertical" />
                <label for="fo2"><?php echo $this->_tpl_vars['LANG']['word_vertical']; ?>
</label>
            </td>
          </tr>
          </table>
        </div>

        <div id="custom_option_list">
          <div class="sortable groupable field_type_setting_options margin_bottom_large margin_top" id="<?php echo $this->_tpl_vars['sortable_id']; ?>
">
            <ul class="header_row">
              <li class="col1"><?php echo $this->_tpl_vars['LANG']['word_order']; ?>
</li>
              <li class="col2"><?php echo $this->_tpl_vars['LANG']['phrase_field_value']; ?>
</li>
              <li class="col3"><?php echo $this->_tpl_vars['LANG']['phrase_display_text']; ?>
</li>
              <li class="col4 colN del"></li>
            </ul>
            <div class="clear"></div>
            <ul class="rows">
            </ul>
            <div class="clear"></div>
          </div>
          <div>
            <a href="#" onclick="return cf_ns.add_setting_option()"><?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
</a>
          </div>
        </div>

      </div>
    </div>

    <?php if ($this->_tpl_vars['field_type_info']['is_editable'] == 'yes' || $this->_tpl_vars['g_cf_allow_editing_of_non_editable_fields']): ?>
    <p>
      <input type="submit" name="add" value="<?php echo $this->_tpl_vars['LANG']['word_add']; ?>
" />
    </p>
    <?php endif; ?>

  </form>