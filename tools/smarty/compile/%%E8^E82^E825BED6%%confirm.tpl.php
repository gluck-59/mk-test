<?php /* Smarty version 2.6.20, created on 2016-11-21 12:00:59
         compiled from /home/motokofr/public_html/modules/paypalapi/payment/../confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/paypalapi/payment/../confirm.tpl', 1, false),array('function', 'convertPriceWithCurrency', '/home/motokofr/public_html/modules/paypalapi/payment/../confirm.tpl', 55, false),array('modifier', 'escape', '/home/motokofr/public_html/modules/paypalapi/payment/../confirm.tpl', 46, false),array('modifier', 'stripslashes', '/home/motokofr/public_html/modules/paypalapi/payment/../confirm.tpl', 46, false),)), $this); ?>
<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php"><?php echo smartyTranslate(array('s' => 'Your shopping cart','mod' => 'paypalapi'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'PayPal','mod' => 'paypalapi'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('current_step', 'payment'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2>Оплата через Paypal</h2>

<!-- PayPal Logo -->
<table style="float:left; margin: 0px 30px 100% 0px;" border="0" cellpadding="10" cellspacing="0" align="center">
	<tr>
		<td align="center"></td>
		</tr>
	<tr>
		<td align="center">
		<a href="https://www.paypal.com/ru/webapps/mpp/paypal-popup" title="PayPal Как это работает" onclick="javascript:window.open('https://www.paypal.com/ru/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
		<img src="https://www.paypalobjects.com/webstatic/ru_RU/mktg/business/pages/logo-center/RU-bdg_secured_by_pp_2ln.png" border="0" alt="Secured by PayPal">
		</a>
		
		<div style="text-align:center"><a href="https://www.paypal.com/ru/webapps/mpp/buy" target="_blank">
		<font size="2" face="Arial" color="#0079CD"><strong>Как это работает?</strong></font>
		</a>
		</div>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
    		<img src="../verified.png">
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
    		<img src="../securecode.png">
		</td>
	</tr>    	
</table>
<!-- PayPal Logo -->




<form action="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
<?php echo $this->_tpl_vars['mode']; ?>
submit.php" method="post">
	<input type="hidden" name="token" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ppToken'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
	<input type="hidden" name="payerID" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['payerID'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
	
<div class="rte">
	<p>
		<!--img src="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/paypalapi/paypalapi.gif" alt="<?php echo smartyTranslate(array('s' => 'PayPal','mod' => 'paypalapi'), $this);?>
" style="float:left; margin: 0px 30px 60px 0px;" /-->
		
		<?php echo smartyTranslate(array('s' => 'You have chosen to pay with PayPal.','mod' => 'paypalapi'), $this);?>
<br><br>
		<?php echo smartyTranslate(array('s' => 'The total amount of your order is','mod' => 'paypalapi'), $this);?>
&nbsp;
		<span id="amount_<?php echo $this->_tpl_vars['currency']->id; ?>
" class="price"><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['total'],'currency' => $this->_tpl_vars['currency']), $this);?>
</span> <?php echo smartyTranslate(array('s' => '(tax incl.)','mod' => 'paypalapi'), $this);?>
.
		<br>
		Комиссия Paypal (3,9%) будет автоматически рассчитана на сайте Paypal.
	</p>		
    <p>&nbsp;</p>

	<!--p align="center">
		<img style="height:50px" src="/themes/Earth/img/icon/alert.png">
	</p>

	<?php echo smartyTranslate(array('s' => 'Here is a short summary of your order:','mod' => 'paypalapi'), $this);?>

    -->

	
	
		<p class="" align="center">
		<input type="hidden" name="currency_payement" value="<?php echo $this->_tpl_vars['currency']->id; ?>
">
		<input type="submit" name="submitPayment" value="<?php echo smartyTranslate(array('s' => 'Оплатить','mod' => 'paypalapi'), $this);?>
" class="ebutton green large" onclick="javascript:$('#getpp').show()" />
		<br><br>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=3"><?php echo smartyTranslate(array('s' => 'Other payment methods','mod' => 'paypalapi'), $this);?>
</a>
	</p>

	<div hidden id="getpp" style="">
        <div id="getpp_in">
        	<p><img src="http://motokofr.com/img/loader.gif"></p>
            <p>Переходим на защищенный сайт Paypal...</p>
        </div>
	</div>				


</form>
</div>
