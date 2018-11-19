<?php /* Smarty version 2.6.20, created on 2016-11-20 16:16:00
         compiled from /home/motokofr/public_html/themes/Earth/./wishlists-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 17, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 33, false),array('modifier', 'truncate', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 45, false),array('modifier', 'strip_tags', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 48, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 55, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 104, false),array('function', 'l', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 44, false),array('function', 'convertPrice', '/home/motokofr/public_html/themes/Earth/./wishlists-list.tpl', 60, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['products'] )): ?>
<!-- Wishlist list -->

<?php if ($this->_tpl_vars['p'] == 1): ?>
	<div class="rte">
	<p style="margin-bottom:-50px">Список хотелок — этакий блокнот. Сюда можно положить понравившиеся ништяки чтобы они не затерялись</p>
	</div>
<?php else: ?>
	<div style="margin-bottom:-60px;">&nbsp;</div>
<?php endif; ?>

<ul id="product_list" class="clear">

<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['products']['iteration']++;
?>

	<?php $this->assign('customer1', $this->_tpl_vars['product']['id_customer']); ?>	
	<?php $this->assign('id1', ((is_array($_tmp=$this->_tpl_vars['product']['id_customer'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']['id_product']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']['id_product']))); ?>
	<article itemscope itemtype="http://schema.org/Offer">	
	
	<?php if ($this->_tpl_vars['id1'] !== $this->_tpl_vars['id2']): ?> 

		<?php if ($this->_tpl_vars['customer1'] !== $this->_tpl_vars['customer2']): ?> <h2 style="margin-top:60px"><noindex>Байкер <?php echo $this->_tpl_vars['product']['firstname']; ?>
<?php if ($this->_tpl_vars['product']['other']): ?>, для <?php echo $this->_tpl_vars['product']['other']; ?>
<?php endif; ?>:</noindex></h2><?php endif; ?>
		
		<div id="out">
		<div id="in">
<?php if (@site_version == 'full'): ?>				
		<p id="background_pic">
				<img width="300px" height="300px" src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'home'); ?>
">
		</p>
<?php endif; ?>		
		<li class="ajax_block_product <?php if (($this->_foreach['products']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['products']['iteration'] == $this->_foreach['products']['total'])): ?>last_item<?php endif; ?> <?php if (($this->_foreach['products']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
			<div class="center_block">
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="product_img_link" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
					<?php if (@site_version == 'full'): ?>
						<img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'home'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
					<?php endif; ?>
					<?php if (@site_version == 'mobile'): ?>
						<img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'home'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
					<?php endif; ?>
				</a>
				<link itemprop="image" href="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image']); ?>
" />
				<link itemprop="url" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"/ >
				<!-- </a> -->
				<h3 itemprop="name"><?php if ($this->_tpl_vars['product']['new'] == 1): ?><span class="new"><?php echo smartyTranslate(array('s' => 'new'), $this);?>
</span><?php endif; ?>
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...') : smarty_modifier_truncate($_tmp, 150, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
				</h3>
				<p itemprop="description" class="product_desc">
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 360, '...') : smarty_modifier_truncate($_tmp, 360, '...')); ?>
</a>


<?php if (@site_version == 'mobile'): ?>				
<p class="product_desc">
	<?php if ($this->_tpl_vars['product']['on_sale']): ?>
		<span class="on_sale"><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</span>
			<?php elseif (( $this->_tpl_vars['product']['reduction_price'] != 0 || $this->_tpl_vars['product']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product']['reduction_from'] == $this->_tpl_vars['product']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']['reduction_from'] ) )): ?>
		<span class="discount">✸ УСПЕВАЙ! ✸</span>
	<?php endif; ?>
	
	<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
	<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>

		<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx'), $this);?>

		<?php endif; ?>
</p>	
<?php endif; ?>

	<meta itemprop="price" content="<?php echo $this->_tpl_vars['product']['price']; ?>
" />
	<meta itemprop="priceCurrency" content="USD" />
	
	<?php if ($this->_tpl_vars['priceDisplay']): ?>
	<p class="product_desc">
	<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_tax_exc']), $this);?>
</p><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
<?php endif; ?>
	</p>
	<?php endif; ?>
	
<?php endif; ?>
	</p>				
				
			<?php if ($this->_tpl_vars['product']['sales']): ?><br><div style="position: absolute;bottom: -2px; left: 135px;"><p class="product_desc">Этот ништяк уже есть у <?php echo $this->_tpl_vars['product']['sales']; ?>
 байкеров</p></div><?php endif; ?>


			</div>
<?php if (@site_version == 'full'): ?>
			<div class="right_block">
				<?php if ($this->_tpl_vars['product']['on_sale']): ?>
					<span class="on_sale"><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</span>
						<?php elseif (( $this->_tpl_vars['product']['reduction_price'] != 0 || $this->_tpl_vars['product']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product']['reduction_from'] == $this->_tpl_vars['product']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']['reduction_from'] ) )): ?>
					<span class="discount">✸ УСПЕВАЙ! ✸</span>
				<?php endif; ?>
				
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
				<div><span class="price" style="display: inline;"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
</span>
					<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx'), $this);?>

					<?php endif; ?></div>
				<?php endif; ?>
				
                <meta itemprop="price" content="<?php echo $this->_tpl_vars['product']['price']; ?>
" />
				<meta itemprop="priceCurrency" content="USD" />
				
				<?php if ($this->_tpl_vars['priceDisplay']): ?>
				<div>
				<span class="price" style="display: inline;"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_tax_exc']), $this);?>
</span><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
<?php endif; ?></div><?php endif; ?>
				<?php if (( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['quantity'] > 0 ) && $this->_tpl_vars['product']['customizable'] != 2): ?>
				<span class="align_center">
					<a class="ebutton green plist" rel="ajax_id_product_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
"><?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
</a>
				<?php else: ?>
				</span>
				<span class="ebutton inactive plist"><?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
</span>
				<?php endif; ?>
				
				<span class="align_center">
				<a href="javascript:;" class="ebutton orange plist" onclick="javascript:WishlistCart('wishlist_block_list', 'add', '<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
',0,1);">
				<?php echo smartyTranslate(array('s' => 'В список хотелок','mod' => 'blockwishlist'), $this);?>
</a>
				</span>				
				
								<div class="availability"><?php if (( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['quantity'] > 0 )): ?><?php echo smartyTranslate(array('s' => 'Available'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
<?php endif; ?></div>
			</div>
<?php endif; ?>			
			
</div>
</div>


			<br class="clear"/>
		</li>
<?php $this->assign('customer2', $this->_tpl_vars['customer1']); ?>	
<?php endif; ?>
<?php $this->assign('id2', $this->_tpl_vars['id1']); ?>		

		
	<?php endforeach; endif; unset($_from); ?>
	</ul>
	<!-- /Products list -->
<?php endif; ?>