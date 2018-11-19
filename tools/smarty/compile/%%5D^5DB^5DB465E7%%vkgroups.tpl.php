<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:57
         compiled from /home/motokofr/public_html/modules/vkgroups/vkgroups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/vkgroups/vkgroups.tpl', 6, false),)), $this); ?>
<?php if (@site_version == 'full'): ?>
<!-- Block vkgroups module -->
<div id="vkgroups" style="margin-bottom:20px">
<!-- <div id="vkgroups" class="block"> -->

<!-- <h4><?php echo smartyTranslate(array('s' => 'Мы Вконтакте','mod' => 'vkgroups'), $this);?>
</h4> -->
     <div id="vk_groups"></div> 
    <script async type="text/javascript">
    VK.Widgets.Group("vk_groups", {mode: <?php echo $this->_tpl_vars['vk_groups_mode']; ?>
, width: "200", height: "431"}, <?php echo $this->_tpl_vars['vk_groups_id']; ?>
);
    </script>
</div>
<?php endif; ?>