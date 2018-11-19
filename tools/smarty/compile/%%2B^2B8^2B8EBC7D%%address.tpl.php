<?php /* Smarty version 2.6.20, created on 2017-01-21 12:57:29
         compiled from /home/motokofr/public_html/modules/orlique/templates/address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/orlique/templates/address.tpl', 44, false),)), $this); ?>
<div class="addressItem">
    <div class="address">
        <input type="hidden" class="id_address"  value="<?php echo $this->_tpl_vars['address']['id_address']; ?>
" />
        <input type="hidden" class="id_customer" value="<?php echo $this->_tpl_vars['address']['id_customer']; ?>
" />
        
        <div style="float: right">
            <a target="_blank" href="<?php echo $this->_tpl_vars['addressEditUrl']; ?>
">
                <img src="../img/admin/edit.gif" />
            </a>
            <a href="<?php echo $this->_tpl_vars['addressGoogleUrl']; ?>
">
                <img src="../img/admin/google.gif" alt="" class="middle" />
            </a>
        </div>
        
        <?php if ($this->_tpl_vars['address']['company'] != ""): ?>
            <?php echo $this->_tpl_vars['address']['company']; ?>
<br />
        <?php endif; ?>
        
        <?php echo $this->_tpl_vars['address']['firstname']; ?>
 <?php echo $this->_tpl_vars['address']['lastname']; ?>
<br />
        <?php echo $this->_tpl_vars['address']['address1']; ?>
<br />
        
        <?php if ($this->_tpl_vars['address']['address2'] != ""): ?>
            <?php echo $this->_tpl_vars['address']['address2']; ?>
<br />
        <?php endif; ?>
        
        <?php echo $this->_tpl_vars['address']['postcode']; ?>
 <?php echo $this->_tpl_vars['address']['city']; ?>
<br />
        <?php echo $this->_tpl_vars['address']['country']; ?>
 <?php if ($this->_tpl_vars['address']['id_state']): ?><?php echo $this->_tpl_vars['address']['state']; ?>
<?php endif; ?><br />
        
        <?php if ($this->_tpl_vars['address']['phone'] != ""): ?>
            <?php echo $this->_tpl_vars['address']['phone']; ?>
<br />
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['address']['phone_mobile'] != ""): ?>
            <?php echo $this->_tpl_vars['address']['phone_mobile']; ?>
<br />
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['address']['other'] != ""): ?>
            <?php echo $this->_tpl_vars['address']['other']; ?>
<br />
        <?php endif; ?>
    </div>
    <hr />
    <span class="control addAddress shipping">
        <img src="../img/admin/delivery.gif" />
        <?php echo smartyTranslate(array('s' => 'Set as shipping address','mod' => 'orlique'), $this);?>

    </span>
    <span class="control addAddress invoice">
        <img src="../img/admin/invoice.gif" />
        <?php echo smartyTranslate(array('s' => 'Set as invoice address','mod' => 'orlique'), $this);?>

    </span>
</div>