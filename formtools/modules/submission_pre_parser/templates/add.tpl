{include file='modules_header.tpl'}

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_preparser.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules">{$LANG.word_modules}</a>
      <span class="joiner">&raquo;</span>
      <a href="./">{$L.module_name}</a>
      <span class="joiner">&raquo;</span>
      {$L.phrase_add_rule}
    </td>
  </tr>
  </table>

  {include file='messages.tpl'}

  <form action="index.php" method="post">

    <table cellspacing="1" cellpadding="1" border="0" width="100%">
    <tr>
      <td width="120">{$LANG.word_status}</td>
      <td>
        <input type="radio" name="status" value="enabled" id="status1" checked />
          <label for="status1" class="green">{$LANG.word_enabled}</label>
        <input type="radio" name="status" value="disabled" id="status2" />
          <label for="status2" class="red">{$LANG.word_disabled}</label>
      </td>
    </tr>
    <tr>
      <td valign="top">{$L.phrase_when_executed}</td>
      <td>
        <input type="checkbox" name="event[]" value="ft_process_form" id="event1" checked />
          <label for="event1">{$LANG.phrase_on_form_submission}</label><br />
        <input type="checkbox" name="event[]" value="ft_api_process_form" id="event2" checked />
          <label for="event2">{$L.phrase_on_form_submission_via_api}</label><br />
        <input type="checkbox" name="event[]" value="ft_update_submission" id="event3" />
          <label for="event3">{$LANG.phrase_when_submission_is_edited}</label>
      </td>
    </tr>
    <tr>
      <td>{$L.phrase_rule_name}</td>
      <td><input type="text" name="rule_name" value="" style="width:300px" maxlength="255" /></td>
    </tr>
    <tr>
      <td valign="top">{$LANG.word_form_sp}</td>
      <td>{forms_dropdown name_id="form_ids[]" is_multiple=true}</td>
    </tr>
    <tr>
      <td valign="top">{$L.phrase_php_code}</td>
      <td>

        <div style="border: 1px solid #666666; padding: 3px">
          <textarea name="php_code" id="php_code" style="width:100%; height:240px"></textarea>
        </div>

        <script type="text/javascript">
        var html_editor = new CodeMirror.fromTextArea("php_code", {literal}{{/literal}
        parserfile: ["parsejavascript.js", "tokenizejavascript.js"],
        path: "{$g_root_url}/global/codemirror/js/",
        stylesheet: "{$g_root_url}/global/codemirror/css/jscolors.css"
        {literal}});{/literal}
        </script>

      </td>
    </tr>
    </table>

    <p>
      <input type="submit" name="add_rule" value="{$L.phrase_add_rule|upper}" />
    </p>

  </form>
{include file='modules_footer.tpl'}