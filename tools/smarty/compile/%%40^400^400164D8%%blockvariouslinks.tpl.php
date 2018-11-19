<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:57
         compiled from /home/motokofr/public_html/modules/blockvariouslinks/blockvariouslinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/blockvariouslinks/blockvariouslinks.tpl', 4, false),array('modifier', 'addslashes', '/home/motokofr/public_html/modules/blockvariouslinks/blockvariouslinks.tpl', 6, false),array('modifier', 'escape', '/home/motokofr/public_html/modules/blockvariouslinks/blockvariouslinks.tpl', 6, false),)), $this); ?>
﻿<!-- MODULE Block various links -->
<div id="footer-links" align="center">
<ul class="block_various_links" id="block_various_links_footer">
 	<li class="first_item">&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php" title=""><?php echo smartyTranslate(array('s' => 'Contact us','mod' => 'blockvariouslinks'), $this);?>
</a>&nbsp;</li>
 		<?php $_from = $this->_tpl_vars['cmslinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cmslink']):
?>
		<li class="item"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['link'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cmslink']['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>&nbsp;</li>
	<?php endforeach; endif; unset($_from); ?>
	<li class="item">&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title=""><?php echo smartyTranslate(array('s' => 'Specials','mod' => 'blockvariouslinks'), $this);?>
</a>&nbsp;</li>
	<li class="item">&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title=""><?php echo smartyTranslate(array('s' => 'Свежачок','mod' => 'blockvariouslinks'), $this);?>
</a>&nbsp;</li>
	<li class="item">&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php" title=""><?php echo smartyTranslate(array('s' => 'ТОП-50','mod' => 'blockvariouslinks'), $this);?>
</a>&nbsp;</li> 
 	<li class="item">&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
sitemap.php" title="Карта сайта"><?php echo smartyTranslate(array('s' => 'Карта сайта','mod' => 'blockvariouslinks'), $this);?>
</a>&nbsp;</li>
</ul>
</div>