<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:59
         compiled from /home/motokofr/public_html/themes/Earth/./breadcrumb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/./breadcrumb.tpl', 6, false),)), $this); ?>
<?php if (@site_version == 'full'): ?>
<?php if ($this->_tpl_vars['page_name'] != 'order' && $this->_tpl_vars['page_name'] != 'validation' && $this->_tpl_vars['page_name'] != 'submit'): ?> 	<!-- Breadcrumb -->
	<?php if (isset ( $this->_smarty_vars['capture']['path'] )): ?><?php $this->assign('path', $this->_smarty_vars['capture']['path']); ?><?php endif; ?>
	<div class="breadcrumb">
    		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a>
            <?php if ($this->_tpl_vars['path']): ?>&nbsp;
                <?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;
                <?php echo $this->_tpl_vars['path']; ?>
&nbsp;
    		<?php endif; ?>
	</div>
<?php endif; ?>
<?php endif; ?>