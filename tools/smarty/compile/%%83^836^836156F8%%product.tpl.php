<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:59
         compiled from /home/motokofr/public_html/modules/mailalerts/product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/mailalerts/product.tpl', 15, false),)), $this); ?>
<!-- MODULE MailAlerts -->
<span id="mailalert_span">Этого ништяка сейчас нет в наличии. <br>
Если хочешь, мы напишем тебе письмо, когда он снова появится.</span>

<span hidden id="mailalert_sucess">Порядок. Как только ништяк появится на складе, тебе придет уведомление.<br>
Спасибо!</span><br>

<?php if ($this->_tpl_vars['email']): ?>
	<br><span id="mailalert_need">Нужно только ввести email:</span></br>
	<input type="email" id="oos_customer_email" name="customer_email" size="20" placeholder="твой e-mail" class="mailalerts_oos_email" onclick="clearText();" /><br />
<?php endif; ?>


<br />
<span><a href="javascript:;" onclick="addNotification();" class="ebutton blue" id="mailalert_link"><?php echo smartyTranslate(array('s' => 'Напишите!','mod' => 'mailalerts'), $this);?>
</a></span>


<script type="text/javascript">
oosHookJsCodeFunctions.push('oosHookJsCodeMailAlert');

function clearText()
{
	if ($('#oos_customer_email').val() == 'your@email.com')
		$('#oos_customer_email').val('');
}

// гость
function oosHookJsCodeMailAlert()
{
	$.ajax({
		type: 'POST',
		url: '<?php echo $this->_tpl_vars['base_dir']; ?>
modules/mailalerts/mailalerts-ajax_check.php',
		data: 'id_product=<?php echo $this->_tpl_vars['id_product']; ?>
&id_product_attribute='+$('#idCombination').val(),
		success: function (msg)
		{
			if (msg == '0')
			{
				$('#mailalert_link').show().attr('href', 'modules/mailalerts/mailalerts-add.php?id_product=<?php echo $this->_tpl_vars['id_product']; ?>
&id_product_attribute='+$('#idCombination').val());
				$('#oos_customer_email').show();
			}
			else
			{
				$('#mailalert_link').hide();
				$('#oos_customer_email').hide();
				$('#mailalert_need').hide();				
				$('#mailalert_sucess').show();				
				$('#mailalert_span').hide();
		
			}
		}
	});
}

// юзер
function  addNotification()
{

	if ($('#oos_customer_email').val() == '')
	alert('Введи свой email. На него придет уведомление, когда этот ништяк снова появится на складе. ')
	if ($('#oos_customer_email').val() == '')
	return

	$.ajax({
		type: 'POST',
		url: '<?php echo $this->_tpl_vars['base_dir']; ?>
modules/mailalerts/mailalerts-ajax_add.php',
		data: 'id_product=<?php echo $this->_tpl_vars['id_product']; ?>
&id_product_attribute='+$('#idCombination').val()+'&customer_email='+$('#oos_customer_email').val(),
		success: function (msg)
		{
			if (msg == '1')
			{
				$('#mailalert_link').hide();
				$('#mailalert_span').hide();
				$('#oos_customer_email').hide();
				$('#mailalert_need').hide();								
				$('#mailalert_sucess').show();								
								
			}
		}
	});
	return false;
}
</script>

<!-- END : MODULE MailAlerts -->