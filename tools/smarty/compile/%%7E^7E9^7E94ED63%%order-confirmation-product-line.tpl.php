<?php /* Smarty version 2.6.20, created on 2016-11-20 19:02:24
         compiled from /home/motokofr/public_html/themes/Earth/./order-confirmation-product-line.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/./order-confirmation-product-line.tpl', 31, false),array('function', 'l', '/home/motokofr/public_html/themes/Earth/./order-confirmation-product-line.tpl', 33, false),)), $this); ?>
<script src="http://maps.google.com/maps?file=api&amp;v=2.x"></script>
<div id="order-detail-content" class="table_block nonprintable">

    <h2>Содержимое кофра</h2>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <h2>Адрес доставки</h2>
	<fieldset class="address" id="<?php echo $this->_tpl_vars['id_address']; ?>
" style="border-color: #ccc">
		<legend class="address_title" style="background-color: #ccc; color: #000"><?php echo $this->_tpl_vars['address']->alias; ?>
</legend>
        <div id="map_canvas_<?php echo $this->_tpl_vars['address']->id_address; ?>
" class="map_canvas"></div>
		<p class="address_name"><?php echo $this->_tpl_vars['address']->firstname; ?>
 <?php echo $this->_tpl_vars['address']->address2; ?>
 <?php echo $this->_tpl_vars['address']->lastname; ?>
</p>
		<p class="address_address1"><?php echo $this->_tpl_vars['address']->address1; ?>
</p>
		<p class="address_country"><?php echo $this->_tpl_vars['address']->postcode; ?>
, <?php echo $this->_tpl_vars['address']->country; ?>
, <?php if (isset ( $this->_tpl_vars['address']->state )): ?> (<?php echo $this->_tpl_vars['address']->state; ?>
), <?php endif; ?> <?php echo $this->_tpl_vars['address']->city; ?>
</p>
		<p>&nbsp;</p>
		<?php if ($this->_tpl_vars['address']->phone): ?><p class="address_phone"><?php echo $this->_tpl_vars['address']->phone; ?>
</p><?php endif; ?>
		
		<?php if ($this->_tpl_vars['address']->other): ?><p class="address_other"><?php echo $this->_tpl_vars['address']->other; ?>
</p>		
		<?php else: ?><p class="address_additem">&bull; Добавь марку-модель-год мотоцикла</p>			
		<?php endif; ?>

		<?php if ($this->_tpl_vars['address']->phone_mobile): ?><p class="address_phone_mobile"><?php echo $this->_tpl_vars['address']->phone_mobile; ?>
</p>
		<?php else: ?><p class="address_additem">&bull; Добавь телефон для курьера</p>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['address']->company): ?><p class="address_passport">Паспорт <?php echo $this->_tpl_vars['address']->company; ?>
</p>
		<?php else: ?><p class="address_additem">&bull; Добавь <?php if (! $this->_tpl_vars['address']->address2): ?>отчество и<?php endif; ?> паспортные данные для таможни (необязательно)</p>
		<?php endif; ?>

		<div class="buttons">
		    <a class="ebutton blue small" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="Изменить">Изменить</a>
		&nbsp;&nbsp;&nbsp;
			<!--a class="ebutton red small" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;delete" onclick="return confirm('<?php echo smartyTranslate(array('s' => 'Удалить адрес'), $this);?>
 <?php echo $this->_tpl_vars['id_address']; ?>
?');" title="Удалить">Удалить</a-->
		</div>
	</fieldset>
</div>

<!-- gmaps -->
<?php echo '
<script type="text/javascript">
function gmaps(){
//var map = null;
//var geocoder = null;
var id = null;		

var address = \''; ?>
<?php echo $this->_tpl_vars['address']->country; ?>
 <?php echo $this->_tpl_vars['address']->city; ?>
 <?php echo $this->_tpl_vars['address']->address1; ?>
<?php echo '\';
var baloon = \''; ?>
<?php echo $this->_tpl_vars['address']->alias; ?>
<?php echo '\';
var id = \''; ?>
<?php echo $this->_tpl_vars['address']->id_address; ?>
<?php echo '\';
    
if (GBrowserIsCompatible()) 
{
idg = new GClientGeocoder();

  if (idg) 
  {
    idg.getLatLng(address, function(point) 
    {
        if (!point) 
        {
          map = new GMap2(document.getElementById("map_canvas_"+id));

        } 
        else 
        {
          map = new GMap2(document.getElementById("map_canvas_"+id));
          map.setCenter(point, 15);
          var marker = new GMarker(point);
          map.addOverlay(marker);
          marker.openInfoWindowHtml(baloon);
        }
      }
    );
  }
}
}
setTimeout(gmaps(), 1000);
    </script>
'; ?>

<!-- /gmaps -->
