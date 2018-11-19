<?php /* Smarty version 2.6.20, created on 2016-11-20 13:14:13
         compiled from /home/motokofr/public_html/themes/Earth/authentication.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/authentication.tpl', 1, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/authentication.tpl', 34, false),array('modifier', 'stripslashes', '/home/motokofr/public_html/themes/Earth/authentication.tpl', 34, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/authentication.tpl', 220, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Login'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--h2><?php if (! isset ( $this->_tpl_vars['email_create'] )): ?><?php echo smartyTranslate(array('s' => 'Log in'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Create your account'), $this);?>
<?php endif; ?></h2-->
<p>&nbsp;</p>

<?php $this->assign('current_step', 'login'); ?>
<?php if (@site_version == 'full'): ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (isset ( $this->_tpl_vars['confirmation'] )): ?>
	<div class="confirmation">
		<p class="warning"><?php echo smartyTranslate(array('s' => 'Your account has been successfully created.'), $this);?>
<?php if (isset ( $_POST['customer_firstname'] )): ?> <?php echo $_POST['customer_firstname']; ?>
<?php endif; ?>!</p><br><br>
		<p align="center">
			<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.png" alt="<?php echo smartyTranslate(array('s' => 'Your account'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Your account'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Access your account'), $this);?>
</a>
		</p>
	</div>
<?php else: ?>
	<?php if (! isset ( $this->_tpl_vars['email_create'] )): ?>
		<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" method="post" id="create-account_form" class="std <?php if (isset ( $_POST['email'] ) || isset ( $_COOKIE['email'] )): ?>hidden<?php endif; ?>" />
			<fieldset class="authentication">
				<h3><?php echo smartyTranslate(array('s' => 'Create your account'), $this);?>
</h3>

				<!--p class="text">
			<a href="http://market.yandex.ru/addresses.xml?callback=http%3A%2F%2Fmotokofr.com%2Fauthentication.php">
			<img src="http://img.motokofr.com/yandex_fast_order.png" border="0" alt="Адрес из профиля в Яндексе" title="Адрес из профиля в Яндексе" /></a>
			</p-->
				<p class="text">
					<span>
					<!--[if IE]><label style="margin:-10px 0 -5px 0" for="email_create">e-mail</label><![endif]-->
					<input required  autocomplete="on" title="e-mail" type="email" placeholder="e-mail" id="email_create" name="email_create" value="<?php if (isset ( $_POST['email_create'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['email_create'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" class="account_input" /></span>
				</p>
				<p class="text">
				<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" class="hidden" name="back" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['back'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php endif; ?>
					<input type="submit" id="SubmitCreate" name="SubmitCreate" class="ebutton blue" value="<?php echo smartyTranslate(array('s' => 'Create your account - button'), $this);?>
" />
					<input type="hidden" class="hidden" name="SubmitCreate" value="<?php echo smartyTranslate(array('s' => 'Create your account'), $this);?>
" />
				</p>
                <p class="create-account_form_legend">
    				Сообщаем о движении посылок. Никаких хитростей с рассылками. Никому не раздаем ваши адреса.
				</p>
			</fieldset>
		</form>

		<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" method="post" id="login_form" class="std"  onsubmit="getpp('Привет!');">
			<fieldset class="authentication">
				<h3><?php if (isset ( $_COOKIE['firstname'] )): ?>Привет, байкер <?php echo $_COOKIE['firstname']; ?>

				&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
index.php?my_logout"><span style="font-size:smaller; color: lightgray; text-decoration:underline;vertical-align: top;">Я не <?php echo $_COOKIE['firstname']; ?>
!</span></a>

				 <?php else: ?><?php echo smartyTranslate(array('s' => 'Already registered ?'), $this);?>
<?php endif; ?></h3>
				<p class="text">
					<span><!--[if IE]><label style="margin:-10px 0 -5px 0" for="email"><?php echo smartyTranslate(array('s' => 'E-mail'), $this);?>
</label><![endif]-->
					<input autocomplete="on" title="e-mail" required type="email" placeholder="e-mail" id="email" name="email" 
						value="<?php if (isset ( $_POST['email'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php elseif (isset ( $_COOKIE['email'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_COOKIE['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" class="account_input" /></span>
				</p>
				
				<p class="text">
					<span>
					<!--[if IE]><label style="margin:-10px 0 -5px 0" for="passwd"><?php echo smartyTranslate(array('s' => 'Password'), $this);?>
</label><![endif]-->
					<input required title="пароль" type="password" placeholder="пароль" id="passwd" name="passwd" value="<?php if (isset ( $_POST['passwd'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['passwd'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" class="account_input" /></span>
				</p>
				<p class="text">
					<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" class="hidden" name="back" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['back'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php endif; ?>
					<input type="submit" id="SubmitLogin" name="SubmitLogin" class="ebutton blue" value="<?php echo smartyTranslate(array('s' => 'Log in'), $this);?>
" />

<?php if (@site_version == 'full'): ?>
				</p>
				<p class="lost_password">
				<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
password.php"><?php echo smartyTranslate(array('s' => 'Forgot your password?'), $this);?>
</a>
				</p>
<?php endif; ?>				

<?php if (@site_version == 'mobile'): ?>				
</p>
<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
password.php"><?php echo smartyTranslate(array('s' => 'Forgot your password?'), $this);?>
</a>
				</p>
<?php endif; ?>
			</fieldset>
		</form>
	<?php else: ?>
	<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" method="post" id="account-creation_form" class="add_address" onsubmit="getpp('Спасибо!');">
		<div class="add_address">

		<fieldset class="account_creation"> 
			<h3><?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
</h3>
			<p class="radio">
				<input type="radio" name="id_gender" id="id_gender1" value="1" <?php if (isset ( $_POST['id_gender'] ) && $_POST['id_gender'] == 1): ?>checked="checked"<?php endif; ?> checked />
				<label for="id_gender1" class="top"><?php echo smartyTranslate(array('s' => 'Mr.'), $this);?>
</label>
				<input type="radio" name="id_gender" id="id_gender2" value="2" <?php if (isset ( $_POST['id_gender'] ) && $_POST['id_gender'] == 2): ?>checked="checked"<?php endif; ?> />
				<label for="id_gender2" class="top"><?php echo smartyTranslate(array('s' => 'Ms.'), $this);?>
</label>
			</p>

<p class="required" style="text-indent: 6px;" ><sup>&bull;</sup> <?php echo smartyTranslate(array('s' => 'Непременно!'), $this);?>
</p>
			<br>
			
						
			<fieldset class="add_address">
				<legend for="firstname"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'First name'), $this);?>
</legend>
				<input autofocus required type="text" class="text" id="customer_firstname" name="customer_firstname" value="<?php if (isset ( $_POST['customer_firstname'] )): ?><?php echo $_POST['customer_firstname']; ?>
<?php endif; ?>" tabindex="2" placeholder="для переписки о заказе"/>
				<!-- onkeyup="$('#firstname').val(this.value);" -->
			</fieldset>
			
			<fieldset class="add_address">
				<legend for="lastname"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Last name'), $this);?>
</legend>
				<input required type="text" class="text" id="customer_lastname" name="customer_lastname" value="<?php if (isset ( $_POST['customer_lastname'] )): ?><?php echo $_POST['customer_lastname']; ?>
<?php endif; ?>" tabindex="3" />
				<!-- onkeyup="$('#lastname').val(this.value);"  -->
			</fieldset>
			
			<fieldset class="add_address">
				<legend id="email_field" for="email" <sup>&bull;</sup> &nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'E-mail'), $this);?>
</legend>
				<input onkeyup="mailru_checker();" tabindex="4" required type="email" class="text" id="email" name="email" value="<?php if (isset ( $_POST['email'] )): ?><?php echo $_POST['email']; ?>
<?php endif; ?>" />
							</fieldset>
			
			<fieldset class="add_address">
				<legend for="passwd"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Password'), $this);?>
</legend>
				<input  type="password" class="text" name="passwd" id="passwd" tabindex="5" placeholder="мин. 5 букв/цифр" />
							</fieldset>
			
			<p class="select" style=" width: 118%; ">
				<span><?php echo smartyTranslate(array('s' => 'Birthday'), $this);?>
</span>
				<select id="days" name="days" tabindex="6">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_day'] == $this->_tpl_vars['day'] )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
								<select id="months" name="months" tabindex="7" >
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['month']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['k'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_month'] == $this->_tpl_vars['k'] )): ?> selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => ($this->_tpl_vars['month'])), $this);?>
&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<select id="years" name="years" tabindex="8">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_year'] == $this->_tpl_vars['year'] )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</p>
			<div class="rte">
						<p>&nbsp;</p>
			<p class="text">
    			<a href="http://motokofr.com/cms.php?id_cms=8" target="_blank">Политика использования Cookies (в новом окне)</a>
			</p>
            <p class="text">
    			<a href="http://motokofr.com/cms.php?id_cms=3" target="_blank">Политика использования персональных данных (в новом окне)</a>
			</p>
			</div>
		</fieldset>
		
		
		
		
		
		
		<fieldset hidden class="account_creation">
			<h3><?php echo smartyTranslate(array('s' => 'Your address'), $this);?>
</h3>
			<p class="text"><?php echo smartyTranslate(array('s' => 'Your address1'), $this);?>
</p>

			<p class="required text">
				<label for="firstname"><?php echo smartyTranslate(array('s' => 'First name latin'), $this);?>
</label>
				<input type="text" class="text" id="firstname" name="firstname" value="<?php if (isset ( $_POST['firstname'] )): ?><?php echo $_POST['firstname']; ?>
<?php endif; ?>" tabindex="11"/>
		
				<sup>&bull;</sup>
			</p>
			<p class="required text">
				<label for="lastname"><?php echo smartyTranslate(array('s' => 'Last name latin'), $this);?>
</label>
				<input type="text" class="text" id="lastname" name="lastname" value="<?php if (isset ( $_POST['lastname'] )): ?><?php echo $_POST['lastname']; ?>
<?php endif; ?>" tabindex="12" />
				<sup>&bull;</sup>
			</p>
	<br>
		<h3 style="cursor: pointer;" id='bl1' onclick="showhideBlock('bl1','textbl1');"  onmouseover="style.color='orange'" onmouseout="style.color='#555'">&bull; Отправлять посылки EMS и СПСР?</h3><br>
		<div id='textbl1' style="-webkit-transition: all 0.2s ease; -moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; display: none;">		
		<p class="text" style="color: gray; <?php if (@site_version == 'mobile'): ?>font-size: medium!important<?php endif; ?>">
		Если ты планируешь отправлять свои посылки через СПСР, заполни все эти поля. 
		</p>
		<p class="text">
			<label for="address2"><?php echo smartyTranslate(array('s' => 'Address (2)'), $this);?>
</label>
			<input type="text" id="address2" name="address2" value="<?php if (isset ( $_POST['address2'] )): ?><?php echo $_POST['address2']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
		</p>
		<p class="text" style="color: gray; <?php if (@site_version == 'mobile'): ?>font-size: medium!important<?php endif; ?>">Для EMS будет достаточно только телефона.
		</p>		
		<p class="text">
			<label for="phone_mobile"><?php echo smartyTranslate(array('s' => 'Mobile phone'), $this);?>
</label>
			<input type="text" id="phone_mobile" name="phone_mobile" value="<?php if (isset ( $_POST['phone_mobile'] )): ?><?php echo $_POST['phone_mobile']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->phone_mobile)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
		</p>

		<p class="text">
			<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
			<label for="company"><?php echo smartyTranslate(array('s' => 'Company'), $this);?>
</label>
			<input type="text" id="company" name="company" value="<?php if (isset ( $_POST['company'] )): ?><?php echo $_POST['company']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
		</p>
		<p class="text" style="color: gray; <?php if (@site_version == 'mobile'): ?>font-size: medium!important<?php endif; ?>">Пример: 1234, №123456, выд. <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y ") : smarty_modifier_date_format($_tmp, "%e-%m-%Y ")); ?>
 Бюрократическим ОВД г. Бабруйска
		</p>
		</div>
			<p class="required text">
				<label for="address1"><?php echo smartyTranslate(array('s' => 'Address'), $this);?>
</label>
				<input type="text" class="text" name="address1" id="address1" value="<?php if (isset ( $_POST['address1'] )): ?><?php echo $_POST['address1']; ?>
<?php endif; ?>" tabindex="13" />
				<sup>&bull;</sup>
			</p>
			<p class="required text">
				<label for="city"><?php echo smartyTranslate(array('s' => 'City'), $this);?>
</label>
				<input type="text" class="text" name="city" id="city" value="<?php if (isset ( $_POST['city'] )): ?><?php echo $_POST['city']; ?>
<?php endif; ?>" tabindex="14" />
				<sup>&bull;</sup>
			</p>
			<p class="required select">
				<label for="id_country"><?php echo smartyTranslate(array('s' => 'Country'), $this);?>
</label>
				<select name="id_country" id="id_country" tabindex="15" >
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
					<option value="<?php echo $this->_tpl_vars['v']['id_country']; ?>
" <?php if (( $this->_tpl_vars['sl_country'] == $this->_tpl_vars['v']['id_country'] )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<sup>&bull;</sup>
			</p>
			<p class="id_state required select">
				<label for="id_state"><?php echo smartyTranslate(array('s' => 'State'), $this);?>
</label>
				<select name="id_state" id="id_state" tabindex="16" >
					<option value="">-</option>
				</select>
				<sup>&bull;</sup>				
			</p>
			<p class="hidden">
				<label for="address2"><?php echo smartyTranslate(array('s' => 'Address (2)'), $this);?>
</label>
				<input type="text" class="text" name="address2" id="address2" value="<?php if (isset ( $_POST['address2'] )): ?><?php echo $_POST['address2']; ?>
<?php endif; ?>" />
			</p>
			<p class="required text">
				<label for="postcode"><?php echo smartyTranslate(array('s' => 'Postal code / Zip code'), $this);?>
</label>
				<input style="widht:10px" type="text" class="text" name="postcode" id="postcode" value="<?php if (isset ( $_POST['postcode'] )): ?><?php echo $_POST['postcode']; ?>
<?php endif; ?>" tabindex="17" />
				<sup>&bull;</sup>
			</p>
			<p class="text">
				<label for="other"><?php echo smartyTranslate(array('s' => 'Additional information'), $this);?>
</label>
				<textarea name="other" id="other" cols="27" rows="8" tabindex="18"><?php if (isset ( $_POST['other'] )): ?><?php echo $_POST['other']; ?>
<?php endif; ?></textarea>
			</p>
			<p class="hidden">
				<label for="phone"><?php echo smartyTranslate(array('s' => 'Home phone'), $this);?>
</label>
				<input type="text" class="text" name="phone" id="phone" value="<?php if (isset ( $_POST['phone'] )): ?><?php echo $_POST['phone']; ?>
<?php endif; ?>" />
			</p>
			<p class="required text" id="address_alias">
				<label for="alias"><?php echo smartyTranslate(array('s' => 'Assign an address title for future reference'), $this);?>
</label>
				<input type="text" class="text" name="alias" id="alias" value="<?php if (isset ( $_POST['alias'] )): ?><?php echo $_POST['alias']; ?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'My address'), $this);?>
<?php endif; ?>" tabindex="19" />
				<sup>&bull;</sup>
				<br><br><span><sup>&bull;</sup> <?php echo smartyTranslate(array('s' => 'Required field'), $this);?>
</span>
			</p>
		</fieldset>
		
		
				
		
		<?php echo $this->_tpl_vars['HOOK_CREATE_ACCOUNT_FORM']; ?>

		<p class="submit2" style="text-align:center;">
			<input type="hidden" name="email_create" value="1" />
			<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" class="hidden" name="back" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['back'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php endif; ?>
			<input type="submit" name="submitAccount" id="submitAccount" value="<?php echo smartyTranslate(array('s' => 'Register'), $this);?>
" class="ebutton large green"  tabindex="20" 	
			/>
		</p>

	</div>
	</form>
	<?php endif; ?>
<?php endif; ?>


	<div id="getpp" style="height:0px; top: 100%;">
		<p id="welcome" class="warning"></p>
		<br>
		<img src="<?php echo $this->_tpl_vars['base_dir']; ?>
img/loader.gif">
		<p>Сейчас я все запомню...</p>
	</div>			


<?php echo '
<script type="text/javascript">
// <![CDATA[
idSelectedCountry = {if isset($smarty.post.id_state)}{$smarty.post.id_state|intval}{else}false{/if};
countries = new Array();
{foreach from=$countries item=\'country\'}
	{if isset($country.states)}
		countries[{$country.id_country|intval}] = new Array();
		{foreach from=$country.states item=\'state\' name=\'states\'}
			countries[{$country.id_country|intval}][\'{$state.id_state|intval}\'] = \'{$state.name|escape:\'htmlall\':\'UTF-8\'}\';
		{/foreach}
	{/if}
{/foreach}


//]]>
</script>
'; ?>



<script type="text/javascript">
    function mailru_checker()
<?php echo '{'; ?>


	var input = document.getElementById('email').value;
	
	if (input.indexOf('mail.ru') + 1)
	<?php echo '{'; ?>

		document.getElementById('email_field').innerHTML = '<sup>&bull;</sup>&nbsp;&nbsp;Письма на MAIL.RU часто не доходят';
		document.getElementById('email_field').style.color = '#f00';
		document.getElementById('email_field').style.fontWeight = 'bold';
	<?php echo '}'; ?>

	
	else
	<?php echo '{'; ?>

		document.getElementById('email_field').innerHTML = '<sup>&bull;</sup>&nbsp;&nbsp;E-mail';
		document.getElementById('email_field').style.color = '';
		document.getElementById('email_field').style.fontWeight = 'normal';
	<?php echo '}'; ?>


<?php echo '}'; ?>

</script>

<?php echo '
<script>

function getpp(text)
{
	document.getElementById(\'welcome\').innerHTML = text;
	document.getElementById(\'getpp\').style.height = \'100%\';
    document.getElementById(\'getpp\').style.top = \'0px\';
	
}
</script>

<script>
    $(window).load(function(){
    mailru_checker()
      })
        
</script>    

'; ?>