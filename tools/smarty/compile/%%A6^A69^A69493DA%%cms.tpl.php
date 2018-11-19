<?php /* Smarty version 2.6.20, created on 2016-11-20 13:24:23
         compiled from /home/motokofr/public_html/themes/Earth/cms.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/cms.tpl', 14, false),)), $this); ?>
<?php if ($this->_tpl_vars['cms']): ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['cms']->meta_title; ?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php if ($this->_tpl_vars['content_only']): ?>
	<div style="text-align:left; padding:10px;" class="rte">
		<?php echo $this->_tpl_vars['cms']->content; ?>

	</div>
	<?php else: ?>
	<div class="rte">
		<?php echo $this->_tpl_vars['cms']->content; ?>

	</div>
	<?php endif; ?>
<?php else: ?>
	<?php echo smartyTranslate(array('s' => 'This page does not exist.'), $this);?>

<?php endif; ?>
<br />
<?php if (! $this->_tpl_vars['content_only']): ?>
<br /><br /><br />
<p align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.png" alt="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
" class="icon" /></a><br><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></p>
<?php endif; ?>
