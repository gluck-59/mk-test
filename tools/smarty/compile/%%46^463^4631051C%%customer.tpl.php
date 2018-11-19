<?php /* Smarty version 2.6.20, created on 2017-08-28 06:32:33
         compiled from /home/motokofr/public_html/modules/orlique/templates/customer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/orlique/templates/customer.tpl', 4, false),array('modifier', 'count', '/home/motokofr/public_html/modules/orlique/templates/customer.tpl', 24, false),)), $this); ?>
<form method="post" id="newCustomerWrapper" style="display: none;">

        <label for="lastname">
            <?php echo smartyTranslate(array('s' => 'Customer Lastname','mod' => 'orlique'), $this);?>

        </label>
        <div class="margin-form">
            <input type="text" name="lastname" size="20" class="customerNw" />
        </div>
        
        <label for="firstname">
            <?php echo smartyTranslate(array('s' => 'Customer Firstname','mod' => 'orlique'), $this);?>

        </label>
        <div class="margin-form">
            <input type="text" name="firstname" size="20" class="customerNw" />
        </div>
        
        <label for="email">
            <?php echo smartyTranslate(array('s' => 'Email','mod' => 'orlique'), $this);?>

        </label>
        <div class="margin-form">
            <input type="text" name="email" size="20" class="customerNw" />
        </div>

<?php if ($this->_tpl_vars['groups'] && count($this->_tpl_vars['groups']) > 0): ?>
        <label for="id_default_group">
            <?php echo smartyTranslate(array('s' => 'Default Group','mod' => 'orlique'), $this);?>

        </label>
        <div class="margin-form">
            <select name="id_default_group" class="customerNw">
        
            <?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                <option value="<?php echo $this->_tpl_vars['group']['id_group']; ?>
"><?php echo $this->_tpl_vars['group']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
    
            </select>
        </div>
        
        <label for="groupBox">
            <?php echo smartyTranslate(array('s' => 'Groups','mod' => 'orlique'), $this);?>

        </label>
        <div class="margin-form">
            <table class="table" cellspacing="0" cellpadding="0" style="width: 29em;">
                <tr>
                    <th>
                        <input type="checkbox" name="checkme" class="noborder" onclick="checkDelBoxes(this.form, \'groupBox[]\', this.checked)" />
                    </th>
                    <th width="30">
                        <?php echo smartyTranslate(array('s' => 'ID','mod' => 'orlique'), $this);?>

                    </th>
                    <th>
                        <?php echo smartyTranslate(array('s' => 'Name','mod' => 'orlique'), $this);?>

                    </th>
                </tr>
        
    <?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                <tr>
                    <td>
                        <input type="checkbox" name="groupBox[]" class="groupBox" id="groupBox_<?php echo $this->_tpl_vars['group']['id_group']; ?>
" value="<?php echo $this->_tpl_vars['group']['id_group']; ?>
">
                    </td>
                    <td>
                        <?php echo $this->_tpl_vars['group']['id_group']; ?>

                    </td>
                    <td>
                        <?php echo $this->_tpl_vars['group']['name']; ?>

                    </td>
                </tr>
    <?php endforeach; endif; unset($_from); ?>

            </table>
        </div>
<?php endif; ?>

    <div id="addrWrapper">
        <div class="duplicatedRow addressRow">
            <label><?php echo smartyTranslate(array('s' => 'Company','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][company]" />
            </div>
            
            <label><?php echo smartyTranslate(array('s' => 'VAT number','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][vat_number]" />
            </div>
            
<?php if ($this->_tpl_vars['displayDni']): ?>
            <label><?php echo smartyTranslate(array('s' => 'DNI','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][dni]" />
            </div>
<?php endif; ?>
            <label for="address1"><?php echo smartyTranslate(array('s' => 'Address','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][address1]" />
            </div>
            
            <label for="address2"><?php echo smartyTranslate(array('s' => 'Address','mod' => 'orlique'), $this);?>
 (2)</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][address2]" />
            </div>
            
            <label for="postcode"><?php echo smartyTranslate(array('s' => 'Postcode/ Zip Code','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][postcode]" />
            </div>
            
            <label for="city"><?php echo smartyTranslate(array('s' => 'City','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][city]" />
            </div>
    
<?php if ($this->_tpl_vars['countries'] && count($this->_tpl_vars['countries']) > 0): ?>
            <label for="id_country"><?php echo smartyTranslate(array('s' => 'Country','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <select class="countrySelect" name="addressNw[0][id_country]">
    
    <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country']):
?>
        <option value="<?php echo $this->_tpl_vars['country']['id_country']; ?>
"<?php if ($this->_tpl_vars['country']['id_country'] == $this->_tpl_vars['selectedCountry']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['country']['name']; ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
                </select>
            </div>
<?php endif; ?>
            <label for="phone"><?php echo smartyTranslate(array('s' => 'Home phone','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][phone]" />
            </div>
            <label><?php echo smartyTranslate(array('s' => 'Mobile phone','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <input type="text" size="33" name="addressNw[0][phone_mobile]" />
            </div>
            <label><?php echo smartyTranslate(array('s' => 'Other','mod' => 'orlique'), $this);?>
</label>
            <div class="margin-form">
                <textarea name="addressNw[0][other]" cols="36" rows="4"></textarea>
            </div>
        </div>
        <a href="#" class="duplicator"><?php echo smartyTranslate(array('s' => 'Add another address','mod' => 'orlique'), $this);?>
</a>
    </div>
    <div class="margin-form">
        <input type="submit" value="<?php echo smartyTranslate(array('s' => 'Save','mod' => 'orlique'), $this);?>
" name="submitAddCustomer" class="button" />
    </div>
</form>