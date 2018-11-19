<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:57
         compiled from /home/motokofr/public_html/modules/blockspecials/blockspecials.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/blockspecials/blockspecials.tpl', 5, false),array('function', 'displayWtPrice', '/home/motokofr/public_html/modules/blockspecials/blockspecials.tpl', 15, false),array('modifier', 'escape', '/home/motokofr/public_html/modules/blockspecials/blockspecials.tpl', 10, false),array('modifier', 'truncate', '/home/motokofr/public_html/modules/blockspecials/blockspecials.tpl', 13, false),)), $this); ?>
<?php if (@site_version == 'full'): ?>
<!-- MODULE Block specials -->
	<?php if ($this->_tpl_vars['special']): ?>
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<h4><?php echo smartyTranslate(array('s' => 'Specials','mod' => 'blockspecials'), $this);?>
</h4>

	<div class="block_content">
		<ul class="products">
			<li class="product_image" style="line-height: 10pt">
				<a href="<?php echo $this->_tpl_vars['special']['link']; ?>
"><img style="border: solid 1px #AAA; border-radius: 5px;" src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['special']['link_rewrite'],$this->_tpl_vars['special']['id_image'],'medium'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" height="<?php echo $this->_tpl_vars['mediumSize']['height']; ?>
" width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
			</li>
			<li id="text">
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp) : smarty_modifier_truncate($_tmp)); ?>
</a>
				<br>
				<span style="text-decoration: line-through"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price_without_reduction']), $this);?>
</span><br>
				<?php if ($this->_tpl_vars['special']['reduction_percent']): ?><span class="reduction">(-<?php echo $this->_tpl_vars['special']['reduction_percent']; ?>
%)</span><?php endif; ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?><span class="price"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price']), $this);?>
</span><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx'), $this);?>
<?php endif; ?><?php endif; ?>
				<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?><br /><?php endif; ?>
				<?php if ($this->_tpl_vars['priceDisplay']): ?><span class="price"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price_tax_exc']), $this);?>
</span><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
<?php endif; ?><?php endif; ?>
			</li>
		</ul>
		<p>
			<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title="<?php echo smartyTranslate(array('s' => 'All specials','mod' => 'blockspecials'), $this);?>
" class="ebutton yellow"><?php echo smartyTranslate(array('s' => 'All specials','mod' => 'blockspecials'), $this);?>
</a>
		</p>
	</div>
</div>
		 <?php endif; ?>
<?php endif; ?>