<?php /* Smarty version 2.6.20, created on 2016-12-30 09:08:15
         compiled from /home/motokofr/public_html/modules/orlique/templates/product_line.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'displayPrice', '/home/motokofr/public_html/modules/orlique/templates/product_line.tpl', 48, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['productData'] )): ?>
    <?php $_from = $this->_tpl_vars['productData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
    <tr<?php if ($this->_tpl_vars['product']['rowId']): ?> id="<?php echo $this->_tpl_vars['product']['rowId']; ?>
"<?php endif; ?> <?php echo $this->_tpl_vars['product']['imgStr']; ?>
>
        <td align="center">
            <?php echo $this->_tpl_vars['product']['image']; ?>

            <input type="hidden" class="indexProduct" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][index]" value="<?php echo $this->_tpl_vars['product']['index']; ?>
" />
            <input type="hidden" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][product_attribute]" value="<?php echo $this->_tpl_vars['product']['combination']; ?>
" />
        </td>
        <td class="editable productName">
            <span class="customValue"></span>
            <span class="publicView">
                <?php echo $this->_tpl_vars['product']['productNamePublic']; ?>

            </span>
            <span class="realValue">
                <textarea name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][name]"><?php echo $this->_tpl_vars['product']['productNameReal']; ?>
</textarea>
            </span>
        </td>
        <td class="editable productReference">
            <span class="customValue"></span>
            <span class="publicView">
                <?php if ($this->_tpl_vars['product']['reference'] != ""): ?><?php echo $this->_tpl_vars['product']['reference']; ?>
<?php else: ?>N/A<?php endif; ?>
            </span>
            <span class="realValue">
                <input type="text" size="20" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][reference]" value="<?php echo $this->_tpl_vars['product']['reference']; ?>
" />
            </span>
        </td>
        <td class="editable productQuantity">
            <span class="customValue"></span>
            <span class="publicView">
                <?php echo $this->_tpl_vars['product']['quantity']; ?>

            </span>
            <span class="realValue">
                <input type="text" size="3" class="orderPQuantity" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][quantity]" value="<?php echo $this->_tpl_vars['product']['quantity']; ?>
" />
            </span>
        </td>
        <td class="editable productWeight">
            <span class="customValue"></span>
            <span class="publicView">
                <?php echo $this->_tpl_vars['product']['weight']; ?>
<?php echo $this->_tpl_vars['product']['weightUnit']; ?>

            </span>
            <span class="realValue">
                <input type="text" class="weightFormat" size="3" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][weight]" value="<?php echo $this->_tpl_vars['product']['weight']; ?>
" />
            </span>
        </td>
        <td class="editable">
            <span class="customValue"></span>
            <span class="publicView">
                <?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']['price'],'currency' => $this->_tpl_vars['product']['currency']), $this);?>

            </span>
            <span class="realValue">
                <input type="text" size="6" class="orderPPrice cpOnKeyUp priceFormat" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][price]" value="<?php echo $this->_tpl_vars['product']['price']; ?>
" />
            </span>
        </td>
        <td class="editable">
            <span class="customValue productTax"></span>
            <span class="publicView">
                <?php echo $this->_tpl_vars['product']['taxRate']; ?>

            </span>
            <span class="realValue">
                <input type="text" class="cpOnKeyUp percentageFormat" size="6" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][tax_rate]" value="<?php echo $this->_tpl_vars['product']['taxRate']; ?>
" />
            </span>
        </td>
        <td class="editable">
            <span class="customValue"></span>
            <span class="publicView">
                <?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']['priceTaxed'],'currency' => $this->_tpl_vars['product']['currency']), $this);?>

            </span>
            <span class="realValue">
                <input type="text" class="orderPPriceWt cpOnKeyUp priceFormat" size="6" name="product[<?php echo $this->_tpl_vars['product']['index']; ?>
][<?php echo $this->_tpl_vars['product']['productId']; ?>
][price_wt]" value="<?php echo $this->_tpl_vars['product']['priceTaxed']; ?>
" />
            </span>
        </td>
        <td class="productsTotalPrice">
            <?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']['priceTotal'],'currency' => $this->_tpl_vars['product']['currency']), $this);?>

        </td>
        <td align="center">
            <span class="control deleteProduct"></span>
        </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>