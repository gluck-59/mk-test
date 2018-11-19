<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:10
         compiled from /Users/gluck/Sites/motokofr.com/modules/blockadvancesearch_3/blockadvancesearchmenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '/Users/gluck/Sites/motokofr.com/modules/blockadvancesearch_3/blockadvancesearchmenu.tpl', 8, false),array('modifier', 'dirname', '/Users/gluck/Sites/motokofr.com/modules/blockadvancesearch_3/blockadvancesearchmenu.tpl', 9, false),array('modifier', 'cat', '/Users/gluck/Sites/motokofr.com/modules/blockadvancesearch_3/blockadvancesearchmenu.tpl', 9, false),array('modifier', 'preg_match', '/Users/gluck/Sites/motokofr.com/modules/blockadvancesearch_3/blockadvancesearchmenu.tpl', 36, false),array('function', 'l', '/Users/gluck/Sites/motokofr.com/modules/blockadvancesearch_3/blockadvancesearchmenu.tpl', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['submitMode'] == 2): ?>
<form action="<?php echo $this->_tpl_vars['this_path']; ?>
advancesearch.php" method="get" id="AdvancedSearchForm_<?php echo $this->_tpl_vars['duliq_id']; ?>
" <?php if ($this->_tpl_vars['full_ajax']): ?>onsubmit="return false;"<?php endif; ?>>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['advancedsearch_label']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['advancesearch'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['advancesearch']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['label']):
        $this->_foreach['advancesearch']['iteration']++;
?>
	<?php $this->assign('curMaxVisible', $this->_tpl_vars['maxVisible'][$this->_tpl_vars['k']]); ?>
		<div style=" margin-top: -7px; ">
		<noindex><h4 class="advcTitleCrit"><?php echo $this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['k']]['name']; ?>
</h4></noindex>
		<?php $this->assign('curSearchType', ((is_array($_tmp=@$this->_tpl_vars['searchTypes'][$this->_tpl_vars['k']])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1))); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['formtpl'])) ? $this->_run_mod_handler('dirname', true, $_tmp) : dirname($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, "/tplSearch_".($this->_tpl_vars['curSearchType']).".tpl") : smarty_modifier_cat($_tmp, "/tplSearch_".($this->_tpl_vars['curSearchType']).".tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
			<div class="clear">&nbsp;</div>
			<?php $this->assign('prevK', $this->_tpl_vars['k']); ?>
	<?php endforeach; endif; unset($_from); ?>
	<div class="clear"></div>
	<?php if ($this->_tpl_vars['submitMode'] == 2): ?>
		<input <?php if ($this->_tpl_vars['full_ajax']): ?>type="button" onclick="$('#AdvancedSearchForm_<?php echo $this->_tpl_vars['duliq_id']; ?>
').ajaxSubmit(blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.submitOptions);return false;"<?php else: ?> type="submit"<?php endif; ?> value="<?php echo smartyTranslate(array('s' => 'Rechercher','mod' => 'blockadvancesearch_3'), $this);?>
" class="button" name="submitAdvancedSearch" id="submitAdvancedSearch"_<?php echo $this->_tpl_vars['duliq_id']; ?>
 />
		<br class="clear" />
		</form>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['showCritMethode'] == 1): ?>
	<script type="text/javascript">
	blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.advcViewMoreToogleMouseOut();
	</script>
	<?php endif; ?>
	<?php if ($_SERVER['SCRIPT_NAME'] == ((is_array($_tmp=$this->_tpl_vars['this_path'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'advancesearch.php') : smarty_modifier_cat($_tmp, 'advancesearch.php')) && count ( $_GET )): ?>
	<center><a class="ebutton blue" style="text-decoration:none; margin-bottom: 30px;" href="<?php echo $this->_tpl_vars['this_path']; ?>
advancesearch.php"><?php echo smartyTranslate(array('s' => 'Réinitialiser ma recherche','mod' => 'blockadvancesearch_3'), $this);?>
</a></center>
	<?php endif; ?>
<?php if ($this->_tpl_vars['showSelection']): ?>
<script type="text/javascript">
$(document).ready(function() {
$('#advcCurSelection_<?php echo $this->_tpl_vars['duliq_id']; ?>
').html('');
$('#advcCurSelection_<?php echo $this->_tpl_vars['duliq_id']; ?>
').append('<span style="display:none" class="selected"><b><?php echo smartyTranslate(array('s' => 'Ma sélection','mod' => 'blockadvancesearch_3','js' => 1), $this);?>
</b></span>');
	<?php $_from = $this->_tpl_vars['selection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['advancesearchselection'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['advancesearchselection']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['advancesearchselection']['iteration']++;
?>
	<?php $this->assign('curUrl', $this->_tpl_vars['oAdvaceSearch']->getUrlWithMultipleSelect($this->_tpl_vars['item']['3'],$this->_tpl_vars['item']['0'],$this->_tpl_vars['SelectMulti'][$this->_tpl_vars['item']['3']])); ?>
		$('#advcCurSelection_<?php echo $this->_tpl_vars['duliq_id']; ?>
').append('<span class="userselected"><?php if (((is_array($_tmp='#^attr_#')) ? $this->_run_mod_handler('preg_match', true, $_tmp, $this->_tpl_vars['item']['3']) : preg_match($_tmp, $this->_tpl_vars['item']['3']))): ?><?php echo $this->_tpl_vars['item']['2']; ?>
 : <?php endif; ?><?php echo $this->_tpl_vars['item']['1']; ?>
<a href="<?php echo $this->_tpl_vars['curUrl']; ?>
">&nbsp;</a></span>');
	<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['full_ajax']): ?>
		blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.selectionAjaxMode();
		<?php endif; ?>
});
</script>
<?php endif; ?>

