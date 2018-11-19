<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:59
         compiled from /home/motokofr/public_html/modules/vkcomments//vkcomments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', '/home/motokofr/public_html/modules/vkcomments//vkcomments.tpl', 5, false),)), $this); ?>
<div id="idTab6" class="rte vk_comments">
<script async type="text/javascript">
<?php echo '
	window.onload = function () {
	VK.Widgets.Comments(\'vk_comments\', {limit: '; ?>
<?php echo $this->_tpl_vars['vklimit']; ?>
<?php echo '}, '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['vkid'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php echo ');
	}
'; ?>

</script>
<div id="vk_comments"></div>
</div>