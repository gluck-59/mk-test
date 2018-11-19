<?php /* Smarty version 2.6.20, created on 2017-12-09 10:54:57
         compiled from /home/motokofr/public_html/themes/Earth/addresses.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/themes/Earth/addresses.tpl', 7, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/addresses.tpl', 46, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'My addresses'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'My addresses'), $this);?>
</h2>

<?php if ($this->_tpl_vars['addresses']): ?>

<div class="addresses">
	
	<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['address']):
        $this->_foreach['myLoop']['iteration']++;
?>
		<fieldset class="address" id="<?php echo $this->_tpl_vars['address']['id_address']; ?>
">
			<legend class="address_title"><?php echo $this->_tpl_vars['address']['alias']; ?>
</legend>
		<div id="map_canvas_<?php echo $this->_tpl_vars['address']['id_address']; ?>
" class="map_canvas"></div>
			<p class="address_name"><?php echo $this->_tpl_vars['address']['firstname']; ?>
 <?php echo $this->_tpl_vars['address']['address2']; ?>
 <?php echo $this->_tpl_vars['address']['lastname']; ?>
</p>
			<p class="address_address1"><?php echo $this->_tpl_vars['address']['address1']; ?>
</p>
			<p class="address_country"><?php echo $this->_tpl_vars['address']['postcode']; ?>
, <?php echo $this->_tpl_vars['address']['country']; ?>
, <?php if (isset ( $this->_tpl_vars['address']['state'] )): ?> (<?php echo $this->_tpl_vars['address']['state']; ?>
), <?php endif; ?> <?php echo $this->_tpl_vars['address']['city']; ?>
</p>
			<p>&nbsp;</p>
			<?php if ($this->_tpl_vars['address']['phone']): ?><p class="address_phone">ИНН: <?php echo $this->_tpl_vars['address']['phone']; ?>
</p>
            <?php else: ?><p class="address_additem">&bull; Добавь ИНН получателя посылки</p>			
            <?php endif; ?>
			
			<?php if ($this->_tpl_vars['address']['other']): ?><p class="address_other"><?php echo $this->_tpl_vars['address']['other']; ?>
</p>		
			<?php else: ?><p class="address_additem">&bull; Добавь марку-модель-год мотоцикла</p>			
			<?php endif; ?>	

			<?php if ($this->_tpl_vars['address']['phone_mobile']): ?><p class="address_phone_mobile"><?php echo $this->_tpl_vars['address']['phone_mobile']; ?>
</p>
			<?php else: ?><p class="address_additem">&bull; Добавь телефон для курьера</p>
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['address']['company']): ?><p class="address_passport">Паспорт <?php echo $this->_tpl_vars['address']['company']; ?>
</p>
			<?php else: ?><p class="address_additem">&bull; Добавь <?php if (! $this->_tpl_vars['address']['address2']): ?>отчество и<?php endif; ?> паспортные данные для таможни (необязательно)</p>
			<?php endif; ?>
	
			<div class="buttons">
			<a class="ebutton blue small" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'Update'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Update'), $this);?>
</a>
			&nbsp;&nbsp;&nbsp;
			<a class="ebutton red small" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;delete" onclick="return confirm('<?php echo smartyTranslate(array('s' => 'Удалить адрес'), $this);?>
 <?php echo $this->_tpl_vars['address']['address1']; ?>
?');" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
</a>
			</div>
		</fieldset>
		
		
<!-- gmaps -->
<?php echo '
<script type="text/javascript">
function gmaps(){
//var map = null;
//var geocoder = null;
var id = null;		

var address = \''; ?>
<?php echo $this->_tpl_vars['address']['country']; ?>
 <?php echo $this->_tpl_vars['address']['city']; ?>
 <?php echo $this->_tpl_vars['address']['address1']; ?>
<?php echo '\';
var baloon = \''; ?>
<?php echo $this->_tpl_vars['address']['alias']; ?>
<?php echo '\';
var id = \''; ?>
<?php echo $this->_tpl_vars['address']['id_address']; ?>
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
	<?php endforeach; endif; unset($_from); ?>
	



</div>

<p class="clear">&nbsp;</p>
	<p align="center" class="clear address_add"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php" title="<?php echo smartyTranslate(array('s' => 'Добавить адрес'), $this);?>
" class="ebutton orange large"><?php echo smartyTranslate(array('s' => 'Добавить новый адрес'), $this);?>
</a></p>
<?php else: ?>
		<p class="success"><?php echo smartyTranslate(array('s' => 'No addresses available.'), $this);?>
&nbsp;<?php echo smartyTranslate(array('s' => 'add a new one!'), $this);?>
</p>
	<p align="center" class="clear address_add"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php" title="<?php echo smartyTranslate(array('s' => 'Добавить адрес'), $this);?>
" class="ebutton orange"><?php echo smartyTranslate(array('s' => 'Добавить адрес'), $this);?>
</a></p>
<?php endif; ?>

<table width="100%" border="0" style="margin-top: 30px;">
  <tr>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.png" alt="" class="icon" /></a></div></td>
    <td width="50%"><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.png" alt="" class="icon" /></a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Back to Your Account'), $this);?>
</a></div></td>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></div></td>
  </tr>
</table>
