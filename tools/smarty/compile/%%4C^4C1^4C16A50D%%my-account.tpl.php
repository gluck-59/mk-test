<?php /* Smarty version 2.6.20, created on 2016-11-20 12:42:16
         compiled from /home/motokofr/public_html/themes/Earth/my-account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/my-account.tpl', 7, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</h2>

<p class="" id="hello" >Привет, байкер <?php echo $this->_tpl_vars['customer_firstname']; ?>
!</p>

<div class="rte cabinet">
    <div align="center">
    <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php?<?php echo time(); ?>
" title="<?php echo smartyTranslate(array('s' => 'History and details of your orders'), $this);?>
">
    		<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/order.png" alt="<?php echo smartyTranslate(array('s' => 'History and details of your orders'), $this);?>
" class="icon" /></a> 
    <br>
    	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php?<?php echo time(); ?>
" title="<?php echo smartyTranslate(array('s' => 'History and details of your orders'), $this);?>
">&nbsp;<?php echo smartyTranslate(array('s' => 'History and details of your orders'), $this);?>
</a>
    </div>
    
        <div align="center">
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
addresses.php" title="<?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/addrbook.png" alt="<?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
" class="icon" /></a> 
		<br>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
addresses.php" title="<?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
">&nbsp;<?php echo smartyTranslate(array('s' => 'Your addresses'), $this);?>
</a>
    </div>

	<?php echo $this->_tpl_vars['HOOK_CUSTOMER_ACCOUNT']; ?>


    <?php if ($this->_tpl_vars['returnAllowed']): ?>
        <div align="center">
            <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-follow.php" title="<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/return.png" alt="<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
" class="icon" /></a> 
            <br>
            <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-follow.php" title="<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
">&nbsp;<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
</a>
        </div>
	<?php endif; ?>

	
    <div align="center"> 
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" title="<?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/userinfo.png" alt="<?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
" class="icon" /></a> 
		<br>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" title="<?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
">&nbsp;<?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
</a>
    </div>
    
    <?php if ($this->_tpl_vars['voucherAllowed']): ?>
        <div align="center">    
            <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
discount.php" title="<?php echo smartyTranslate(array('s' => 'Скидки'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/voucher.png" alt="<?php echo smartyTranslate(array('s' => 'Скидки'), $this);?>
" class="icon" /></a> 
            <br>
            <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
discount.php" title="<?php echo smartyTranslate(array('s' => 'Скидки'), $this);?>
">&nbsp;<?php echo smartyTranslate(array('s' => 'Скидки'), $this);?>
</a>
        </div>
   <?php endif; ?>

    <center><div align="center">
        <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.png" alt="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
" class="icon" /></a>
        <br>
        <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
">&nbsp;<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a>
    </div></center>
    
</div>

<?php echo '
<script type="text/javascript">
var re = document.referrer;
if (re == \'http://motokofr.com/authentication.php?back=my-account.php\')
{
	setTimeout("document.getElementById(\'hello\').style.opacity = \'1\'", 200);
	setTimeout("document.getElementById(\'hello\').style.opacity = \'0\'", 3000);
}
</script>
'; ?>
