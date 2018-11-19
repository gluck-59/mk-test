<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:59
         compiled from /home/motokofr/public_html/modules/blockwishlist/blockwishlist-extra.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', '/home/motokofr/public_html/modules/blockwishlist/blockwishlist-extra.tpl', 4, false),array('function', 'l', '/home/motokofr/public_html/modules/blockwishlist/blockwishlist-extra.tpl', 5, false),)), $this); ?>
<!-- add to wishlist -->
<?php if (@site_version == 'full'): ?>
<p class="align_center">
<a href="javascript:;" class="ebutton orange" onclick="javascript:WishlistCart('wishlist_block_list', 'add', '<?php echo ((is_array($_tmp=$this->_tpl_vars['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value);">
<?php echo smartyTranslate(array('s' => 'Add to my wishlist','mod' => 'blockwishlist'), $this);?>
</a>
</p>
<?php endif; ?>
<?php if (@site_version == 'mobile'): ?>
<span id="add_to_wishlist">
<a href="javascript:;" class="ebutton orange" onclick="javascript:WishlistCart('wishlist_block_list', 'add', '<?php echo ((is_array($_tmp=$this->_tpl_vars['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value);">
<?php echo smartyTranslate(array('s' => 'Add to my wishlist','mod' => 'blockwishlist'), $this);?>
</a>
</span>
<?php endif; ?>