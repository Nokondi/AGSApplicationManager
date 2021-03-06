<?php

$STRUCTURE = array();

$HOOKS = array(
  array(
    "hook_type"       => "template",
    "action_location" => "standalone_form_fields_head_bottom",
    "function_name"   => "",
    "hook_function"   => "tinymce_include_standalone_files",
    "priority"        => "50"
  ),
  array(
    "hook_type"       => "template",
    "action_location" => "head_bottom",
    "function_name"   => "",
    "hook_function"   => "tinymce_include_files",
    "priority"        => "50"
  )
);

$FILES = array(
  "database_integrity.php",
  "help.php",
  "images/",
  "images/tinymce_icon.png",
  "index.php",
  "lang/",
  "lang/en_us.php",
  "library.php",
  "module.php",
  "module_config.php",
  "templates/",
  "templates/help.tpl",
  "templates/index.tpl",
  "tinymce/",
  "tinymce/jquery.tinymce.js",
  "tinymce/langs/",
  "tinymce/langs/en.js",
  "tinymce/license.txt",
  "tinymce/plugins/",
  "tinymce/plugins/advhr/",
  "tinymce/plugins/advhr/css/",
  "tinymce/plugins/advhr/css/advhr.css",
  "tinymce/plugins/advhr/editor_plugin.js",
  "tinymce/plugins/advhr/editor_plugin_src.js",
  "tinymce/plugins/advhr/js/",
  "tinymce/plugins/advhr/js/rule.js",
  "tinymce/plugins/advhr/langs/",
  "tinymce/plugins/advhr/langs/en_dlg.js",
  "tinymce/plugins/advhr/rule.htm",
  "tinymce/plugins/advimage/",
  "tinymce/plugins/advimage/css/",
  "tinymce/plugins/advimage/css/advimage.css",
  "tinymce/plugins/advimage/editor_plugin.js",
  "tinymce/plugins/advimage/editor_plugin_src.js",
  "tinymce/plugins/advimage/image.htm",
  "tinymce/plugins/advimage/img/",
  "tinymce/plugins/advimage/img/sample.gif",
  "tinymce/plugins/advimage/js/",
  "tinymce/plugins/advimage/js/image.js",
  "tinymce/plugins/advimage/langs/",
  "tinymce/plugins/advimage/langs/en_dlg.js",
  "tinymce/plugins/advlink/",
  "tinymce/plugins/advlink/css/",
  "tinymce/plugins/advlink/css/advlink.css",
  "tinymce/plugins/advlink/editor_plugin.js",
  "tinymce/plugins/advlink/editor_plugin_src.js",
  "tinymce/plugins/advlink/js/",
  "tinymce/plugins/advlink/js/advlink.js",
  "tinymce/plugins/advlink/langs/",
  "tinymce/plugins/advlink/langs/en_dlg.js",
  "tinymce/plugins/advlink/link.htm",
  "tinymce/plugins/advlist/",
  "tinymce/plugins/advlist/editor_plugin.js",
  "tinymce/plugins/advlist/editor_plugin_src.js",
  "tinymce/plugins/autolink/",
  "tinymce/plugins/autolink/editor_plugin.js",
  "tinymce/plugins/autolink/editor_plugin_src.js",
  "tinymce/plugins/autoresize/",
  "tinymce/plugins/autoresize/editor_plugin.js",
  "tinymce/plugins/autoresize/editor_plugin_src.js",
  "tinymce/plugins/autosave/",
  "tinymce/plugins/autosave/editor_plugin.js",
  "tinymce/plugins/autosave/editor_plugin_src.js",
  "tinymce/plugins/autosave/langs/",
  "tinymce/plugins/autosave/langs/en.js",
  "tinymce/plugins/bbcode/",
  "tinymce/plugins/bbcode/editor_plugin.js",
  "tinymce/plugins/bbcode/editor_plugin_src.js",
  "tinymce/plugins/contextmenu/",
  "tinymce/plugins/contextmenu/editor_plugin.js",
  "tinymce/plugins/contextmenu/editor_plugin_src.js",
  "tinymce/plugins/directionality/",
  "tinymce/plugins/directionality/editor_plugin.js",
  "tinymce/plugins/directionality/editor_plugin_src.js",
  "tinymce/plugins/emotions/",
  "tinymce/plugins/emotions/editor_plugin.js",
  "tinymce/plugins/emotions/editor_plugin_src.js",
  "tinymce/plugins/emotions/emotions.htm",
  "tinymce/plugins/emotions/img/",
  "tinymce/plugins/emotions/img/smiley-cool.gif",
  "tinymce/plugins/emotions/img/smiley-cry.gif",
  "tinymce/plugins/emotions/img/smiley-embarassed.gif",
  "tinymce/plugins/emotions/img/smiley-foot-in-mouth.gif",
  "tinymce/plugins/emotions/img/smiley-frown.gif",
  "tinymce/plugins/emotions/img/smiley-innocent.gif",
  "tinymce/plugins/emotions/img/smiley-kiss.gif",
  "tinymce/plugins/emotions/img/smiley-laughing.gif",
  "tinymce/plugins/emotions/img/smiley-money-mouth.gif",
  "tinymce/plugins/emotions/img/smiley-sealed.gif",
  "tinymce/plugins/emotions/img/smiley-smile.gif",
  "tinymce/plugins/emotions/img/smiley-surprised.gif",
  "tinymce/plugins/emotions/img/smiley-tongue-out.gif",
  "tinymce/plugins/emotions/img/smiley-undecided.gif",
  "tinymce/plugins/emotions/img/smiley-wink.gif",
  "tinymce/plugins/emotions/img/smiley-yell.gif",
  "tinymce/plugins/emotions/js/",
  "tinymce/plugins/emotions/js/emotions.js",
  "tinymce/plugins/emotions/langs/",
  "tinymce/plugins/emotions/langs/en_dlg.js",
  "tinymce/plugins/example/",
  "tinymce/plugins/example/dialog.htm",
  "tinymce/plugins/example/editor_plugin.js",
  "tinymce/plugins/example/editor_plugin_src.js",
  "tinymce/plugins/example/img/",
  "tinymce/plugins/example/img/example.gif",
  "tinymce/plugins/example/js/",
  "tinymce/plugins/example/js/dialog.js",
  "tinymce/plugins/example/langs/",
  "tinymce/plugins/example/langs/en.js",
  "tinymce/plugins/example/langs/en_dlg.js",
  "tinymce/plugins/fullpage/",
  "tinymce/plugins/fullpage/css/",
  "tinymce/plugins/fullpage/css/fullpage.css",
  "tinymce/plugins/fullpage/editor_plugin.js",
  "tinymce/plugins/fullpage/editor_plugin_src.js",
  "tinymce/plugins/fullpage/fullpage.htm",
  "tinymce/plugins/fullpage/js/",
  "tinymce/plugins/fullpage/js/fullpage.js",
  "tinymce/plugins/fullpage/langs/",
  "tinymce/plugins/fullpage/langs/en_dlg.js",
  "tinymce/plugins/fullscreen/",
  "tinymce/plugins/fullscreen/editor_plugin.js",
  "tinymce/plugins/fullscreen/editor_plugin_src.js",
  "tinymce/plugins/fullscreen/fullscreen.htm",
  "tinymce/plugins/iespell/",
  "tinymce/plugins/iespell/editor_plugin.js",
  "tinymce/plugins/iespell/editor_plugin_src.js",
  "tinymce/plugins/inlinepopups/",
  "tinymce/plugins/inlinepopups/editor_plugin.js",
  "tinymce/plugins/inlinepopups/editor_plugin_src.js",
  "tinymce/plugins/inlinepopups/skins/",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/alert.gif",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/button.gif",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/buttons.gif",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/confirm.gif",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/corners.gif",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/horizontal.gif",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/img/vertical.gif",
  "tinymce/plugins/inlinepopups/skins/clearlooks2/window.css",
  "tinymce/plugins/inlinepopups/template.htm",
  "tinymce/plugins/insertdatetime/",
  "tinymce/plugins/insertdatetime/editor_plugin.js",
  "tinymce/plugins/insertdatetime/editor_plugin_src.js",
  "tinymce/plugins/layer/",
  "tinymce/plugins/layer/editor_plugin.js",
  "tinymce/plugins/layer/editor_plugin_src.js",
  "tinymce/plugins/legacyoutput/",
  "tinymce/plugins/legacyoutput/editor_plugin.js",
  "tinymce/plugins/legacyoutput/editor_plugin_src.js",
  "tinymce/plugins/lists/",
  "tinymce/plugins/lists/editor_plugin.js",
  "tinymce/plugins/lists/editor_plugin_src.js",
  "tinymce/plugins/media/",
  "tinymce/plugins/media/css/",
  "tinymce/plugins/media/css/content.css",
  "tinymce/plugins/media/css/media.css",
  "tinymce/plugins/media/editor_plugin.js",
  "tinymce/plugins/media/editor_plugin_src.js",
  "tinymce/plugins/media/img/",
  "tinymce/plugins/media/img/flash.gif",
  "tinymce/plugins/media/img/flv_player.swf",
  "tinymce/plugins/media/img/quicktime.gif",
  "tinymce/plugins/media/img/realmedia.gif",
  "tinymce/plugins/media/img/shockwave.gif",
  "tinymce/plugins/media/img/trans.gif",
  "tinymce/plugins/media/img/windowsmedia.gif",
  "tinymce/plugins/media/js/",
  "tinymce/plugins/media/js/embed.js",
  "tinymce/plugins/media/js/media.js",
  "tinymce/plugins/media/langs/",
  "tinymce/plugins/media/langs/en_dlg.js",
  "tinymce/plugins/media/media.htm",
  "tinymce/plugins/media/moxieplayer.swf",
  "tinymce/plugins/nonbreaking/",
  "tinymce/plugins/nonbreaking/editor_plugin.js",
  "tinymce/plugins/nonbreaking/editor_plugin_src.js",
  "tinymce/plugins/noneditable/",
  "tinymce/plugins/noneditable/editor_plugin.js",
  "tinymce/plugins/noneditable/editor_plugin_src.js",
  "tinymce/plugins/pagebreak/",
  "tinymce/plugins/pagebreak/css/",
  "tinymce/plugins/pagebreak/css/content.css",
  "tinymce/plugins/pagebreak/editor_plugin.js",
  "tinymce/plugins/pagebreak/editor_plugin_src.js",
  "tinymce/plugins/pagebreak/img/",
  "tinymce/plugins/pagebreak/img/pagebreak.gif",
  "tinymce/plugins/pagebreak/img/trans.gif",
  "tinymce/plugins/paste/",
  "tinymce/plugins/paste/editor_plugin.js",
  "tinymce/plugins/paste/editor_plugin_src.js",
  "tinymce/plugins/paste/js/",
  "tinymce/plugins/paste/js/pastetext.js",
  "tinymce/plugins/paste/js/pasteword.js",
  "tinymce/plugins/paste/langs/",
  "tinymce/plugins/paste/langs/en_dlg.js",
  "tinymce/plugins/paste/pastetext.htm",
  "tinymce/plugins/paste/pasteword.htm",
  "tinymce/plugins/preview/",
  "tinymce/plugins/preview/editor_plugin.js",
  "tinymce/plugins/preview/editor_plugin_src.js",
  "tinymce/plugins/preview/example.html",
  "tinymce/plugins/preview/jscripts/",
  "tinymce/plugins/preview/jscripts/embed.js",
  "tinymce/plugins/preview/preview.html",
  "tinymce/plugins/print/",
  "tinymce/plugins/print/editor_plugin.js",
  "tinymce/plugins/print/editor_plugin_src.js",
  "tinymce/plugins/save/",
  "tinymce/plugins/save/editor_plugin.js",
  "tinymce/plugins/save/editor_plugin_src.js",
  "tinymce/plugins/searchreplace/",
  "tinymce/plugins/searchreplace/css/",
  "tinymce/plugins/searchreplace/css/searchreplace.css",
  "tinymce/plugins/searchreplace/editor_plugin.js",
  "tinymce/plugins/searchreplace/editor_plugin_src.js",
  "tinymce/plugins/searchreplace/js/",
  "tinymce/plugins/searchreplace/js/searchreplace.js",
  "tinymce/plugins/searchreplace/langs/",
  "tinymce/plugins/searchreplace/langs/en_dlg.js",
  "tinymce/plugins/searchreplace/searchreplace.htm",
  "tinymce/plugins/spellchecker/",
  "tinymce/plugins/spellchecker/css/",
  "tinymce/plugins/spellchecker/css/content.css",
  "tinymce/plugins/spellchecker/editor_plugin.js",
  "tinymce/plugins/spellchecker/editor_plugin_src.js",
  "tinymce/plugins/spellchecker/img/",
  "tinymce/plugins/spellchecker/img/wline.gif",
  "tinymce/plugins/style/",
  "tinymce/plugins/style/css/",
  "tinymce/plugins/style/css/props.css",
  "tinymce/plugins/style/editor_plugin.js",
  "tinymce/plugins/style/editor_plugin_src.js",
  "tinymce/plugins/style/js/",
  "tinymce/plugins/style/js/props.js",
  "tinymce/plugins/style/langs/",
  "tinymce/plugins/style/langs/en_dlg.js",
  "tinymce/plugins/style/props.htm",
  "tinymce/plugins/tabfocus/",
  "tinymce/plugins/tabfocus/editor_plugin.js",
  "tinymce/plugins/tabfocus/editor_plugin_src.js",
  "tinymce/plugins/table/",
  "tinymce/plugins/table/cell.htm",
  "tinymce/plugins/table/css/",
  "tinymce/plugins/table/css/cell.css",
  "tinymce/plugins/table/css/row.css",
  "tinymce/plugins/table/css/table.css",
  "tinymce/plugins/table/editor_plugin.js",
  "tinymce/plugins/table/editor_plugin_src.js",
  "tinymce/plugins/table/js/",
  "tinymce/plugins/table/js/cell.js",
  "tinymce/plugins/table/js/merge_cells.js",
  "tinymce/plugins/table/js/row.js",
  "tinymce/plugins/table/js/table.js",
  "tinymce/plugins/table/langs/",
  "tinymce/plugins/table/langs/en_dlg.js",
  "tinymce/plugins/table/merge_cells.htm",
  "tinymce/plugins/table/row.htm",
  "tinymce/plugins/table/table.htm",
  "tinymce/plugins/template/",
  "tinymce/plugins/template/blank.htm",
  "tinymce/plugins/template/css/",
  "tinymce/plugins/template/css/template.css",
  "tinymce/plugins/template/editor_plugin.js",
  "tinymce/plugins/template/editor_plugin_src.js",
  "tinymce/plugins/template/js/",
  "tinymce/plugins/template/js/template.js",
  "tinymce/plugins/template/langs/",
  "tinymce/plugins/template/langs/en_dlg.js",
  "tinymce/plugins/template/template.htm",
  "tinymce/plugins/visualchars/",
  "tinymce/plugins/visualchars/editor_plugin.js",
  "tinymce/plugins/visualchars/editor_plugin_src.js",
  "tinymce/plugins/wordcount/",
  "tinymce/plugins/wordcount/editor_plugin.js",
  "tinymce/plugins/wordcount/editor_plugin_src.js",
  "tinymce/plugins/xhtmlxtras/",
  "tinymce/plugins/xhtmlxtras/abbr.htm",
  "tinymce/plugins/xhtmlxtras/acronym.htm",
  "tinymce/plugins/xhtmlxtras/attributes.htm",
  "tinymce/plugins/xhtmlxtras/cite.htm",
  "tinymce/plugins/xhtmlxtras/css/",
  "tinymce/plugins/xhtmlxtras/css/attributes.css",
  "tinymce/plugins/xhtmlxtras/css/popup.css",
  "tinymce/plugins/xhtmlxtras/del.htm",
  "tinymce/plugins/xhtmlxtras/editor_plugin.js",
  "tinymce/plugins/xhtmlxtras/editor_plugin_src.js",
  "tinymce/plugins/xhtmlxtras/ins.htm",
  "tinymce/plugins/xhtmlxtras/js/",
  "tinymce/plugins/xhtmlxtras/js/abbr.js",
  "tinymce/plugins/xhtmlxtras/js/acronym.js",
  "tinymce/plugins/xhtmlxtras/js/attributes.js",
  "tinymce/plugins/xhtmlxtras/js/cite.js",
  "tinymce/plugins/xhtmlxtras/js/del.js",
  "tinymce/plugins/xhtmlxtras/js/element_common.js",
  "tinymce/plugins/xhtmlxtras/js/ins.js",
  "tinymce/plugins/xhtmlxtras/langs/",
  "tinymce/plugins/xhtmlxtras/langs/en_dlg.js",
  "tinymce/themes/",
  "tinymce/themes/advanced/",
  "tinymce/themes/advanced/about.htm",
  "tinymce/themes/advanced/anchor.htm",
  "tinymce/themes/advanced/charmap.htm",
  "tinymce/themes/advanced/color_picker.htm",
  "tinymce/themes/advanced/editor_template.js",
  "tinymce/themes/advanced/editor_template_src.js",
  "tinymce/themes/advanced/image.htm",
  "tinymce/themes/advanced/img/",
  "tinymce/themes/advanced/img/colorpicker.jpg",
  "tinymce/themes/advanced/img/flash.gif",
  "tinymce/themes/advanced/img/icons.gif",
  "tinymce/themes/advanced/img/iframe.gif",
  "tinymce/themes/advanced/img/pagebreak.gif",
  "tinymce/themes/advanced/img/quicktime.gif",
  "tinymce/themes/advanced/img/realmedia.gif",
  "tinymce/themes/advanced/img/shockwave.gif",
  "tinymce/themes/advanced/img/trans.gif",
  "tinymce/themes/advanced/img/video.gif",
  "tinymce/themes/advanced/img/windowsmedia.gif",
  "tinymce/themes/advanced/js/",
  "tinymce/themes/advanced/js/about.js",
  "tinymce/themes/advanced/js/anchor.js",
  "tinymce/themes/advanced/js/charmap.js",
  "tinymce/themes/advanced/js/color_picker.js",
  "tinymce/themes/advanced/js/image.js",
  "tinymce/themes/advanced/js/link.js",
  "tinymce/themes/advanced/js/source_editor.js",
  "tinymce/themes/advanced/langs/",
  "tinymce/themes/advanced/langs/en.js",
  "tinymce/themes/advanced/langs/en_dlg.js",
  "tinymce/themes/advanced/link.htm",
  "tinymce/themes/advanced/shortcuts.htm",
  "tinymce/themes/advanced/skins/",
  "tinymce/themes/advanced/skins/default/",
  "tinymce/themes/advanced/skins/default/content.css",
  "tinymce/themes/advanced/skins/default/dialog.css",
  "tinymce/themes/advanced/skins/default/img/",
  "tinymce/themes/advanced/skins/default/img/buttons.png",
  "tinymce/themes/advanced/skins/default/img/items.gif",
  "tinymce/themes/advanced/skins/default/img/menu_arrow.gif",
  "tinymce/themes/advanced/skins/default/img/menu_check.gif",
  "tinymce/themes/advanced/skins/default/img/progress.gif",
  "tinymce/themes/advanced/skins/default/img/tabs.gif",
  "tinymce/themes/advanced/skins/default/ui.css",
  "tinymce/themes/advanced/skins/highcontrast/",
  "tinymce/themes/advanced/skins/highcontrast/content.css",
  "tinymce/themes/advanced/skins/highcontrast/dialog.css",
  "tinymce/themes/advanced/skins/highcontrast/ui.css",
  "tinymce/themes/advanced/skins/o2k7/",
  "tinymce/themes/advanced/skins/o2k7/content.css",
  "tinymce/themes/advanced/skins/o2k7/dialog.css",
  "tinymce/themes/advanced/skins/o2k7/img/",
  "tinymce/themes/advanced/skins/o2k7/img/button_bg.png",
  "tinymce/themes/advanced/skins/o2k7/img/button_bg_black.png",
  "tinymce/themes/advanced/skins/o2k7/img/button_bg_silver.png",
  "tinymce/themes/advanced/skins/o2k7/ui.css",
  "tinymce/themes/advanced/skins/o2k7/ui_black.css",
  "tinymce/themes/advanced/skins/o2k7/ui_silver.css",
  "tinymce/themes/advanced/source_editor.htm",
  "tinymce/themes/simple/",
  "tinymce/themes/simple/editor_template.js",
  "tinymce/themes/simple/editor_template_src.js",
  "tinymce/themes/simple/img/",
  "tinymce/themes/simple/img/icons.gif",
  "tinymce/themes/simple/langs/",
  "tinymce/themes/simple/langs/en.js",
  "tinymce/themes/simple/skins/",
  "tinymce/themes/simple/skins/default/",
  "tinymce/themes/simple/skins/default/content.css",
  "tinymce/themes/simple/skins/default/ui.css",
  "tinymce/themes/simple/skins/o2k7/",
  "tinymce/themes/simple/skins/o2k7/content.css",
  "tinymce/themes/simple/skins/o2k7/img/",
  "tinymce/themes/simple/skins/o2k7/img/button_bg.png",
  "tinymce/themes/simple/skins/o2k7/ui.css",
  "tinymce/tiny_mce.js",
  "tinymce/tiny_mce_popup.js",
  "tinymce/utils/",
  "tinymce/utils/editable_selects.js",
  "tinymce/utils/form_utils.js",
  "tinymce/utils/mctabs.js",
  "tinymce/utils/validate.js"
);