<?php /* Smarty version 2.6.20, created on 2016-11-20 19:02:16
         compiled from /home/motokofr/public_html/modules/sbercard/payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/sbercard/payment.tpl', 2, false),)), $this); ?>
<p class="payment_module">
	<a href="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
validation.php" title="<?php echo smartyTranslate(array('s' => 'Pay with cash on delivery (COD)','mod' => 'sbercard'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['this_path']; ?>
sbercard.png" alt="<?php echo smartyTranslate(array('s' => 'Pay with cash on delivery (COD)','mod' => 'sbercard'), $this);?>
" />
		<?php echo smartyTranslate(array('s' => 'Pay with cash on delivery (COD)','mod' => 'sbercard'), $this);?>

		<br /><?php echo smartyTranslate(array('s' => 'You pay for the merchandise upon delivery','mod' => 'sbercard'), $this);?>

		<br style="clear:both;" />
	</a>
</p>