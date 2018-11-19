<?php /* Smarty version 2.6.20, created on 2016-11-20 21:08:24
         compiled from /home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 4, false),array('function', 'declension', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 36, false),array('function', 'convertPrice', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 55, false),array('modifier', 'escape', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 29, false),array('modifier', 'truncate', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 40, false),array('modifier', 'strip_tags', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 44, false),array('modifier', 'date_format', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 53, false),array('modifier', 'intval', '/home/motokofr/public_html/modules/blockwishlist/managewishlist.tpl', 65, false),)), $this); ?>
<?php if ($this->_tpl_vars['products']): ?>

	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
	<a href="<?php echo $this->_tpl_vars['link']->getProductlink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'Product detail','mod' => 'blockwishlist'), $this);?>
">
	<div class="wishlist <?php if (($this->_foreach['i']['iteration']-1) % 2): ?>alternate_<?php endif; ?>item" id="wlp_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
">
		<div id="out">
			<div id="in">
				<ul id="product_list" class="clear">
		
														
				<?php if (@site_version == 'full'): ?>			
				<p id="background_pic">
				<img width="300px" height="300px" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-home.jpg">
				</p>
				<?php endif; ?>		
			
		
				<li class="ajax_block_product <?php if (($this->_foreach['products']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['products']['iteration'] == $this->_foreach['products']['total'])): ?>last_item<?php endif; ?> <?php if (($this->_foreach['products']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
				<div class="center_block">
					<a href="<?php echo $this->_tpl_vars['link']->getProductlink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite']); ?>
" class="product_img_link" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
                        <?php if (@site_version == 'full'): ?>									
						<img  width="129px" height="129px" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-home.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
						<?php else: ?>
						<img  width="200px" height="200px" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-large.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />						
						<?php endif; ?>
						<?php if ($this->_tpl_vars['product']['new'] == 1): ?><div title="Этот ништяк был недавно обновлен" class="new"><?php echo smartyTranslate(array('s' => 'new'), $this);?>
</div><?php endif; ?>
						<?php if ($this->_tpl_vars['product']['hot'] == 1): ?><div title="Этот ништяк уже есть у <?php echo $this->_tpl_vars['product']['sales']; ?>
 <?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['sales'],'expressions' => "байкера,байкеров,байкеров"), $this);?>
"class="hot"><?php echo smartyTranslate(array('s' => 'hot'), $this);?>
</div><?php endif; ?>
					</a>
				
					<h3>
					<a href="<?php echo $this->_tpl_vars['link']->getProductlink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite']); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, '...') : smarty_modifier_truncate($_tmp, 80, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
					</h3>
	
					<p itemprop="description" class="product_desc">
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...') : smarty_modifier_truncate($_tmp, 150, '...')); ?>

					</a>
					</p>				
					<?php if ($this->_tpl_vars['product']['sales']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><div class="product_sales"><p class="product_desc">Этот ништяк уже есть у <?php echo $this->_tpl_vars['product']['sales']; ?>
 <?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['product']['sales'],'expressions' => "байкера,байкеров,байкеров"), $this);?>
</p></a></div><?php endif; ?>
				</div>

									<div class="right_block">
						<?php if ($this->_tpl_vars['product']['active'] > 0 && $this->_tpl_vars['product']['product_quantity'] > 0): ?>
						<?php if (( $this->_tpl_vars['product']['on_sale'] > 0 ) || ( $this->_tpl_vars['product']['reduction_price'] != 0 || $this->_tpl_vars['product']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product']['reduction_from'] == $this->_tpl_vars['product']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']['reduction_from'] ) )): ?>
						<?php $this->assign('final_price', $this->_tpl_vars['product']['price']-$this->_tpl_vars['product']['reduction_price']); ?>
							<span id="old_price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
</span>
							<span class="price" style=""><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['final_price']), $this);?>
</span>
						<?php else: ?>
							<span class="price" style=""><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
</span>
						<?php endif; ?><?php endif; ?>


				
								<!--<?php echo smartyTranslate(array('s' => 'Quantity','mod' => 'blockwishlist'), $this);?>
: -->
				<input hidden type="number" size="10px" min="1" max="10" step="1" value="1" id="quantity_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" size="4pt" />
				<!--<?php echo smartyTranslate(array('s' => 'Priority','mod' => 'blockwishlist'), $this);?>
: -->
				<select hidden id="priority_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
">
					<option value="0"<?php if ($this->_tpl_vars['product']['priority'] == 0): ?> selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'High','mod' => 'blockwishlist'), $this);?>
</option>
					<option value="1"<?php if ($this->_tpl_vars['product']['priority'] == 1): ?> selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'Medium','mod' => 'blockwishlist'), $this);?>
</option>
					<option value="2"<?php if ($this->_tpl_vars['product']['priority'] == 2): ?> selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'Low','mod' => 'blockwishlist'), $this);?>
</option>
				</select>
				
				<!--span class="align_center">
				<a href="javascript:;" class="ebutton orange" onclick="WishlistProductManage('wlp_bought_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
', 'update', '<?php echo $this->_tpl_vars['id_wishlist']; ?>
', '<?php echo $this->_tpl_vars['product']['id_product']; ?>
', '<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
', $('#quantity_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
').val(), $('#priority_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
').val());" title="<?php echo smartyTranslate(array('s' => 'Save','mod' => 'blockwishlist'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Save','mod' => 'blockwishlist'), $this);?>
</a>
				</span-->
	
				<span class="align_center">
				<?php if ($this->_tpl_vars['product']['active'] == 0 || $this->_tpl_vars['product']['product_quantity'] == 0): ?>
				<a class="ebutton inactive plist" href="javascript:;">Нет на складе</a>				
				<?php else: ?>
				<a class="ebutton green plist" rel="ajax_id_product_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
"><?php echo smartyTranslate(array('s' => 'В корзину'), $this);?>
</a>
				<?php endif; ?>
				</span>
				
				<span class="align_center">
				<a href="javascript:;" class="ebutton red plist" onclick="WishlistProductManage('wlp_bought', 'delete', '<?php echo $this->_tpl_vars['id_wishlist']; ?>
', '<?php echo $this->_tpl_vars['product']['id_product']; ?>
', '<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
', $('#quantity_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
').val(), $('#priority_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
').val());" title="<?php echo smartyTranslate(array('s' => 'Delete','mod' => 'blockwishlist'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Delete','mod' => 'blockwishlist'), $this);?>
</a>
				</span>

							</div>

</div>
</div>

<br class="clear"/>
	</li>
	</a>
		</div>

	<?php endforeach; endif; unset($_from); ?>
	
	
	
	<div class="clear"></div>
	<br />

	<?php if (! $this->_tpl_vars['refresh']): ?>
			<div id="sendtofriend">
	<p align="center"><a href="javascript:;" id="showSendWishlist" class="ebutton blue" onclick="WishlistVisibility('wl_send', 'SendWishlist');"><?php echo smartyTranslate(array('s' => 'Send this wishlist','mod' => 'blockwishlist'), $this);?>
</a>
	<a href="javascript:;" id="hideSendWishlist" class="ebutton blue" onclick="WishlistVisibility('wl_send', 'SendWishlist');"><?php echo smartyTranslate(array('s' => 'Close send this wishlist','mod' => 'blockwishlist'), $this);?>
</a>
	</p></div>


	<form class="wl_send std hidden" method="post" onsubmit="return (false);">
		<fieldset>
			<p class="required">
<!--[if IE]><label for="email1">E-mail друга</label><![endif]-->
				<input required placeholder="E-mail друга" type="email" name="email1" id="email1" />
				<input style="font-size: 10pt; height: 27px; " class="ebutton blue" type="submit" value="<?php echo smartyTranslate(array('s' => 'Send','mod' => 'blockwishlist'), $this);?>
" name="submitWishlist" onclick="WishlistSend('wl_send', '<?php echo $this->_tpl_vars['id_wishlist']; ?>
', 'email');" />
<!--[if IE]><sup>*</sup><![endif]-->
			</p>
<!-- 			<p class="submit" style="margin-left:9.5em">
				<input class="button" type="submit" value="<?php echo smartyTranslate(array('s' => 'Send','mod' => 'blockwishlist'), $this);?>
" name="submitWishlist" onclick="WishlistSend('wl_send', '<?php echo $this->_tpl_vars['id_wishlist']; ?>
', 'email');" />
			</p>
-->
		</fieldset>
	</form>
	<?php if (count ( $this->_tpl_vars['productsBoughts'] )): ?>
	<table class="wlp_bought_infos hidden std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s' => 'Product','mod' => 'blockwishlist'), $this);?>
</td>
				<th class="item"><?php echo smartyTranslate(array('s' => 'Quantity','mod' => 'blockwishlist'), $this);?>
</td>
				<th class="item"><?php echo smartyTranslate(array('s' => 'Offered by','mod' => 'blockwishlist'), $this);?>
</td>
				<th class="last_item"><?php echo smartyTranslate(array('s' => 'Date','mod' => 'blockwishlist'), $this);?>
</td>
			</tr>
		</thead>
		<tbody>
		<?php $_from = $this->_tpl_vars['productsBoughts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
			<?php $_from = $this->_tpl_vars['product']['bought']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['j'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['j']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['bought']):
        $this->_foreach['j']['iteration']++;
?>
			<?php if ($this->_tpl_vars['bought']['quantity'] > 0): ?>
				<tr>
					<td class="first_item">
					<span style="float:left;"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-small.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></span>
					<span style="float:left;"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

					<?php if (isset ( $this->_tpl_vars['product']['attributes_small'] )): ?>
						<br /><i><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes_small'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</i>
					<?php endif; ?></span>
					</td>
					<td class="item align_center"><?php echo ((is_array($_tmp=$this->_tpl_vars['bought']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</td>
					<td class="item align_center"><?php echo $this->_tpl_vars['bought']['firstname']; ?>
 <?php echo $this->_tpl_vars['bought']['lastname']; ?>
</td>
					<td class="last_item align_center"><?php echo ((is_array($_tmp=$this->_tpl_vars['bought']['date_add'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
				</tr>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
	<?php endif; ?>
	<?php endif; ?>
<?php else: ?>
	<?php echo smartyTranslate(array('s' => 'No products','mod' => 'blockwishlist'), $this);?>

<?php endif; ?>