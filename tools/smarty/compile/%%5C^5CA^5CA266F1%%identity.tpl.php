<?php /* Smarty version 2.6.20, created on 2016-11-20 21:47:08
         compiled from /home/motokofr/public_html/themes/Earth/identity.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/identity.tpl', 7, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/identity.tpl', 17, false),array('modifier', 'strpos', '/home/motokofr/public_html/themes/Earth/identity.tpl', 47, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['confirmation']): ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s' => 'Your personal information has been successfully updated.'), $this);?>

		<?php if ($this->_tpl_vars['pwd_changed']): ?><br /><?php echo smartyTranslate(array('s' => 'Your password has been sent to your e-mail:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>
	</p>
<?php else: ?>
	<!-- p><?php echo smartyTranslate(array('s' => 'Do not hesitate to update your personal information if it has changed.'), $this);?>
</p -->
	<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" method="post" class="add_address">
		<div class="add_address">

			<p class="radio">
				<input type="radio" name="id_gender" id="id_gender1" value="1" <?php if ($_POST['id_gender'] == 1 || ! $_POST['id_gender']): ?>checked="checked"<?php endif; ?> />
				<label for="id_gender1"><?php echo smartyTranslate(array('s' => 'Mr.'), $this);?>
</label>
				<input type="radio" name="id_gender" id="id_gender2" value="2" <?php if ($_POST['id_gender'] == 2): ?>checked="checked"<?php endif; ?> />
				<label for="id_gender2"><?php echo smartyTranslate(array('s' => 'Ms.'), $this);?>
</label>
			</p>


			<p class="required" style="text-indent: 6px;" ><sup>&bull;</sup> <?php echo smartyTranslate(array('s' => 'Непременно!'), $this);?>
</p>
			<br>


			<fieldset class="add_address">
				<legend for="firstname"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'First name'), $this);?>
</legend>
				<input type="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname']; ?>
" />
			</fieldset>

			<fieldset class="add_address">
				<legend for="lastname"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Last name'), $this);?>
</legend>
				<input type="text" name="lastname" id="lastname" value="<?php echo $_POST['lastname']; ?>
" />
			</fieldset>

			<fieldset class="add_address">
				<legend id="email_field" for="email" <?php if (((is_array($_tmp=$_POST['email'])) ? $this->_run_mod_handler('strpos', true, $_tmp, "mail.ru") : strpos($_tmp, "mail.ru"))): ?> style="">Письма на MAIL.RU доходят не всегда :(<?php else: ?>><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'E-mail'), $this);?>
<?php endif; ?></legend>
				<input required onkeyup="mailru_checker();" type="email" name="email" id="email" value="<?php echo $_POST['email']; ?>
" />
			</fieldset>
			
			<fieldset class="add_address">
				<legend for="old_passwd"><sup>&bull;</sup>&nbsp;&nbsp;<?php echo smartyTranslate(array('s' => 'Current password'), $this);?>
</legend>
				<input required type="password" name="old_passwd" id="old_passwd" />
			</fieldset>

			<p class="clear">&nbsp;</p>
			<p class="clear">&nbsp;</p>
			
			<fieldset class="add_address">
				<legend for="passwd">Если хочешь — смени пароль</legend>
				<input placeholder="мин. 5 букв/цифр" type="password" name="passwd" id="passwd" />
			</fieldset>

			<fieldset class="add_address">
				<legend for="confirmation">...и еще раз</legend>
				<input type="password" name="confirmation" id="confirmation" />
			</fieldset>

			<p>&nbsp;</p>

			<p>
				<span id="days"><?php echo smartyTranslate(array('s' => 'Birthday'), $this);?>
</span>
 				<select name="days" id="days">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_day'] == $this->_tpl_vars['v'] )): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
								<select id="months" name="months">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['k'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_month'] == $this->_tpl_vars['k'] )): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => ($this->_tpl_vars['v'])), $this);?>
&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<select id="years" name="years">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_year'] == $this->_tpl_vars['v'] )): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
							</p>
			<p>&nbsp;</p><p>&nbsp;</p>
			<p class="checkbox">
				<input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if ($_POST['newsletter'] == 1): ?> checked="checked"<?php endif; ?> />
				<label for="newsletter">&nbsp;<?php echo smartyTranslate(array('s' => 'Sign up for our newsletter'), $this);?>
</label>
			</p>
			<p>&nbsp;</p>
			<p class="checkbox">
				<input type="checkbox" name="optin" id="optin" value="1" <?php if ($_POST['optin'] == 1): ?> checked="checked"<?php endif; ?> />
				<label for="optin">&nbsp;<?php echo smartyTranslate(array('s' => 'Receive special offers from our partners'), $this);?>
</label>
			</p>
			<p>&nbsp;</p>			<p>&nbsp;</p>
			<p align="center" class="submit">
				<input type="submit" class="ebutton large orange" name="submitIdentity" value="<?php echo smartyTranslate(array('s' => 'Save'), $this);?>
" />
			</p>

		</div>
	</form>
<?php endif; ?>

<table width="100%" border="0" style="margin-top: 30px;">
  <tr>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.png" alt="" class="icon" /></a></div></td>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.png" alt="" class="icon" /></a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Back to Your Account'), $this);?>
</a></div></td>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></div></td>
  </tr>
</table>






<script type="text/javascript">
function mailru_checker()
<?php echo '{'; ?>


	var	input = document.getElementById('email').value;
	
	if (input.indexOf('mail.ru') + 1)
	<?php echo '{'; ?>

		document.getElementById('email_field').innerHTML = 'Письма на MAIL.RU доходят не всегда :(';
/*		document.getElementById('email_field').style.color = '#f00';
		document.getElementById('email_field').style.fontWeight = 'bold';
		document.getElementById('email_field').style.fontSize = '9pt';
*/	<?php echo '}'; ?>

	
	else
	<?php echo '{'; ?>

		document.getElementById('email_field').innerHTML = 'E-MAIL';
/*		document.getElementById('email_field').style.color = '';
		document.getElementById('email_field').style.fontWeight = 'normal';
		document.getElementById('email_field').style.fontSize = '';		
*/	<?php echo '}'; ?>


<?php echo '}'; ?>

</script>






