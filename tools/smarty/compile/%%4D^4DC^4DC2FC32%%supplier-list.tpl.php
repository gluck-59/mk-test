<?php /* Smarty version 2.6.20, created on 2016-11-23 19:12:31
         compiled from /home/motokofr/public_html/themes/Earth/supplier-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/supplier-list.tpl', 1, false),array('function', 'declension', '/home/motokofr/public_html/themes/Earth/supplier-list.tpl', 66, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/supplier-list.tpl', 23, false),array('modifier', 'truncate', '/home/motokofr/public_html/themes/Earth/supplier-list.tpl', 38, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/supplier-list.tpl', 66, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Suppliers'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Suppliers'), $this);?>
</h2>

<?php if (isset ( $this->_tpl_vars['errors'] ) && $this->_tpl_vars['errors']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>


<?php if ($this->_tpl_vars['nbSuppliers'] > 0): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<ul id="suppliers_list">
	<?php $_from = $this->_tpl_vars['suppliers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['supplier']):
?>
		<li>
			<div class="left_side">

				<!-- logo -->
				<div class="logo">
				<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getsupplierLink($this->_tpl_vars['supplier']['id_supplier'],$this->_tpl_vars['supplier']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['supplier']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
				<?php endif; ?>
			<img style="width: 80px;" src="/img/tmp/supplier_mini_<?php echo $this->_tpl_vars['supplier']['id_supplier']; ?>
.jpg">
				<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
				</a>
				<?php endif; ?>
				</div>



				<!-- name -->
				<h3>
					<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getsupplierLink($this->_tpl_vars['supplier']['id_supplier'],$this->_tpl_vars['supplier']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
					<?php endif; ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['supplier']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, '...') : smarty_modifier_truncate($_tmp, 60, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

					<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
					</a>
					<?php endif; ?>
				</h3>
				<p class="description">
				<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getsupplierLink($this->_tpl_vars['supplier']['id_supplier'],$this->_tpl_vars['supplier']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
				<?php endif; ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['supplier']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

				<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
				</a>
				<?php endif; ?>
				</p>

			</div>

			<div class="right_side">
			
			<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getsupplierLink($this->_tpl_vars['supplier']['id_supplier'],$this->_tpl_vars['supplier']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
			<?php endif; ?>
			<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
				</a>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['supplier']['nb_products'] > 0): ?>
			<div class="right_side">
				<a class="ebutton blue small" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getsupplierLink($this->_tpl_vars['supplier']['id_supplier'],$this->_tpl_vars['supplier']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['supplier']['nb_products'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
 <?php echo smarty_function_declension(array('nb' => ($this->_tpl_vars['supplier']).".nb_products|intval",'expressions' => "товар,товара,товаров"), $this);?>
</a>
			</div>
			<?php endif; ?>

			</div>
			<br class="clear"/>
		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php endif; ?>