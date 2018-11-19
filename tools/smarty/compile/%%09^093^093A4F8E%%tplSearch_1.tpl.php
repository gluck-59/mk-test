<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:57
         compiled from /home/motokofr/public_html/modules/blockadvancesearch_3/tplSearch_1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', '/home/motokofr/public_html/modules/blockadvancesearch_3/tplSearch_1.tpl', 2, false),array('function', 'l', '/home/motokofr/public_html/modules/blockadvancesearch_3/tplSearch_1.tpl', 31, false),array('modifier', 'cat', '/home/motokofr/public_html/modules/blockadvancesearch_3/tplSearch_1.tpl', 15, false),)), $this); ?>
<ul class="<?php if ($this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['k']]['is_color_group'] && count ( $this->_tpl_vars['advancedsearch_value'][$this->_tpl_vars['k']] )): ?>color_picker_advc<?php else: ?>bullet<?php endif; ?> advcSearchList">
<?php echo smarty_function_counter(array('start' => 1,'skip' => 1,'print' => false,'assign' => 'curVisible'), $this);?>

<?php $this->assign('curMaxVisible', $this->_tpl_vars['maxVisible'][$this->_tpl_vars['k']]); ?>
<?php if ($this->_tpl_vars['k'] == 'category' && isset ( $_GET['id_category'] ) && $this->_tpl_vars['filterCat']): ?>
	<?php $this->assign('curKey', 'id_category'); ?>
<?php elseif ($this->_tpl_vars['k'] == 'manufacturer' && isset ( $_GET['id_manufacturer'] ) && $this->_tpl_vars['filterCat']): ?>
	<?php $this->assign('curKey', 'id_manufacturer'); ?>
<?php elseif ($this->_tpl_vars['k'] == 'supplier' && isset ( $_GET['id_supplier'] ) && $this->_tpl_vars['filterCat']): ?>
	<?php $this->assign('curKey', 'id_supplier'); ?>
<?php else: ?>
	<?php $this->assign('curKey', $this->_tpl_vars['k']); ?>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['advancedsearch_value'][$this->_tpl_vars['k']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['advancesearchvalue'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['advancesearchvalue']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['advancesearchvalue']['iteration']++;
?>
	<?php $this->assign('isSelect', $this->_tpl_vars['oAdvaceSearch']->isSelected($_GET[$this->_tpl_vars['curKey']],$this->_tpl_vars['item']['0'])); ?>
	<li ident="<?php if (! $this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['k']]['is_color_group']): ?><?php echo $this->_tpl_vars['item']['0']; ?>
<?php endif; ?>" title="<?php if (! $this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['k']]['is_color_group']): ?><?php echo $this->_tpl_vars['item']['1']; ?>
<?php endif; ?>" style="<?php if ($this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['k']]['is_color_group']): ?>background:<?php echo $this->_tpl_vars['item']['color']; ?>
<?php if (file_exists ( ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['col_img_dir'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['0']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['0'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.jpg') : smarty_modifier_cat($_tmp, '.jpg')) )): ?> url(<?php echo $this->_tpl_vars['img_col_dir']; ?>
<?php echo $this->_tpl_vars['item']['0']; ?>
.jpg)<?php endif; ?>;<?php endif; ?>" class="<?php if ($this->_tpl_vars['curMaxVisible'] && $this->_tpl_vars['curVisible'] > $this->_tpl_vars['curMaxVisible']): ?>advcHideCrit<?php endif; ?><?php if ($this->_tpl_vars['item']['2'] <= 0 && ! $this->_tpl_vars['isSelect']): ?> advcCritNotResult<?php endif; ?><?php if ($this->_tpl_vars['isSelect'] && ! $this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['k']]['is_color_group']): ?> advcSelected<?php endif; ?><?php if ($this->_tpl_vars['isSelect']): ?> advcDelete<?php endif; ?>">
	<?php if ($this->_tpl_vars['item']['2'] > 0 || $this->_tpl_vars['isSelect']): ?>
	<a href="<?php echo $this->_tpl_vars['oAdvaceSearch']->getUrlWithMultipleSelect($this->_tpl_vars['k'],$this->_tpl_vars['item']['0'],$this->_tpl_vars['SelectMulti'][$this->_tpl_vars['k']]); ?>
"><?php endif; ?><?php if (! $this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['k']]['is_color_group']): ?><?php echo $this->_tpl_vars['item']['1']; ?>

	
	<?php if ($this->_tpl_vars['displayNbProduct']): ?> <span class="advancedsearch"><?php echo $this->_tpl_vars['item']['2']; ?>
</span><?php endif; ?>
	
	<?php else: ?><?php if ($this->_tpl_vars['isSelect']): ?><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="" /><?php endif; ?><?php endif; ?><?php if ($this->_tpl_vars['item']['2'] > 0 || $this->_tpl_vars['isSelect']): ?></a><?php endif; ?>
	<?php if ($this->_tpl_vars['submitMode'] == 2 && $this->_tpl_vars['isSelect']): ?><input type="hidden" name="<?php echo $this->_tpl_vars['k']; ?>
<?php if ($this->_tpl_vars['SelectMulti'][$this->_tpl_vars['k']]): ?>[]<?php endif; ?>" value="<?php echo $this->_tpl_vars['item']['0']; ?>
" /><?php endif; ?>
	
	</li>
	<?php if (! ($this->_foreach['advancesearchvalue']['iteration'] == $this->_foreach['advancesearchvalue']['total'])): ?>
	<?php echo smarty_function_counter(array(), $this);?>

	<?php endif; ?>
<?php endforeach; else: ?>
<?php if ($this->_tpl_vars['stepMode']): ?>
		<?php if (! isset ( $_GET[$this->_tpl_vars['prevK']] ) || empty ( $_GET[$this->_tpl_vars['prevK']] )): ?>
			<li class="advcStepPrevChoose"><?php echo smartyTranslate(array('s' => 'Veuillez choisir','mod' => 'blockadvancesearch_3'), $this);?>
 <?php echo $this->_tpl_vars['advancedsearch_label'][$this->_tpl_vars['prevK']]['name']; ?>
</li>
		<?php else: ?>
			<li class="advcNoChoice"><?php echo smartyTranslate(array('s' => 'Aucune proposition','mod' => 'blockadvancesearch_3'), $this);?>
</li>
		<?php endif; ?>

<?php else: ?>
			<li class="advcNoChoice"><?php echo smartyTranslate(array('s' => 'Aucune proposition','mod' => 'blockadvancesearch_3'), $this);?>
</li>
<?php endif; ?>
<?php endif; unset($_from); ?>
</ul>

<?php if ($this->_tpl_vars['curMaxVisible'] && $this->_tpl_vars['curVisible'] > $this->_tpl_vars['curMaxVisible']): ?>
<noindex>
<span class="advcViewMoreToogle" id="tablet">Длинный тап раскрывает список</span>
<span class="advcViewMoreToogle" id="desktop">Наведи мышь на список</span>
</noindex>

<?php endif; ?>
<div class="clear"></div>
