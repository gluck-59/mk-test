<?php /* Smarty version 2.6.20, created on 2017-01-21 12:57:19
         compiled from /home/motokofr/public_html/modules/orlique/templates/product_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/orlique/templates/product_add.tpl', 4, false),array('function', 'displayPrice', '/home/motokofr/public_html/modules/orlique/templates/product_add.tpl', 7, false),array('modifier', 'count', '/home/motokofr/public_html/modules/orlique/templates/product_add.tpl', 10, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['product'] )): ?>
    <h2><?php echo $this->_tpl_vars['product']->name; ?>
<?php if ($this->_tpl_vars['product']->reference != ""): ?> (<?php echo $this->_tpl_vars['product']->reference; ?>
)<?php endif; ?></h2>
    <dl class="productShortInfo">
        <dt><?php echo smartyTranslate(array('s' => 'Quantity:','mod' => 'orlique'), $this);?>
</dt>
        <dd><?php echo $this->_tpl_vars['product']->quantity; ?>
</dd>
        <dt><?php echo smartyTranslate(array('s' => 'Price:','mod' => 'orlique'), $this);?>
</dt>
        <dd><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']->price,'currency' => $this->_tpl_vars['currencyId']), $this);?>
</dd>
	</dl>
    
    <?php if (isset ( $this->_tpl_vars['combinations'] ) && count($this->_tpl_vars['combinations']) > 0): ?>
    
    <table class="table" cellspacing="0" cellpadding="0" style="width: 100%;">
        <tr>
            <th><?php echo smartyTranslate(array('s' => 'Combination','mod' => 'orlique'), $this);?>
</th>
            <th class="center"><?php echo smartyTranslate(array('s' => 'Quantity','mod' => 'orlique'), $this);?>
</th>
            <th class="center"><?php echo smartyTranslate(array('s' => 'Price','mod' => 'orlique'), $this);?>
</th>
            <th class="center"><?php echo smartyTranslate(array('s' => 'Weight','mod' => 'orlique'), $this);?>
</th>
            <th class="left"><?php echo smartyTranslate(array('s' => 'Reference','mod' => 'orlique'), $this);?>
</th>
            <th class="right" width="16"><?php echo smartyTranslate(array('s' => 'Add','mod' => 'orlique'), $this);?>
</th>
        </tr>
        
        <?php $_from = $this->_tpl_vars['combinations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['attribute_id'] => $this->_tpl_vars['combination']):
        $this->_foreach['i']['iteration']++;
?>
            <tr <?php if (($this->_foreach['i']['iteration']-1) % 2 != 0): ?>class="alt_row"<?php endif; ?> <?php if ($this->_tpl_vars['combination']['default_on']): ?>style="background-color:#D1EAEF"<?php endif; ?>>
                <td><?php echo $this->_tpl_vars['combination']['list']; ?>
</td>
                <td class="center"><?php echo $this->_tpl_vars['combination']['quantity']; ?>
</td>
                <td class="center"><?php echo $this->_tpl_vars['combination']['price']; ?>
</td>
                <td class="center"><?php echo $this->_tpl_vars['combination']['weight']; ?>
 <?php echo $this->_tpl_vars['weightUnit']; ?>
</td>
                <td class="left"><?php echo $this->_tpl_vars['combination']['reference']; ?>
</td>
                <td class="right" width="16">
                    <span class="control addProduct" id="combo_<?php echo $this->_tpl_vars['product']->id; ?>
_<?php echo $this->_tpl_vars['attribute_id']; ?>
"></span>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    <?php else: ?>

    
    <span class="control addProduct withLabel" id="product_<?php echo $this->_tpl_vars['product']->id; ?>
"><?php echo smartyTranslate(array('s' => 'Add to order','mod' => 'orlique'), $this);?>
</span>
    <?php endif; ?>
<?php else: ?>
<h4 class="error err"><?php echo smartyTranslate(array('s' => 'Invalid product selected','mod' => 'orlique'), $this);?>
</h4>
<?php endif; ?>