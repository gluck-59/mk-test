<?php /* Smarty version 2.6.20, created on 2016-11-20 13:21:43
         compiled from /home/motokofr/public_html/themes/Earth/manufacturer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/manufacturer.tpl', 3, false),array('function', 'declension', '/home/motokofr/public_html/themes/Earth/manufacturer.tpl', 3, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/manufacturer.tpl', 3, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/manufacturer.tpl', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'List of products by manufacturer:'), $this);?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<noindex><span>(<?php echo ((is_array($_tmp=$this->_tpl_vars['nb_products'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&nbsp;<?php echo smarty_function_declension(array('nb' => ($this->_tpl_vars['nb_products'])."|intval",'expressions' => "ништяк,ништяка,ништяков"), $this);?>
)</span></noindex></h2>

<?php if ($this->_tpl_vars['manufacturer']->description && @site_version == 'full'): ?>
<div class="rte">
<img style="float:right; margin-left:20px;" src="/img/tmp/manufacturer_mini_<?php echo $this->_tpl_vars['manufacturer']->id_manufacturer; ?>
.jpg">
<?php echo $this->_tpl_vars['manufacturer']->description; ?>
</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No products for this manufacturer.'), $this);?>
</p>
<?php endif; ?>

