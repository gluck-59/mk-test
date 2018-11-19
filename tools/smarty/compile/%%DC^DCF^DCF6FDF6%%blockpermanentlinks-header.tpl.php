<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:57
         compiled from /home/motokofr/public_html/modules/blockpermanentlinks/blockpermanentlinks-header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/blockpermanentlinks/blockpermanentlinks-header.tpl', 4, false),)), $this); ?>
<?php if (@site_version == 'full'): ?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php" title="<?php echo smartyTranslate(array('s' => 'contact','mod' => 'blockpermanentlinks'), $this);?>
"><?php echo smartyTranslate(array('s' => 'contact','mod' => 'blockpermanentlinks'), $this);?>
</a></li>
		<li id="header_link_sitemap"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=1" title="<?php echo smartyTranslate(array('s' => 'доставка','mod' => 'blockpermanentlinks'), $this);?>
"><?php echo smartyTranslate(array('s' => 'доставка','mod' => 'blockpermanentlinks'), $this);?>
</a></li>	
	<li id="header_link_sitemap"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=5" title="<?php echo smartyTranslate(array('s' => 'оплата','mod' => 'blockpermanentlinks'), $this);?>
"><?php echo smartyTranslate(array('s' => 'оплата','mod' => 'blockpermanentlinks'), $this);?>
</a></li>		
	
	<li id="header_links_podbor">	
	<a href="http://motokofr.com/cms.php?id_cms=6">&nbsp;подбор кофров</a>
	</li>
</ul>

<?php echo '
<script defer>
function add_favorite(a) 
{

alert(\'Нажмите Ctrl-D чтобы добавить страницу в закладки\');

}
</script>
'; ?>



<?php endif; ?>
