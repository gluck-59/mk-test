<?php /* Smarty version 2.6.20, created on 2016-11-21 12:01:13
         compiled from /home/motokofr/public_html/modules/paypalapi/error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/paypalapi/error.tpl', 1, false),)), $this); ?>
<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php"><?php echo smartyTranslate(array('s' => 'Your shopping cart','mod' => 'paypalapi'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'PayPal ExpressCheckout','mod' => 'paypalapi'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['message']; ?>
</h2>
<?php if (isset ( $this->_tpl_vars['logs'] ) && $this->_tpl_vars['logs']): ?>
	<div class="error">
		<p><b><?php echo smartyTranslate(array('s' => 'Please refer to logs:','mod' => 'paypalapi'), $this);?>
</b></p>
		<ol>
		<?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['log']):
?>
			<li><?php echo $this->_tpl_vars['log']; ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
		</ol>
		<p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>
" class="button_small" title="<?php echo smartyTranslate(array('s' => 'Back','mod' => 'paypalapi'), $this);?>
">&laquo; <?php echo smartyTranslate(array('s' => 'Back','mod' => 'paypalapi'), $this);?>
</a></p>
	</div>
<?php endif; ?>