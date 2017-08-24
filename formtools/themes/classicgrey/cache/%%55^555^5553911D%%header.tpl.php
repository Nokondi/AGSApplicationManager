<?php /* Smarty version 2.6.18, created on 2016-12-14 20:07:37
         compiled from /home1/allcapsc/public_html/workshop/formtools/themes/classicgrey/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'template_hook', '/home1/allcapsc/public_html/workshop/formtools/themes/classicgrey/header.tpl', 7, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="<?php echo $this->_tpl_vars['LANG']['special_text_direction']; ?>
">
<head>
  <title><?php echo $this->_tpl_vars['head_title']; ?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/images/favicon.ico">
  <?php echo smarty_function_template_hook(array('location' => 'head_top'), $this);?>

  <script>
  //<![CDATA[
  var g = <?php echo '{'; ?>

    root_url:       "<?php echo $this->_tpl_vars['g_root_url']; ?>
",
    error_colours:  ["ffbfbf", "ffeded"],
    notify_colours: ["c6e2ff", "f2f8ff"],
    js_debug:       <?php echo $this->_tpl_vars['g_js_debug']; ?>

  <?php echo '}'; ?>
;
  //]]>
  </script>
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/css/main.css?v=2_1_0">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/css/styles.css?v=2_1_0">
  <link href="<?php echo $this->_tpl_vars['theme_url']; ?>
/css/smoothness/jquery-ui-1.8.14.custom.css" rel="stylesheet" type="text/css"/>
  <script src="<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/scripts/jquery.js"></script>
  <script src="<?php echo $this->_tpl_vars['theme_url']; ?>
/scripts/jquery-ui-1.8.14.custom.min.js"></script>
  <script src="<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/scripts/general.js?v=2_1_0"></script>
  <script src="<?php echo $this->_tpl_vars['g_root_url']; ?>
/global/scripts/rsv.js?v=2_1_0"></script>
  <?php echo $this->_tpl_vars['head_string']; ?>

  <?php echo $this->_tpl_vars['head_js']; ?>

  <?php echo $this->_tpl_vars['head_css']; ?>


  <?php echo smarty_function_template_hook(array('location' => 'head_bottom'), $this);?>

</head>
<body>

<div id="container">
  <div id="header"><?php if ($this->_tpl_vars['settings']['logo_link']): ?><a href="<?php echo $this->_tpl_vars['settings']['logo_link']; ?>
"><?php endif; ?><img src="<?php echo $this->_tpl_vars['theme_url']; ?>
/images/header_logo.jpg" width="392" height="60" border="0" /><?php if ($this->_tpl_vars['settings']['logo_link']): ?></a><?php endif; ?></div>
  <div id="header_row">
    <div id="left_nav_top">
      <?php if ($this->_tpl_vars['SESSION']['account']['is_logged_in'] && ! $this->_tpl_vars['g_omit_top_bar']): ?>
        <?php if ($this->_tpl_vars['settings']['release_type'] == 'alpha'): ?>
          <b><?php echo $this->_tpl_vars['settings']['program_version']; ?>
-alpha-<?php echo $this->_tpl_vars['settings']['release_date']; ?>
</b>
        <?php elseif ($this->_tpl_vars['settings']['release_type'] == 'beta'): ?>
          <b><?php echo $this->_tpl_vars['settings']['program_version']; ?>
-beta-<?php echo $this->_tpl_vars['settings']['release_date']; ?>
</b>
        <?php else: ?>
          <b><?php echo $this->_tpl_vars['settings']['program_version']; ?>
</b>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['SESSION']['account']['account_type'] == 'admin'): ?>
          &nbsp;
          <a href="#" onclick="return ft.check_updates()" class="update_link"><?php echo $this->_tpl_vars['LANG']['word_update']; ?>
</a>
        <?php endif; ?>
      <?php else: ?>
        <div style="height: 20px"> </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="outer">
    <div class="inner">
      <div class="float-wrap">
      <div id="content">

        <div class="content_wrap">

          <div id="main_window">
            <div id="page_content">