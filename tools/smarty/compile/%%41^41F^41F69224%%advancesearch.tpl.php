<?php /* Smarty version 2.6.20, created on 2016-11-20 12:41:01
         compiled from /home/motokofr/public_html/modules/blockadvancesearch_3/advancesearch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/blockadvancesearch_3/advancesearch.tpl', 1, false),array('function', 'declension', '/home/motokofr/public_html/modules/blockadvancesearch_3/advancesearch.tpl', 6, false),array('modifier', 'intval', '/home/motokofr/public_html/modules/blockadvancesearch_3/advancesearch.tpl', 6, false),array('modifier', 'cat', '/home/motokofr/public_html/modules/blockadvancesearch_3/advancesearch.tpl', 12, false),array('modifier', 'trim', '/home/motokofr/public_html/modules/blockadvancesearch_3/advancesearch.tpl', 29, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Votre Recherche','mod' => 'blockadvancesearch_3'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<noindex>
<h2><?php echo smartyTranslate(array('s' => 'Votre Recherche','mod' => 'blockadvancesearch_3'), $this);?>

<span><?php echo ((is_array($_tmp=$this->_tpl_vars['nbProducts'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&nbsp;<?php echo smarty_function_declension(array('nb' => ($this->_tpl_vars['nbProducts'])."|intval",'expressions' => "ништяк,ништяка,ништяков"), $this);?>
</span>
</h2>
</noindex>

<span id="advcCurSelection_<?php echo $this->_tpl_vars['duliq_id']; ?>
">&nbsp;</span>&nbsp;
	<?php if ($_SERVER['SCRIPT_NAME'] == ((is_array($_tmp=$this->_tpl_vars['this_path'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'advancesearch.php') : smarty_modifier_cat($_tmp, 'advancesearch.php')) && ( $_GET['supplier'] != '' || $_GET['category'] != '' || $_GET['filter'] != '' || $_GET['manufacturer'] != '' )): ?>
	<a class="ebutton <?php if (@site_version == 'full'): ?>mini <?php endif; ?>blue" <?php if (@site_version == 'mobile'): ?>style="font-size: 1em; text-align: center; padding: 12px 0;"<?php endif; ?> href="<?php echo $this->_tpl_vars['this_path']; ?>
advancesearch.php">Сброс</a><br>
	<?php endif; ?>
	

	 
<input required class="filter" type="text" name="filter" id="filter"  placeholder="<?php if (! empty ( $this->_tpl_vars['placeholder'] )): ?><?php echo $this->_tpl_vars['placeholder']; ?>
 — фильтр по словам<?php else: ?>Что искать будем
	 <?php if (isset ( $_COOKIE['firstname'] )): ?>, <?php echo $_COOKIE['firstname']; ?>
<?php endif; ?>?<?php endif; ?>">

<?php if ($this->_tpl_vars['tips']): ?>
	<p class="tips">
		<?php $_from = $this->_tpl_vars['tips']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tips'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tips']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tip']):
        $this->_foreach['tips']['iteration']++;
?>
			<?php if ($this->_tpl_vars['full_ajax']): ?>		
			&nbsp;<a class="tips" rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
" onclick="javascript:blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.advcLoadUrl('<?php echo $this->_tpl_vars['oAdvaceSearch']->getUrlWithMultipleSelect('filter',$this->_tpl_vars['tip'],$this->_tpl_vars['SelectMulti'][$this->_tpl_vars['tip']]); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
</a>&nbsp;
			<?php else: ?>
			&nbsp;<a class="tips" rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
" onclick="setAttr('filter',getAttr('filter')+'<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
</a>&nbsp;
			<?php endif; ?>
			
		<?php endforeach; endif; unset($_from); ?>
	</p>
<?php endif; ?>


<script type="text/javascript">
blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.isSearchPage = true;
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['tabSearch']): ?><?php echo $this->_tpl_vars['tabSearch']; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['nbProducts']): ?>
	<p class="warning">
			<?php echo smartyTranslate(array('s' => 'Aucun résultat','mod' => 'blockadvancesearch_3'), $this);?>
 	</p>
<?php else: ?>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if (@site_version == 'full'): ?>
						
	<?php echo '
	<script defer language="JavaScript">
	jQuery(document).ready(function()
			{   
			$(\'body,html\').animate({
				scrollTop: 320
			}, 10);
		});
		
	</script>
	'; ?>

<?php endif; ?>




<?php echo '
<script language="JavaScript">
    
///////////////// лишний &amp генерится где-то здесь    
	jQuery(document).ready(function()
	{   
		$("#filter").keypress(function(e)
		{
			if(e.keyCode==13)
			{
			'; ?>

			<?php if ($this->_tpl_vars['full_ajax']): ?>
			<?php echo '
			  blockAdvanceSearch_'; ?>
<?php echo $this->_tpl_vars['duliq_id']; ?>
<?php echo '.advcLoadUrl(\''; ?>
<?php echo $this->_tpl_vars['oAdvaceSearch']->getUrlWithMultipleSelect('filter','',$this->_tpl_vars['SelectMulti'][$this->_tpl_vars['tip']]); ?>
<?php echo '\'+this.value);
			'; ?>

			<?php else: ?>
			<?php echo '
				setAttr(\'filter\',getAttr(\'filter\')+this.value);
			'; ?>

			<?php endif; ?>	
			<?php echo '
			}
		});
	});


function getAttr(prmName) 
{ 
   //var $_GET = {}; 
   var d = window.location.search.substring(1).split("&"); 
   for(var i=0; i< d.length; i++) { 
      var getVar = d[i].split("="); 
      if (getVar[0]==prmName)
      {
        //return typeof(getVar[1])=="undefined" ? "" : getVar[1]
        return getVar[1]+\'|\';
      }
      //$_GET[getVar[0]] = typeof(getVar[1])=="undefined" ? "" : getVar[1]; 
   } 
   return \'\';
   //return $_GET; 
} 

function setAttr(prmName,val)
{
    var res = \'\';
	var d = location.href.split("#")[0].split("?");  
	var base = d[0];
	var query = d[1];
	if(query) {
		var params = query.split("&");  
		for(var i = 0; i < params.length; i++) {  
			var keyval = params[i].split("=");  
			if(keyval[0] != prmName) {  
				res += params[i] + \'&\';
			}
		}
	}
	
	if (val != \'\') 	
	{	
		var val = val.replace(/ /g, \'|\')
		res += prmName + \'=\' + val;
		window.location.href = base + \'?\' + res; // перезагружает страницу, не дает работать AJAX
		return false;
	}
}

	
</script>
'; ?>
