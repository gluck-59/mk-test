<?php /* Smarty version 2.6.20, created on 2018-07-14 19:11:26
         compiled from /home/motokofr/public_html/themes/Earth/product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/motokofr/public_html/themes/Earth/product.tpl', 2, false),array('modifier', 'html_entity_decode', '/home/motokofr/public_html/themes/Earth/product.tpl', 7, false),array('modifier', 'floatval', '/home/motokofr/public_html/themes/Earth/product.tpl', 8, false),array('modifier', 'intval', '/home/motokofr/public_html/themes/Earth/product.tpl', 9, false),array('modifier', 'escape', '/home/motokofr/public_html/themes/Earth/product.tpl', 23, false),array('modifier', 'default', '/home/motokofr/public_html/themes/Earth/product.tpl', 25, false),array('modifier', 'date_format', '/home/motokofr/public_html/themes/Earth/product.tpl', 32, false),array('modifier', 'cat', '/home/motokofr/public_html/themes/Earth/product.tpl', 43, false),array('modifier', 'addslashes', '/home/motokofr/public_html/themes/Earth/product.tpl', 75, false),array('modifier', 'strip_tags', '/home/motokofr/public_html/themes/Earth/product.tpl', 92, false),array('modifier', 'htmlspecialchars', '/home/motokofr/public_html/themes/Earth/product.tpl', 131, false),array('modifier', 'mb_strtolower', '/home/motokofr/public_html/themes/Earth/product.tpl', 481, false),array('modifier', 'urlencode', '/home/motokofr/public_html/themes/Earth/product.tpl', 502, false),array('modifier', 'stripslashes', '/home/motokofr/public_html/themes/Earth/product.tpl', 670, false),array('function', 'l', '/home/motokofr/public_html/themes/Earth/product.tpl', 65, false),array('function', 'declension', '/home/motokofr/public_html/themes/Earth/product.tpl', 110, false),array('function', 'math', '/home/motokofr/public_html/themes/Earth/product.tpl', 126, false),array('function', 'convertPrice', '/home/motokofr/public_html/themes/Earth/product.tpl', 293, false),array('function', 'counter', '/home/motokofr/public_html/themes/Earth/product.tpl', 649, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if (count($this->_tpl_vars['errors']) == 0): ?>
<script type="text/javascript">
// <![CDATA[

// internal settings
var currencySign = '<?php echo ((is_array($_tmp=$this->_tpl_vars['currencySign'])) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, "UTF-8") : html_entity_decode($_tmp, 2, "UTF-8")); ?>
';
var currencyRate = '<?php echo ((is_array($_tmp=$this->_tpl_vars['currencyRate'])) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp)); ?>
';
var currencyFormat = '<?php echo ((is_array($_tmp=$this->_tpl_vars['currencyFormat'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
';
var currencyBlank = '<?php echo ((is_array($_tmp=$this->_tpl_vars['currencyBlank'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
';
var taxRate = <?php echo ((is_array($_tmp=$this->_tpl_vars['product']->tax_rate)) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp)); ?>
;
var jqZoomEnabled = <?php if ($this->_tpl_vars['jqZoomEnabled']): ?>true<?php else: ?>false<?php endif; ?>;

//JS Hook
var oosHookJsCodeFunctions = new Array();

// Parameters
var id_product = '<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->id)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
';
var productHasAttributes = <?php if (isset ( $this->_tpl_vars['groups'] )): ?>true<?php else: ?>false<?php endif; ?>;
var quantitiesDisplayAllowed = <?php if ($this->_tpl_vars['display_qties'] == 1): ?>true<?php else: ?>false<?php endif; ?>;
var quantityAvailable = <?php if ($this->_tpl_vars['display_qties'] == 1 && $this->_tpl_vars['product']->quantity): ?><?php echo $this->_tpl_vars['product']->quantity; ?>
<?php else: ?>0<?php endif; ?>;
var allowBuyWhenOutOfStock = <?php if ($this->_tpl_vars['allow_oosp'] == 1): ?>true<?php else: ?>false<?php endif; ?>;
var availableNowValue = '<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->available_now)) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes', 'UTF-8') : smarty_modifier_escape($_tmp, 'quotes', 'UTF-8')); ?>
';
var availableLaterValue = '<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->available_later)) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes', 'UTF-8') : smarty_modifier_escape($_tmp, 'quotes', 'UTF-8')); ?>
';
var productPriceWithoutReduction = <?php echo ((is_array($_tmp=@$this->_tpl_vars['product']->getPriceWithoutReduct())) ? $this->_run_mod_handler('default', true, $_tmp, 'null') : smarty_modifier_default($_tmp, 'null')); ?>
;
var reduction_percent = <?php if ($this->_tpl_vars['product']->reduction_percent): ?><?php echo $this->_tpl_vars['product']->reduction_percent; ?>
<?php else: ?>0<?php endif; ?>;
var reduction_price = <?php if ($this->_tpl_vars['product']->reduction_percent): ?>0<?php else: ?><?php echo $this->_tpl_vars['product']->getPrice(true,@NULL,2,@NULL,true); ?>
<?php endif; ?>;
var reduction_from = '<?php echo $this->_tpl_vars['product']->reduction_from; ?>
';
var reduction_to = '<?php echo $this->_tpl_vars['product']->reduction_to; ?>
';
var group_reduction = '<?php echo $this->_tpl_vars['group_reduction']; ?>
';
var default_eco_tax = <?php echo $this->_tpl_vars['product']->ecotax; ?>
;
var currentDate = '<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
';
var maxQuantityToAllowDisplayOfLastQuantityMessage = <?php echo $this->_tpl_vars['last_qties']; ?>
;
var noTaxForThisProduct = <?php if ($this->_tpl_vars['no_tax'] == 1): ?>true<?php else: ?>false<?php endif; ?>;
var displayPrice = <?php if (isset ( $this->_tpl_vars['priceDisplay'] )): ?> $priceDisplay <?php else: ?> 0<?php endif; ?>;

// Customizable field
var img_ps_dir = '<?php echo $this->_tpl_vars['img_ps_dir']; ?>
';
var customizationFields = new Array();
<?php $this->assign('imgIndex', 0); ?>
<?php $this->assign('textFieldIndex', 0); ?>
<?php $_from = $this->_tpl_vars['customizationFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customizationFields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customizationFields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['customizationFields']['iteration']++;
?>
<?php $this->assign('key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='pictures_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']->id) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']->id)))) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field']['id_customization_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field']['id_customization_field']))); ?>
	customizationFields[<?php echo ((is_array($_tmp=($this->_foreach['customizationFields']['iteration']-1))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
] = new Array();
	customizationFields[<?php echo ((is_array($_tmp=($this->_foreach['customizationFields']['iteration']-1))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
][0] = '<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == 0): ?>img<?php echo $this->_tpl_vars['imgIndex']++; ?>
<?php else: ?>textField<?php echo $this->_tpl_vars['textFieldIndex']++; ?>
<?php endif; ?>';
	customizationFields[<?php echo ((is_array($_tmp=($this->_foreach['customizationFields']['iteration']-1))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
][1] = <?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == 0 && $this->_tpl_vars['pictures'][$this->_tpl_vars['key']]): ?>2<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['required'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php endif; ?>;
<?php endforeach; endif; unset($_from); ?>

// Images
var img_prod_dir = '<?php echo $this->_tpl_vars['img_prod_dir']; ?>
';
var combinationImages = new Array();
<?php $_from = $this->_tpl_vars['combinationImages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f_combinationImages'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f_combinationImages']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['combinationId'] => $this->_tpl_vars['combination']):
        $this->_foreach['f_combinationImages']['iteration']++;
?>
combinationImages[<?php echo $this->_tpl_vars['combinationId']; ?>
] = new Array();
<?php $_from = $this->_tpl_vars['combination']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f_combinationImage'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f_combinationImage']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['image']):
        $this->_foreach['f_combinationImage']['iteration']++;
?>
combinationImages[<?php echo $this->_tpl_vars['combinationId']; ?>
][<?php echo ($this->_foreach['f_combinationImage']['iteration']-1); ?>
] = <?php echo ((is_array($_tmp=$this->_tpl_vars['image']['id_image'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
;
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>

combinationImages[0] = new Array();
<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f_defaultImages'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f_defaultImages']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['image']):
        $this->_foreach['f_defaultImages']['iteration']++;
?>
combinationImages[0][<?php echo ($this->_foreach['f_defaultImages']['iteration']-1); ?>
] = <?php echo $this->_tpl_vars['image']['id_image']; ?>
;
<?php endforeach; endif; unset($_from); ?>

// Translations
var doesntExist = '<?php echo smartyTranslate(array('s' => 'The product does not exist in this model. Please choose another.','js' => 1), $this);?>
';
var doesntExistNoMore = '<?php echo smartyTranslate(array('s' => 'This product is no longer in stock','js' => 1), $this);?>
';
var doesntExistNoMoreBut = '<?php echo smartyTranslate(array('s' => 'with those attributes but is available with others','js' => 1), $this);?>
';
var uploading_in_progress = '<?php echo smartyTranslate(array('s' => 'Uploading in progress, please wait...','js' => 1), $this);?>
';
var fieldRequired = '<?php echo smartyTranslate(array('s' => 'Please fill all required fields','js' => 1), $this);?>
';


<?php if (isset ( $this->_tpl_vars['groups'] )): ?>
	// Combinations
	<?php $_from = $this->_tpl_vars['combinations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['idCombination'] => $this->_tpl_vars['combination']):
?>
		addCombination(<?php echo ((is_array($_tmp=$this->_tpl_vars['idCombination'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
, new Array(<?php echo $this->_tpl_vars['combination']['list']; ?>
), <?php echo $this->_tpl_vars['combination']['quantity']; ?>
, <?php echo $this->_tpl_vars['combination']['price']; ?>
, <?php echo $this->_tpl_vars['combination']['ecotax']; ?>
, <?php echo $this->_tpl_vars['combination']['id_image']; ?>
, '<?php echo ((is_array($_tmp=$this->_tpl_vars['combination']['reference'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
');
	<?php endforeach; endif; unset($_from); ?>
	// Colors
	<?php if (count($this->_tpl_vars['colors']) > 0): ?>
		<?php if ($this->_tpl_vars['product']->id_color_default): ?>var id_color_default = <?php echo ((is_array($_tmp=$this->_tpl_vars['product']->id_color_default)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
;<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>

//]]>
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="product_raise" style="">
<div id="primary_block">
<article itemscope itemtype="http://schema.org/Offer">
	<h1 itemprop="name"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</h1>
	<p hidden itemprop="description"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->description_short)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</p>
	<?php if ($this->_tpl_vars['confirmation']): ?>
	<p class="confirmation">
		<?php echo $this->_tpl_vars['confirmation']; ?>

	</p>
	<?php endif; ?>

	<!-- right infos-->
	<div id="pb-right-column">
		<!-- product img-->
		<?php if (@site_version == 'full'): ?> 

				<div id="image-block">
					<?php if ($this->_tpl_vars['have_image']): ?>
					<img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['cover']['id_image'],'large'); ?>
" <?php if ($this->_tpl_vars['jqZoomEnabled']): ?>class="jqzoom" alt="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['cover']['id_image'],'thickbox'); ?>
"<?php else: ?> title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php endif; ?> id="bigpic"/>
					<?php else: ?>
					<img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['lang_iso']; ?>
-default-large.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
					<?php endif; ?>
					<?php if ($this->_tpl_vars['product_hot'] == 1): ?><div title="Этот ништяк уже есть у <?php echo $this->_tpl_vars['sales']; ?>
 <?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['sales'],'expressions' => "байкера,байкеров,байкеров"), $this);?>
" class="hot"><?php echo smartyTranslate(array('s' => 'hot'), $this);?>
</div><?php endif; ?>
					<?php if ($this->_tpl_vars['product_new']): ?><div title="Этот ништяк недавно обновлен" class="new"><?php echo smartyTranslate(array('s' => 'new'), $this);?>
</div><?php endif; ?>
				</div>
					<?php if (count ( $this->_tpl_vars['images'] ) > 0): ?>

					<!-- thumbnails -->
					<div id="views_block" <?php if (count ( $this->_tpl_vars['images'] ) < 2): ?>class="hidden"<?php endif; ?>>

						<?php if (count ( $this->_tpl_vars['images'] ) > 3): ?>
						<span class="view_scroll_spacer">
							<a id="view_scroll_left" class="hidden" href="javascript:{}"><?php echo smartyTranslate(array('s' => 'Previous'), $this);?>

							</a>
						</span>
						<?php endif; ?>

						<div id="thumbs_list">
				 			<ul style="width: <?php echo smarty_function_math(array('equation' => "width * nbImages",'width' => 110,'nbImages' => count($this->_tpl_vars['images'])), $this);?>
px" id="thumbs_list_frame"> 
							<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['thumbnails'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['thumbnails']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['image']):
        $this->_foreach['thumbnails']['iteration']++;
?>
							<?php $this->assign('imageIds', ($this->_tpl_vars['product']->id)."-".($this->_tpl_vars['image']['id_image'])); ?>
							
							<li id="thumbnail_<?php echo $this->_tpl_vars['image']['id_image']; ?>
">
							<a href="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['imageIds'],''); ?>
" rel="prettyPhoto[mao]" class="<?php if (! $this->_tpl_vars['jqZoomEnabled']): ?><?php endif; ?> <?php if (($this->_foreach['thumbnails']['iteration'] <= 1)): ?>shown<?php endif; ?>" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['image']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">
							<img itemprop="image" style="border: solid 1px #AAA; border-radius: 5px;" id="thumb_<?php echo $this->_tpl_vars['image']['id_image']; ?>
" src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['imageIds'],'medium'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['image']['legend'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" height="<?php echo $this->_tpl_vars['mediumSize']['height']; ?>
" width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" />
							</a>
							<link href="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['imageIds']); ?>
" />
							</li>
							<?php endforeach; endif; unset($_from); ?>
							</ul>
						</div>

					<?php if (count ( $this->_tpl_vars['images'] ) > 3): ?>
						<span class="view_scroll_spacer">
						<a id="view_scroll_right" href="javascript:{}"><?php echo smartyTranslate(array('s' => 'Next'), $this);?>
</a>
						</span>
					<?php endif; ?>
				</div>
				<?php endif; ?>		

					<?php endif; ?>	

	<?php if (@site_version == 'mobile'): ?>
		<!-- swiper -->
		
		<div class="swiper-container">
		  <div class="swiper-wrapper">
			  <?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['thumbnails'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['thumbnails']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['image']):
        $this->_foreach['thumbnails']['iteration']++;
?>
			  <?php $this->assign('imageIds', ($this->_tpl_vars['product']->id)."-".($this->_tpl_vars['image']['id_image'])); ?>
			  	<div class="swiper-slide"> 
					<img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['imageIds'],'thickbox'); ?>
" />
									</div>
				<?php endforeach; endif; unset($_from); ?>
		  </div>
          <?php if (count ( $this->_tpl_vars['images'] ) > 1): ?>
            <!-- Add Pagination -->
            <!--div class="swiper-pagination"></div-->
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <script>
            count = 2;
            </script>

            <?php else: ?>   
            <script>
            count = 1;
            </script>
           <?php endif; ?>

		</div>
	

	<?php endif; ?>		
	
	
</div>



	<!-- left infos-->
	<?php if (@site_version == 'mobile'): ?>
	<br>
	<?php endif; ?>
	
	
	<div id="pb-left-column">

		<?php if ($this->_tpl_vars['colors']): ?>
		<!-- colors -->
		<div id="color_picker">
			<p><?php echo smartyTranslate(array('s' => 'Pick a color:','js' => 1), $this);?>
</p>
			<div class="clear"></div>
			<ul id="color_to_pick_list">
			<?php $_from = $this->_tpl_vars['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute'] => $this->_tpl_vars['color']):
?>
				<li><a id="color_<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" class="color_pick" style="background: <?php echo $this->_tpl_vars['color']['value']; ?>
;" onclick="updateColorSelect(<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
);"><?php if (file_exists ( ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['col_img_dir'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['id_attribute']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['id_attribute'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.jpg') : smarty_modifier_cat($_tmp, '.jpg')) )): ?><img src="<?php echo $this->_tpl_vars['img_col_dir']; ?>
<?php echo $this->_tpl_vars['id_attribute']; ?>
.jpg" alt="" title="<?php echo $this->_tpl_vars['color']['name']; ?>
" /><?php endif; ?></a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
				<a id="color_all" onclick="updateColorSelect(0);"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/cancel.gif" alt="" title="<?php echo $this->_tpl_vars['color']['name']; ?>
" /></a>
			<div class="clear"></div>
		</div>
		<?php endif; ?>

<?php if (@site_version == 'full'): ?>
<!-- Block currencies module -->
<noindex>
<div id="currencies_block">
	<form id="setCurrency" action="<?php echo $this->_tpl_vars['request_uri']; ?>
" method="post">
		<ul>
			<?php $_from = $this->_tpl_vars['currencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f_currency']):
?>
				<?php if ($this->_tpl_vars['f_currency']['id_currency'] == 3 || $this->_tpl_vars['f_currency']['id_currency'] == 1 || $this->_tpl_vars['f_currency']['id_currency'] == 2): ?>
					<li <?php if ($this->_tpl_vars['id_currency_cookie'] == $this->_tpl_vars['f_currency']['id_currency']): ?>class="selected"<?php endif; ?>>
						<a href="javascript:setCurrency(<?php echo $this->_tpl_vars['f_currency']['id_currency']; ?>
);" title="<?php echo $this->_tpl_vars['f_currency']['name']; ?>
"><?php echo $this->_tpl_vars['f_currency']['sign']; ?>
</a>
					</li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
	</form>
</div>
</noindex>
<!-- /Block currencies module -->
<?php endif; ?>
			
		<!-- add to cart form-->
		<form id="buy_block" action="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php" method="post" onsubmit="toastr.success('В корзине');">

			<!-- hidden datas -->
			<p class="hidden">
				<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['static_token']; ?>
" />
				<input type="hidden" name="id_product" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->id)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" id="product_page_product_id" />
				<input type="hidden" name="add" value="1" />
				<input type="hidden" name="id_product_attribute" id="idCombination" value="" />
			</p>

			<!-- prices -->
			<p class="price">
				<?php if ($this->_tpl_vars['product']->on_sale): ?>
					<div class="on_sale"><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</div>
				<?php elseif (( $this->_tpl_vars['product']->reduction_price != 0 || $this->_tpl_vars['product']->reduction_percent != 0 ) && ( $this->_tpl_vars['product']->reduction_from == $this->_tpl_vars['product']->reduction_to || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']->reduction_to && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']->reduction_from ) )): ?>
					<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
onsale_<?php echo $this->_tpl_vars['lang_iso']; ?>
.png" alt="<?php echo smartyTranslate(array('s' => 'On sale'), $this);?>
" class="on_sale_img" />			
						<div class="discount"><span class="tooltip" style="border-bottom:0;" tooltip="Скидка считается по дню оплаты">Успевай&nbsp;до<br></span>
														<span class="discounts"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->reduction_to)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%d') : smarty_modifier_date_format($_tmp, '%d')); ?>
</span> <span class="discounts"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->reduction_to)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m') : smarty_modifier_date_format($_tmp, '%m')); ?>
</span> <span class="discounts"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->reduction_to)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%G') : smarty_modifier_date_format($_tmp, '%G')); ?>
</span>
						</div>
					</abbr>
				<?php endif; ?>

				<div class="our_price_display">
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<div <?php if ($this->_tpl_vars['product']->quantity == 0): ?> style="color:#bbb"<?php endif; ?>><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(true,@NULL,2)), $this);?>
</div>
					<meta itemprop="price" content="<?php echo $this->_tpl_vars['product']->getPrice(true,@NULL,0); ?>
" />
					<meta itemprop="priceCurrency" content="USD" />
					<meta itemprop="alternateName" content="<?php echo $this->_tpl_vars['product']->meta_description; ?>
" />
					
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?>
					<div id="our_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(false,@NULL,2)), $this);?>
</div>
				<?php endif; ?>
				</div>
				
			<?php if ($this->_tpl_vars['quantity_discounts']): ?>
			<!-- quantity discount -->
			<p style="text-align: left;margin: 0 0 4px;">Скидка:</p>
			<div id="quantityDiscount">
				<table class="std">
						<tr style="line-height: 0px;">
							<?php $_from = $this->_tpl_vars['quantity_discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['quantity_discounts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['quantity_discounts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['quantity_discount']):
        $this->_foreach['quantity_discounts']['iteration']++;
?>
							<th>за <?php echo ((is_array($_tmp=$this->_tpl_vars['quantity_discount']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
 
							<?php if (((is_array($_tmp=$this->_tpl_vars['quantity_discount']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) > 1): ?>
								шт
							<?php else: ?>
								шт
							<?php endif; ?>
							</th>
							<?php endforeach; endif; unset($_from); ?>
						</tr>
						<tr>
							<?php $_from = $this->_tpl_vars['quantity_discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['quantity_discounts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['quantity_discounts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['quantity_discount']):
        $this->_foreach['quantity_discounts']['iteration']++;
?>
							<td>
							<?php if (((is_array($_tmp=$this->_tpl_vars['quantity_discount']['id_discount_type'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == 1): ?>
								-<?php echo ((is_array($_tmp=$this->_tpl_vars['quantity_discount']['value'])) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp)); ?>
%
							<?php else: ?>
								-<?php echo Product::convertPrice(array('price' => ((is_array($_tmp=$this->_tpl_vars['quantity_discount']['value'])) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp))), $this);?>

							<?php endif; ?>
							</td>
							<?php endforeach; endif; unset($_from); ?>
						</tr>
				</table>
			</div>
			<?php endif; ?>

				<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?>
					<br />
					<span id="pretaxe_price"><span id="pretaxe_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(false,@NULL,2)), $this);?>
</span>
				<br />
				<?php endif; ?>
				
			
<?php if (@site_version == 'mobile'): ?>
				<?php if (( $this->_tpl_vars['product']->reduction_price != 0 || $this->_tpl_vars['product']->reduction_percent != 0 ) && ( $this->_tpl_vars['product']->reduction_from == $this->_tpl_vars['product']->reduction_to || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']->reduction_to && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']->reduction_from ) )): ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<p align="center" id="old_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPriceWithoutReduct()), $this);?>
</p>
<!-- 						<?php echo smartyTranslate(array('s' => 'tax incl.'), $this);?>
 -->
				<?php endif; ?>
				<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?>
					<span id="old_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPriceWithoutReduct(true)), $this);?>
</span>
<!--						<?php echo smartyTranslate(array('s' => 'tax excl.'), $this);?>
 -->
				<?php endif; ?>

			<?php endif; ?>
<?php endif; ?>			
			
			</p>

<?php if (@site_version == 'full'): ?>
			<?php if (( $this->_tpl_vars['product']->reduction_price != 0 || $this->_tpl_vars['product']->reduction_percent != 0 ) && ( $this->_tpl_vars['product']->reduction_from == $this->_tpl_vars['product']->reduction_to || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']->reduction_to && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']->reduction_from ) )): ?>
				<p id="old_price">
				<span class="">
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<span id="old_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPriceWithoutReduct()), $this);?>
</span>
<!-- 						<?php echo smartyTranslate(array('s' => 'tax incl.'), $this);?>
 -->
				<?php endif; ?>
				<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?>
					<span id="old_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPriceWithoutReduct(true)), $this);?>
</span>
<!--						<?php echo smartyTranslate(array('s' => 'tax excl.'), $this);?>
 -->
				<?php endif; ?>
				</span>
				</p>
			<?php endif; ?>
<?php endif; ?>			
			
			
			
			<?php if ($this->_tpl_vars['product']->reduction_percent != 0 && ( $this->_tpl_vars['product']->reduction_from == $this->_tpl_vars['product']->reduction_to || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']->reduction_to && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']->reduction_from ) )): ?>
				<p id="reduction_percent"><?php echo smartyTranslate(array('s' => '(price reduced by'), $this);?>
 <span id="reduction_percent_display"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->reduction_percent)) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp)); ?>
</span> %<?php echo smartyTranslate(array('s' => ')'), $this);?>
</p>
			<?php endif; ?>
						<?php if ($this->_tpl_vars['product']->ecotax != 0): ?>
				<p class="price-ecotax"><?php echo smartyTranslate(array('s' => 'include'), $this);?>
 <span id="ecotax_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->ecotax), $this);?>
</span> <?php echo smartyTranslate(array('s' => 'for green tax'), $this);?>
</p>
			<?php endif; ?>

			<?php if (isset ( $this->_tpl_vars['groups'] )): ?>

			<!-- attributes -->
			<div id="attributes">
			<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute_group'] => $this->_tpl_vars['group']):
?>
			<p>
				<label for="group_<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute_group'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['group']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 :</label>
				<?php $this->assign('groupName', ((is_array($_tmp='group_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['id_attribute_group']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['id_attribute_group']))); ?>
				<select name="<?php echo $this->_tpl_vars['groupName']; ?>
" id="group_<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute_group'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" onchange="javascript:findCombination();">
					<?php $_from = $this->_tpl_vars['group']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute'] => $this->_tpl_vars['group_attribute']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"<?php if (( isset ( $_GET[$this->_tpl_vars['groupName']] ) && ((is_array($_tmp=$_GET[$this->_tpl_vars['groupName']])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == $this->_tpl_vars['id_attribute'] ) || $this->_tpl_vars['group']['default'] == $this->_tpl_vars['id_attribute']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['group_attribute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</p>
			<?php endforeach; endif; unset($_from); ?>
			</div>
			<?php endif; ?>


			<noindex>
			<p class="product_desc">Арт. № <?php echo $this->_tpl_vars['product']->id; ?>
</p>
			</noindex>
			
<?php if (@site_version == 'full'): ?>
    <noindex>
			<!-- quantity wanted нужен для wishlist -->
			<p hidden id="quantity_wanted_p"<?php if (( ! $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0 ) || $this->_tpl_vars['virtual']): ?> style="display:none;"<?php endif; ?>>
				<label><?php echo smartyTranslate(array('s' => 'Quantity :'), $this);?>
</label>
  				<input type="number" min="1" max="10" step="1" value="1" name="qty" id="quantity_wanted" class="text" value="<?php if (isset ( $this->_tpl_vars['quantityBackup'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['quantityBackup'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php else: ?>1<?php endif; ?>" size="2" maxlength="3" /> 
			</p>


			<!-- number of item in stock -->
			<p id="pQuantityAvailable"<?php if ($this->_tpl_vars['display_qties'] != 1 || ( $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0 )): ?> style="display:none;"<?php endif; ?>>
				<span id="quantityAvailable">(<?php if (((is_array($_tmp=$this->_tpl_vars['product']->quantity)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) > 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->quantity)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$this->_tpl_vars['product']->quantity)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == 1): ?>последний&nbsp;<?php endif; ?><?php if (((is_array($_tmp=$this->_tpl_vars['product']->quantity)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == 0): ?>нет&nbsp;<?php endif; ?></span>
								
				<span<?php if ($this->_tpl_vars['product']->quantity < 2): ?> style="display:none;"<?php endif; ?> id="quantityAvailableTxtMultiple"><?php echo smartyTranslate(array('s' => 'items in stock'), $this);?>
</span>
			<!-- availability -->
			<span id="availability_statut"<?php if (( $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0 && ! $this->_tpl_vars['product']->available_later ) || ( ! $this->_tpl_vars['product']->available_now && $this->_tpl_vars['display_qties'] != 1 )): ?> style="display:none;"<?php endif; ?>>
				<span id="availability_label"><?php echo smartyTranslate(array('s' => 'Availability:'), $this);?>
</span>
				<span hidden id="availability_value"<?php if ($this->_tpl_vars['product']->quantity == 0): ?> class="warning-inline"<?php endif; ?>>
					<?php if ($this->_tpl_vars['product']->quantity == 0): ?><?php if ($this->_tpl_vars['allow_oosp']): ?><?php echo $this->_tpl_vars['product']->available_later; ?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'This product is no longer in stock'), $this);?>
<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['product']->available_now; ?>
<?php endif; ?>
				</span>
			</p>
    </noindex>

<?php endif; ?> 	 						


			
			<!-- Out of stock hook -->
			<p id="oosHook"<?php if ($this->_tpl_vars['product']->quantity > 0): ?> style="display:none;"<?php endif; ?>>
				<br><?php echo $this->_tpl_vars['HOOK_PRODUCT_OOS']; ?>

			</p>
			
			
		<?php if (@site_version == 'mobile'): ?>
			<!-- quantity wanted -->
			<noindex>
			<input hidden type="number" min="1" max="10" step="1" value="1" name="qty" id="quantity_wanted" class="text" value="1" size="2" maxlength="3" /> 
			</noindex>
			
		<?php endif; ?>
			<p class="warning-inline" id="last_quantities"<?php if (( $this->_tpl_vars['product']->quantity > $this->_tpl_vars['last_qties'] || $this->_tpl_vars['product']->quantity == 0 ) || $this->_tpl_vars['allow_oosp']): ?> style="display:none;"<?php endif; ?> ><?php echo smartyTranslate(array('s' => 'Warning: Last items in stock!'), $this);?>
</p>
			
		<?php if (@site_version == 'full'): ?>
			<!-- кнопки -->
 	 			  <p<?php if (! $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0): ?> style="display:none;"<?php endif; ?> id="add_to_cart" class="align_center"><input type="submit" name="Submit" value="<?php if ($this->_tpl_vars['in_cart']): ?><?php echo smartyTranslate(array('s' => 'Already in cart'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
<?php endif; ?>" class="ebutton <?php if ($this->_tpl_vars['in_cart']): ?>in_cart<?php else: ?>green<?php endif; ?>" style="width: 138px;margin: 6px auto 2px 0px;padding: 11px;"/></p>
		<?php endif; ?> 	 			
 	 		
 	 		
		<?php if (@site_version == 'mobile'): ?>
			<!-- кнопки -->
     			<span<?php if (! $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0): ?> style="display:none;"<?php endif; ?> id="add_to_cart" class="align_left">
         			<input type="submit" name="Submit" value="<?php if ($this->_tpl_vars['in_cart']): ?><?php echo smartyTranslate(array('s' => 'Already in cart'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
<?php endif; ?>" class="ebutton <?php if ($this->_tpl_vars['in_cart']): ?>in_cart<?php else: ?>green<?php endif; ?>"/>
     			</span>
 		<?php endif; ?>			

			
		<?php if ($this->_tpl_vars['HOOK_PRODUCT_ACTIONS']): ?>
			<?php echo $this->_tpl_vars['HOOK_PRODUCT_ACTIONS']; ?>

		<?php endif; ?>

		<?php if (@site_version == 'mobile'): ?>
			<br><br>
		<?php endif; ?>
<p>&nbsp;</p>

<?php if (((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y") : smarty_modifier_date_format($_tmp, "%d %b %Y")) != ((is_array($_tmp=$this->_tpl_vars['delivery_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y") : smarty_modifier_date_format($_tmp, "%d %b %Y")) && $this->_tpl_vars['product']->quantity != 0): ?>
<p class="geo"><?php if ($this->_tpl_vars['product']->weight == 0): ?>Бесплатная доставка<?php else: ?>Доставка<?php endif; ?><?php if ($this->_tpl_vars['city']): ?> в <?php echo $this->_tpl_vars['city']; ?>
<?php endif; ?>:
<br>примерно <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['delivery_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y") : smarty_modifier_date_format($_tmp, "%d %b %Y")))) ? $this->_run_mod_handler('mb_strtolower', true, $_tmp, "utf-8") : mb_strtolower($_tmp, "utf-8")); ?>
&nbsp;

<span class="tooltip" style="border-bottom:0;" tooltip="На основе статистики доставки наших посылок в <?php echo ((is_array($_tmp=time()-2592000)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 году."><img src="../../img/admin/help.png"></span>
</p>
<p>&nbsp;</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['sales'] > 0 && $this->_tpl_vars['sales'] > 0): ?><p style="text-align:left">Этот ништяк<?php endif; ?>

<?php if ($this->_tpl_vars['sales'] > 0): ?>уже есть у <?php echo $this->_tpl_vars['sales']; ?>
 <?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['sales'],'expressions' => "байкера,байкеров,байкеров"), $this);?>
.<br><?php endif; ?>
<?php if ($this->_tpl_vars['sales'] > 0 && $this->_tpl_vars['wishlists'] > 0): ?>Его<?php elseif ($this->_tpl_vars['wishlists'] > 0): ?><p style="text-align:left">Этот ништяк<?php endif; ?>
<?php if ($this->_tpl_vars['wishlists'] > 0): ?><?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['wishlists'],'expressions' => "хочет,хотят,хотят"), $this);?>
<?php if ($this->_tpl_vars['sales'] > 0): ?>&nbsp;еще<?php endif; ?> <?php echo $this->_tpl_vars['wishlists']; ?>
 <?php echo smarty_function_declension(array('nb' => $this->_tpl_vars['wishlists'],'expressions' => "байкер,байкера,байкеров"), $this);?>
.<?php endif; ?>

<?php if ($this->_tpl_vars['sales'] > 0 || $this->_tpl_vars['wishlists'] > 0): ?></p><p>&nbsp;</p><?php endif; ?>


		<?php if (@site_version == 'full'): ?>
				<?php if ($this->_tpl_vars['product']->tags): ?>
					<!-- теги full -->
					<div class="tags">
					<?php $_from = $this->_tpl_vars['product']->tags[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tags']):
?>
					<a class="tag" href="<?php echo $this->_tpl_vars['base_dir']; ?>
tags.php?tag=<?php echo ((is_array($_tmp=$this->_tpl_vars['tags'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['tags']; ?>
<span class="arrow"></span></a>
					<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
		<?php endif; ?>	


		</form>
		<p class="product_desc">&nbsp;</p>


		<?php if ($this->_tpl_vars['HOOK_EXTRA_RIGHT']): ?>
			<?php echo $this->_tpl_vars['HOOK_EXTRA_RIGHT']; ?>

		<?php endif; ?>	

		<?php if (@site_version == 'mobile'): ?>
				<?php if ($this->_tpl_vars['product']->tags): ?>
					<!-- теги mobile -->
					<div class="tags">
					<?php $_from = $this->_tpl_vars['product']->tags[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tags']):
?>
					<a class="tag" href="<?php echo $this->_tpl_vars['base_dir']; ?>
tags.php?tag=<?php echo ((is_array($_tmp=$this->_tpl_vars['tags'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['tags']; ?>
<span class="arrow"></span></a>
					<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
		<?php endif; ?>	
	</div>
</div>


<!-- description and features -->
<?php if ($this->_tpl_vars['product']->description || $this->_tpl_vars['features'] || $this->_tpl_vars['HOOK_PRODUCT_TAB'] || $this->_tpl_vars['attachments']): ?>
<div id="more_info_block" class="clear">


<?php if (@site_version == 'full'): ?>
	<noindex>
	<div id="usefull_link_block">
		<a href="javascript:print();"><img style="height: 50px;" src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/print.png" title="<?php echo smartyTranslate(array('s' => 'Print'), $this);?>
" alt="<?php echo smartyTranslate(array('s' => 'Print'), $this);?>
"></a>
	</div>
	</noindex>
<?php endif; ?>	
	

<!-- таб кнопки -->
<noindex>
	<div id="more_info_tabs" class="idTabs idTabsShort">
							<div><a class="ebutton blue selected" id="idTab1" onclick="showtabs('idTab1');" href="javascript:"><?php echo smartyTranslate(array('s' => 'More info'), $this);?>
</a></div>
		<?php if ($this->_tpl_vars['features']): ?>		<div><a class="ebutton blue" id="idTab2" onclick="showtabs('idTab2');" href="javascript:"><?php echo smartyTranslate(array('s' => 'Data sheet'), $this);?>
</a></div><?php endif; ?>
		<?php if ($this->_tpl_vars['attachments']): ?>	<div><a class="ebutton blue" id="idTab9" onclick="showtabs('idTab9');" href="javascript:"><?php echo smartyTranslate(array('s' => 'Инструкция'), $this);?>
</a></div><?php endif; ?>
							<?php echo $this->_tpl_vars['HOOK_PRODUCT_TAB']; ?>
 	</div>
</noindex>	
<!-- /таб кнопки -->

	



<!-- таб description №1 -->
			<div id="idTab1" class="rte description">
				<?php if ($this->_tpl_vars['product']->id_manufacturer != 0): ?>
					<div id="manufacturer_logo">
						<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
manufacturer.php?id_manufacturer=<?php echo $this->_tpl_vars['product']->id_manufacturer; ?>
">
						<img alt="Все товары производства <?php echo $this->_tpl_vars['product']->manufacturer_name; ?>
" title="Все товары производства <?php echo $this->_tpl_vars['product']->manufacturer_name; ?>
" src="<?php echo $this->_tpl_vars['base_dir']; ?>
img/tmp/manufacturer_<?php echo $this->_tpl_vars['product']->id_manufacturer; ?>
.jpg">
						</a>
					</div>
				<?php endif; ?>
			
				<?php if ($this->_tpl_vars['product']->id_supplier != 0 && $this->_tpl_vars['product']->id_supplier != 12): ?>
				<div id="supplier_logo">
					<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
supplier.php?id_supplier=<?php echo $this->_tpl_vars['product']->id_supplier; ?>
">
						<img title="Все товары для <?php echo $this->_tpl_vars['product']->supplier_name; ?>
" alt="Все товары для <?php echo $this->_tpl_vars['product']->supplier_name; ?>
" src="<?php echo $this->_tpl_vars['base_dir']; ?>
img/tmp/supplier_<?php echo $this->_tpl_vars['product']->id_supplier; ?>
.jpg">
					</a>
				</div>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['product']->description_short): ?>
					<p><?php echo $this->_tpl_vars['product']->description_short; ?>
</p>
				<?php endif; ?>
			
			<?php if ($this->_tpl_vars['category_desc']): ?>
				<noindex>
				<!--div style="position:relative; float: left; margin-right:5px"><img style=" height:30px;" src="../themes/Earth/img/icon/best-sales.png"></div-->
				<div class="product_cat_desc"><?php echo $this->_tpl_vars['category_desc']; ?>
</div>
				</noindex>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['product_manufacturer']->name): ?>
				<p>Производство: <a title="Все товары производства <?php echo $this->_tpl_vars['product']->manufacturer_name; ?>
" alt="Все товары производства <?php echo $this->_tpl_vars['product']->manufacturer_name; ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
manufacturer.php?id_manufacturer=<?php echo $this->_tpl_vars['product']->id_manufacturer; ?>
"><?php echo $this->_tpl_vars['product_manufacturer']->name; ?>
</a>
				</p>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['product']->description): ?><p><?php echo $this->_tpl_vars['product']->description; ?>
</p><?php endif; ?>
		</div>	
<!-- /таб description №1 -->




<!-- таб features №2 - не используется -->
	<?php if ($this->_tpl_vars['features']): ?>
		<div id="idTab2" class="rte $features">
			<?php $_from = $this->_tpl_vars['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feature']):
?>
				<span><?php echo ((is_array($_tmp=$this->_tpl_vars['feature']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span> <?php echo ((is_array($_tmp=$this->_tpl_vars['feature']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php endif; ?>
<!-- /таб features №2 - не используется -->
	
<!-- таб attachment №9 - инструкции -->
	<?php if ($this->_tpl_vars['attachments']): ?>
		<div id="idTab9" class="rte attachment">
			<?php $_from = $this->_tpl_vars['attachments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attachment']):
?>
				<p align="center">
				<a style="border:0;" href="<?php echo $this->_tpl_vars['base_dir']; ?>
attachment.php?id_attachment=<?php echo $this->_tpl_vars['attachment']['id_attachment']; ?>
">
				<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
/icon/download.png"><br>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['attachment']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['attachment']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
				</p>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php endif; ?>
<!-- /таб attachment №9 - инструкции -->		


<!-- таб attachment №6 - вконтакте -->
	<?php echo $this->_tpl_vars['HOOK_PRODUCT_TAB_CONTENT']; ?>
<!-- /таб attachment №6 - вконтакте -->
	
	</div>
</div>
<?php endif; ?>

<!-- Customizable products -->
<?php if ($this->_tpl_vars['product']->customizable): ?>
	<ul class="idTabs">
		<li><a style="cursor: pointer"><?php echo smartyTranslate(array('s' => 'Product customization'), $this);?>
</a></li>
	</ul>
	<div class="customization_block">
		<form method="post" action="<?php echo $this->_tpl_vars['customizationFormTarget']; ?>
" enctype="multipart/form-data" id="customizationForm">
			<p>
				<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/infos.gif" alt="Informations" />
				<?php echo smartyTranslate(array('s' => 'After saving your customized product, do not forget to add it to your cart.'), $this);?>

				<?php if ($this->_tpl_vars['product']->uploadable_files): ?><br /><?php echo smartyTranslate(array('s' => 'Allowed file formats are: GIF, JPG, PNG'), $this);?>
<?php endif; ?>
			</p>
			<?php if (((is_array($_tmp=$this->_tpl_vars['product']->uploadable_files)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
			<h2><?php echo smartyTranslate(array('s' => 'Pictures'), $this);?>
</h2>
			<ul id="uploadable_files">
				<?php echo smarty_function_counter(array('start' => 0,'assign' => 'customizationField'), $this);?>

				<?php $_from = $this->_tpl_vars['customizationFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customizationFields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customizationFields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['customizationFields']['iteration']++;
?>
					<?php if ($this->_tpl_vars['field']['type'] == 0): ?>
						<li class="customizationUploadLine<?php if ($this->_tpl_vars['field']['required']): ?> required<?php endif; ?>"><?php $this->assign('key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='pictures_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']->id) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']->id)))) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field']['id_customization_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field']['id_customization_field']))); ?>
							<?php if (isset ( $this->_tpl_vars['pictures'][$this->_tpl_vars['key']] )): ?><div class="customizationUploadBrowse"><img src="<?php echo $this->_tpl_vars['pic_dir']; ?>
<?php echo $this->_tpl_vars['pictures'][$this->_tpl_vars['key']]; ?>
_small" alt="" /><a href="<?php echo $this->_tpl_vars['link']->getUrlWith('deletePicture',$this->_tpl_vars['field']['id_customization_field']); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'delete'), $this);?>
" class="customization_delete_icon" /></a></div><?php endif; ?>
							<div class="customizationUploadBrowse"><input type="file" name="file<?php echo $this->_tpl_vars['field']['id_customization_field']; ?>
" id="img<?php echo $this->_tpl_vars['customizationField']; ?>
" class="customization_block_input <?php if (isset ( $this->_tpl_vars['pictures'][$this->_tpl_vars['key']] )): ?>filled<?php endif; ?>" /><?php if ($this->_tpl_vars['field']['required']): ?><sup>*</sup><?php endif; ?>
							<div class="customizationUploadBrowseDescription"><?php if (! empty ( $this->_tpl_vars['field']['name'] )): ?><?php echo $this->_tpl_vars['field']['name']; ?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Please select an image file from your hard drive'), $this);?>
<?php endif; ?></div></div>
						</li>
						<?php echo smarty_function_counter(array(), $this);?>

					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<?php endif; ?>
			<div class="clear"></div>
			<?php if (((is_array($_tmp=$this->_tpl_vars['product']->text_fields)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
			<h2><?php echo smartyTranslate(array('s' => 'Texts'), $this);?>
</h2>
			<ul id="text_fields">
				<?php echo smarty_function_counter(array('start' => 0,'assign' => 'customizationField'), $this);?>

				<?php $_from = $this->_tpl_vars['customizationFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customizationFields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customizationFields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['customizationFields']['iteration']++;
?>
					<?php if ($this->_tpl_vars['field']['type'] == 1): ?>
						<li class="customizationUploadLine<?php if ($this->_tpl_vars['field']['required']): ?> required<?php endif; ?>"><?php $this->assign('key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='textFields_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']->id) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']->id)))) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field']['id_customization_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field']['id_customization_field']))); ?>
							<?php if (! empty ( $this->_tpl_vars['field']['name'] )): ?><?php echo $this->_tpl_vars['field']['name']; ?>
<?php endif; ?><input type="text" name="textField<?php echo $this->_tpl_vars['field']['id_customization_field']; ?>
" id="textField<?php echo $this->_tpl_vars['customizationField']; ?>
" value="<?php if (isset ( $this->_tpl_vars['textFields'][$this->_tpl_vars['key']] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['textFields'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" class="customization_block_input" /><?php if ($this->_tpl_vars['field']['required']): ?><sup>*</sup><?php endif; ?>
						</li>
						<?php echo smarty_function_counter(array(), $this);?>

					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<?php endif; ?>
			<p align="center" style="clear: left;" id="customizedDatas">
				<input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
				<input type="hidden" name="submitCustomizedDatas" value="1" />
				<input type="button" class="ebutton green" value="<?php echo smartyTranslate(array('s' => 'Save'), $this);?>
" onclick="javascript:saveCustomization()" />
			</p>
		</form>
		<p class="clear required"><sup>*</sup> <?php echo smartyTranslate(array('s' => 'required fields'), $this);?>
</p>
	</div>
<?php endif; ?>

			<?php if (count($this->_tpl_vars['packItems']) > 0): ?>
			<noindex>
					<div id="more_info_tabs" class="idTabs idTabsShort">
					<div><a class="ebutton blue inactive" id="more_info_tab_more_info"><?php echo smartyTranslate(array('s' => 'Pack content'), $this);?>
</a></div>
					</div>
				<div id="packitems">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['packItems'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
			</noindex>
			<?php endif; ?>
<?php endif; ?>

<?php echo $this->_tpl_vars['HOOK_PRODUCT_FOOTER']; ?>
 

				<!-- accessories -->
		<noindex>
		<div style="opacity: 0; transition: opacity 0.3s ease; " class="nonprintable" id="accessories_container" style="margin-right: -7px;">
			<h2><?php echo smartyTranslate(array('s' => 'accessories'), $this);?>
</h2>
	    	<div class="accessories" id="accessories">
                 				
		    </div>
		</div>
		</noindex>
		<!-- /accessories -->

<?php echo '
<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459353 = new Ya.Metrika({ id:24459353, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/24459353" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
'; ?>


<?php if (@site_version == 'full'): ?>
	<?php echo '						
	<script async type="text/javascript">
				$(\'body,html\').animate({
					scrollTop: 340
				}, 10);
				setTimeout("document.getElementById(\'product_raise\').style.backgroundColor = \'#fff\'", 1500);
	</script>		
	'; ?>
						
<?php endif; ?>						


<?php echo '		
<script>
$(document).ready(
function ajaxx(){
{
   xhttp=new XMLHttpRequest();
   xhttp.onreadystatechange=function()
   {
    if (xhttp.readyState==4 && xhttp.status==200)
    {
        document.getElementById(\'accessories\').innerHTML += xhttp.responseText;
        document.getElementById(\'accessories_container\').style.opacity = 1;
    }
   }
   xhttp.open(\'GET\',\'product-accessories.php?id_product=\'+id_product, true);
   xhttp.send();
  };
}
);
</script>


'; ?>


