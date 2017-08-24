<?php /* Smarty version 2.6.18, created on 2017-03-24 15:17:55
         compiled from ../../modules/swift_mailer/templates/tab_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../modules/swift_mailer/templates/tab_settings.tpl', 21, false),)), $this); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="margin_bottom_large">
    <?php echo $this->_tpl_vars['text_settings_desc']; ?>

  </div>

  <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" onsubmit="return rsv.validate(this, rules)">
    <table cellpadding="0" cellspacing="1">
    <tr>
      <td width="25">
        <input type="checkbox" name="swiftmailer_enabled" id="swiftmailer_enabled" value="yes"
          <?php if ($this->_tpl_vars['sm_settings']['swiftmailer_enabled'] == 'yes'): ?>checked<?php endif; ?>
          onchange="page_ns.toggle_enabled_fields(this.checked)" />
      </td>
      <td colspan="2" class="bold"><label for="swiftmailer_enabled"><?php echo $this->_tpl_vars['L']['phrase_enable_module']; ?>
</label></td>
    </tr>
    <tr>
      <td> </td>
      <td width="180" class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_smtp_server']; ?>
</td>
      <td>
        <input type="text" name="smtp_server" id="smtp_server" style="width:200px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['smtp_server'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
          <?php if ($this->_tpl_vars['sm_settings']['swiftmailer_enabled'] != 'yes'): ?>disabled<?php endif; ?> />
      </td>
    </tr>
    <tr>
      <td> </td>
      <td class="medium_grey"><?php echo $this->_tpl_vars['L']['word_port']; ?>
</td>
      <td>
        <input type="text" name="port" id="port" style="width:35px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['port'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
          <?php if ($this->_tpl_vars['sm_settings']['swiftmailer_enabled'] != 'yes'): ?>disabled<?php endif; ?> />
      </td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" name="requires_authentication" id="requires_authentication" value="yes"
          <?php if ($this->_tpl_vars['sm_settings']['requires_authentication'] == 'yes'): ?>checked<?php endif; ?>
          onchange="page_ns.toggle_authentication_fields(this.checked)" />
      </td>
      <td colspan="2" class="bold"><label for="requires_authentication"><?php echo $this->_tpl_vars['L']['phrase_use_authentication']; ?>
</label></td>
    </tr>
    <tr>
      <td> </td>
      <td class="medium_grey"><?php echo $this->_tpl_vars['LANG']['word_username']; ?>
</td>
      <td><input type="text" name="username" id="username" style="width:200px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
        <?php if ($this->_tpl_vars['sm_settings']['requires_authentication'] == 'no'): ?>disabled<?php endif; ?> /></td>
    </tr>
    <tr>
      <td> </td>
      <td class="medium_grey"><?php echo $this->_tpl_vars['LANG']['word_password']; ?>
</td>
      <td><input type="password" name="password" id="password" style="width:200px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
        <?php if ($this->_tpl_vars['sm_settings']['requires_authentication'] == 'no'): ?>disabled<?php endif; ?> /></td>
    </tr>
    <tr>
      <td> </td>
      <td class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_authentication_procedure']; ?>
</td>
      <td>
        <input type="radio" name="authentication_procedure" id="ap1" value="LOGIN" <?php if ($this->_tpl_vars['sm_settings']['authentication_procedure'] == 'LOGIN'): ?>checked<?php endif; ?>
          <?php if ($this->_tpl_vars['sm_settings']['requires_authentication'] == 'no'): ?>disabled<?php endif; ?> />
          <label for="ap1">LOGIN</label>
        <input type="radio" name="authentication_procedure" id="ap2" value="PLAIN" <?php if ($this->_tpl_vars['sm_settings']['authentication_procedure'] == 'PLAIN'): ?>checked<?php endif; ?>
          <?php if ($this->_tpl_vars['sm_settings']['requires_authentication'] == 'no'): ?>disabled<?php endif; ?> />
          <label for="ap2">PLAIN</label>
        <input type="radio" name="authentication_procedure" id="ap3" value="CRAMMD5" <?php if ($this->_tpl_vars['sm_settings']['authentication_procedure'] == 'CRAMMD5'): ?>checked<?php endif; ?>
          <?php if ($this->_tpl_vars['sm_settings']['requires_authentication'] == 'no'): ?>disabled<?php endif; ?> />
          <label for="ap3">CRAM-MD5</label>
      </td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" name="use_encryption" id="use_encryption" value="yes" <?php if ($this->_tpl_vars['sm_settings']['use_encryption'] == 'yes'): ?>checked<?php endif; ?>
          onchange="page_ns.toggle_encryption_fields(this.checked)" />
      </td>
      <td colspan="2" class="bold"><label for="use_encryption"><?php echo $this->_tpl_vars['L']['phrase_use_encryption']; ?>
</label></td>
    </tr>
    <tr>
      <td> </td>
      <td class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_encryption_type']; ?>
</td>
      <td>
        <input type="radio" name="encryption_type" id="et1" value="SSL" <?php if ($this->_tpl_vars['sm_settings']['encryption_type'] == 'SSL'): ?>checked<?php endif; ?>
          <?php if ($this->_tpl_vars['sm_settings']['use_encryption'] != 'yes'): ?>disabled<?php endif; ?> />
          <label for="et1">SSL</label>
        <input type="radio" name="encryption_type" id="et2" value="TLS" <?php if ($this->_tpl_vars['sm_settings']['encryption_type'] == 'TLS'): ?>checked<?php endif; ?>
          <?php if ($this->_tpl_vars['sm_settings']['use_encryption'] != 'yes'): ?>disabled<?php endif; ?> />
          <label for="et2">TLS</label>
      </td>
    </tr>
    </table>

    <br />

    <div class="grey_box">
      <div style="margin_top">
        <a href="#" onclick="return page_ns.toggle_advanced_settings()"><?php echo $this->_tpl_vars['LANG']['phrase_advanced_settings_rightarrow']; ?>
</a>
      </div>

      <div <?php if ($this->_tpl_vars['remember_advanced_settings'] == "" || $this->_tpl_vars['remember_advanced_settings'] == 'false'): ?>style="display:none"<?php endif; ?> id="advanced_settings">
         <table cellpadding="0" cellspacing="1">
        <tr>
          <td colspan="2" class="medium_grey" width="205"><?php echo $this->_tpl_vars['L']['phrase_server_connection_timeout']; ?>
</td>
          <td>
            <input type="text" name="server_connection_timeout" id="server_connection_timeout" style="width:35px"
              value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['server_connection_timeout'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /> <?php echo $this->_tpl_vars['L']['word_seconds']; ?>

          </td>
        </tr>
        <tr>
          <td colspan="2" class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_email_charset']; ?>
</td>
          <td><input type="text" name="charset" id="charset" style="width:80px" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['charset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
        </tr>
        <tr>
          <td width="25">
            <input type="checkbox" name="use_anti_flooding" id="use_anti_flooding" value="yes" <?php if ($this->_tpl_vars['sm_settings']['use_anti_flooding'] == 'yes'): ?>checked<?php endif; ?>
              onchange="page_ns.toggle_antiflooding_fields(this.checked)" />
          </td>
          <td class="bold" colspan="2"><label for="use_anti_flooding"><?php echo $this->_tpl_vars['L']['phrase_use_antiflooding']; ?>
</label></td>
        </tr>
        <tr>
          <td> </td>
          <td class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_email_batch_size']; ?>
</td>
          <td class="medium_grey">
            <input type="text" name="anti_flooding_email_batch_size" id="anti_flooding_email_batch_size" style="width:35px"
              value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['anti_flooding_email_batch_size'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
              <?php if ($this->_tpl_vars['sm_settings']['use_anti_flooding'] != 'yes'): ?>disabled<?php endif; ?> />
          </td>
        </tr>
        <tr>
          <td> </td>
          <td class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_batch_wait_time']; ?>
</td>
          <td class="medium_grey">
            <input type="text" name="anti_flooding_email_batch_wait_time" id="anti_flooding_email_batch_wait_time" style="width:35px"
              value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sm_settings']['anti_flooding_email_batch_wait_time'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
               <?php if ($this->_tpl_vars['sm_settings']['use_anti_flooding'] != 'yes'): ?>disabled<?php endif; ?> /> <?php echo $this->_tpl_vars['L']['word_seconds']; ?>
</td>
        </tr>
        </table>
      </div>

    </div>

    <p>
      <input type="submit" name="update" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
    </p>

  </form>