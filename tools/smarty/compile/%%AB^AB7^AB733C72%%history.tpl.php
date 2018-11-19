<?php /* Smarty version 2.6.20, created on 2016-11-20 12:41:54
         compiled from /home/motokofr/public_html/themes/Earth/history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/history.tpl', 7, false),array('function', 'displayPrice', '/home/motokofr/public_html/themes/Earth/history.tpl', 35, false),array('modifier', 'string_format', '/home/motokofr/public_html/themes/Earth/history.tpl', 32, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/history.tpl', 34, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/history.tpl', 37, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/history.tpl', 38, false),array('modifier', 'regex_replace', '/home/motokofr/public_html/themes/Earth/history.tpl', 38, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>
<meta http-equiv="Cache-Control" content="no-cache">
<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'Order history'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'Order history'), $this);?>
</h2>


<div class="block-center" id="block-history" style=" margin: 19px 0px 0px -1px; ">
	<?php if ($this->_tpl_vars['orders'] && count ( $this->_tpl_vars['orders'] )): ?>
	<table id="order-list" class="std">
		<!--thead>
			<tr>
				<th class="first_item" id="Order"><?php echo smartyTranslate(array('s' => 'Order'), $this);?>
</th>
				<th class="item" id="Date"><?php echo smartyTranslate(array('s' => 'Date'), $this);?>
</th>
				<th class="item" id="Total price"><?php echo smartyTranslate(array('s' => 'Total price'), $this);?>
</th>
				<th class="item" id="Payment"><?php echo smartyTranslate(array('s' => 'Payment'), $this);?>
</th>
				<th class="item" id="Status"><?php echo smartyTranslate(array('s' => 'Status'), $this);?>
</th>
			</tr>
		</thead-->
		<tbody>
		<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order']):
        $this->_foreach['myLoop']['iteration']++;
?>
			<tr class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if (($this->_foreach['myLoop']['iteration']-1) % 2): ?>alternate_item<?php endif; ?>">
				<td class="history_link">
					<?php if ($this->_tpl_vars['order']['invoice'] && $this->_tpl_vars['order']['virtual']): ?><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s' => 'Product(s) to download'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Product(s) to download'), $this);?>
" /><?php endif; ?>
					<?php if (@site_version == 'full'): ?><?php echo smartyTranslate(array('s' => '#'), $this);?>
 <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
&nbsp;
				</td>
				<td class="history_date"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['date_add'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y") : smarty_modifier_date_format($_tmp, "%d %b %Y")); ?>
</td>
				<td class="history_price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['order']['total_paid_real'],'currency' => $this->_tpl_vars['order']['id_currency'],'no_utf8' => false,'convert' => false), $this);?>
</td>

				<td class="history_method"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['payment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
				<td class="history_state"><a class="ebutton blue small" title="Подробности" href="javascript:showOrder(1, <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
, 'order-detail');"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['order_state'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[0-9.]/", "") : smarty_modifier_regex_replace($_tmp, "/[0-9.]/", "")); ?>

    				<?php if ($this->_tpl_vars['order']['id_order_state'] == 4): ?>
    				    <span class="tooltip" style="border-bottom:0;" tooltip="В твоем заказе больше одной посылки. Сейчас отправлены еще не все, но это ненадолго :)">&nbsp;<img src="../../img/admin/help.png"></span>
    				<?php endif; ?>
    				
				</a></td>

				<!--td align="center" class="history_invoice">
				
<!-- отключаем PDF	<?php if (( $this->_tpl_vars['order']['invoice'] || $this->_tpl_vars['order']['invoice_number'] ) && $this->_tpl_vars['invoiceAllowed']): ?>
					<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
pdf-invoice.php?id_order=<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'Invoice'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/pdf.gif" alt="<?php echo smartyTranslate(array('s' => 'Invoice'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="icon" /></a>
					<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
pdf-invoice.php?id_order=<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'Invoice'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo smartyTranslate(array('s' => 'PDF'), $this);?>
</a>
				<?php else: ?>-<?php endif; ?>
			<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
modules/bankform/form.php?id_order=<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'bank'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
modules/bankform/logo.gif" alt="<?php echo smartyTranslate(array('s' => 'bank'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="icon" /></a>
			
-->
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>

<div id="getContent" style="height:0px;" class="rte">
<p style=" padding-top:50%"><img src="/img/loader.gif"></p>
<p>Пытаемся отследить посылку...</p>
</div>				
	
	<div id="block-order-detail" class="hidden">&nbsp;</div>
	<?php else: ?>
		<p class="error"><?php echo smartyTranslate(array('s' => 'You have not placed any orders.'), $this);?>
</p>
	<?php endif; ?>
</div>	
	
<table width="100%" border="0" style="margin-top: 30px;">
  <tr>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.png" alt="" class="icon" /></a></div></td>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.png" alt="" class="icon" /></a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Back to Your Account'), $this);?>
</a></div></td>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></div></td>
  </tr>
</table>

<?php echo '<!-- Yandex.Metrika history --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459761 = new Ya.Metrika({id:24459761, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24459761" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika history -->'; ?>