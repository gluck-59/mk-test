<?php /* Smarty version 2.6.20, created on 2016-11-20 14:27:31
         compiled from /home/motokofr/public_html/themes/Earth/404.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/404.tpl', 1, false),array('modifier', 'htmlentities', '/home/motokofr/public_html/themes/Earth/404.tpl', 21, false),array('modifier', 'stripslashes', '/home/motokofr/public_html/themes/Earth/404.tpl', 21, false),)), $this); ?>
<h2><?php echo smartyTranslate(array('s' => 'Page not available'), $this);?>
</h2>

		<img src="/themes/Earth/img/not_found.jpg">
<br>


<p style="font-size: 30pt;">&#9668;<span style="font-size: 10pt;vertical-align: middle;">Попробуй найти похожий ништяк через меню слева</span> </p>
<p>&nbsp;</p>



<form action="<?php echo $this->_tpl_vars['base_dir']; ?>
search.php" method="post" class="std">
	<fieldset>
		<p align="center">
<h3><?php echo smartyTranslate(array('s' => 'To find a product, please type its name in the field below'), $this);?>
</h3>		
<!--[if IE]><label for="search"><?php echo smartyTranslate(array('s' => 'Search our product catalog:'), $this);?>
</label><![endif]-->
<input style="width:80%" required type="search" id="search_query" name="search_query" placeholder="спинка багажник shadow 1100"<?php if (isset ( $_GET['search_query'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['search_query'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8') : htmlentities($_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?> onclick="$(this).closest('form').submit()"  x-webkit-speech="" onwebkitspeechchange="this.form.submit();">
			<input style="border:none" type="submit" name="Submit" value="Искать" class="ebutton green small" />
		</p>
	</fieldset>
</form>

<div align="center"><a href="/" title="На главную"><img src="/themes/Earth/img/icon/home.png" alt="На главную" class="icon" /></a><a href="/" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></div>