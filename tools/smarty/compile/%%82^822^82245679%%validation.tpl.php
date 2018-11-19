<?php /* Smarty version 2.6.20, created on 2017-01-01 19:50:20
         compiled from /home/motokofr/public_html/modules/sbercard/validation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/sbercard/validation.tpl', 1, false),array('function', 'convertPrice', '/home/motokofr/public_html/modules/sbercard/validation.tpl', 57, false),)), $this); ?>
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

<?php $this->assign('card_no', '5469490013591751'); ?>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Оплата на карту Сбербанка'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
  <hr id="print" noshade size="6">


<?php $this->assign('current_step', 'payment'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2>Оплата на карту Сбербанка</h2>



<div class="rte" style="float: left; margin-right: 20px">
    <img src="<?php echo $this->_tpl_vars['this_path']; ?>
sbercard.png">
</div>

<div class="rte">
    <p>Сервис перевода с карты на карту предоставлен Сбербанком России<p>
    <p>Комиссия от 0% до 1%</p>
    
    <form action="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
validation.php" method="post">
    	<input type="hidden" name="confirm" value="1" />
        <br><br>
        <p>Войдите в Сбербанк Онлайн и выберите "Перевод клиенту Сбербанка"</p>
        
        <img style="max-width:270px; height: 285px" src="<?php echo $this->_tpl_vars['this_path']; ?>
step1.jpg">&nbsp;
        <img style="max-width:270px; height: 285px" src="<?php echo $this->_tpl_vars['this_path']; ?>
step2.jpg">
        <br>
        <p>Скопируйте номер нашей карты (чуть ниже)</p>
        <p>Вставьте его в поле "Номер карты получателя"</p>
        
        <h3>Не заполняйте "Сообщение получателю"!<br>Банк может не пропустить его!</h3>
        
        <fieldset class="address" style="min-height: 0;margin:20px 0 10px 0; ">
            <legend>Скопируйте номер карты сейчас</legend>
            <center><p style="font-size: 24pt!important;font-weight: bold;  padding: 10px 0; width: auto;"><?php echo $this->_tpl_vars['card_no']; ?>
</p></center>
        </fieldset>
        
        <p style="margin:0; text-align: center; width: auto">
            Сумма к оплате:
        </p>
        <p style="margin: 0px 0 0px 0; font-size: 24pt;font-weight: normal;text-align: center;">
     		<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total']), $this);?>

        </p>	
        <br>
        
    <p style="margin:0; text-align: center;">
    	<input type="submit" name="submit" value="Оплатить (в новом окне)" class="ebutton green large" onclick="window.open('https://online.sberbank.ru','_blank')" />
    	<br><br>
    	<a class="nonprintable" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=3">Другие способы оплаты</a>
    </p>
    
    </form>
</div>
<br><br>
<?php $this->assign('nobutton', 1); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-confirmation-product-line.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
