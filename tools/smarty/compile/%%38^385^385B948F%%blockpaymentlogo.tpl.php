<?php /* Smarty version 2.6.20, created on 2018-07-02 19:22:18
         compiled from /home/motokofr/public_html/modules/blockpaymentlogo/blockpaymentlogo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/home/motokofr/public_html/modules/blockpaymentlogo/blockpaymentlogo.tpl', 76, false),)), $this); ?>
<?php if (@site_version == 'full'): ?>
<!-- Block payment logo module -->



<div id="paiement" style="text-align: center;">

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
visa.png" />
</a>

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
mastercard.png" />
</a>

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
" onclick="javascript:window.open('https://www.paypal.com/ru/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=350');">
	<img  class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
paypal.png" alt="Что такое PayPal" />
</a>

<!--a href="https://passport.webmoney.ru/asp/certview.asp?wmid=196530046929" target=_blank>
	<img class="banki" SRC="<?php echo $this->_tpl_vars['img_dir']; ?>
webmoney.png" title="Здесь находится аттестат нашего WM идентификатора 196530046929" border="0">
</a>

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">		
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
sberbank.png" />
</a>

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">		
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
alfabank.png" />
</a>

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">		
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
vtb24.png" />
</a>


<!--a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">		
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
tcs.gif" />
</a>		

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">		
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
mts.jpg" />
</a>		

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">		
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
svz.png" />
</a>		

<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">		
	<img class="banki" src="<?php echo $this->_tpl_vars['img_dir']; ?>
euroset.png" />
</a-->		

<?php echo '<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=924826&amp;from=informer"
target="_blank" rel="nofollow"><img hidden src="//bs.yandex.ru/informer/924826/3_0_A67171FF_865151FF_1_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:924826,lang:\'ru\'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->'; ?>


<br><center style="color: #641; padding: 10px">
© Motokofr 2010–<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
</center>
	
</div>

<!-- /Block payment logo module -->
<?php endif; ?>