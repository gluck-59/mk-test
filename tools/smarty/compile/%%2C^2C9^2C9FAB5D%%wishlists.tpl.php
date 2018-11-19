<?php /* Smarty version 2.6.20, created on 2016-11-20 16:16:00
         compiled from /home/motokofr/public_html/themes/Earth/wishlists.tpl */ ?>
<?php ob_start(); ?>Списки хотелок других байкеров<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php if ($this->_tpl_vars['products']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./wishlists-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php else: ?>
	<p class="warning">Похоже, все уже купили что хотели...</p>
<?php endif; ?>


<?php if (@site_version == 'full'): ?>
						
	<?php echo '
	<script defer language="JavaScript">
//	jQuery(document).ready(function()
//			{   
			$(\'body,html\').animate({
				scrollTop: 340
			}, 40);
//		});
	</script>
	'; ?>

<?php endif; ?>