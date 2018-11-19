<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:17
         compiled from /Users/gluck/Sites/motokofr.com/modules/blockwishlist/blockwishlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/Users/gluck/Sites/motokofr.com/modules/blockwishlist/blockwishlist.tpl', 4, false),array('modifier', 'escape', '/Users/gluck/Sites/motokofr.com/modules/blockwishlist/blockwishlist.tpl', 15, false),array('modifier', 'truncate', '/Users/gluck/Sites/motokofr.com/modules/blockwishlist/blockwishlist.tpl', 15, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/blockwishlist/js/ajax-wishlist.js"></script>
<div id="wishlist_block" class="block wishlist">
	<h4><?php echo smartyTranslate(array('s' => 'Wishlist','mod' => 'blockwishlist'), $this);?>
</h4>


<?php if (@site_version == 'full'): ?>
	<div class="block_content">
		<div id="wishlist_block_list" class="expanded">
		<?php if ($this->_tpl_vars['products']): ?>
			<dl class="products">
			<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
				<dt class="clear <?php if (($this->_foreach['i']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['i']['iteration'] == $this->_foreach['i']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>">
					<a style="font-weight:normal" class="cart_block_product_name" href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite']); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, '...') : smarty_modifier_truncate($_tmp, 80, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
				</dt>
			<?php endforeach; endif; unset($_from); ?>
			</dl>
		<?php else: ?>
					<dl class="products">
								<br><dt style="text-align:center">Хотелки других байкеров</dt>
				<p style="text-align:center"><a class="ebutton blue" href="/wishlists.php">Посмотреть</a></p><br>
			</dl>
		<?php endif; ?>
		</div>
<?php endif; ?>		




<?php if (@site_version == 'mobile'): ?>
		<div id="wishlist_block_list" class="block products_block">
		<?php if ($this->_tpl_vars['products']): ?>
		<!-- swiper -->
				<div class="swiper-container1">
				  <div class="swiper-wrapper">
						<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
						  	<div class="swiper-slide swiper-block">
								<a class="cart_block_product_name" href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite']); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
								    <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_product']; ?>
-<?php echo $this->_tpl_vars['product']['id_image']; ?>
-home.jpg" />
                                    <p style="line-height: 120%"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 80) : smarty_modifier_truncate($_tmp, 80)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
                                </a>
						  	</div>
						<?php endforeach; endif; unset($_from); ?>
				  </div>
				  </div>
		
		<?php else: ?>
		<dl class="products">
			<dt><b><?php echo smartyTranslate(array('s' => 'No products','mod' => 'blockwishlist'), $this);?>
</b></dt>
			<br><dt style="text-align:center"><a href="/wishlists.php">Посмотреть списки других байкеров</a></dt>
		</dl>
		<?php endif; ?>
<?php endif; ?>		

		
		
		
<?php if (@site_version == 'full'): ?>		
		<p class="align_center">
		<?php if ($this->_tpl_vars['wishlists']): ?>
			<select name="wishlists" id="wishlists" onchange="WishlistChangeDefault('wishlist_block_list', $('#wishlists').val());">
			<?php $_from = $this->_tpl_vars['wishlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['wishlist']):
        $this->_foreach['i']['iteration']++;
?>
				<option value="<?php echo $this->_tpl_vars['wishlist']['id_wishlist']; ?>
"<?php if ($this->_tpl_vars['id_wishlist'] == $this->_tpl_vars['wishlist']['id_wishlist'] || ( $this->_tpl_vars['id_wishlist'] == false && ($this->_foreach['i']['iteration'] <= 1) )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['wishlist']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select>
		</p>

		<p class="align_center"><br>
			<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/blockwishlist/mywishlist.php" class="ebutton orange" title="<?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
"><?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
</a>
		</p>
			
		<?php else: ?>
						<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/blockwishlist/mywishlist.php" method="post" class="std" name="create_wishlist" id="create_wishlist">

<dl class="products">
			<br><dt style="text-align:center"><a href="/wishlists.php">Создать список хотелок</a></dt>
		</dl>
		
				<input type="hidden" name="token" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
	<!--[if IE]><label class="align_right" for="name"><?php echo smartyTranslate(array('s' => 'Name','mod' => 'blockwishlist'), $this);?>
</label><![endif]-->
				<input required type="text" id="name" name="name" placeholder="Для моей Ямашки" style="width: 100%;" />
				<center>
				<input type="submit" name="submitWishlist" id="submitWishlist" value="<?php echo smartyTranslate(array('s' => 'Создать','mod' => 'blockwishlist'), $this);?>
" class="ebutton orange" style="font-size: 10pt; text-align:center; width:140px; margin-top:10px; height: 26px;"/>
				</center>

		</form>
		

		<?php endif; ?>
<?php endif; ?>
		
		
<?php if (@site_version == 'mobile'): ?>	
		<br>
		<span id="select_wishlist">
		<?php if ($this->_tpl_vars['wishlists']): ?>
			<select name="wishlists" id="wishlists" onchange="WishlistChangeDefault('wishlist_block_list', $('#wishlists').val());">
			<?php $_from = $this->_tpl_vars['wishlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['wishlist']):
        $this->_foreach['i']['iteration']++;
?>
				<option value="<?php echo $this->_tpl_vars['wishlist']['id_wishlist']; ?>
"<?php if ($this->_tpl_vars['id_wishlist'] == $this->_tpl_vars['wishlist']['id_wishlist'] || ( $this->_tpl_vars['id_wishlist'] == false && ($this->_foreach['i']['iteration'] <= 1) )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['wishlist']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 22, '...') : smarty_modifier_truncate($_tmp, 22, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select>
		<?php endif; ?>
		</span>

		<span style="text-align:center;" id="select_wishlist_button">
			<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/blockwishlist/mywishlist.php" class="ebutton orange" title="<?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
"><?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
</a>
		</span>
<?php endif; ?>
	</div>
</div>