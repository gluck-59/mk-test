<?php /* Smarty version 2.6.20, created on 2019-10-26 17:17:19
         compiled from /Users/gluck/Sites/motokofr.com/modules/blocksearch/blocksearch-top.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlentities', '/Users/gluck/Sites/motokofr.com/modules/blocksearch/blocksearch-top.tpl', 9, false),array('modifier', 'stripslashes', '/Users/gluck/Sites/motokofr.com/modules/blocksearch/blocksearch-top.tpl', 9, false),)), $this); ?>
<?php if (@site_version == 'full'): ?>
    <!-- Block search module TOP -->
        
    
    <div id="search_block_top" />
    	<form method="get" action="<?php echo $this->_tpl_vars['base_dir']; ?>
search.php" id="searchbox"  style="display: inline-flex;">
            <input required type="text" id="search_query" name="search_query" value="<?php if ($_GET['search_query']): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['search_query'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8') : htmlentities($_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" />
    		<input type="hidden" name="orderby" value="position" />
    		<input type="hidden" name="orderway" value="desc" />
            &nbsp;&nbsp;
            <input id="submit" type="submit" name="Submit" value=""/>
    	</form>
    </div>


    
    
    <?php if ($this->_tpl_vars['ajaxsearch']): ?>
    	<script type="text/javascript">
    		<?php echo '
    		
    		function formatSearch(row) {
    			return row[2] + \' > \' + row[1];
    		}
    
    		function redirectSearch(event, data, formatted) {
    			$(\'#search_query\').val(data[1]);
    			document.location.href = data[3];
    		}
    		
    		$(\'document\').ready( function() {
    			$("#search_query").autocomplete(
    				\''; ?>
<?php echo $this->_tpl_vars['base_dir']; ?>
<?php echo 'search.php\', {
    				minChars: 1,
    				max:100,
    				width:600,
    				scroll: false,
    				formatItem:formatSearch,
    				extraParams:{ajaxSearch:1,id_lang:3}
    			}).result(redirectSearch)
    		});
    		'; ?>

    	</script>
    <?php endif; ?>
    <!-- /Block search module TOP -->	
<?php endif; ?>