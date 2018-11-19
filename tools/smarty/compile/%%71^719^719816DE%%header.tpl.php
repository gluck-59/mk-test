<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:10
         compiled from /Users/gluck/Sites/motokofr.com/themes/Earth/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/Users/gluck/Sites/motokofr.com/themes/Earth/header.tpl', 5, false),array('modifier', 'htmlentities', '/Users/gluck/Sites/motokofr.com/themes/Earth/header.tpl', 239, false),array('modifier', 'stripslashes', '/Users/gluck/Sites/motokofr.com/themes/Earth/header.tpl', 239, false),)), $this); ?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
">
<!--html lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
"-->
	<head>
		<title><?php if ($_GET['search_query']): ?><?php echo $_GET['search_query']; ?>
 — <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</title>
		<meta property="og:title" content="<?php if ($_GET['search_query']): ?><?php echo $_GET['search_query']; ?>
 — <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
        <meta property="og:url" content="<?php echo $_SERVER['HTTP_HOST']; ?>
<?php echo $_SERVER['REQUEST_URI']; ?>
" />

<!--[if IE]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

		<meta name="description" content="<?php if (isset ( $this->_tpl_vars['meta_description'] ) && $this->_tpl_vars['meta_description']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

<?php elseif (isset ( $this->_tpl_vars['supplier_name'] ) && $this->_tpl_vars['supplier_name']): ?>Подходит для <?php echo ((is_array($_tmp=$this->_tpl_vars['supplier_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
. 
<?php elseif (isset ( $this->_tpl_vars['manufacturer_name'] ) && $this->_tpl_vars['manufacturer_name']): ?>Пр-во <?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

<?php else: ?> Продаем и доставляем мото-запчасти и мото-тюнинг со всего мира по почте. Никаких санкций и ограничений<?php endif; ?>
"/>


 <?php if (isset ( $this->_tpl_vars['meta_keywords'] ) && $this->_tpl_vars['meta_keywords']): ?>
		<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['supplier_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
<?php else: ?>
		<meta name="keywords" content="купить аксессуары на мотоцикл, кофры мотоцикл, мото тюнинг, тюнинг мотоцикла, обвес, мото кофры, багажник, батон, спинка мотоцикл, cумки на чоппер, sissy bar, багажник, защитные дуги, люстра на мотоцикл, стекло для мотоцикла, выносы для мотоцикла, мотозапчасти, запчасти на мотоцикл, интернет магазин, motokofr, мотокофр, motocofr" />

<?php endif; ?>
		<meta http-equiv="Content-Type" content="text/html" />
		<meta charset="utf-8" />
				<meta name="robots" content="<?php if (isset ( $this->_tpl_vars['nobots'] )): ?>no<?php endif; ?>index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
favicon.ico" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
favicon.ico" />
		<link href="<?php echo $this->_tpl_vars['content_dir']; ?>
js/toastr/toastr.css" rel="stylesheet"/>
<?php if (isset ( $this->_tpl_vars['css_files'] )): ?>


    	<link rel="stylesheet" type="text/css" href="<?php echo @_THEME_CSS_DIR_; ?>
global.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo @_THEME_CSS_DIR_; ?>
print.css" media="print" />


	
	<?php if (@site_version == 'mobile'): ?>			
		<meta name="HandheldFriendly" content="true"/> 
		<link rel="stylesheet" href="<?php echo @_THEME_CSS_DIR_; ?>
tablet.css" />		
		<link rel="stylesheet" href="<?php echo @_THEME_CSS_DIR_; ?>
swiper.css" />		
		<script defer src="http://js.motokofr.com/idangerous.swiper.js"></script> 
	<?php endif; ?> 
<?php endif; ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<script defer type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/tools.js"></script>
		<script type="text/javascript">
			var baseDir = '<?php echo $this->_tpl_vars['content_dir']; ?>
';
			var static_token = '<?php echo $this->_tpl_vars['static_token']; ?>
';
			var token = '<?php echo $this->_tpl_vars['token']; ?>
';
			var priceDisplayPrecision = <?php echo $this->_tpl_vars['priceDisplayPrecision']*$this->_tpl_vars['currency']->decimals; ?>
;
		</script>

<script type="text/javascript" src="<?php echo @_PS_JS_DIR_; ?>
jquery191.min.js"></script>		
<script async src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/toastr/toastr.js"></script>


<?php if (isset ( $this->_tpl_vars['js_files'] )): ?>
	<?php $_from = $this->_tpl_vars['js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_uri']):
?>
    	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_uri']; ?>
"></script>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>


<?php if (@site_version == 'full'): ?>
	<?php if (isset ( $this->_tpl_vars['preload'] )): ?>
		<?php $_from = $this->_tpl_vars['preload']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pr_uri']):
?>
		<link rel="prefetch" href="<?php echo $this->_tpl_vars['pr_uri']; ?>
" />
		<link rel="prerender" href="<?php echo $this->_tpl_vars['pr_uri']; ?>
" />
				<?php endforeach; endif; unset($_from); ?>
				<meta property="og:image"content="<?php echo $this->_tpl_vars['pr_uri']; ?>
">
	<?php endif; ?>
<?php endif; ?>


	
<?php echo $this->_tpl_vars['HOOK_HEADER']; ?>

        <noscript>
            <div style="width: 100%;position: absolute;background: #333;color: whitesmoke;font-size: 10pt;padding: 15px;text-align: center;top: 160px;">
                Увы, но современный сайт не может работать без Javascript.<br> Включите их в установках браузера.
            </div>
        </noscript>

<?php if (@site_version == 'full'): ?>
	<?php echo '
	<script defer language="JavaScript">
		$(window.onload = function(){   
			//fade in/out based on scrollTop value
			$(window).scroll(function () {
				if ($(this).scrollTop() > 320) {
					$(\'#scroller\').fadeIn();
					$(\'#header\').css(\'z-index\', \'-2\');
				} else {
					$(\'#scroller\').fadeOut();
					$(\'#header\').css(\'z-index\', \'-1\');					
				}
			});
		
			// scroll body to 0px on click
			$(\'#scroller\').click(function () {
				$(\'body,html\').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		});
	</script>
	'; ?>

<?php endif; ?>


</head>


	<body <?php if ($this->_tpl_vars['page_name']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?>>
	<?php if (! $this->_tpl_vars['content_only']): ?>
		<div id="page" class="">

<!-- Header -->
<?php if (@site_version == 'full'): ?>

			<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
            <!--[if IE]>
            	<center>
            	<div style="width: 900px; position: absolute;background: #333;color: whitesmoke;font-size: 10pt;padding: 15px;text-align: center;top: 160px;">
                    <strong>Скачайте и установите современный браузер.</strong><br>Просим прощения, но в Internet Explorer будет недоступна половина функционала сайта.
                </center>
            </div>
        <![endif]-->    
				<img id="logo" src="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
logo/logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
			</a>

       <div id="headermenu">
   
            <ul>
            	<li><a class="rss" style=" background: none; " href="<?php echo $this->_tpl_vars['base_dir']; ?>
modules/feeder/rss.php"><img class="rss" style="margin-top: -14px; margin-right: -52px;" src="<?php echo $this->_tpl_vars['base_dir']; ?>
img/rss.png" height="38px"></a></li>
                <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">Главная</a></li>
                <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
my-account.php">Кабинет</a></li>
                <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php">ТОП-50</a></li>                
                <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php">Свежачок</a></li>
                <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
catalog.php">Каталоги</a></li>
            </ul>
		</div>
		  <div id="gluck">
				<script language="JavaScript"> 
			      user = "support"; 
			      site = "motokofr.com"; 
			      document.write('<a href=\"mailto:' + user + '@' + site + '?subject=Глюк на сайте\">'); 
			      document.write('Если видишь в сайте глюк,<br> сообщи скорее нам!</a>'); 
              </script>
			</div>


	<div class="header_links">
    	<?php echo $this->_tpl_vars['HOOK_TOP']; ?>

	</div> 
<?php endif; ?>
			
<div>
    
<?php if (@site_version == 'full'): ?>
	<div id="header">
		<div class="browsers" id="browsers">
			<table align="left" backgrond="none" width="200px" border="0" cellpadding="0" cellspacing="0"> 
				<tr>
		        <td align="center"><a href="http://www.google.com/chrome" target="_blank"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
ie6/img/gc.png" border="0" alt="Google Chrome"></a></td>
		        <td align="center"><a href="http://www.mozilla.com/firefox/" target="_blank"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
ie6/img/mf.png" border="0" alt="Mozilla Firefox"></a></td>
		        <td align="center"><a href="http://ru.opera.com/browser/" target="_blank"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
ie6/img/op.png" border="0" alt="Opera Browser"></a></td>
		        <td align="center"><a href="http://www.apple.com/ru/safari/download/" target="_blank"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
ie6/img/as.png" border="0" alt="Apple Safari"></a></td>
				</tr>
			</table>
		</div>
	  </div> 
    </div>

<div onclick="showtits()" style="position: absolute;top: -255px;right: 249px;height: 39px;width: 24px;">&nbsp;</div>
<img onclick="hidetits()" src="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
tits.png" id="tits" style="position: absolute;top: -166px;right: 200px; display:none;">

<?php echo '
<script defer type="text/javascript">
function showtits()
{
    toastr.info(\'Правильно! Сиськи — здесь :)\');
    document.getElementById(\'tits\').style.display=\'block\';
}
function hidetits()
{
    document.getElementById(\'tits\').style.display=\'none\';
}

</script>
'; ?>




    
<div class="logo"></div>
<img id="logo_print" src="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
logo/logo_paypal.png">
<?php endif; ?>



<?php if (@site_version == 'mobile'): ?>
	<div id="header">
	<?php echo $this->_tpl_vars['HOOK_TOP']; ?>

	     <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
	     <img id="logo" src="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
logo/logo_paypal.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a>
	</div> 
	
	<div id="search_block_top" />
	<form method="get" action="<?php echo $this->_tpl_vars['base_dir']; ?>
search.php" id="searchbox">
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<span style="">
		    <input required type="search" id="search_query" name="search_query" 
            value="<?php if ($_GET['search_query']): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['search_query'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8') : htmlentities($_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>"
            placeholder="Что искать будем
			 <?php if (isset ( $_COOKIE['firstname'] )): ?>
			 	, <?php echo $_COOKIE['firstname']; ?>

			 <?php endif; ?>
            ?">
		</span>
		<span><input onclick="$(this).closest('form').submit()" type="submit" class="ebutton blue" id="search" value=" "></span>
	</form>
</div>
<?php endif; ?>

<?php if (@site_version == 'full'): ?>
			<!-- Left -->
						<div id="left_column" class="column">
				<?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>

			</div>
<?php endif; ?>			
<!-- Center -->
			<div id="center_column"  <?php if ($_GET['search_query'] == 'поворот'): ?>style="-webkit-transform: rotate(-1deg);"<?php endif; ?>>
	<?php endif; ?>

