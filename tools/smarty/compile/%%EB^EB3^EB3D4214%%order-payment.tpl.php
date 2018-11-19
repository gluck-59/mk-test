<?php /* Smarty version 2.6.20, created on 2018-07-02 19:11:51
         compiled from /home/motokofr/public_html/themes/Earth/order-payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/order-payment.tpl', 16, false),)), $this); ?>
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

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your payment method'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="">
<?php $this->assign('current_step', 'payment'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2><?php echo smartyTranslate(array('s' => 'Choose your payment method'), $this);?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['HOOK_PAYMENT']): ?>
	<?php echo $this->_tpl_vars['HOOK_PAYMENT']; ?>

<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No payment modules have been installed yet.'), $this);?>
<br>
		Скажи нам, куда отправлять посылку.<br>
		<a class="ebutton orange" href="/address.php" style="text-align:center;">Новый адрес</a>
	</p>
<?php endif; ?>
</div>

<!--p><a target="_blank" href="/cms.php?id_cms=5">Подробнее о разных способах оплаты (в новом окне)</a><br-->
<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=2" title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" >&laquo; <?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a></p>


<?php echo '
<!-- Yandex.Metrika order-payment --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459536 = new Ya.Metrika({id:24459536, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24459536" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika order-payment -->
'; ?>

