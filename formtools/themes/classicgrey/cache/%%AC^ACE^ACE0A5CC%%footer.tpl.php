<?php /* Smarty version 2.6.18, created on 2016-12-14 20:07:37
         compiled from /home1/allcapsc/public_html/workshop/formtools/themes/classicgrey/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/home1/allcapsc/public_html/workshop/formtools/themes/classicgrey/footer.tpl', 7, false),array('function', 'show_page_load_time', '/home1/allcapsc/public_html/workshop/formtools/themes/classicgrey/footer.tpl', 22, false),)), $this); ?>
              </div>
            </div>
          </div>
        </div>

        <div id="left" class="pad_top_large">
					<?php echo smarty_function_ft_include(array('file' => "menu.tpl"), $this);?>

        </div>

      </div>

      <div class="clear"></div>

    </div>
  </div>
</div>

<?php if ($this->_tpl_vars['account']['settings']['footer_text'] != "" || $this->_tpl_vars['g_enable_benchmarking']): ?>
  <div id="footer">
    <?php echo $this->_tpl_vars['account']['settings']['footer_text']; ?>

    <?php echo smarty_function_show_page_load_time(array(), $this);?>

  </div>
<?php endif; ?>

</body>
</html>