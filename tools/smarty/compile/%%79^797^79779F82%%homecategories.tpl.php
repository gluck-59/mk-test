<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:17
         compiled from /Users/gluck/Sites/motokofr.com/modules/homecategories/homecategories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/Users/gluck/Sites/motokofr.com/modules/homecategories/homecategories.tpl', 22, false),)), $this); ?>
<!-- MODULE Home categories -->
    <h2>Популярное</h2>
    <?php if (isset ( $this->_tpl_vars['categories'] ) && $this->_tpl_vars['categories']): ?>
        <div class="home_categories">
            <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['homeCategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['homeCategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category']):
        $this->_foreach['homeCategories']['iteration']++;
?>
                <?php $this->assign('categoryLink', $this->_tpl_vars['link']->getcategoryLink($this->_tpl_vars['category']['id_category'],$this->_tpl_vars['category']['link_rewrite'])); ?>
                <a href="<?php echo $this->_tpl_vars['categoryLink']; ?>
" q="<?php echo $this->_tpl_vars['category']['sold']; ?>
" class="category_image" title="<?php echo $this->_tpl_vars['category']['name']; ?>
">
                
                <div class="item <?php if (($this->_foreach['homeCategories']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['homeCategories']['iteration'] == $this->_foreach['homeCategories']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>">
                    <?php echo $this->_tpl_vars['category']['name']; ?>

                    <div>
                        <img src="<?php echo $this->_tpl_vars['img_cat_dir']; ?>
<?php echo $this->_tpl_vars['category']['id_category']; ?>
.jpg" alt="<?php echo $this->_tpl_vars['category']['name']; ?>
" title="<?php echo $this->_tpl_vars['category']['name']; ?>
" class="categoryImage" />
                       <p class="category_description"><?php echo $this->_tpl_vars['category']['description']; ?>
</p>
                    </div>
                </div>
                
                </a>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    <?php else: ?>
        <p><?php echo smartyTranslate(array('s' => 'No categories','mod' => 'homecategories'), $this);?>
</p>
  <?php endif; ?>
<!-- /MODULE Home categories -->