<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:10
         compiled from /Users/gluck/Sites/motokofr.com/modules/vtemslideshow/vtemslideshow.tpl */ ?>
<?php if (@site_version == 'full'): ?>
	<!-- MODULE 1a1 slideshow -->
<?php if (isset ( $this->_tpl_vars['images'] ) && $this->_tpl_vars['images']): ?>
	<script type="text/javascript" src="//motokofr.com/modules/vtemslideshow/js/jquery.cycle.js"></script>
	<link href="//motokofr.com/modules/vtemslideshow/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
   		$(document).ready(function(){
        $('#vtemslideshow1').cycle({
		      fx: '<?php echo $this->_tpl_vars['fx']; ?>
',
			  timeout: <?php echo $this->_tpl_vars['timeout']; ?>
,
              speed: <?php echo $this->_tpl_vars['speed']; ?>
, 
              next: '#cycle_next',
              prev: '#cycle_prev',
              pager: '#vtemnav',
              pagerEvent:   'click',
              pagerAnchorBuilder: pagerFactory,
			  startingSlide: <?php echo $this->_tpl_vars['startingSlide']; ?>
,
			  fit: <?php echo $this->_tpl_vars['fit']; ?>
,
			  height:<?php echo $this->_tpl_vars['height']; ?>
,
			  width: <?php echo $this->_tpl_vars['width']; ?>

		});
		function pagerFactory(idx, slide){
           return '#vtemnav a:eq(' + idx + ') span';
        };
        });
     </script>
    <div id="vtemslideshow_wapper" style="width:<?php echo $this->_tpl_vars['width']; ?>
px; height:<?php echo $this->_tpl_vars['height']; ?>
px; margin-left: 10px; margin-bottom: 26px; z-index: 6;">
    <div id="vtemslideshow1" class="vtem_main_slideshow">
	<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['image']):
?>
		<?php if (isset ( $this->_tpl_vars['image']['name'] ) && $this->_tpl_vars['image']['name']): ?>
		    <?php if (isset ( $this->_tpl_vars['image']['link'] ) && $this->_tpl_vars['image']['link']): ?>
                <a href="<?php echo $this->_tpl_vars['image']['link']; ?>
" <?php if ($this->_tpl_vars['i'] > 0): ?>style="display:none"<?php endif; ?>>
		    <?php endif; ?>

			<img src="//motokofr.com/modules/vtemslideshow/slides/<?php echo $this->_tpl_vars['image']['name']; ?>
" alt="<?php echo $this->_tpl_vars['image']['name']; ?>
" style="border-top-left-radius: 6px;
border-top-right-radius: 6px; -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(.6, transparent), to(rgba(0,0,0,0.2)));}" >
			<?php if (isset ( $this->_tpl_vars['image']['link'] ) && $this->_tpl_vars['image']['link']): ?></a><?php endif; ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</div>
	    <div class="<?php echo $this->_tpl_vars['position']; ?>
 <?php echo $this->_tpl_vars['navstyle']; ?>
 vt_<?php echo $this->_tpl_vars['nav']; ?>
" id="nav"><div id="vtemnav" style="opacity:0.4">
		<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['image']):
?>
		<a href="#slide-<?php echo $this->_tpl_vars['i']+1; ?>
"><span><?php echo $this->_tpl_vars['i']+1; ?>
</span></a>
		<?php endforeach; endif; unset($_from); ?>
		<div class="clr"></div>
		</div></div>
		<a id="cycle_prev" class="vt_<?php echo $this->_tpl_vars['next_prev']; ?>
" ></a>
		<a id="cycle_next" class="vt_<?php echo $this->_tpl_vars['next_prev']; ?>
" ></a>
	</div>
					
<?php endif; ?>
<!-- /MODULE 1a1 slideshow -->
<?php endif; ?>