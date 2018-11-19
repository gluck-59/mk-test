<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:57
         compiled from /home/motokofr/public_html/modules/blockadvancesearch_3/blockadvancesearch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'dirname', '/home/motokofr/public_html/modules/blockadvancesearch_3/blockadvancesearch.tpl', 4, false),array('modifier', 'cat', '/home/motokofr/public_html/modules/blockadvancesearch_3/blockadvancesearch.tpl', 4, false),array('modifier', 'intval', '/home/motokofr/public_html/modules/blockadvancesearch_3/blockadvancesearch.tpl', 13, false),array('function', 'l', '/home/motokofr/public_html/modules/blockadvancesearch_3/blockadvancesearch.tpl', 28, false),)), $this); ?>
<?php if ($this->_tpl_vars['advancedsearch_value'] || $this->_tpl_vars['full_ajax']): ?>
<style type="text/css" media="all">
  .advcSelected {background:transparent url(<?php echo $this->_tpl_vars['img_dir']; ?>
icon/selected.png) 3px 0 no-repeat;padding-bootm:1px;}
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['formtpl'])) ? $this->_run_mod_handler('dirname', true, $_tmp) : dirname($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, "/css/styles.tpl") : smarty_modifier_cat($_tmp, "/css/styles.tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</style>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['this_path']; ?>
js/advancesearch.js"></script>
<?php if ($this->_tpl_vars['full_ajax']): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['this_path']; ?>
js/jqueryForm.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.advcAjaxMode(<?php if ($this->_tpl_vars['full_ajax'] == 2): ?>true<?php endif; ?>);
	});
	blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.submitMode = <?php echo ((is_array($_tmp=$this->_tpl_vars['submitMode'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
;
	blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.submitOptions = {
        target:        '#center_column',   // target element(s) to be updated with server response
        beforeSubmit:  blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.showRequestAdvcSearchSubmit,  // pre-submit callback
        success:       blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.showResponseAdvcSearchSubmit,  // post-submit callback
 		type:      'get',
 		url:       '<?php echo $this->_tpl_vars['this_path']; ?>
advancesearch.php?advc_ajax_mode=1&dupliq_id=<?php echo $this->_tpl_vars['duliq_id']; ?>
'
    };
    blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.submitOptionsBloc = {
    	target:        '#AdvancedSearchBloc_<?php echo $this->_tpl_vars['duliq_id']; ?>
 .block_content',   // target element(s) to be updated with server response
    	beforeSubmit:  blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.showRequestAdvcBloc,  // pre-submit callback
   		success:       blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.showResponseAdvcBloc,  // post-submit callback
		type:      'get',
		url:       '<?php echo $this->_tpl_vars['this_path']; ?>
advancesearch.php?advc_ajax_mode=1&advc_get_block=1&dupliq_id=<?php echo $this->_tpl_vars['duliq_id']; ?>
'
	};
	var ADVC_WaitMsg_<?php echo $this->_tpl_vars['duliq_id']; ?>
 = "<?php echo smartyTranslate(array('s' => 'Veuillez patienter','mod' => 'blockadvancesearch_3','js' => 1), $this);?>
";
</script>
<?php endif; ?>
<!-- Block advance search module -->
<div id="AdvancedSearchBloc_<?php echo $this->_tpl_vars['duliq_id']; ?>
" class="block" <?php if (@site_version == 'mobile'): ?>style="left:-415px;"<?php endif; ?> >

	<div class="block_content">
		<?php if (@site_version == 'mobile'): ?>
            <a id="open_close_a" href="javascript:" onclick="showmenu();">
            <div id="open_close">
                <img style="height: 20px" src="/img/menu.png">
            </div>
            </a>
    		
    		<?php echo '
    		<script>


// автомат выпадание меню фильтра на главной
//                if ($(\'body\').attr(\'id\') == \'index\') 
//                {
//                    showmenu();
//                }

    		
        		function showmenu()
        		{
        			if (document.getElementById(\'AdvancedSearchBloc_3\').style.left != \'0px\')
        			{
        				document.getElementById(\'AdvancedSearchBloc_3\').style.left = \'0\';
        				document.getElementById(\'AdvancedSearchBloc_3\').style.height = \'100vh\';
        				document.getElementById(\'AdvancedSearchBloc_3\').style.top = \'1vh\';
                        $(\'#AdvancedSearchBloc_3\').css("overflow", "scroll");
                        $(\'body\').css("overflow", "hidden");
//        				document.getElementById(\'open_close_a\').innerHTML = \'<<\';
        				//$(\'body\').css(\'overflow\',\'hidden\');
        			}
        
        			else
        			{
        				document.getElementById(\'AdvancedSearchBloc_3\').style.left = \'-417px\';
//        				document.getElementById(\'AdvancedSearchBloc_3\').style.height = \'8vh\';
        				document.getElementById(\'AdvancedSearchBloc_3\').style.top = \'0px\';        				
                        $(\'#AdvancedSearchBloc_3\').css("overflow", "hidden");        				
                        $(\'body\').css("overflow", "scroll");        				
//        				document.getElementById(\'open_close_a\').innerHTML = \'>>\';
//        				document.getElementById(\'open_close\').style.left = \'-415px\';        				        				
        			}
        
        		}


                scrolled1 = 0;
                window.onscroll = function() 
                {
                    scrolled = window.pageYOffset || document.documentElement.scrollTop;
                    if (scrolled > scrolled1+10) document.getElementById(\'open_close\').style.top = \'-51px\';
                    if (scrolled < scrolled1-10) document.getElementById(\'open_close\').style.top = \'10px\';
                    scrolled1 = scrolled;
                }

    		</script>'; ?>

		<?php endif; ?>

		<?php if ($this->_tpl_vars['full_ajax'] != 2): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['formtpl'])) ? $this->_run_mod_handler('dirname', true, $_tmp) : dirname($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, "/blockadvancesearchmenu.tpl") : smarty_modifier_cat($_tmp, "/blockadvancesearchmenu.tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</div>
</div>
<!-- /Block advance search module -->
<?php endif; ?>