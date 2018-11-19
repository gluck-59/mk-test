<?php /* Smarty version 2.6.20, created on 2016-11-20 15:40:53
         compiled from /home/motokofr/public_html/modules/mailalerts/myalerts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/mailalerts/myalerts.tpl', 8, false),array('function', 'declension', '/home/motokofr/public_html/modules/mailalerts/myalerts.tpl', 50, false),array('modifier', 'intval', '/home/motokofr/public_html/modules/mailalerts/myalerts.tpl', 15, false),array('modifier', 'escape', '/home/motokofr/public_html/modules/mailalerts/myalerts.tpl', 30, false),array('modifier', 'truncate', '/home/motokofr/public_html/modules/mailalerts/myalerts.tpl', 43, false),array('modifier', 'strip_tags', '/home/motokofr/public_html/modules/mailalerts/myalerts.tpl', 47, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>


	<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'mailalerts'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'My alerts','mod' => 'mailalerts'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'My alerts','mod' => 'mailalerts'), $this);?>
</h2>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php if (((is_array($_tmp=$this->_tpl_vars['id_customer'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) != 0): ?>
		<?php if ($this->_tpl_vars['alerts']): ?>
	<ul id="product_list" class="clear">
		
				<?php $_from = $this->_tpl_vars['alerts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
				

		
		
		
	<div id="out">
	<div id="in">
	
		<?php if (@site_version == 'full'): ?>				
		<p id="background_pic">
		<img width="300px" height="300px" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-home.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
		</p>
		<?php endif; ?>		
	
		<li class="ajax_block_product <?php if (($this->_foreach['products']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['products']['iteration'] == $this->_foreach['products']['total'])): ?>last_item<?php endif; ?> <?php if (($this->_foreach['products']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
		<div class="center_block">
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="product_img_link" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
					<img  width="129px" height="129px" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-home.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
								</a>

			<h3>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...') : smarty_modifier_truncate($_tmp, 150, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
			</h3>
		
			<p class="product_desc">
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 360, '...') : smarty_modifier_truncate($_tmp, 360, '...')); ?>
</a>
			</p>				
	
			<?php if ($this->_tpl_vars['product']['sales'] > 0): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><div class="product_sales"><p class="product_desc">Этот ништяк уже есть у <?php echo $this->_tpl_vars['product']['sales']; ?>
 <?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['product']['sales'],'expressions' => "байкера,байкеров,байкеров"), $this);?>
</p></a></div><?php endif; ?>
		</div>

		<div class="right_block">
			<span class="align_center">
				<a class="ebutton red plist" rel="ajax_id_product_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/mailalerts/myalerts.php?action=delete&id_product=<?php echo $this->_tpl_vars['product']['id_product']; ?>
&id_product_attribute=<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
"><?php echo smartyTranslate(array('s' => 'Удалить'), $this);?>
</a>
			</span>				

			<span class="align_center">
			<a href="javascript:;" class="ebutton orange plist" onclick="javascript:WishlistCart('wishlist_block_list', 'add', '<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
',0,1);">
			<?php echo smartyTranslate(array('s' => 'В список хотелок','mod' => 'blockwishlist'), $this);?>
</a>
			</span>				

			<span class="align_center"><a class="ebutton blue plist" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo smartyTranslate(array('s' => 'Подробнее'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Подробнее'), $this);?>
</a>
			</span>

		</div>
			
	</div>
	</div>
	<br class="clear">
	
	<?php endforeach; endif; unset($_from); ?>
</ul>
		
		
		<div id="block-order-detail">&nbsp;</div>

		<?php else: ?>
			<p class="warning"><?php echo smartyTranslate(array('s' => 'You are not subscribed to any alerts.','mod' => 'mailalerts'), $this);?>
</p>
		<?php endif; ?>
	<?php endif; ?>

	<table width="100%" border="0" style="margin-top: 30px;">
  <tr>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.png" alt="" class="icon" /></a></div></td>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.png" alt="" class="icon" /></a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php">В Кабинет</a></div></td>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
">На главную</a></div></td>
  </tr>
</table>

