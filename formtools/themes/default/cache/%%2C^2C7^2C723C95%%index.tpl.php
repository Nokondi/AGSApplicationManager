<?php /* Smarty version 2.6.18, created on 2017-01-08 18:05:15
         compiled from /home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl', 33, false),array('modifier', 'in_array', '/home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl', 36, false),array('modifier', 'count', '/home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl', 94, false),array('function', 'forms_dropdown', '/home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl', 44, false),array('function', 'views_dropdown', '/home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl', 50, false),array('function', 'clients_dropdown', '/home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl', 85, false),array('function', 'display_form_name', '/home1/allcapsc/public_html/workshop/formtools/modules/data_visualization/templates/index.tpl', 153, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_visualization.png" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules"><?php echo $this->_tpl_vars['LANG']['word_modules']; ?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $this->_tpl_vars['L']['module_name']; ?>

    </td>
  </tr>
  </table>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'messages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../modules/data_visualization/no_internet_connection.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if ($this->_tpl_vars['total_results'] == 0): ?>

    <div class="notify" class="margin_bottom_large">
      <div style="padding:8px">
        <?php echo $this->_tpl_vars['L']['text_no_visualizations']; ?>

      </div>
    </div>

  <?php else: ?>

    <div id="search_form" class=" margin_bottom_large">
      <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
        <table cellspacing="2" cellpadding="0" id="search_form_table" width="100%">
        <tr>
          <td width="100" class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_search_string']; ?>
</td>
          <td width="280" class="col2"><input type="text" name="keyword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
          <td width="120" class="medium_grey" valign="top" rowspan="2"><?php echo $this->_tpl_vars['L']['phrase_visualization_type']; ?>
</td>
          <td rowspan="2" valign="top">
            <input type="checkbox" name="vis_types[]" id="vt1" value="activity" <?php if (((is_array($_tmp='activity')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['vis_types']) : in_array($_tmp, $this->_tpl_vars['vis_types']))): ?>checked<?php endif; ?> />
              <label for="vt1"><?php echo $this->_tpl_vars['L']['phrase_activity_charts']; ?>
</label><br />
            <input type="checkbox" name="vis_types[]" id="vt2" value="field" <?php if (((is_array($_tmp='field')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['vis_types']) : in_array($_tmp, $this->_tpl_vars['vis_types']))): ?>checked<?php endif; ?> />
              <label for="vt2"><?php echo $this->_tpl_vars['L']['phrase_field_charts']; ?>
</label>
          </td>
        </tr>
        <tr>
          <td class="medium_grey"><?php echo $this->_tpl_vars['LANG']['word_form']; ?>
</td>
          <td class="col2"><?php echo smarty_function_forms_dropdown(array('name_id' => 'form_id','default' => $this->_tpl_vars['search_form_id'],'include_blank_option' => true,'blank_option_label' => $this->_tpl_vars['L']['phrase_all_forms']), $this);?>
</td>
        </tr>
        <tr>
          <td class="medium_grey"><?php echo $this->_tpl_vars['LANG']['word_view']; ?>
</td>
          <td class="col2">
            <?php if ($this->_tpl_vars['search_form_id']): ?>
              <?php echo smarty_function_views_dropdown(array('form_id' => $this->_tpl_vars['search_form_id'],'name_id' => 'view_id','selected' => $this->_tpl_vars['search_view_id'],'show_empty_label' => true,'empty_label' => $this->_tpl_vars['L']['phrase_all_views']), $this);?>

            <?php else: ?>
              <select name="view_id" id="view_id" disabled="disabled">
                <option value=""><?php echo $this->_tpl_vars['L']['phrase_all_views']; ?>
</option>
              </select>
            <?php endif; ?>
          </td>
          <td class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_chart_type']; ?>
</td>
          <td>
            <select name="chart_type">
              <option value=""             <?php if ($this->_tpl_vars['chart_type'] == ""): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['L']['phrase_all_types']; ?>
</option>
              <option value="area_chart"   <?php if ($this->_tpl_vars['chart_type'] == 'area_chart'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['L']['word_area']; ?>
</option>
              <option value="bar_chart"    <?php if ($this->_tpl_vars['chart_type'] == 'bar_chart'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['L']['word_bar']; ?>
</option>
              <option value="column_chart" <?php if ($this->_tpl_vars['chart_type'] == 'column_chart'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['L']['word_column']; ?>
</option>
              <option value="line_chart"   <?php if ($this->_tpl_vars['chart_type'] == 'line_chart'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['L']['word_line']; ?>
</option>
              <option value="pie_chart"    <?php if ($this->_tpl_vars['chart_type'] == 'pie_chart'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['L']['word_pie']; ?>
</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="medium_grey" valign="top"><?php echo $this->_tpl_vars['LANG']['word_accounts']; ?>
</td>
          <td colspan="2">

            <table>
            <tr>
              <td>
                <input type="radio" name="account_type" value="admin" id="at1"
                  <?php if ($this->_tpl_vars['account_type'] == 'admin'): ?>checked<?php endif; ?> /> <label for="at1"><?php echo $this->_tpl_vars['LANG']['word_administrator']; ?>
</label>
              </td>
            </tr>
            <tr>
              <td>
                <input type="radio" name="account_type" value="client" id="at2"
                  <?php if ($this->_tpl_vars['account_type'] == 'client'): ?>checked<?php endif; ?> /> <label for="at2"><?php echo $this->_tpl_vars['L']['word_clients']; ?>
</label>
                <?php echo smarty_function_clients_dropdown(array('name_id' => 'client_id','default' => $this->_tpl_vars['client_id'],'include_blank_option' => true,'blank_option' => $this->_tpl_vars['L']['phrase_all_accounts']), $this);?>

              </td>
            </tr>
            </table>

          </td>
          <td align="right" valign="bottom">
            <input type="submit" name="search" value="<?php echo $this->_tpl_vars['LANG']['word_search']; ?>
" class="margin_left" />
            <input type="button" name="reset" onclick="window.location='<?php echo $this->_tpl_vars['same_page']; ?>
?reset=1'"
              <?php if (count($this->_tpl_vars['results']) < $this->_tpl_vars['total_results']): ?>
                value="<?php echo $this->_tpl_vars['LANG']['phrase_show_all']; ?>
 (<?php echo $this->_tpl_vars['total_results']; ?>
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

    <?php if (count($this->_tpl_vars['results']) == 0): ?>

      <div class="notify" class="margin_bottom_large">
        <div style="padding:8px">
          <?php echo $this->_tpl_vars['L']['text_no_visualization_found_in_search']; ?>

        </div>
      </div>

    <?php else: ?>

      <?php echo $this->_tpl_vars['pagination']; ?>


      <?php $this->assign('table_group_id', '1'); ?>

      <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['result']):
        $this->_foreach['row']['iteration']++;
?>
        <?php $this->assign('vis_id', $this->_tpl_vars['result']['vis_id']); ?>
        <?php $this->assign('index', ($this->_foreach['row']['iteration']-1)); ?>
        <?php $this->assign('count', $this->_foreach['row']['iteration']); ?>

                <?php if ($this->_tpl_vars['count'] == 1 || $this->_tpl_vars['count'] != 1 && ( ( $this->_tpl_vars['count']-1 ) % $this->_tpl_vars['num_visualizations_per_page'] == 0 )): ?>

          <?php if ($this->_tpl_vars['table_group_id'] == '1'): ?>
            <?php $this->assign('style', "display: block"); ?>
          <?php else: ?>
            <?php $this->assign('style', "display: none"); ?>
          <?php endif; ?>

          <div id="page_<?php echo $this->_tpl_vars['table_group_id']; ?>
" style="<?php echo $this->_tpl_vars['style']; ?>
">

            <table class="list_table" style="width:100%" cellpadding="1" cellspacing="1">
            <tr style="height: 20px;">
              <th><?php echo $this->_tpl_vars['L']['phrase_visualization_name']; ?>
</th>
              <th><?php echo $this->_tpl_vars['LANG']['word_form']; ?>
</th>
              <th><?php echo $this->_tpl_vars['LANG']['word_permissions']; ?>
</th>
              <th><?php echo $this->_tpl_vars['L']['phrase_visualization_type']; ?>
</th>
              <th><?php echo $this->_tpl_vars['L']['phrase_chart_type']; ?>
</th>
              <th class="edit"></th>
              <th class="del"></th>
            </tr>

        <?php endif; ?>

              <tr>
                <td class="pad_left_small"><?php echo $this->_tpl_vars['result']['vis_name']; ?>
</td>
                <td class="pad_left_small">
                  <?php if ($this->_tpl_vars['result']['view_id']): ?>
                    <a href="../../admin/forms/submissions.php?form_id=<?php echo $this->_tpl_vars['result']['form_id']; ?>
&view_id=<?php echo $this->_tpl_vars['result']['view_id']; ?>
"><?php echo smarty_function_display_form_name(array('form_id' => $this->_tpl_vars['result']['form_id']), $this);?>
</a>
                  <?php else: ?>
                    <a href="../../admin/forms/submissions.php?form_id=<?php echo $this->_tpl_vars['result']['form_id']; ?>
"><?php echo smarty_function_display_form_name(array('form_id' => $this->_tpl_vars['result']['form_id']), $this);?>
</a>
                  <?php endif; ?>
                </td>
                <td class="pad_left_small">
                  <?php if ($this->_tpl_vars['result']['access_type'] == 'admin'): ?>
                    <span class="medium_grey"><?php echo $this->_tpl_vars['L']['phrase_admin_only']; ?>
</span>
                  <?php elseif ($this->_tpl_vars['result']['access_type'] == 'public'): ?>
                    <span><?php echo $this->_tpl_vars['LANG']['word_public']; ?>
</span>
                  <?php else: ?>
                    <span><?php echo $this->_tpl_vars['LANG']['word_private']; ?>
</span>
                  <?php endif; ?>
                </td>
                <td class="pad_left_small">
                  <?php if ($this->_tpl_vars['result']['vis_type'] == 'activity'): ?>
                    <span class="blue"><?php echo $this->_tpl_vars['L']['phrase_activity_charts']; ?>
</span>
                  <?php else: ?>
                    <span class="purple"><?php echo $this->_tpl_vars['L']['phrase_field_chart']; ?>
</span>
                  <?php endif; ?>
                </td>
                <td class="pad_left_small">
                  <?php if ($this->_tpl_vars['result']['chart_type'] == 'area_chart'): ?>
                    <?php echo $this->_tpl_vars['L']['word_area']; ?>

                  <?php elseif ($this->_tpl_vars['result']['chart_type'] == 'line_chart'): ?>
                    <?php echo $this->_tpl_vars['L']['word_line']; ?>

                  <?php elseif ($this->_tpl_vars['result']['chart_type'] == 'column_chart'): ?>
                    <?php echo $this->_tpl_vars['L']['word_column']; ?>

                  <?php elseif ($this->_tpl_vars['result']['chart_type'] == 'bar_chart'): ?>
                    <?php echo $this->_tpl_vars['L']['word_bar']; ?>

                  <?php elseif ($this->_tpl_vars['result']['chart_type'] == 'pie_chart'): ?>
                    <?php echo $this->_tpl_vars['L']['word_pie']; ?>

                  <?php endif; ?>
                </td>
                <td class="edit">
                  <?php if ($this->_tpl_vars['result']['vis_type'] == 'activity'): ?>
                    <a href="activity_charts/edit.php?vis_id=<?php echo $this->_tpl_vars['result']['vis_id']; ?>
"></a>
                  <?php elseif ($this->_tpl_vars['result']['vis_type'] == 'field'): ?>
                    <a href="field_charts/edit.php?vis_id=<?php echo $this->_tpl_vars['result']['vis_id']; ?>
"></a>
                  <?php endif; ?>
                </td>
                <td class="del"><a href="#" onclick="return vis_ns.delete_visualization(<?php echo $this->_tpl_vars['result']['vis_id']; ?>
)"></a></td>
              </tr>

          <?php if ($this->_tpl_vars['count'] != 1 && ( $this->_tpl_vars['count'] % $this->_tpl_vars['num_visualizations_per_page'] ) == 0): ?>
            </table></div>
            <?php $this->assign('table_group_id', $this->_tpl_vars['table_group_id']+1); ?>
          <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>

                <?php if (( count($this->_tpl_vars['results']) % $this->_tpl_vars['num_visualizations_per_page'] ) != 0): ?>
          </table></div>
        <?php endif; ?>

      <?php endif; ?>
    <?php endif; ?>

    <p>
      <input type="button" id="create_visualization" value="<?php echo $this->_tpl_vars['L']['phrase_create_new_visualization']; ?>
" />
      <?php if (count($this->_tpl_vars['results']) > 0): ?>
        <input type="button" id="view_visualizations" value="<?php echo $this->_tpl_vars['L']['phrase_view_visualizations']; ?>
" />
      <?php endif; ?>
    </p>
  </form>

  <div class="hidden" id="create_visualization_dialog">
    <ul>
      <li>
        <div class="chart_type">
          <div class="dv_create_visualization_heading"><?php echo $this->_tpl_vars['L']['phrase_activity_chart']; ?>
</div>
          <img src="images/example_area_chart.png" />
          <input type="hidden" class="visualization_type" value="activity_chart" />
        </div>
        <div class="comment">
          <?php echo $this->_tpl_vars['L']['text_activity_chart_desc']; ?>

        </div>
      </li>
      <li>
        <div class="chart_type">
          <div class="dv_create_visualization_heading"><?php echo $this->_tpl_vars['L']['phrase_field_chart']; ?>
</div>
          <img src="images/example_pie_chart.png" />
          <input type="hidden" class="visualization_type" value="field_chart" />
        </div>
        <div class="comment">
          <?php echo $this->_tpl_vars['L']['text_field_chart_desc']; ?>

        </div>
      </li>
    </ul>
  </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>