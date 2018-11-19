<?php /* Smarty version 2.6.20, created on 2016-11-20 13:27:04
         compiled from /home/motokofr/public_html/themes/Earth/manufacturer-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/manufacturer-list.tpl', 1, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/manufacturer-list.tpl', 20, false),array('modifier', 'truncate', '/home/motokofr/public_html/themes/Earth/manufacturer-list.tpl', 27, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/manufacturer-list.tpl', 43, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Manufacturers'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Manufacturers'), $this);?>
 <?php if ($this->_tpl_vars['nbManufacturers'] > 1): ?><span>(<?php echo $this->_tpl_vars['nbManufacturers']; ?>
 фирм)</span></span><?php endif; ?>
</h2>

<?php if (isset ( $this->_tpl_vars['errors'] ) && $this->_tpl_vars['errors']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>


<?php if ($this->_tpl_vars['nbManufacturers'] > 0): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<ul id="manufacturers_list">
	<?php $_from = $this->_tpl_vars['manufacturers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['manufacturer']):
?>
		<li>
			<div class="left_side">
				<!-- logo -->
				<div class="logo">
				<?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 0): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php endif; ?>
					<img src="<?php echo $this->_tpl_vars['img_manu_dir']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
-medium.jpg" alt="" />
				<?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 0): ?></a><?php endif; ?>
				</div>
				<!-- name -->
				<h3>
					<?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 0): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php endif; ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['manufacturer']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, '...') : smarty_modifier_truncate($_tmp, 60, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

					<?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 0): ?></a><?php endif; ?>
				</h3>
				<p class="description rte">
				<?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 0): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php endif; ?>
				<?php echo $this->_tpl_vars['manufacturer']['description']; ?>

				<?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 0): ?></a><?php endif; ?>
				</p>
			</div>

			<div class="right_side">
			<?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 0): ?>
				<br><a class="ebutton blue small" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getmanufacturerLink($this->_tpl_vars['manufacturer']['id_manufacturer'],$this->_tpl_vars['manufacturer']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']['nb_products'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
 <?php if ($this->_tpl_vars['manufacturer']['nb_products'] > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?></a>
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