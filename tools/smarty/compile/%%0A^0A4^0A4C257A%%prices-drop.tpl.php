<?php /* Smarty version 2.6.20, created on 2016-11-20 15:46:58
         compiled from /home/motokofr/public_html/themes/Earth/prices-drop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/prices-drop.tpl', 1, false),array('function', 'declension', '/home/motokofr/public_html/themes/Earth/prices-drop.tpl', 4, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Price drop'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Price drop'), $this);?>
 <!--noindex><span>(<?php echo $this->_tpl_vars['nbProducts']; ?>
 <?php echo smarty_function_declension(array('nb' => ($this->_tpl_vars['nbProducts']),'expressions' => "ништяк,ништяка,ништяков"), $this);?>
)</span></noindex--></h2> 

<?php if ($this->_tpl_vars['products']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No price drop.'), $this);?>
</p>
<?php endif; ?>

<?php if (@site_version == 'full'): ?>
						
	<?php echo '
	<script defer language="JavaScript">
	jQuery(document).ready(function()
			{   
			$(\'body,html\').animate({
				scrollTop: 340
			}, 40);
			setTimeout("document.getElementById(\'product_raise\').style.backgroundColor = \'#fff\'", 500);
		});
	</script>
	'; ?>

<?php endif; ?>


<?php echo '<!-- Yandex.Metrika prices-drop --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459986 = new Ya.Metrika({id:24459986, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24459986" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika prices-drop -->'; ?>