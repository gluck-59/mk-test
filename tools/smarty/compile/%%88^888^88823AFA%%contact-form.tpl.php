<?php /* Smarty version 2.6.20, created on 2018-08-20 15:21:36
         compiled from /home/motokofr/public_html/themes/Earth/contact-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/contact-form.tpl', 2, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/contact-form.tpl', 22, false),array('modifier', 'count', '/home/motokofr/public_html/themes/Earth/contact-form.tpl', 26, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/contact-form.tpl', 32, false),array('modifier', 'stripslashes', '/home/motokofr/public_html/themes/Earth/contact-form.tpl', 65, false),)), $this); ?>
<!-- contact-form -->
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Contact'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Contact us'), $this);?>
</h2>

<?php if (isset ( $this->_tpl_vars['confirmation'] )): ?>
<script>
toastr.success('<?php echo smartyTranslate(array('s' => 'Your message has been successfully sent to our team.'), $this);?>
');
//setTimeout(window.location.href = "http://motokofr.com", 2000);
</script>

<p class="warning"><?php echo smartyTranslate(array('s' => 'Your message has been successfully sent to our team.'), $this);?>
</p>


<p align="center" style="margin:20px 0 50px">
<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><img class="icon" alt="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
" src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.png"/></a><br><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a>
</p>

<?php else: ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<form name="mail" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['request_uri'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" method="post" class="std">
		<fieldset>
			<h3><?php echo smartyTranslate(array('s' => 'Отдел исполнения желаний'), $this);?>
</h3>
			
			<?php if (count($this->_tpl_vars['contacts']) > 1): ?>
    			<p class="select" align="center">
    				<!--[if IE]><label for="id_contact"><?php echo smartyTranslate(array('s' => 'Subject'), $this);?>
</label><![endif]-->
    				<select id="id_contact" name="id_contact" onchange="showElemFromSelect('id_contact', 'desc_contact')">
    					<option value="0"><?php echo smartyTranslate(array('s' => '-- Choose --'), $this);?>
</option>
    				<?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
    					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['id_contact'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" <?php if (isset ( $_POST['id_contact'] ) && $_POST['id_contact'] == $this->_tpl_vars['contact']['id_contact']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
    				<?php endforeach; endif; unset($_from); ?>
    				</select>
    			</p>
    
    			<p id="desc_contact0" class="desc_contact">&nbsp;</p>
    			<br>
                <?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
        			<p align="center" id="desc_contact<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['id_contact'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" class="desc_contact" style="display:none;">
        			<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
       			<?php endforeach; endif; unset($_from); ?>
    			<br>

            <?php else: ?>
                <p hidden class="select" align="center">
    				<!--[if IE]><label for="id_contact"><?php echo smartyTranslate(array('s' => 'Subject'), $this);?>
</label><![endif]-->
    				<select autofocus id="id_contact" name="id_contact" onchange="showElemFromSelect('id_contact', 'desc_contact')">
    				<?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
    					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['id_contact'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" <?php if (isset ( $_POST['id_contact'] ) && $_POST['id_contact'] == $this->_tpl_vars['contact']['id_contact']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
    				<?php endforeach; endif; unset($_from); ?>
    				</select>
    			</p>
    
    			<p hidden id="desc_contact0" class="desc_contact">&nbsp;</p>
                <?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
        			<p hidden align="center" id="desc_contact<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['id_contact'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" class="desc_contact" style="display:none;">
        			<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
    			<?php endforeach; endif; unset($_from); ?>

            <?php endif; ?>

		<p class="textarea" align="center">
			<!--[if IE]><label for="message"><?php echo smartyTranslate(array('s' => 'Message'), $this);?>
</label><![endif]-->
			 <textarea required placeholder="текст сообщения..." style="height: 90pt;" id="message" name="message" rows="7" cols="35"><?php if (isset ( $_POST['message'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?></textarea>
		</p>
		
		<br>
		<p class="text" align="center">
			<!--[if IE]><label for="email"><?php echo smartyTranslate(array('s' => 'E-mail'), $this);?>
</label><![endif]-->
			<input required type="email" id="email" name="from" placeholder="...и e-mail для ответа" value="<?php if (isset ( $_COOKIE['email'] )): ?><?php echo $_COOKIE['email']; ?>
<?php endif; ?>"/>
		</p>
		<br>
		<p class="text" align="center">Письма на mail.ru НЕ ДОХОДЯТ. Пожалуйста используйте качественные почтовые сервисы.</p>

		<p class="submit"><center>
   			<div class="g-recaptcha" data-sitekey="6LcQNQ8TAAAAAIx9X8LF5blhDemfqG3RnKq3F9n4"></div>
   			<p>&nbsp;</p>
			<button type="submit" name="submitMessage" id="submitMessage" value="<?php echo smartyTranslate(array('s' => 'Send'), $this);?>
" class="ebutton large blue" /><?php echo smartyTranslate(array('s' => 'Send'), $this);?>
</button>
			</center>
		</p>
	</fieldset>
</form>

<div class="rte">

    <!--h2>Бесплатный звонок</h2>
    <p align="center">Введите свой телефон с кодом страны в любом формате. <br>Свободный оператор тут же перезвонит. Бесплатно.</p>
        <script src="http://comtube.com/get_js.php?option=callme_api&lang=ru" charset="utf-8" type="text/javascript"></script>
    <p align="center">
    	<span style="font-size:12pt">+</span>
        <input placeholder="79876543210 " id="phonenum" type="text" onkeydown="callmeCheckEnter(event);" autocomplete="on"><br><br>
        <input class="ebutton large blue" type="button" onclick="callmeCall()" value="Позвонить">
    </p>    
        <p>&nbsp;</p-->

    
    
    <h2>Чат</h2>
    <p align="center">Кнопка чата — в правом нижнем углу на всех страницах. <br /> Зайдите на страницу с интересующим ништяком и нажмите ее.</p>
    <p>&nbsp;</p>

</div>

    <h2>Online-мессенджеры</h2>
    
    <center>
        <p>Telegram:</p><br /> 
        <a href="https://telegram.me/motokofr" style=" border:0;">
            <img style="width:60px;" src="https://desktop.telegram.org/img/td_logo.png" id="telegram" />
            </a>
        

    
            <!--br /><p>ICQ: 473726424</p><br />
            <img src="http://status.icq.com/online.gif?icq=473726424&amp;img=21" id="icq" /-->
    </center>
    
<?php endif; ?>



<?php echo '
<script type="text/javascript">

function callmeInit() {
    clmAPI.setHash(\'DlyZnG9b1t0lsT@KpIwYHg\');


    var failCallback = function(errObj) { 
        var str = errObj.err_desc;
        toastr.error(str);
    };
    
    var successCallback = function() { 
        var str = \'Минуточку, соединяемся...\';
        toastr.success(str);
    };
    
    clmAPI.setCallSuccessCallback(successCallback)
    clmAPI.setCallFailCallback(failCallback)
}


function callmeCall()
{
    callmeInit();
    var phonenum = document.getElementById(\'phonenum\').value;
//    var phonenum = parseInt(phonenum.replace(/\\D+/g,""));    
    var phonenum = phonenum.replace(/\\D+/g,"");    
    if (phonenum.length == 11)
    {
        clmAPI.call(parseInt(phonenum));
    }
    else
    {
        toastr.error(\'11 цифр с кодом страны\', \'Ошибка в номере\');
    }
}


function callmeCheckEnter(event)
{
    if (checkHitEnter(event)) 
    { 
        callmeCall(); 
    }
}

function checkHitEnter(evt) 
{ 
    evt = evt || window.event; 
    var key = evt.keyCode || evt.charCode || evt.which; 
    return (key == 13) 
}
</script>

<!-- Yandex.Metrika contact-form --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459746 = new Ya.Metrika({id:24459746, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24459746" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika contact-form -->
'; ?>


<script src='https://www.google.com/recaptcha/api.js'></script>