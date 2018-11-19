<?php /* Smarty version 2.6.20, created on 2016-11-20 12:41:01
         compiled from /home/motokofr/public_html/themes/Earth/./product-sort.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/./product-sort.tpl', 3, false),array('function', 'l', '/home/motokofr/public_html/themes/Earth/./product-sort.tpl', 22, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['orderby'] ) && isset ( $this->_tpl_vars['orderway'] )): ?>
<!-- Sort products -->
<?php if (((is_array($_tmp=$_GET['id_category'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink('category',$this->_tpl_vars['category'],false,true)); ?>
<?php elseif (((is_array($_tmp=$_GET['id_manufacturer'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink('manufacturer',$this->_tpl_vars['manufacturer'],false,true)); ?>
<?php elseif (((is_array($_tmp=$_GET['id_supplier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink('supplier',$this->_tpl_vars['supplier'],false,true)); ?>
<?php else: ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink(false,false,false,true)); ?>
<?php endif; ?>


	<!--p class="select" id="productsSortForm">
		<?php if ($this->_tpl_vars['full_ajax']): ?>
		<select id="selectPrductSort" onchange="blockAdvanceSearch_<?php echo $this->_tpl_vars['duliq_id']; ?>
.advcLoadUrl($(this).val());">
		<?php else: ?>
		<select id="selectPrductSort" onchange="document.location.href = $(this).val();">
		<?php endif; ?>
					<option value="<?php echo $this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'position','desc'); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'position' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => '--'), $this);?>
</option>
			<option value="<?php echo $this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'price','asc'); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'price' && $this->_tpl_vars['orderway'] == 'ASC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'price: lowest first'), $this);?>
</option>
			<option value="<?php echo $this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'price','desc'); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'price' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'price: highest first'), $this);?>
</option>
			<option value="<?php echo $this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'name','asc'); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'name' && $this->_tpl_vars['orderway'] == 'ASC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'name: A to Z'), $this);?>
</option>
			<option value="<?php echo $this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'name','desc'); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'name' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'name: Z to A'), $this);?>
</option>
			<option value="<?php echo $this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'quantity','desc'); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'quantity' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'in-stock first'), $this);?>
</option>
		</select>
		<label for="selectPrductSort"><?php echo smartyTranslate(array('s' => 'sort by'), $this);?>
</label>

<?php if (isset ( $this->_tpl_vars['query'] ) && $this->_tpl_vars['query']): ?><input type="hidden" name="search_query" value="<?php echo $this->_tpl_vars['query']; ?>
" /><?php endif; ?>

	</p>
<!-- /Sort products -->
<?php endif; ?>