<?php /* Smarty version 2.6.20, created on 2016-11-26 22:15:09
         compiled from /home/motokofr/public_html/themes/Earth/password.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/password.tpl', 1, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/password.tpl', 9, false),array('modifier', 'stripslashes', '/home/motokofr/public_html/themes/Earth/password.tpl', 18, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Forgot your password'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1><?php echo smartyTranslate(array('s' => 'Forgot your password'), $this);?>
</h1>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="rte">    
    <?php if (isset ( $this->_tpl_vars['confirmation'] )): ?>
        <p class="warning"><?php echo smartyTranslate(array('s' => 'Your password has been successfully reset and has been sent to your e-mail address:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
    
    <?php else: ?>
    <p><?php echo smartyTranslate(array('s' => 'Please enter your e-mail address used to register. We will e-mail you your new password.'), $this);?>
</p>
    <p>&nbsp;</p>
    <form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['request_uri'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" method="post" class="std">
    	<fieldset>
    		<p align="center" class="text">
                <!--[if IE]><label for="email"><?php echo smartyTranslate(array('s' => 'Type your e-mail address:'), $this);?>
</label><![endif]-->
    			<input required type="email" id="email" name="email" placeholder="Твой email" value="<?php if (isset ( $_POST['email'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" />
    		</p>
    		<br>
    		<p align="center" class="submit">
    			<input type="submit" class="ebutton blue" value="<?php echo smartyTranslate(array('s' => 'Retrieve'), $this);?>
" />
    		</p>
    	</fieldset>
    </form>
    <?php endif; ?>
</div>
<br>
<p align="center">
	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" title="<?php echo smartyTranslate(array('s' => 'Back to Login'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.png" alt="<?php echo smartyTranslate(array('s' => 'Back to Login'), $this);?>
" class="icon" /></a><br><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
authentication.php" title="<?php echo smartyTranslate(array('s' => 'Back to Login'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Back to Login'), $this);?>
</a>
</p>

<?php echo '
<!-- Yandex.Metrika counter lostpassword --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32884220 = new Ya.Metrika({ id:32884220, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/32884220" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
'; ?>