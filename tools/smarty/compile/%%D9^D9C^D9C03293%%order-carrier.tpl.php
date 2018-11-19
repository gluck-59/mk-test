<?php /* Smarty version 2.6.20, created on 2018-03-17 16:28:12
         compiled from /home/motokofr/public_html/themes/Earth/order-carrier.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/order-carrier.tpl', 30, false),array('function', 'math', '/home/motokofr/public_html/themes/Earth/order-carrier.tpl', 119, false),array('function', 'convertPrice', '/home/motokofr/public_html/themes/Earth/order-carrier.tpl', 167, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/order-carrier.tpl', 102, false),array('modifier', 'sizeof', '/home/motokofr/public_html/themes/Earth/order-carrier.tpl', 103, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/order-carrier.tpl', 107, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/order-carrier.tpl', 120, false),)), $this); ?>
<?php if ($this->_tpl_vars['cart']->id_currency != 3): ?> 
	<?php echo '
	<script defer language="JavaScript">
	setCurrency(3);
	</script>
	'; ?>

<?php endif; ?>



<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
layer.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/conditions.js"></script>
<?php if (! $this->_tpl_vars['virtual_cart'] && $this->_tpl_vars['giftAllowed'] && $this->_tpl_vars['cart']->gift == 1): ?>
<script type="text/javascript"><?php echo '
// <![CDATA[
    $(\'document\').ready( function(){
        $(\'#gift_div\').toggle(\'slow\');
    });
//]]>
'; ?>
</script>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./thickbox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('current_step', 'shipping'); ?>
<?php $this->assign('preload', 'shipping'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="rte">
<form id="form" action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" method="post" onsubmit="return acceptCGV('<?php echo smartyTranslate(array('s' => 'Please accept the terms of service before the next step.','js' => 1), $this);?>
');">

<?php if ($this->_tpl_vars['conditions']): ?>
	<h3 class="condition_title"><?php echo smartyTranslate(array('s' => 'Terms of service'), $this);?>
</h3>
	<p class="checkbox">
		<input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($this->_tpl_vars['checkedTOS']): ?>checked="checked"<?php endif; ?> />
		<label for="cgv"><?php echo smartyTranslate(array('s' => 'I agree with the terms of service and I adhere to them unconditionally.'), $this);?>
</label> <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=3&amp;content_only=1&amp;TB_iframe=true&amp;width=450&amp;height=500&amp;thickbox=true" class="thickbox"><?php echo smartyTranslate(array('s' => '(read)'), $this);?>
</a>
	</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['virtual_cart']): ?>
	<input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
<?php else: ?>
	<!--p>Мы огорчены тем, что пока не можем отправлять посылки в Россию наложенным платежом. Мы включим наложенный платеж сразу же, как только Почта России повернется к клиентам лицом.</p>
	<p>Зато ты никогда не услышишь от нас слов «за пределы МКАД не доставляем».</p>
	<p>Согласись, это круто? :)</p-->
		<?php if ($this->_tpl_vars['recyclablePackAllowed']): ?>
		<p class="checkbox">
			<input type="checkbox" name="recyclable" id="recyclable" value="1" <?php if ($this->_tpl_vars['recyclable'] == 1): ?>checked="checked"<?php endif; ?> />
			<label for="recyclable"><?php echo smartyTranslate(array('s' => 'I agree to receive my order in recycled packaging'), $this);?>
.</label>
		</p>
		<?php endif; ?>
</div>

	<?php if ($this->_tpl_vars['carriers'] && count ( $this->_tpl_vars['carriers'] )): ?>
	<div class="table_block">
		<table class="std">
			<!--thead>
				<tr>
					<th class="carrier_action first_item"></th>
					<th class="carrier_name item"><?php echo smartyTranslate(array('s' => 'Carrier'), $this);?>
</th>
					<th class="carrier_infos item"><?php echo smartyTranslate(array('s' => 'Information'), $this);?>
</th>
					<th class="carrier_price last_item"<?php if (@site_version == 'mobile'): ?> style="width: 156px"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'Price'), $this);?>
</th>
				</tr>
			</thead-->
			<tbody>
			<?php $_from = $this->_tpl_vars['carriers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['carrier']):
        $this->_foreach['myLoop']['iteration']++;
?>
				<tr height="90px" class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php endif; ?> ">
					<td width="10%" class="carrier_action radio">
						<input type="radio" 
						<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 79): ?>
					        checked
						<?php endif; ?>
						<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 76): ?>
							<?php if (! $this->_tpl_vars['address2'] || ! $this->_tpl_vars['company'] || ! $this->_tpl_vars['phone_mobile']): ?>
							disabled 
							<?php endif; ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 74): ?>
							<?php if (! $this->_tpl_vars['phone_mobile'] || ! $this->_tpl_vars['inn']): ?>
							disabled 
							<?php endif; ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 77): ?>
							disabled 
							<?php endif; ?>

	
						name="id_carrier" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" id="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" 
						<?php if (( $this->_tpl_vars['checked'] == 0 && $this->_tpl_vars['i'] == 1 ) || ( sizeof($this->_tpl_vars['carriers']) == 1 ) || $this->_tpl_vars['carrier']['id_carrier'] == $this->_tpl_vars['checked']): ?>checked="checked"<?php endif; ?> />
					</td>
					<td width="10%" class="carrier_name">
						<label for="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
							<?php if ($this->_tpl_vars['carrier']['img']): ?><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>
						</label>
					</td>

					
					
					<td width="60%" class="carrier_infos">
					<label for="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
					
					<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 78): ?>
						Временно недоступен для этого региона <span><img  style="-webkit-animation: delivery 0.8s ease infinite; height: 26px; padding-left: 10px;" src="/themes/Earth/img/petr.png"></span>
					<?php else: ?>
						Срок: примерно <?php echo $this->_tpl_vars['carrier']['avg_delibery_days']; ?>
 дней<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 79): ?> для посылок, <?php echo smarty_function_math(array('equation' => "x * 2",'x' => $this->_tpl_vars['carrier']['avg_delibery_days']), $this);?>
 дней для бандеролей <?php else: ?> для всех<?php endif; ?>
						&nbsp;<span class="tooltip" style="border-bottom:0;" tooltip="На основе статистики доставки наших посылок в <?php echo ((is_array($_tmp=time()-2592000)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 году"><img src="../../img/admin/help.png"></span>
						<br>
						<?php echo $this->_tpl_vars['carrier']['delay']; ?>
 
					<?php endif; ?>
					
					
					
						<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 76): ?>
<abbr title="Пожалуйста убедись, что твоя посылка поедет из США. Если не уверен — свяжись с нами. Доставка через СПСР из других стран пока невозможна.">	
<b>Только для посылок из США!</b></abbr>

							<?php if (! $this->_tpl_vars['address2'] || ! $this->_tpl_vars['company'] || ! $this->_tpl_vars['phone_mobile']): ?> <br><br>СПСР требует указывать: 
							<?php if (! $this->_tpl_vars['company']): ?> <br><b>Паспортные данные</b> <?php endif; ?>							
							<?php if (! $this->_tpl_vars['address2']): ?> <br><b>Отчество</b> <?php endif; ?>						
							<?php if (! $this->_tpl_vars['phone_mobile']): ?> <br><b>Телефон для курьера</b> <?php endif; ?>
							<?php if (! $this->_tpl_vars['inn']): ?> <br>ФТС требует указывать <b>ИНН получателя</b> <?php endif; ?>
							<br>Пожалуйста <a href="/order.php?step=1">вернись в "Адреса"</a> и добавь его.
							<?php endif; ?>
						<?php endif; ?>
						
												
						<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 74): ?>						
							<?php if (! $this->_tpl_vars['phone_mobile'] || ! $this->_tpl_vars['inn']): ?> <div style="border: 2px dashed #F73;margin-top: 10px;  padding: 10px;"> 
    							
    							<?php if (! $this->_tpl_vars['phone_mobile']): ?>EMS требует указывать <b>Телефон для курьера</b><?php endif; ?>
    							<?php if (! $this->_tpl_vars['inn']): ?>ФТС требует указывать <b>ИНН получателя</b><?php endif; ?>

							<br>Пожалуйста <a href="/order.php?step=1">вернись в "Адреса"</a> и добавь недостающее.	
												</div>
							<?php endif; ?>
						<?php endif; ?>
						
					<?php if ($this->_tpl_vars['carrier']['id_carrier'] == 55): ?>
							<?php if (! $this->_tpl_vars['inn']): ?> <div style="border: 2px dashed #F73;margin-top: 10px;  padding: 10px;"> 
    							<?php if (! $this->_tpl_vars['inn']): ?>ФТС требует указывать <b>ИНН получателя</b><?php endif; ?>
							<br>Пожалуйста <a href="/order.php?step=1">вернись в "Адреса"</a> и добавь недостающее.	
								</div>
							<?php endif; ?>
						<?php endif; ?>
						
						
					</label>
					</td>
					<td width="15%" align="right" class="carrier_price">
					<label for="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
						<?php if ($this->_tpl_vars['carrier']['price']): ?>
							<span class="price">
								<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['carrier']['price_tax_exc']), $this);?>
<?php else: ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['carrier']['price']), $this);?>
<?php endif; ?>
							</span>
							<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?> <?php echo smartyTranslate(array('s' => '(tax excl.)'), $this);?>
<?php else: ?> <?php echo smartyTranslate(array('s' => '(tax incl.)'), $this);?>
<?php endif; ?>
						<?php else: ?>
							<?php echo smartyTranslate(array('s' => 'Free!'), $this);?>

						<?php endif; ?>
					</label>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			<?php echo $this->_tpl_vars['HOOK_EXTRACARRIER']; ?>

			</tbody>
		</table>
		<div style="display: none;" id="extra_carrier"></div>
	</div>
	<?php else: ?>
		<p class="warning"><?php echo smartyTranslate(array('s' => 'There is no carrier available that will deliver to this address!'), $this);?>
</td></tr>
	<?php endif; ?>

	<?php endif; ?>

<p>&nbsp;</p>
<p><a target="_blank" href="/cms.php?id_cms=1">Подробнее о разных способах доставки (в новом окне)</a></p>
<p>&nbsp;</p>
	<p class="cart_navigation" align="center">
		<input type="hidden" name="step" value="3" />
		<input type="hidden" name="back" value="<?php echo $this->_tpl_vars['back']; ?>
" />
		<!--a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1<?php if ($this->_tpl_vars['back']): ?>&back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>" title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" class="ebutton gray small">&laquo; <?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a-->&nbsp;&nbsp;
		<input style="border-radius:15px;" type="submit" name="processCarrier" value="<?php echo smartyTranslate(array('s' => 'Оплатить заказ'), $this);?>
" class="ebutton green large" />
	</p>
</form>

<?php echo '
<!-- Yandex.Metrika order-carrier --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459512 = new Ya.Metrika({id:24459512, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24459512" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika order-carrier -->
'; ?>

