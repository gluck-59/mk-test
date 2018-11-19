<?php /* Smarty version 2.6.20, created on 2016-11-20 12:41:35
         compiled from /home/motokofr/public_html/themes/Earth/product-accessories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/product-accessories.tpl', 1, false),array('modifier', 'strip_tags', '/home/motokofr/public_html/themes/Earth/product-accessories.tpl', 3, false),array('function', 'declension', '/home/motokofr/public_html/themes/Earth/product-accessories.tpl', 8, false),array('function', 'l', '/home/motokofr/public_html/themes/Earth/product-accessories.tpl', 8, false),array('function', 'displayWtPrice', '/home/motokofr/public_html/themes/Earth/product-accessories.tpl', 12, false),)), $this); ?>
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="category_image">
    <div class="item">
        <p class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</p>
        <p class="category_description"></p>
    	<div>
        	<center style="position: relative">
        		<img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['accessory']['link_rewrite'],$this->_tpl_vars['accessory']['id_image'],'home'); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
                <?php if ($this->_tpl_vars['accessory']['acc_hot'] == 1): ?><div title="Этот ништяк уже есть у <?php echo $this->_tpl_vars['accessory']['acc_sales']; ?>
<?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['accessory']['acc_sales'],'expressions' => "байкера,байкеров,байкеров"), $this);?>
" class="hot"><?php echo smartyTranslate(array('s' => 'hot'), $this);?>
</div><?php endif; ?>
                <?php if ($this->_tpl_vars['accessory']['acc_new'] == 1): ?><div title="Этот ништяк был недавно обновлен" class="new"><?php echo smartyTranslate(array('s' => 'new'), $this);?>
</div><?php endif; ?>
        	</center>
    		<p>&nbsp;</p>
            <p class="desc"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['accessory']['price']), $this);?>
</p>
    	</div>
    </div>
</a>