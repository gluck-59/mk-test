<?php /* Smarty version 2.6.20, created on 2017-12-09 14:31:12
         compiled from /home/motokofr/public_html/themes/Earth/address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/address.tpl', 11, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/address.tpl', 16, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/address.tpl', 126, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/address.tpl', 158, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>
<link href="/themes/Earth/css/suggestions.css" type="text/css" rel="stylesheet" />
<!--[if lt IE 10]>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your addresses'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'Your addresses'), $this);?>
</h2>

<!-- h3><?php if (isset ( $this->_tpl_vars['id_address'] )): ?><?php echo smartyTranslate(array('s' => 'Modify the address'), $this);?>
 <?php if (isset ( $_POST['alias'] )): ?>"<?php echo $_POST['alias']; ?>
"<?php elseif ($this->_tpl_vars['address']->alias): ?>"<?php echo ((is_array($_tmp=$this->_tpl_vars['address']->alias)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?><?php else: ?><?php echo smartyTranslate(array('s' => 'Здесь можно добавить или изменить адрес доставки посылок'), $this);?>
<?php endif; ?></h3-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p class="required" style="text-indent: 6px;" ><sup>&bull;</sup> <?php echo smartyTranslate(array('s' => 'Непременно!'), $this);?>
</p>
<br>

<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php" method="post" class="add_address">
	<div class="add_address">
		
		<fieldset class="add_address">
			<legend for="firstname"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'First name'), $this);?>
</legend>
			<input required type="text" name="firstname" id="firstname" value="<?php if (isset ( $_POST['firstname'] )): ?><?php echo $_POST['firstname']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
		</fieldset>
	
		<fieldset class="add_address">
			<legend for="lastname"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Last name'), $this);?>
</legend>
			<input required type="text" id="lastname" name="lastname" value="<?php if (isset ( $_POST['lastname'] )): ?><?php echo $_POST['lastname']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
		</fieldset>

		<fieldset class="add_address">
			<legend for="phone"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Home phone'), $this);?>
</legend>
			<input type="text" placeholder="12 цифр" id="phone" name="phone" value="<?php if (isset ( $_POST['phone'] )): ?><?php echo $_POST['phone']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->phone)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
		</fieldset>
		<p style="margin-top: -30px;  float: right;"><a class="tips" id="model" onclick="javascript:$('#inn').toggle(100)">зачем это?</a></p>
		<p hidden class="textarea" id="inn" style="overflow: hidden; margin-bottom: 20px;">
		Нам очень жаль, но согласно приказу №1861 ФТС России с 7 декабря 2017 года все граждане Российской Фередации обязаны указывать свой ИНН при покупках через интернет.<br>
		Все посылки без указания ИНН будут отправлены обратно.<br><br>
       		<a style="text-align: center" class="ebutton blue" href="http://customs.ru/images/stories/2017/December/prikaz_fts_1861.pdf" target="_blank">Ссылка на приказ</a>&nbsp;
            <a style="text-align: center" class="ebutton orange" href="https://service.nalog.ru/inn.do" target="_blank">Узнать мой ИНН</a><br>
		</p>		
				
		<fieldset class="add_address">
			<legend for="other"><?php echo smartyTranslate(array('s' => 'Additional information'), $this);?>
</legend>			
			<input id="other" name="other" value="<?php if (isset ( $_POST['other'] )): ?><?php echo $_POST['other']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->other)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" placeholder="чтобы все точно подошло" />
		</fieldset>
		<p style="margin-top: -30px;  float: right;"><a class="tips" id="model" onclick="javascript:$('#model_tip').toggle(100)">а это еще зачем?</a></p>
		<p hidden class="textarea" id="model_tip" style="overflow: hidden; margin-bottom: 20px;">
		Это необязательно. Мы сравним заказанные ништяки с твоим мотоциклом. <br>И если ты ошибешься при выборе ништяка, будем уточнять.
		</p>
		
	</div>		

		<fieldset class="add_address" id="fsugaddress" style="display:none;-webkit-transition: all 0.3s ease; ">
			<legend for="sugaddress" id="lsugaddress"><?php echo smartyTranslate(array('s' => 'Начни вводить адрес'), $this);?>
</legend>
			<div class="rte">			
			<input autofocus id="sugaddress" name="sugaddress" type="text" style="width:99%;" placeholder="Забыл свой индекс? Начни вводить адрес, а индекс мы возьмем на себя" onblur="onblurit();" onfocus="onfocusit();" value="<?php if ($this->_tpl_vars['city'] && ! $this->_tpl_vars['address']->address1 && ! $this->_tpl_vars['address']->city && ! $this->_tpl_vars['address']->postcode): ?><?php echo $this->_tpl_vars['city']; ?>
<?php endif; ?>" />
			</div>
		</fieldset>

	<div class="add_address">

		<fieldset class="add_address" id="paddress1" >
			<legend for="address1"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Address'), $this);?>
</legend>
				<input required type="text" id="address1" name="address1" value="<?php if (isset ( $_POST['address1'] )): ?><?php echo $_POST['address1']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" placeholder ="" />
		</fieldset>
		
		<fieldset class="add_address" id="pcity" style="opacity:1;" >		
			<legend for="city"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Город, область'), $this);?>
</legend>			
			<input required id="city" type="text" class="city" name="city" placeholder="" value="<?php if (isset ( $_POST['city'] )): ?><?php echo $_POST['city']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
		</fieldset>
		
		<fieldset class="add_address" id="ppostcode" >
			<legend for="postcode"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Postal code / Zip code'), $this);?>
</legend>			
			<input required type="text" class="postcode" id="postcode" name="postcode" value="<?php if (isset ( $_POST['postcode'] )): ?><?php echo $_POST['postcode']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" placeholder="" />
			<span style="float:none" id="postindex_result"></span>
		</fieldset>
			
		<p class="required select">&nbsp;</p>
		<p class="required select">
			<sup>&bull;</sup>&nbsp;&nbsp;<label for="id_country"><?php echo smartyTranslate(array('s' => 'Country'), $this);?>
</label>&nbsp;&nbsp;&nbsp;
			<select id="id_country" name="id_country"><?php echo $this->_tpl_vars['countries_list']; ?>
</select>
		</p>
		
		

<br><br>
	</div>
<a href="javascript::">
     <h2 class="cabinet" id="bl1" name="bl1" onclick="javascript:$('#textbl1').toggle(100)">
Дополнительная информация <span>(редактировать)</span></h2>
</a>

<div class="add_address">

<div hidden  id='textbl1'>
<br><br>

	<fieldset class="add_address">		
		<legend for="phone_mobile"><?php echo smartyTranslate(array('s' => 'Mobile phone'), $this);?>
</legend>			
		<input type="text" id="phone_mobile" name="phone_mobile" value="<?php if (isset ( $_POST['phone_mobile'] )): ?><?php echo $_POST['phone_mobile']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->phone_mobile)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" placeholder=""/>
	</fieldset>

	<fieldset class="add_address">		
		<legend for="address2"><?php echo smartyTranslate(array('s' => 'Address (2)'), $this);?>
</legend>
		<input type="text" id="address2" placeholder="" name="address2" value="<?php if (isset ( $_POST['address2'] )): ?><?php echo $_POST['address2']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
	</fieldset>
		<p style="margin-top: -30px;  float: right;"><a class="tips" id="model"  onclick="javascript:$('#passport').toggle(100)">зачем это?</a></p>

	<fieldset class="add_address">		
		<legend for="company"><?php echo smartyTranslate(array('s' => 'Company'), $this);?>
</legend>
		<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
		<input type="text" id="company" name="company" value="<?php if (isset ( $_POST['company'] )): ?><?php echo $_POST['company']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" placeholder="1234, №123456, выд. <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
 Бюрократическим ОВД г. Бабруйска" />
	</fieldset>

	<p style="margin-top: -30px;  float: right;"><a class="tips" id="model"  onclick="javascript:$('#passport').toggle(100)">а это еще зачем?</a></p>
	<p  hidden class="textarea" id="passport" style="overflow: hidden;">
		Отчество и паспорт — новое требование таможни, введенное в 2014 году. <br>Только для курьерской доставки: обычных почтовых посылок не касается.
	</p>
</div>


<p class="clear">&nbsp;</p><p class="clear">&nbsp;</p>

	<fieldset class="add_address" id="adress_alias">		
		<legend for="alias"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Assign an address title for future reference'), $this);?>
</legend>
		<input type="text" id="alias" name="alias" value="<?php if (isset ( $_POST['alias'] )): ?><?php echo $_POST['alias']; ?>
<?php elseif ($this->_tpl_vars['address']->alias): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->alias)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php elseif (isset ( $this->_tpl_vars['select_address'] )): ?><?php echo smartyTranslate(array('s' => 'My address'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'My address'), $this);?>
<?php endif; ?>" />
	</fieldset>
</div>

	<input type="checkbox" id="pdn" checked name="pdn">&nbsp;&nbsp;<span>Я даю согласие на обработку моих персональных данных</span>
	<br><br>
		
		<p class="pdn">
		Я даю согласие Motokofr.com на обработку персональных данных в целях выполнения моих заказов, включая осуществление действий (операций) с моими персональными данными, такими как сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (предоставление), обезличивание, блокирование, удаление в электронной форме.
		</p>
		<p class="pdn">
		Настоящее согласие действует со дня его подписания до момента достижения цели обработки персональных данных или его отзыва. Мне разъяснено, что настоящее согласие может быть отозвано путем удаления данного адреса.
		</p>

<p class="clear">&nbsp;</p>
<p class="clear">&nbsp;</p>

	<p id="submit2" style="text-align:center">
		<?php if (isset ( $this->_tpl_vars['id_address'] )): ?><input type="hidden" name="id_address" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /><?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" name="back" value="<?php echo $this->_tpl_vars['back']; ?>
?step=1" /><?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['select_address'] )): ?><input type="hidden" name="select_address" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['select_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /><?php endif; ?>
		<input type="submit" name="submitAddress" id="submitAddress" value="<?php echo smartyTranslate(array('s' => 'Save'), $this);?>
" class="ebutton orange large" />
	</p>
</form>

<script type="text/javascript">
// <![CDATA[
idSelectedCountry = <?php if (isset ( $_POST['id_state'] )): ?><?php echo ((is_array($_tmp=$_POST['id_state'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php else: ?>false<?php endif; ?>;
countries = new Array();
<?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country']):
?>
	<?php if (isset ( $this->_tpl_vars['country']['states'] )): ?>
		countries[<?php echo ((is_array($_tmp=$this->_tpl_vars['country']['id_country'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
] = new Array();
		<?php $_from = $this->_tpl_vars['country']['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['states'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['states']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['state']):
        $this->_foreach['states']['iteration']++;
?>
			countries[<?php echo ((is_array($_tmp=$this->_tpl_vars['country']['id_country'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
]['<?php echo ((is_array($_tmp=$this->_tpl_vars['state']['id_state'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
'] = '<?php echo $this->_tpl_vars['state']['name']; ?>
';
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
$(function(){
	$('.id_state option[value=<?php if (isset ( $_POST['id_state'] )): ?><?php echo $_POST['id_state']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->id_state)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>]').attr('selected', 'selected');
});
//]]>
</script>

<?php echo '
<script>
// транслитерация
function toTranslit(text) {
  return text.replace(/([а-яё])|([\\s_-])|([^a-z\\d])/gi,
  function (all, ch, space, words, i) {
    if (space || words) {
      return space ? \' \' : \'\';
    }
    var code = ch.charCodeAt(0),
      index = code == 1025 || code == 1105 ? 0 :
        code > 1071 ? code - 1071 : code - 1039,
      t = [\'yo\', \'a\', \'b\', \'v\', \'g\', \'d\', \'e\', \'zh\',
        \'z\', \'i\', \'y\', \'k\', \'l\', \'m\', \'n\', \'o\', \'p\',
        \'r\', \'s\', \'t\', \'u\', \'f\', \'h\', \'c\', \'ch\', \'sh\',
        \'shch\', \'\', \'y\', \'\', \'e\', \'yu\', \'ya\'
      ]; 
    return t[index];
  });
}


// коррекция гуглозаполнятеля
function firstUpper(text)
{
// здесь вставляются пробелы и запятые
s = text.charAt(0).toUpperCase() + text.substr(1)
s = s.replace("Russia,","");
s = s.replace("oblast","obl, ");
s = s.replace("respublika",", ");
//s = s.replace("kray","kray ")
s = s.replace("avtonomnyy okrug","AO, ")
s = s.replace("rayon","r-n, ")
return s;
}
</script>

<script type="text/javascript">

var xhr = new XMLHttpRequest();
xhr.open("GET", \'https://dadata.ru/api/v2/version\', false);
xhr.send(null); 
if (xhr.readyState == 4) 
{
	document.getElementById(\'fsugaddress\').style.display = \'block\';
	$("#sugaddress").suggestions({
        serviceUrl: "https://dadata.ru/api/v2",
        token: "0a4626882bbbd48b65b3d11beb6e1332aa0a366c",
        type: "ADDRESS",
        count: 10,
        /* Вызывается, когда пользователь выбирает одну из подсказок */
        onSelect: function(suggestion) {

			if(suggestion.data.postal_code != null) 
			{
			document.getElementById(\'ppostcode\').style.display = \'block\';
			document.getElementById(\'postcode\').value = suggestion.data.postal_code;
			}
			
			if(suggestion.data.country != null) 
			{
				document.getElementById(\'city\').value = firstUpper(toTranslit(suggestion.data.region_with_type));
				if(suggestion.data.city != null) document.getElementById(\'city\').value += \', \' + firstUpper(toTranslit(suggestion.data.city));
				if(suggestion.data.area_with_type != null) document.getElementById(\'city\').value += \', \' + firstUpper(toTranslit(suggestion.data.area_with_type)) + \'. \' + firstUpper(toTranslit(suggestion.data.area_with_type));								
				if(suggestion.data.settlement != null) document.getElementById(\'city\').value += \', \' + toTranslit(suggestion.data.settlement_type) + \'. \' + firstUpper(toTranslit(suggestion.data.settlement));

			}
			
			if(suggestion.data.street != null) document.getElementById(\'address1\').value = firstUpper(toTranslit(suggestion.data.street));
			if(suggestion.data.house != null) document.getElementById(\'address1\').value += \', \' + suggestion.data.house;			
			if(suggestion.data.flat != null) document.getElementById(\'address1\').value += \'-\' + suggestion.data.flat;						

//            console.log(suggestion.data);
        }
    });
}    
    
    function onfocusit()
    {
//	    document.getElementById(\'sugaddress\').style.margin = \'0 0 110px 0\';
	    document.getElementById(\'fsugaddress\').style.border = \'0\';	    
    }
    
    function onblurit()
    {
	    document.getElementById(\'sugaddress\').style.margin = \'0\';
	    document.getElementById(\'fsugaddress\').style.border = \'solid 1px #aaa\';	    
	    document.getElementById(\'fsugaddress\').style.border.bottom = \'0\';	    	    

		if(document.getElementById(\'postcode\').value != \'\' && document.getElementById(\'city\').value != \'\' && document.getElementById(\'address1\').value != \'\')
		{
/*		    document.getElementById(\'sugaddress\').value = \'\'; */
//			document.getElementById(\'fsugaddress\').style.display = \'none\';		    
		}
    }
</script>



'; ?>


<?php echo '<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459827 = new Ya.Metrika({ id:24459827, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/24459827" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->'; ?>