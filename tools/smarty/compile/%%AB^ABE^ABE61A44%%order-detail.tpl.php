<?php /* Smarty version 2.6.20, created on 2016-12-16 21:43:04
         compiled from /home/motokofr/public_html/themes/Earth/order-detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 2, false),array('function', 'displayWtPriceWithCurrency', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 152, false),array('function', 'convertPriceWithCurrency', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 204, false),array('function', 'counter', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 219, false),array('function', 'dateFormat', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 318, false),array('modifier', 'string_format', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 2, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 2, false),array('modifier', 'upper', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 9, false),array('modifier', 'strip', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 21, false),array('modifier', 'regex_replace', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 95, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 105, false),array('modifier', 'nl2br', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 113, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 121, false),array('modifier', 'count', '/home/motokofr/public_html/themes/Earth/order-detail.tpl', 329, false),)), $this); ?>
<meta http-equiv="Cache-Control" content="no-cache">
<h4><?php echo smartyTranslate(array('s' => 'Order placed on'), $this);?>
 <span class="color-myaccount"><?php echo smartyTranslate(array('s' => '#'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['order']->id)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
</span> от <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->date_add)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y") : smarty_modifier_date_format($_tmp, "%d %b %Y")); ?>
</h4>
<?php if ($this->_tpl_vars['followup']): ?>
	<p>&nbsp;</p>
            	<?php $_from = $this->_tpl_vars['track_last']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tracks_last'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tracks_last']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tracks_last']):
        $this->_foreach['tracks_last']['iteration']++;
?>
       	    <div class="tracking_no">
  	    	    <?php if ($this->_tpl_vars['tracks_last']->shipping_number): ?>ПОСЫЛКА <?php echo ((is_array($_tmp=$this->_tpl_vars['tracks_last']->shipping_number)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php endif; ?>
      	    </div>
    	    <span <?php if ($this->_tpl_vars['tracks_last']->checkpoints->time): ?>class="tooltip" tooltip="Обновлено <?php echo ((is_array($_tmp=$this->_tpl_vars['tracks_last']->checkpoints->time)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e %b %Y %k:%M") : smarty_modifier_date_format($_tmp, "%e %b %Y %k:%M")); ?>
"<?php endif; ?>>
        	    <div class="message <?php if ($this->_tpl_vars['tracks_last']->checkpoints->status_code): ?><?php echo $this->_tpl_vars['tracks_last']->checkpoints->status_code; ?>
<?php else: ?>not_found<?php endif; ?>">&nbsp;</div>
    	    </span>
    	<?php endforeach; endif; unset($_from); ?>


                <?php $_from = $this->_tpl_vars['track']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tracks'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tracks']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tracks']):
        $this->_foreach['tracks']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['tracks']['checkpoints']): ?>             	<div class="block-center" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['tracks']['shipping_number'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
">
            		<table class="std" id="sipping-list">
            			<thead>
            				<tr>
            					<th class="first_item"><?php echo ((is_array($_tmp=$this->_tpl_vars['tracks']['shipping_number'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
            					<th colspan="2" class="last_item">
                					<?php if ($this->_tpl_vars['tracks']['weight']): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $this->_tpl_vars['tracks']['weight']; ?>
 г.<?php endif; ?>
                					<?php if ($this->_tpl_vars['tracks']['service']): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $this->_tpl_vars['tracks']['service']; ?>
<?php endif; ?>
                					<?php if ($this->_tpl_vars['tracks']['recipient']): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $this->_tpl_vars['tracks']['recipient']; ?>
<?php endif; ?>            					
                				</th>
            				</tr>
            			</thead>
            			<tbody>
                			
            			<?php $_from = $this->_tpl_vars['tracks']['checkpoints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['shipStates'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['shipStates']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['states']):
        $this->_foreach['shipStates']['iteration']++;
?>
                			
            				<?php if ($this->_tpl_vars['states']->time != NULL): ?>
            					<tr class="<?php if (($this->_foreach['shipStates']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['shipStates']['iteration'] == $this->_foreach['shipStates']['total'])): ?>last_item<?php endif; ?> <?php if (($this->_foreach['shipStates']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
            						<td><span class="states_location"><?php echo ((is_array($_tmp=$this->_tpl_vars['states']->time)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e %b %Y") : smarty_modifier_date_format($_tmp, "%e %b %Y")); ?>
<br><?php echo ((is_array($_tmp=$this->_tpl_vars['states']->time)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%k:%M") : smarty_modifier_date_format($_tmp, "%k:%M")); ?>
</span></td>
            						<td><span class="states_message"><?php echo $this->_tpl_vars['states']->status_name; ?>
</span>
                						<br><span class="states_location"><?php if ($this->_tpl_vars['states']->location_translated): ?><?php echo $this->_tpl_vars['states']->location_translated; ?>
<?php elseif ($this->_tpl_vars['states']->location_raw): ?><?php echo $this->_tpl_vars['states']->location_raw; ?>
<?php else: ?><?php endif; ?>
                						<?php if ($this->_tpl_vars['states']->location_zip_code): ?><a target="_blank" href="http://gdeposylka.ru/courier/<?php echo $this->_tpl_vars['states']->courier->slug; ?>
/<?php echo $this->_tpl_vars['states']->location_zip_code; ?>
">(<u><?php echo $this->_tpl_vars['states']->location_zip_code; ?>
</u>)</a><?php endif; ?>
                						                				    </td>
                					<td>
                    					<a href="http://gdeposylka.ru/courier/<?php echo $this->_tpl_vars['states']->courier->slug; ?>
" target="_blank">
                    					<img class="courier" title="" height="32px" src="http://gdeposylka.ru/img/icons/128x128/<?php echo $this->_tpl_vars['states']->courier->slug; ?>
.png"
                    					</a>
                					</td>
            					</tr>
            				<?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>				
            				
            				
            			</tbody>
            		</table>    
            		
           		</div>
      	
            		
           		
           		<p>&nbsp;</p><p>&nbsp;</p>
       		<?php endif; ?>			
        <?php endforeach; endif; unset($_from); ?>
        
        
        	
        <?php else: ?>
           	<p>&nbsp;</p>
            <div class="tracks_last">
                <div class="message wait">
                </div>
            </div>
        <?php endif; ?>



<?php if (count ( $this->_tpl_vars['order_history'] )): ?>
<div class="table_block">
	<table class="detail_step_by_step std">
		<thead>
			<tr>
				<th colspan="2" class="first_item"><?php echo smartyTranslate(array('s' => 'Follow your order step by step'), $this);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php $_from = $this->_tpl_vars['order_history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['orderStates'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['orderStates']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['state']):
        $this->_foreach['orderStates']['iteration']++;
?>
			<tr class="<?php if (($this->_foreach['orderStates']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['orderStates']['iteration'] == $this->_foreach['orderStates']['total'])): ?>last_item<?php endif; ?> <?php if (($this->_foreach['orderStates']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['state']['date_add'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y") : smarty_modifier_date_format($_tmp, "%d %b %Y")); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['state']['ostate_name'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[0-9.]/", "") : smarty_modifier_regex_replace($_tmp, "/[0-9.]/", "")); ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['invoice'] && $this->_tpl_vars['invoiceAllowed']): ?>
<p>
	<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/pdf.gif" alt="" class="icon" />
	<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
pdf-invoice.php?id_order=<?php echo ((is_array($_tmp=$this->_tpl_vars['order']->id)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php echo smartyTranslate(array('s' => 'Download your invoice as a .PDF file'), $this);?>
</a>
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['order']->recyclable): ?>
<p><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/recyclable.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s' => 'You have given permission to receive your order in recycled packaging.'), $this);?>
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['order']->gift): ?>
	<p><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/gift.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s' => 'You requested gift-wrapping for your order.'), $this);?>
</p>
	<p><?php echo smartyTranslate(array('s' => 'Message:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->gift_message)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>
<br />

<fieldset class="address">
			<legend class="address_title"><?php echo $this->_tpl_vars['address_delivery']->alias; ?>
</legend>
			<div id="map_canvas" class="map_canvas"></div>
			<p class="address_address">Получатель:</p>			
			<p class="address_name">&bull; <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
			<p class="address_address">&bull; <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php if ($this->_tpl_vars['deliveryState']): ?> - <?php echo ((is_array($_tmp=$this->_tpl_vars['deliveryState']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?></p>
			<p class="address_country">&bull; <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
			<p>&nbsp;</p>
			<?php if ($this->_tpl_vars['address_delivery']->phone): ?><p class="address_phone">&bull; <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->phone)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p><?php endif; ?>
			
			<?php if ($this->_tpl_vars['address_delivery']->other): ?><p class="address_other"><?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->other)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p><?php endif; ?>			
			<?php if ($this->_tpl_vars['address_delivery']->phone_mobile): ?><p class="address_phone_mobile"><?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->phone_mobile)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p><?php endif; ?>
			<?php if ($this->_tpl_vars['address_delivery']->company): ?><p class="address_passport">Паспорт <?php echo $this->_tpl_vars['address_delivery']->company; ?>
</p><?php endif; ?>
		</fieldset>
		
		
<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-follow.php" method="post">
<div id="order-detail-content" class="table_block">
	<table class="std">
		<thead>
			<tr>
				<?php if ($this->_tpl_vars['return_allowed']): ?><th class="first_item"><input type="checkbox" /></th><?php endif; ?>
				<th width="15%" class="<?php if ($this->_tpl_vars['return_allowed']): ?>item<?php else: ?>first_item<?php endif; ?>"><?php echo smartyTranslate(array('s' => 'Ништяки в этом заказе'), $this);?>
</th>
				<th width="30%" class="item"></th>
					<?php if (@site_version == 'full'): ?>				
						<th class="item"><?php echo smartyTranslate(array('s' => 'К-во'), $this);?>
</th>
						<th class="item"><?php echo smartyTranslate(array('s' => 'Unit price'), $this);?>
</th>
					<?php endif; ?>
				<th class="last_item"><?php echo smartyTranslate(array('s' => 'Total price'), $this);?>
</th>
			</tr>
		</thead>
		<tfoot style="line-height: 0pt;">
			<?php if ($this->_tpl_vars['priceDisplay']): ?>
				<tr class="item">
					<td colspan="<?php if ($this->_tpl_vars['return_allowed']): ?>6<?php else: ?>5<?php endif; ?>">
						<?php echo smartyTranslate(array('s' => 'Total products (tax excl.):'), $this);?>
 <span class="price"><?php echo Product::displayWtPriceWithCurrency(array('price' => $this->_tpl_vars['order']->getTotalProductsWithoutTaxes(),'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</span>
					</td>
				</tr>
			<?php endif; ?>
			<tr class="item">
				<td colspan="<?php if ($this->_tpl_vars['return_allowed']): ?>6<?php else: ?>5<?php endif; ?>">
					<?php echo smartyTranslate(array('s' => 'Total products (tax incl.):'), $this);?>
 <span class="price"><?php echo Product::displayWtPriceWithCurrency(array('price' => $this->_tpl_vars['order']->getTotalProductsWithTaxes(),'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</span>
				</td>
			</tr>
			<?php if ($this->_tpl_vars['order']->total_discounts > 0): ?>
			<tr class="item">
				<td colspan="<?php if ($this->_tpl_vars['return_allowed']): ?>6<?php else: ?>5<?php endif; ?>">
					<?php echo smartyTranslate(array('s' => 'Total vouchers:'), $this);?>
 <span class="price-discount"><?php echo Product::displayWtPriceWithCurrency(array('price' => $this->_tpl_vars['order']->total_discounts,'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</span>
				</td>
			</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['order']->total_wrapping > 0): ?>
			<tr class="item">
				<td colspan="<?php if ($this->_tpl_vars['return_allowed']): ?>6<?php else: ?>5<?php endif; ?>">
					<?php echo smartyTranslate(array('s' => 'Total gift-wrapping:'), $this);?>
 <span class="price-wrapping"><?php echo Product::displayWtPriceWithCurrency(array('price' => $this->_tpl_vars['order']->total_wrapping,'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</span>
				</td>
			</tr>
			<?php endif; ?>
			<tr class="item">
				<td colspan="<?php if ($this->_tpl_vars['return_allowed']): ?>6<?php else: ?>5<?php endif; ?>">
					<?php echo smartyTranslate(array('s' => 'Total shipping (tax incl.):'), $this);?>
 <span class="price-shipping"><?php echo Product::displayWtPriceWithCurrency(array('price' => $this->_tpl_vars['order']->total_shipping,'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</span>
				</td>
			</tr>
			<tr class="item">
				<td colspan="<?php if ($this->_tpl_vars['return_allowed']): ?>6<?php else: ?>5<?php endif; ?>">
					<?php echo smartyTranslate(array('s' => 'Total:'), $this);?>
 <span class="price"><?php echo Product::displayWtPriceWithCurrency(array('price' => $this->_tpl_vars['order']->total_paid,'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</span>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['products']['iteration']++;
?>
			<?php if (! $this->_tpl_vars['product']['deleted']): ?>
				<?php $this->assign('productId', $this->_tpl_vars['product']['product_id']); ?>
				<?php $this->assign('productAttributeId', $this->_tpl_vars['product']['product_attribute_id']); ?>
				<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php $this->assign('productQuantity', $this->_tpl_vars['product']['product_quantity']-$this->_tpl_vars['product']['customizationQuantityTotal']); ?><?php else: ?><?php $this->assign('productQuantity', $this->_tpl_vars['product']['product_quantity']); ?><?php endif; ?>
				<!-- Customized products -->
				<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?>
					<tr class="item">
						<?php if ($this->_tpl_vars['return_allowed']): ?><td class="order_cb"></td><?php endif; ?>
						<td>
						<label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php if ($this->_tpl_vars['product']['product_reference']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['product_reference'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php else: ?>--<?php endif; ?></label>
						</td>
						<td class="item">
							<label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['product_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</label>
						</td>
						<td><input class="order_qte_input" name="order_qte_input[<?php echo ($this->_foreach['products']['iteration']-1); ?>
]" type="text" size="2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customizationQuantityTotal'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /><label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><span class="order_qte_span editable"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['customizationQuantityTotal'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</span></label></td>
						
						<td><label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['product']['product_price_wt'],'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</label></td>
						<td><label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['product']['total_customization_wt'],'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
<?php else: ?><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['product']['total_wt'],'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
<?php endif; ?></label></td>
					</tr>
					<?php $_from = $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customizationId'] => $this->_tpl_vars['customization']):
?>
					<tr class="alternate_item">
						<?php if ($this->_tpl_vars['return_allowed']): ?><td class="order_cb"><input type="checkbox" id="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" name="customization_ids[<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
][]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customizationId'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /></td><?php endif; ?>
						<td colspan="2">
						<?php $_from = $this->_tpl_vars['customization']['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['datas']):
?>
							<?php if ($this->_tpl_vars['type'] == $this->_tpl_vars['CUSTOMIZE_FILE']): ?>
							<ul class="customizationUploaded">
								<?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
									<li><img src="<?php echo $this->_tpl_vars['pic_dir']; ?>
<?php echo $this->_tpl_vars['data']['value']; ?>
_small" alt="" class="customizationUploaded" /></li>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
							<?php elseif ($this->_tpl_vars['type'] == $this->_tpl_vars['CUSTOMIZE_TEXTFIELD']): ?>
							<ul class="typedText"><?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

								<?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
									<li><?php echo smartyTranslate(array('s' => 'Text #'), $this);?>
<?php echo smarty_function_counter(array(), $this);?>
<?php echo smartyTranslate(array('s' => ':'), $this);?>
 <?php echo $this->_tpl_vars['data']['value']; ?>
</li>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						</td>
						<td>
							<input class="order_qte_input" name="customization_qty_input[<?php echo ((is_array($_tmp=$this->_tpl_vars['customizationId'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
]" type="text" size="2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customization']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /><label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><span class="order_qte_span editable"><?php echo ((is_array($_tmp=$this->_tpl_vars['customization']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</span></label>
						</td>
						<td colspan="2"></td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<!-- Classic products -->
				<?php if ($this->_tpl_vars['product']['product_quantity'] > $this->_tpl_vars['product']['customizationQuantityTotal']): ?>
					<tr class="item">
						<?php if ($this->_tpl_vars['return_allowed']): ?><td class="order_cb"><input type="checkbox" id="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" name="ids_order_detail[<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /></td><?php endif; ?>
						<td>
						
						<label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php if ("{".($this->_tpl_vars['product']).".product_id"): ?><a target="_blank"} href="product.php?id_product=<?php echo $this->_tpl_vars['product']['product_id']; ?>
">
						<img src="http://img.<?php echo $_SERVER['SERVER_NAME']; ?>
/p/<?php echo $this->_tpl_vars['product']['product_id']; ?>
-<?php echo $this->_tpl_vars['product']['image']; ?>
-home.jpg"></a><?php else: ?>-<?php endif; ?></label><br>

						</td>
						<td class="item">
							<label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
								<?php if ($this->_tpl_vars['product']['download_hash'] && $this->_tpl_vars['invoice']): ?>
									<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
get-file.php?key=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['download_hash'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo smartyTranslate(array('s' => 'download this product'), $this);?>
">
										<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s' => 'Download product'), $this);?>
" />
									</a>
									<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
get-file.php?key=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['download_hash'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo smartyTranslate(array('s' => 'download this product'), $this);?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['product_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

									</a>
								<?php else: ?>
									<a target="_blank" href="product.php?id_product=<?php echo $this->_tpl_vars['product']['product_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['product_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
								<?php endif; ?>
							</label>
						</td>
					<?php if (@site_version == 'full'): ?>				
						<td><input class="order_qte_input" name="order_qte_input[<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
]" type="text" size="2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['productQuantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /><label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['productQuantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</span></label></td>
						<td><label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['product']['product_price_wt'],'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</label></td>
					<?php endif; ?>
						<td class="price"><label for="cb_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_order_detail'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['product']['total_wt'],'currency' => $this->_tpl_vars['currency'],'convert' => 0), $this);?>
</label></td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<?php $_from = $this->_tpl_vars['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['discount']):
?>
			<tr class="item">
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['discount']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['discount']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
				<td><span class="order_qte_span editable"></span></td>
				<td>&nbsp;</td>
				<td></td>
				<?php if ($this->_tpl_vars['return_allowed']): ?>
				<td>&nbsp;</td>
				<?php endif; ?>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
</div>
<?php if ($this->_tpl_vars['return_allowed']): ?>
<br />
<p class=""><?php echo smartyTranslate(array('s' => 'Merchandise return'), $this);?>
</p>
<p>&nbsp;</p>
<p><?php echo smartyTranslate(array('s' => 'If you want to return one or several products, please mark the corresponding checkbox(es) and provide an explanation for the return. Then click the button below.'), $this);?>
</p>
<p>&nbsp;</p>
<p class="textarea">
	<textarea name="returnText"></textarea>
</p>
<p class="submit">
	<input type="submit" value="<?php echo smartyTranslate(array('s' => 'Make a RMA slip'), $this);?>
" name="submitReturnMerchandise" class="button_large" />
	<input type="hidden" class="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order']->id)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" name="id_order" />
</p>
<br />
<?php endif; ?>
</form>
<?php if (count ( $this->_tpl_vars['messages'] )): ?>
<div class="table_block">
	<table class="detail_step_by_step std">
		<thead>
			<tr>
				<th colspan="2" class="first_item"><?php echo smartyTranslate(array('s' => 'Messages'), $this);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['messageList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['messageList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['message']):
        $this->_foreach['messageList']['iteration']++;
?>
			<tr class="<?php if (($this->_foreach['messageList']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['messageList']['iteration'] == $this->_foreach['messageList']['total'])): ?>last_item<?php endif; ?> <?php if (($this->_foreach['messageList']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
				<td style="">
					<?php if ($this->_tpl_vars['message']['ename']): ?>
						<b><?php echo ((is_array($_tmp=$this->_tpl_vars['message']['efirstname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['message']['elastname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</b>
					<?php elseif ($this->_tpl_vars['message']['clastname']): ?>
						<b><?php echo ((is_array($_tmp=$this->_tpl_vars['message']['cfirstname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['message']['clastname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</b>
					<?php else: ?>
						<b><?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</b>
					<?php endif; ?>
					<br />
					<?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['message']['date_add'],'full' => 1), $this);?>

				</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['message']['message'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
</div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['errors'] ) && $this->_tpl_vars['errors']): ?>
	<div class="error">
		<p><?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'There are'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'There is'), $this);?>
<?php endif; ?> <?php echo count($this->_tpl_vars['errors']); ?>
 <?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'errors'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'error'), $this);?>
<?php endif; ?> :</p>
		<ol>
		<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
?>
			<li><?php echo $this->_tpl_vars['error']; ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
		</ol>
	</div>
<?php endif; ?>
<p>&nbsp;</p><p>&nbsp;</p>
<form action="<?php echo $this->_tpl_vars['base_dir']; ?>
order-detail.php" method="post" class="std" id="sendOrderMessage">
	<p class="address_address"><?php echo smartyTranslate(array('s' => 'Add a message:'), $this);?>
</p>
	<p>&nbsp;</p>
	<p class="textarea">
		<textarea required style="height: 90pt;" placeholder="<?php echo smartyTranslate(array('s' => 'If you want to leave us comment about your order, please write it below.'), $this);?>
" name="msgText"></textarea>
	</p>
	<p class="submit" align="center">
		<input type="hidden" name="id_order" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order']->id)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" />
		<br><input style="" type="submit" class="ebutton blue" name="submitMessage" value="<?php echo smartyTranslate(array('s' => 'Send'), $this);?>
"/>
	</p>
</form>


<!-- gmaps -->
<?php echo '
    <script type="text/javascript">

    var map = null;
    var geocoder = null;

      if (GBrowserIsCompatible()) {
        geocoder = new GClientGeocoder();
    
    var address = \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['address_delivery']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php echo '\';
    var baloon = \''; ?>
<?php echo $this->_tpl_vars['address_delivery']->alias; ?>
<?php echo '\';

      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              map = new GMap2(document.getElementById("map_canvas"));
			  // адрес не найден - не показываем ничего
            } else {
              map = new GMap2(document.getElementById("map_canvas"));
              map.setCenter(point, 17);
              var marker = new GMarker(point);
              map.addOverlay(marker);
              marker.openInfoWindowHtml(baloon);
            }
          }
        );
      }
    }
    </script>
'; ?>

<!-- /gmaps -->
