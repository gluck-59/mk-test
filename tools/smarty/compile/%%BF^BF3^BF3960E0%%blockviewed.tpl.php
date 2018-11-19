<?php /* Smarty version 2.6.20, created on 2016-11-20 12:40:58
         compiled from /home/motokofr/public_html/modules/blockviewed/blockviewed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/blockviewed/blockviewed.tpl', 4, false),array('modifier', 'escape', '/home/motokofr/public_html/modules/blockviewed/blockviewed.tpl', 12, false),array('modifier', 'truncate', '/home/motokofr/public_html/modules/blockviewed/blockviewed.tpl', 16, false),)), $this); ?>
<!-- Block Viewed products -->
<?php if (@site_version == 'full'): ?>
<div id="viewed-products_block_left" class="block products_block" style="overflow: hidden">
	<h4><?php echo smartyTranslate(array('s' => 'Viewed products','mod' => 'blockviewed'), $this);?>
</h4>
	<div style="height:<?php echo $this->_tpl_vars['qty']*99; ?>
px; max-height: 440px; overflow-y: scroll" class="block_content" onmouseover="$('body').css('overflow', 'hidden')" onmouseout="$('body').css('overflow', 'scroll')">
		<ul class="products">
			<?php $_from = $this->_tpl_vars['productsViewedObj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['viewedProduct']):
        $this->_foreach['myLoop']['iteration']++;
?>
			<li class="<?php if (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php else: ?>item<?php endif; ?>">

				<table width="100%" border="0" bgcolor="#fff">
				<tr>
					<td valign="middle" height="90px" width="87px"><a href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['viewedProduct']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockviewed'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['viewedProduct']->link_rewrite,$this->_tpl_vars['viewedProduct']->cover,'medium'); ?>
"  width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->legend)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"></a>
					</td>
					
					<td valign="middle">
						<a href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['viewedProduct']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockviewed'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, "...", true, false) : smarty_modifier_truncate($_tmp, 80, "...", true, false)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

						</a>
					</td>
				</tr>
				</table>		

			</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div> 
</div>
<?php endif; ?>


<?php if (@site_version == 'mobile'): ?>
<div id="viewed-products_block_left" class="block products_block">
	<h4><?php echo smartyTranslate(array('s' => 'Viewed products','mod' => 'blockviewed'), $this);?>
</h4>
		<div style="width:100%; height:250px; overflow:hidden">
			<div class="swiper-container1">
			  <div class="swiper-wrapper">
				  <?php $_from = $this->_tpl_vars['productsViewedObj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['viewedProduct']):
        $this->_foreach['myLoop']['iteration']++;
?>

				  	<div class="swiper-slide">
					<a class="cart_block_product_name" href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['viewedProduct']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockviewed'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
					    <img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['viewedProduct']->link_rewrite,$this->_tpl_vars['viewedProduct']->cover,'home'); ?>
">
						<p style="line-height: 120%"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, '...') : smarty_modifier_truncate($_tmp, 80, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
					</a>
				  	</div>

				  <?php endforeach; endif; unset($_from); ?>
			</div>
		</div>
</div>



			
	</div> 
</div>
<?php endif; ?>