<?php /* Smarty version 2.6.20, created on 2016-11-20 19:02:16
         compiled from /home/motokofr/public_html/modules/paypalapi/payment/payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/paypalapi/payment/payment.tpl', 2, false),)), $this); ?>
<p class="payment_module">
	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/paypalapi/payment/submit.php" title="<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypalapi'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/paypalapi/paypalapi1.png" alt="<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypalapi'), $this);?>
" height="70px"/>
		
				
		<br>
		<span><?php echo smartyTranslate(array('s' => 'Банковской картой через Paypal.','mod' => 'paypalapi'), $this);?>

		<br>
		<?php echo smartyTranslate(array('s' => 'Моментально.','mod' => 'paypalapi'), $this);?>
</span>
		<br>
		<?php echo smartyTranslate(array('s' => 'Комиссия 3,9%','mod' => 'paypalapi'), $this);?>
</span>		

	</a>
</p>