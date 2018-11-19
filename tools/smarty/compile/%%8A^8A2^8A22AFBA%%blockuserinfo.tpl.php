<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:10
         compiled from /Users/gluck/Sites/motokofr.com/modules/blockuserinfo/blockuserinfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/Users/gluck/Sites/motokofr.com/modules/blockuserinfo/blockuserinfo.tpl', 6, false),)), $this); ?>
<!-- Block user information module HEADER -->
<noindex>
<?php if (@site_version == 'full'): ?>
<div id="header_user">
	<p id="header_user_info">
		<?php echo smartyTranslate(array('s' => 'Welcome','mod' => 'blockuserinfo'), $this);?>

		<?php if ($this->_tpl_vars['logged']): ?>
			<strong><?php echo $this->_tpl_vars['customerName']; ?>
</strong> (<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
index.php?mylogout" title="<?php echo smartyTranslate(array('s' => 'Log me out','mod' => 'blockuserinfo'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Log out','mod' => 'blockuserinfo'), $this);?>
</a>)
		<?php else: ?>
			! (<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Log in','mod' => 'blockuserinfo'), $this);?>
</a>)
		<?php endif; ?>
	</p>
	
</div>
<?php endif; ?>

<?php if (@site_version == 'mobile'): ?>
<div id="shopping_cart_sq">
	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php"><li id="shopping_cart">&nbsp;</li></a>
	</div>	
<?php endif; ?>



<?php if (@site_version == 'mobile'): ?>
<div id="header_user">

	<ul id="header_nav">
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php"><li id="shopping_cart">&nbsp;</li>
		<?php if ($this->_tpl_vars['cart_qties'] > 0): ?><div class="shopping_cart_sq"><?php echo $this->_tpl_vars['cart_qties']; ?>
</div><?php endif; ?></a>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><li id="your_account">&nbsp;</li>
		<?php if ($this->_tpl_vars['logged']): ?><div class="user_sq"><?php echo $this->_tpl_vars['customerName']; ?>
</div><?php endif; ?></a>
	</ul>
	
</div>
<?php endif; ?>
</noindex>
<!-- /Block user information module HEADER -->