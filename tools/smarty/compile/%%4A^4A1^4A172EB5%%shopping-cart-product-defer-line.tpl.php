<?php /* Smarty version 2.6.20, created on 2016-11-20 18:53:08
         compiled from /home/motokofr/public_html/themes/Earth/./shopping-cart-product-defer-line.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/./shopping-cart-product-defer-line.tpl', 13, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/./shopping-cart-product-defer-line.tpl', 24, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/./shopping-cart-product-defer-line.tpl', 45, false),array('function', 'convertPrice', '/home/motokofr/public_html/themes/Earth/./shopping-cart-product-defer-line.tpl', 26, false),)), $this); ?>
<div class="<?php if (($this->_foreach['product_defer']['iteration'] == $this->_foreach['product_defer']['total'])): ?>last_item<?php elseif (($this->_foreach['product_defer']['iteration'] <= 1)): ?>first_item<?php endif; ?><?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?>alternate_item<?php endif; ?> cart_item">

		<?php if ($this->_tpl_vars['product_defer']['active'] == 0 || $this->_tpl_vars['product_defer']['product_quantity'] == 0): ?>
			<div class="inactive">
				<p class="inactive">Этого ништяка сейчас нет на складе</br></br>
				</p>
			<div class="inactive-bg"></div></div>
		<?php endif; ?>
		
		
	<div  class="cart_product">
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product_defer']['id_product'],$this->_tpl_vars['product_defer']['link_rewrite'],$this->_tpl_vars['product_defer']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
		<img src="/img/p/<?php echo $this->_tpl_vars['product_defer']['id_product']; ?>
-<?php echo $this->_tpl_vars['product_defer']['id_image']; ?>
-home.jpg"></a>
	</div>
	
	
	<div class="cart_description">
		<h3><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product_defer']['id_product'],$this->_tpl_vars['product_defer']['link_rewrite'],$this->_tpl_vars['product_defer']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product_defer']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h3>
		<?php if ($this->_tpl_vars['product_defer']['attributes']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product_defer']['id_product'],$this->_tpl_vars['product_defer']['link_rewrite'],$this->_tpl_vars['product_defer']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product_defer']['attributes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a><?php endif; ?>
	</div>
	
	<div class="cart_total">
		<?php if (( $this->_tpl_vars['product_defer']['on_sale'] > 0 ) || ( $this->_tpl_vars['product_defer']['reduction_price'] != 0 || $this->_tpl_vars['product_defer']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product_defer']['reduction_from'] == $this->_tpl_vars['product_defer']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product_defer']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product_defer']['reduction_from'] ) )): ?>
			<?php $this->assign('final_price', $this->_tpl_vars['product_defer']['price']-$this->_tpl_vars['product_defer']['reduction_price']); ?>
			<span class="price" style="text-decoration: line-through; color:#aaa"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product_defer']['price']), $this);?>
</span><br>
			<span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['final_price']), $this);?>
</span>
		<?php else: ?>
			<span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product_defer']['price']), $this);?>
</span>
		<?php endif; ?>
		</span>
	</div>	
	



		
			
		<div class="defer">
			<form name="tocart_<?php echo $this->_tpl_vars['product_defer']['id_product']; ?>
" action="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php" method="post">
		
			<!-- hidden datas -->
			<p class="hidden">
				<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['static_token']; ?>
" />
				<input type="hidden" name="id_product" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product_defer']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" id="product_page_product_id" />
				<input type="hidden" name="add" value="1" />
				<input type="hidden" name="id_product_attribute" id="idCombination" value="" />
			</p>
				
			<span>
			<a style="color:#5d717e;" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?delete&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product_defer']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product_defer']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo ((is_array($_tmp=$this->_tpl_vars['product_defer']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
', $('#idCombination').val(), 1);">Удалить совсем</a>
			</span>		 

			<span style="color:#5d717e;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>

			<span>
		 	<a style="color:#5d717e;" type="submit" href="javascript:document.tocart_<?php echo $this->_tpl_vars['product_defer']['id_product']; ?>
.submit()" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo ((is_array($_tmp=$this->_tpl_vars['product_defer']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
', $('#idCombination').val(), 1);" name="Submit">Обратно в корзину</a>
			</span>

		</form>
	</div>	
</div>
