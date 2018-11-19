<?php /* Smarty version 2.6.20, created on 2018-07-02 20:33:46
         compiled from /home/motokofr/public_html/themes/Earth/shopping-cart.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/shopping-cart.tpl', 7, false),array('function', 'declension', '/home/motokofr/public_html/themes/Earth/shopping-cart.tpl', 24, false),array('function', 'convertPrice', '/home/motokofr/public_html/themes/Earth/shopping-cart.tpl', 63, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/shopping-cart.tpl', 19, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/shopping-cart.tpl', 187, false),array('modifier', 'replace', '/home/motokofr/public_html/themes/Earth/shopping-cart.tpl', 241, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your shopping cart'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('preload', "/order.php?step=1"); ?>


<!-- shopping-cart -->
<?php $this->assign('current_step', 'summary'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (isset ( $this->_tpl_vars['empty'] )): ?>
	<p class="warning">Твой кофр пока пуст.<br>Положи в него что-нибудь.</p>
    <p class="cart_navigation" align="center">	
		<a href="<?php if ($_SERVER['HTTP_REFERER'] && strstr ( $_SERVER['HTTP_REFERER'] , 'order.php' )): ?><?php echo $this->_tpl_vars['base_dir']; ?>
index.php<?php else: ?><?php echo ((is_array($_tmp=$_SERVER['HTTP_REFERER'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" class="ebutton blue large" style="width: 165px;" title="<?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
">&laquo;&nbsp;&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
</a>
	</p>
<?php else: ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2><?php echo smartyTranslate(array('s' => 'Shopping cart summary'), $this);?>
 <?php if (! isset ( $this->_tpl_vars['empty'] )): ?>: <?php echo $this->_tpl_vars['productNumber']; ?>
 <?php echo smarty_function_declension(array('nb' => ($this->_tpl_vars['productNumber']),'expressions' => "ништяк,ништяка,ништяков"), $this);?>
<?php endif; ?></h2>

<?php if (isset ( $this->_tpl_vars['lastProductAdded'] ) && $this->_tpl_vars['lastProductAdded']): ?>
	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
		<?php if ($this->_tpl_vars['product']['id_product'] == $this->_tpl_vars['lastProductAdded']['id_product'] && ( ! $this->_tpl_vars['product']['id_product_attribute'] || ( $this->_tpl_vars['product']['id_product_attribute'] == $this->_tpl_vars['lastProductAdded']['id_product_attribute'] ) )): ?>
			<table class="std cart_last_product">
				<thead>
					<tr>
						<th class="cart_product first_item">&nbsp;</th>
						<th class="cart_description item"><?php echo smartyTranslate(array('s' => 'Last added product'), $this);?>
</th>
						<th class="cart_total last_item">&nbsp;</th>
					</tr>
				</thead>
			</table>
			<table class="cart_last_product_content">
				<tr>
					<td class="cart_product"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'small'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></td>
					<td class="cart_description">
						<h5><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h5>
						<?php if ($this->_tpl_vars['product']['attributes']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a><?php endif; ?>
					</td>
				</tr>
			</table>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>




<div id="order-detail-content" class="table_block">
	<table id="cart_summary" class="std">
		<tfoot style="line-height: 0pt;">
			<?php if ($this->_tpl_vars['priceDisplay']): ?>
				<tr class="cart_price">
					<td><?php echo smartyTranslate(array('s' => 'Total products (tax excl.):'), $this);?>
&nbsp;</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_products']), $this);?>
</td>
				</tr>
			<?php endif; ?>
			<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
				<tr class="cart_price">
    				<td style="float: left; padding-left: 0;"><a href="/cms.php?id_cms=2" target="_blank">Условия возврата и обмена</a></td>
					<td><?php echo smartyTranslate(array('s' => 'Total products (tax incl.):'), $this);?>
&nbsp;</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_products_wt']), $this);?>
</td>
				</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['total_discounts'] != 0): ?>
				<?php if ($this->_tpl_vars['priceDisplay']): ?>
					<tr class="cart_total_voucher">
    					<td></td>
						<td><?php echo smartyTranslate(array('s' => 'Total vouchers (tax excl.):'), $this);?>
&nbsp;</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_discounts_tax_exc']), $this);?>
</td>
					</tr>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<tr class="cart_total_voucher">
    					<td></td>
						<td><?php echo smartyTranslate(array('s' => 'Total vouchers (tax incl.):'), $this);?>
&nbsp;</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_discounts']), $this);?>
</td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['total_wrapping'] > 0): ?>
				<?php if ($this->_tpl_vars['priceDisplay']): ?>
					<tr class="cart_total_voucher">
    					<td></td>
						<td><?php echo smartyTranslate(array('s' => 'Total gift-wrapping (tax excl.):'), $this);?>
&nbsp;</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_wrapping_tax_exc']), $this);?>
</td>
					</tr>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<tr class="cart_total_voucher">
    					<td></td>
						<td><?php echo smartyTranslate(array('s' => 'Total gift-wrapping (tax incl.):'), $this);?>
&nbsp;</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_wrapping']), $this);?>
</td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
			
				<?php if ($this->_tpl_vars['priceDisplay']): ?>
					<tr class="cart_total_delivery">
    					<td></td>
						<td><?php echo smartyTranslate(array('s' => 'Total shipping (tax excl.):'), $this);?>
&nbsp;</td>
						<td class="price">
							<?php if ($this->_tpl_vars['shippingCost'] > 0): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['shippingCostTaxExc']), $this);?>

							<?php else: ?><?php echo smartyTranslate(array('s' => 'бесплатно'), $this);?>
<?php endif; ?>
						</td>
					</tr>
				<?php endif; ?>
				
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<tr class="cart_total_delivery">
    					<td></td>
						<td><?php echo smartyTranslate(array('s' => 'Total shipping (tax incl.):'), $this);?>
&nbsp;</td>
						<td class="price">
							<?php if ($this->_tpl_vars['shippingCost'] > 0): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['shippingCost']), $this);?>

							<?php else: ?><?php echo smartyTranslate(array('s' => 'бесплатно'), $this);?>
<?php endif; ?>
						</td>
					</tr>
				<?php endif; ?>
			
			<?php if ($this->_tpl_vars['priceDisplay']): ?>
				<tr class="cart_total_price">
    				<td></td>
					<td ><?php echo smartyTranslate(array('s' => 'Total (tax excl.):'), $this);?>
&nbsp;</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_price_without_tax']), $this);?>
</td>
				</tr>
				<tr class="cart_total_voucher">
    				<td></td>
					<td ><?php echo smartyTranslate(array('s' => 'Total tax:'), $this);?>
&nbsp;</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_tax']), $this);?>
</td>
				</tr>
			<?php endif; ?>
			<tr class="cart_total_price">
    			<td></td>
				<td ><?php echo smartyTranslate(array('s' => 'Total (tax incl.):'), $this);?>
&nbsp;</td>
				<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_price']), $this);?>
</td>
			</tr>
			<?php if ($this->_tpl_vars['free_ship'] > 0): ?>
			<tr class="cart_free_shipping">
    			<td></td>
				<td style="white-space: normal;"><?php echo smartyTranslate(array('s' => 'Remaining amount to be added to your cart in order to obtain free shipping:'), $this);?>
&nbsp;</td>
				<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['free_ship']), $this);?>
</td>
			</tr>
			<?php endif; ?>
		</tfoot>
		
		
		
		
		
		
		
		
		<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['productLoop']['iteration']++;
?>
			<?php $this->assign('productId', $this->_tpl_vars['product']['id_product']); ?>
			<?php $this->assign('productAttributeId', $this->_tpl_vars['product']['id_product_attribute']); ?>
			<?php $this->assign('quantityDisplayed', 0); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./shopping-cart-product-line.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?>
				<?php $_from = $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_customization'] => $this->_tpl_vars['customization']):
?>
					<tr class="alternate_item cart_item">
						<td colspan="5">
							<?php $_from = $this->_tpl_vars['customization']['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['datas']):
?>
								<?php if ($this->_tpl_vars['type'] == $this->_tpl_vars['CUSTOMIZE_FILE']): ?>
									<div class="customizationUploaded">
										<ul class="customizationUploaded">
											<?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picture']):
?><li><img src="<?php echo $this->_tpl_vars['pic_dir']; ?>
<?php echo $this->_tpl_vars['picture']['value']; ?>
_small" alt="" class="customizationUploaded" /></li><?php endforeach; endif; unset($_from); ?>
										</ul>
									</div>
								<?php elseif ($this->_tpl_vars['type'] == $this->_tpl_vars['CUSTOMIZE_TEXTFIELD']): ?>
									<ul class="typedText">
										<?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['typedText'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['typedText']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['textField']):
        $this->_foreach['typedText']['iteration']++;
?><li><?php echo smartyTranslate(array('s' => 'Text #'), $this);?>
<?php echo ($this->_foreach['typedText']['iteration']-1)+1; ?>
<?php echo smartyTranslate(array('s' => ':'), $this);?>
 <?php echo $this->_tpl_vars['textField']['value']; ?>
</li><?php endforeach; endif; unset($_from); ?>
									</ul>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</td>
						<td class="cart_quantity">
							<a class="cart_quantity_delete" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?delete&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;id_customization=<?php echo $this->_tpl_vars['id_customization']; ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Delete this customization'), $this);?>
" class="icon" /></a>
							<p><?php echo $this->_tpl_vars['customization']['quantity']; ?>
</p>
							<a class="cart_quantity_up" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;id_customization=<?php echo $this->_tpl_vars['id_customization']; ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_up.gif" alt="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" /></a><br />
							<a class="cart_quantity_down" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;id_customization=<?php echo $this->_tpl_vars['id_customization']; ?>
&amp;op=down&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Substract'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s' => 'Substract'), $this);?>
" /></a>
						</td>
						<td class="cart_total"></td>
					</tr>
					<?php $this->assign('quantityDisplayed', $this->_tpl_vars['quantityDisplayed']+$this->_tpl_vars['customization']['quantity']); ?>
				<?php endforeach; endif; unset($_from); ?>
								<?php if ($this->_tpl_vars['product']['quantity']-$this->_tpl_vars['quantityDisplayed'] > 0): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./shopping-cart-product-line.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>




	<?php if ($this->_tpl_vars['discounts']): ?>
		<?php $_from = $this->_tpl_vars['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['discountLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['discountLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['discount']):
        $this->_foreach['discountLoop']['iteration']++;
?>
			<div class="cart_discount <?php if (($this->_foreach['discountLoop']['iteration'] == $this->_foreach['discountLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['discountLoop']['iteration'] <= 1)): ?>first_item<?php else: ?>item<?php endif; ?>">

				<div class="cart_discount_delete">
					<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?deleteDiscount=<?php echo $this->_tpl_vars['discount']['id_discount']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
">
				
					<?php if (@site_version == 'full'): ?>
						<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" class="icon" />
					<?php endif; ?>				
					<?php if (@site_version == 'mobile'): ?>
						<div class="cart_delete">&nbsp;&nbsp;&nbsp;</div>
					<?php endif; ?>				
				</a></div>

				<div class="cart_discount_price">
					<span class="price-discount">
					<?php if ($this->_tpl_vars['discount']['value_real'] > 0): ?>
						<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['discount']['value_real']*-1), $this);?>
<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx'), $this);?>
<br /><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['priceDisplay']): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['discount']['value_tax_exc']*-1), $this);?>
<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
<?php endif; ?><?php endif; ?>
					<?php endif; ?>
				</span></div>
				<div class="cart_discount_description">"<?php echo $this->_tpl_vars['discount']['description']; ?>
"</div>
				<div class="cart_discount_name">Купон <?php echo $this->_tpl_vars['discount']['name']; ?>
</div>

			</div>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>





	</table>
</div>


<?php if (((is_array($_tmp=$this->_tpl_vars['total_price'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')) >= $this->_tpl_vars['notax']): ?>
	<?php $this->assign('overprice', $this->_tpl_vars['total_price']-$this->_tpl_vars['notax']); ?>
	<?php $this->assign('customs', $this->_tpl_vars['overprice']*0.3); ?>
	
	<div id="ajax_tax">
    <h2>Внимание, растаможка!</h2>
		<div class="rte">
		<p style="color: red"> 
			<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/import-taxes.png" style="float:left; margin:-10px 20px 0px 0px">
			С 1 июля 2018 в России посылки стоимостью выше <?php echo $this->_tpl_vars['porog']; ?>
 &euro; облагаются ввозной пошлиной.<br> Стоимость доставки — считается!<br><br>
			Приблизительный  размер пошлины для этой посылки — <strong><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['customs']), $this);?>
</strong>. Пошлина оплачивается на месте при получении посылки.
		</p>
		<br>
		<p>Если ты согласен оплатить пошлину, ты сможешь сделать это на своей почте при получении посылки.</p> 
		<p>Если нет — убери какой-нибудь товар, чтобы общая стоимость посылки <strong> не превысила <nobr><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['notax']), $this);?>
</nobr></strong> с небольшим запасом на случай колебания курса евро.
		</p>
		<br><br>
		</div>
	</div>
<?php endif; ?>

<?php echo $this->_tpl_vars['HOOK_SHOPPING_CART']; ?>

<?php if (( $this->_tpl_vars['carrier']->id && ! $this->_tpl_vars['virtualCart'] ) || $this->_tpl_vars['delivery']->id || $this->_tpl_vars['invoice']->id): ?>
<div class="order_delivery; hidden">
	<?php if ($this->_tpl_vars['delivery']->id): ?>
	<ul id="delivery_address" class="address item">
		<li class="address_title"><?php echo smartyTranslate(array('s' => 'Delivery address'), $this);?>
</li>
		<?php if ($this->_tpl_vars['delivery']->company): ?><li class="address_company"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_address1"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<?php if ($this->_tpl_vars['delivery']->address2): ?><li class="address_address2"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_city"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_country"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	</ul>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['invoice']->id): ?>
	<ul id="invoice_address" class="address alternate_item">
		<li class="address_title"><?php echo smartyTranslate(array('s' => 'Invoice address'), $this);?>
</li>
		<?php if ($this->_tpl_vars['invoice']->company): ?><li class="address_company"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_address1"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<?php if ($this->_tpl_vars['invoice']->address2): ?><li class="address_address2"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_city"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_country"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	</ul>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['carrier']->id && ! $this->_tpl_vars['virtualCart']): ?>
	<div id="order_carrier">
		<h4><?php echo smartyTranslate(array('s' => 'Carrier:'), $this);?>
</h4>
		<?php if (isset ( $this->_tpl_vars['carrierPicture'] )): ?><img src="<?php echo $this->_tpl_vars['img_ship_dir']; ?>
<?php echo $this->_tpl_vars['carrier']->id; ?>
.jpg" alt="<?php echo smartyTranslate(array('s' => 'Carrier'), $this);?>
" /><?php endif; ?>
		<span><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>


	<p class="clear"><br /></p>
	<p class="cart_navigation" align="center">
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1" class="ebutton orange large" style="border-radius: 15px 0 0 15px;" title="<?php echo smartyTranslate(array('s' => 'Уточнить адрес'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Уточнить адрес'), $this);?>
</a>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=<?php if (! $this->_tpl_vars['invoice']->address1): ?>1<?php else: ?>3<?php endif; ?>" class="ebutton green large" style="border-radius: 0 15px 15px 0; border-left: 1px solid #aaa;" title="<?php echo smartyTranslate(array('s' => 'Оплатить заказ'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Оплатить заказ'), $this);?>
</a>
	</p>
	<p class="cart_navigation" align="center">	
		<a href="<?php if ($_SERVER['HTTP_REFERER'] && strstr ( $_SERVER['HTTP_REFERER'] , 'order.php' )): ?><?php echo $this->_tpl_vars['base_dir']; ?>
index.php<?php else: ?><?php echo ((is_array($_tmp=$_SERVER['HTTP_REFERER'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" class="ebutton blue large" style="width: 165px;" title="<?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
">&laquo;&nbsp;&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
</a>
	</p>


<p class="clear"><br /></p>
<p class="cart_navigation_extra">
	<?php echo $this->_tpl_vars['HOOK_SHOPPING_CART_EXTRA']; ?>

</p>
<?php endif; ?>


<?php if ($this->_tpl_vars['wishlist']): ?>
<br><h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'Отложенные ништяки'), $this);?>
</h2>
		<?php $_from = $this->_tpl_vars['wishlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['product_defer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['product_defer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product_defer']):
        $this->_foreach['product_defer']['iteration']++;
?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./shopping-cart-product-defer-line.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['voucherAllowed']): ?>
<br><div id="cart_voucher" class="rte">
	<?php if ($this->_tpl_vars['errors_discount']): ?>
		<ul class="error">
		<?php $_from = $this->_tpl_vars['errors_discount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
?>
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endif; ?>
	
	<p  onclick="javascript:$('#voucher').toggle(100)"><?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
</p>
	<br>
	<form hidden action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" method="post" id="voucher">
		<fieldset>
			<div style="border:none" class="submit" align="center">
<!--[if IE]><label for="discount_name"><?php echo smartyTranslate(array('s' => 'Code:'), $this);?>
</label><![endif]-->
				<input type="text" id="discount_name" name="discount_name" placeholder="Код купона" value="<?php if ($this->_tpl_vars['discount_name']): ?><?php echo $this->_tpl_vars['discount_name']; ?>
<?php endif; ?>" />
			
			<input style="width:auto" type="submit" name="submitDiscount" value="Получить скидку" class="ebutton yellow" /></div>
		</fieldset>
        <center><br><br><p class="tooltip" tooltip="Они прилетают сами. Например на твой День Варенья ;)">Откуда берутся купоны? <img src="../../img/admin/help.png"></p></center>
	</form>
</div>

<?php endif; ?>
