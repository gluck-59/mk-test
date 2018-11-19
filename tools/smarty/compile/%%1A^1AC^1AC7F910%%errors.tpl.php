<?php /* Smarty version 2.6.20, created on 2016-11-20 18:53:15
         compiled from /home/motokofr/public_html/themes/Earth/errors.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/motokofr/public_html/themes/Earth/errors.tpl', 3, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/errors.tpl', 9, false),array('function', 'l', '/home/motokofr/public_html/themes/Earth/errors.tpl', 3, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['errors'] ) && $this->_tpl_vars['errors']): ?>
		<div class="error">
		<p><?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'There are'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'There is'), $this);?>
<?php endif; ?> <?php echo count($this->_tpl_vars['errors']); ?>
 <?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'errors'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'error'), $this);?>
<?php endif; ?>:</p><br>
 		<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
?> 
			<p>&#10077;&nbsp;<?php echo $this->_tpl_vars['error']; ?>
&nbsp;&#10078;</p>
			<p>&nbsp;</p>
		<?php endforeach; endif; unset($_from); ?>
		<p align="left" style="border-top: 1px solid #aaa;">
			<a href="<?php echo ((is_array($_tmp=$_SERVER['HTTP_REFERER'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo smartyTranslate(array('s' => 'Back'), $this);?>
"><strong><?php echo smartyTranslate(array('s' => 'Back'), $this);?>
</strong></a>
			&nbsp;или&nbsp;
			<a href="/my-account.php" title="Войти"><strong>Вход</strong></a>

		</p>
	</div>
<?php endif; ?>