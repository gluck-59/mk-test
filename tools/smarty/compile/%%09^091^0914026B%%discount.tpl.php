<?php /* Smarty version 2.6.20, created on 2016-11-20 17:19:49
         compiled from /home/motokofr/public_html/themes/Earth/discount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/discount.tpl', 7, false),array('function', 'convertPrice', '/home/motokofr/public_html/themes/Earth/discount.tpl', 35, false),array('function', 'dateFormat', '/home/motokofr/public_html/themes/Earth/discount.tpl', 55, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/discount.tpl', 33, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'Скидки'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'Скидки'), $this);?>
</h2>

<?php if ($this->_tpl_vars['discount'] && count ( $this->_tpl_vars['discount'] ) && $this->_tpl_vars['nbDiscounts']): ?>
<table class="discount std">
	<thead>
		<tr>
			<th class="discount_code bold first_item"><?php echo smartyTranslate(array('s' => 'Code'), $this);?>
</th>
			<th class="discount_description item"><?php echo smartyTranslate(array('s' => 'Description'), $this);?>
</th>
			<th class="discount_quantity item"><?php echo smartyTranslate(array('s' => 'Quantity'), $this);?>
</th>
			<th class="discount_value item"><?php echo smartyTranslate(array('s' => 'Value'), $this);?>
</th>
			<th class="discount_minimum item"><?php echo smartyTranslate(array('s' => 'Minimum'), $this);?>
</th>
<!--			<th class="discount_cumulative item"><?php echo smartyTranslate(array('s' => 'Cumulative'), $this);?>
</th> -->
			<th class="discount_expiration_date last_item"><?php echo smartyTranslate(array('s' => 'Expiration date'), $this);?>
</th>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['discount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['discount']):
        $this->_foreach['myLoop']['iteration']++;
?>
		<tr class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if (($this->_foreach['myLoop']['iteration']-1) % 2): ?>alternate_item<?php endif; ?>">
			<td class="discount_code bold"><span class="tooltip" tooltip="Введи этот код в Кофр при заказе"><?php echo $this->_tpl_vars['discount']['name']; ?>
</span></td>
			<td class="discount_description"><?php echo $this->_tpl_vars['discount']['description']; ?>
</td>
			<td class="discount_quantity"><center><?php echo $this->_tpl_vars['discount']['quantity_for_user']; ?>
</center></td>
			<td class="discount_value">
				<?php if ($this->_tpl_vars['discount']['id_discount_type'] == 1): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['discount']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
%
				<?php elseif ($this->_tpl_vars['discount']['id_discount_type'] == 2): ?>
					<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['discount']['value']), $this);?>

				<?php else: ?>
					<?php echo smartyTranslate(array('s' => 'Free shipping'), $this);?>

				<?php endif; ?>
			</td>
			<td class="discount_minimum"><center>
				<?php if ($this->_tpl_vars['discount']['minimal'] == 0): ?>
					<?php echo smartyTranslate(array('s' => 'none'), $this);?>

				<?php else: ?>
					<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['discount']['minimal']), $this);?>

				<?php endif; ?>
			</center></td>
<!--			<td class="discount_cumulative">
				<?php if ($this->_tpl_vars['discount']['cumulable'] == 1): ?>
					<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/yes.gif" alt="<?php echo smartyTranslate(array('s' => 'Yes'), $this);?>
" class="icon" />
				<?php else: ?>
					<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/no.gif" alt="<?php echo smartyTranslate(array('s' => 'No'), $this);?>
" class="icon" />
				<?php endif; ?>
			</td>
-->			
			<td class="discount_expiration_date"><?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['discount']['date_to']), $this);?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>

<?php else: ?>
	<p class="success"><?php echo smartyTranslate(array('s' => 'You do not possess any vouchers.'), $this);?>
</p>
<?php endif; ?>

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

<?php echo '<!-- Yandex.Metrika discount --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459851 = new Ya.Metrika({id:24459851, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24459851" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika discount -->'; ?>