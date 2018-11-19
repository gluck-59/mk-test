<?php /* Smarty version 2.6.20, created on 2016-11-21 20:56:48
         compiled from /home/motokofr/public_html/modules/blockwishlist/blockwishlist-ajax.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/motokofr/public_html/modules/blockwishlist/blockwishlist-ajax.tpl', 5, false),array('modifier', 'truncate', '/home/motokofr/public_html/modules/blockwishlist/blockwishlist-ajax.tpl', 5, false),array('function', 'l', '/home/motokofr/public_html/modules/blockwishlist/blockwishlist-ajax.tpl', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['products']): ?>
	<dl class="products" style="font-size:10px;<?php if ($this->_tpl_vars['products']): ?>border-bottom:1px solid #fff;margin:0 0 5px 0;padding:0 0 5px 0;<?php endif; ?>">
	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
		<dt class="<?php if (($this->_foreach['i']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['i']['iteration'] == $this->_foreach['i']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>" style="clear:both;margin:4px 0 4px 0;">
			<a style="font-weight:normal" class="cart_block_product_name" href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite']); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" style="font-weight:bold;"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, '...') : smarty_modifier_truncate($_tmp, 100, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
		</dt>
		<?php if (isset ( $this->_tpl_vars['product']['attributes_small'] )): ?>
		<dd class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>" style="font-style:italic;margin:0 0 0 10px;">
		</dd>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</dl>
<?php else: ?>
	<dl class="products" style="font-size:10px;border-bottom:1px solid #fff;margin:0 0 5px 0;padding:0 0 5px 0;">
	<?php if ($this->_tpl_vars['error']): ?>
		<dt><?php echo smartyTranslate(array('s' => 'You must create a wishlist before adding products','mod' => 'blockwishlist'), $this);?>
</dt>
		<dt style="text-align:center"><a style="text-align:center" class="ebutton blue" href="/modules/blockwishlist/mywishlist.php">Создать</a></dt>				
	<?php else: ?>
			
		<dt><?php echo smartyTranslate(array('s' => 'У тебя еще нет списка хотелок','mod' => 'blockwishlist'), $this);?>
</dt>
		
	<?php endif; ?>
	</dl>
<?php endif; ?>