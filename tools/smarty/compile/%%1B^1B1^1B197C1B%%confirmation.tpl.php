<?php /* Smarty version 2.6.20, created on 2016-11-20 19:46:19
         compiled from /home/motokofr/public_html/modules/sbercard/confirmation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/sbercard/confirmation.tpl', 8, false),)), $this); ?>
<div class="rte">
<p class="nonprintable">Твой заказ в <span class="bold"><?php echo $this->_tpl_vars['shop_name']; ?>
</span> успешно создан.
Мы обязательно сообщим тебе, когда платеж пройдет. <br>
Обычно это происходит сегодня же :)
</p>

<p>
<?php echo smartyTranslate(array('s' => 'For any questions or for further information, please contact our','mod' => 'sbercard'), $this);?>
 <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php"><?php echo smartyTranslate(array('s' => 'customer support','mod' => 'sbercard'), $this);?>
</a>.
</p>
</div>