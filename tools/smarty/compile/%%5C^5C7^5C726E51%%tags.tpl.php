<?php /* Smarty version 2.6.20, created on 2016-11-20 12:54:54
         compiled from /home/motokofr/public_html/themes/Earth/tags.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/tags.tpl', 1, false),array('function', 'declension', '/home/motokofr/public_html/themes/Earth/tags.tpl', 4, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Product tags'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['nbProducts']; ?>
 <?php echo smarty_function_declension(array('nb' => ($this->_tpl_vars['nbProducts']),'expressions' => "ништяк,ништяка,ништяков"), $this);?>
 с тегом &laquo;<?php echo $this->_tpl_vars['tag']; ?>
&raquo;</h2>

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
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No products with this tags'), $this);?>
</p>
<?php endif; ?>

<?php if (@site_version == 'full'): ?>
<?php echo '						
<script async type="text/javascript">
	jQuery(document).ready(function()
			{   
			$(\'body,html\').animate({
				scrollTop: 340
			}, 40);
		});
</script>		
'; ?>
						
<?php endif; ?>						