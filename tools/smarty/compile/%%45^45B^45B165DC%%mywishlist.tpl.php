<?php /* Smarty version 2.6.20, created on 2016-11-20 21:45:57
         compiled from /home/motokofr/public_html/modules/blockwishlist/mywishlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/motokofr/public_html/modules/blockwishlist/mywishlist.tpl', 7, false),array('function', 'declension', '/home/motokofr/public_html/modules/blockwishlist/mywishlist.tpl', 32, false),array('modifier', 'intval', '/home/motokofr/public_html/modules/blockwishlist/mywishlist.tpl', 14, false),array('modifier', 'escape', '/home/motokofr/public_html/modules/blockwishlist/mywishlist.tpl', 21, false),array('modifier', 'truncate', '/home/motokofr/public_html/modules/blockwishlist/mywishlist.tpl', 57, false),array('modifier', 'count', '/home/motokofr/public_html/modules/blockwishlist/mywishlist.tpl', 78, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

	<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'blockwishlist'), $this);?>
</a><span class="navigation-pipe">&nbsp;<?php echo $this->_tpl_vars['navigationPipe']; ?>
&nbsp;</span><?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="mywishlist">
	<h2 id="cabinet"><?php echo smartyTranslate(array('s' => 'My wishlists - list','mod' => 'blockwishlist'), $this);?>
</h2>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php if (((is_array($_tmp=$this->_tpl_vars['id_customer'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) != 0): ?>
		<?php if ($this->_tpl_vars['wishlists']): ?>
<div class="wishlist_column">
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['wishlists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
				
<?php if (@site_version == 'full'): ?>				
					<div class="wishlist_list" id="wishlist_<?php echo ((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['id_wishlist'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
						<h4><?php echo ((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</h4>

						<p>
							<?php $this->assign('n', 0); ?>
							<?php $_from = $this->_tpl_vars['nbProducts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nb']):
        $this->_foreach['i']['iteration']++;
?>
								<?php if ($this->_tpl_vars['nb']['id_wishlist'] == $this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['id_wishlist']): ?>
									<?php $this->assign('n', ((is_array($_tmp=$this->_tpl_vars['nb']['nbProducts'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))); ?>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<br>
						<?php if ($this->_tpl_vars['n']): ?>
							<p class="price"><?php echo ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php echo smarty_function_declension(array('nb' => ($this->_tpl_vars['n']),'expressions' => "ништяк,ништяка,ништяков"), $this);?>
</p>
						<?php else: ?>
							<p class="price">В этом списке пусто</p>
						<?php endif; ?>
						<br>
						</p>

						<!-- span class="align_center"><p style="padding-left: 0;"><?php echo ((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['counter'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</p></span -->
						<?php if ($this->_tpl_vars['n']): ?>
    						<p id="wishlist-buttons">						
                                <a class="ebutton <?php if ($this->_tpl_vars['n']): ?>blue<?php else: ?>inactive<?php endif; ?>" href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '<?php echo ((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['id_wishlist'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
');">Показать</a>
    						</p>
                        <?php endif; ?>
                        <p id="wishlist-buttons">
						    <a class="ebutton red" href="javascript:;"onclick="return (WishlistDelete('wishlist_<?php echo ((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['id_wishlist'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['id_wishlist'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
', '<?php echo smartyTranslate(array('s' => 'Do you really want to delete this wishlist ?','mod' => 'blockwishlist'), $this);?>
'));">Удалить</a>
						</p>
					</div>
<?php endif; ?>					
<?php if (@site_version == 'mobile'): ?>
					<?php $this->assign('n', 0); ?>
					<?php $_from = $this->_tpl_vars['nbProducts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nb']):
        $this->_foreach['i']['iteration']++;
?>
						<?php if ($this->_tpl_vars['nb']['id_wishlist'] == $this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['id_wishlist']): ?>
							<?php $this->assign('n', ((is_array($_tmp=$this->_tpl_vars['nb']['nbProducts'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))); ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
<a class="ebutton blue" href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '<?php echo ((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['id_wishlist'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
');"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['wishlists'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...') : smarty_modifier_truncate($_tmp, 30, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
)</a>
<?php endif; ?>					

				<?php endfor; endif; ?>
</div>				
		<div id="block-order-detail">&nbsp;</div>
		
		<?php else: ?>
			<div id="mywishlist" class="rte">
				<p>С помощью списка хотелок ты можешь создавать перечни товаров, которые ты хотел бы купить, но не сейчас. Так сказать, держать нужные товары в поле зрения "на будущее".<br><br>
				Кроме того ты можешь дать ссылку друзьям на твой список хотелок и они будут знать, что именно можно подарить тебе на день рождения ;)<br /><br />
				</p>
			</div>
		<?php endif; ?>
		
		
		<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/blockwishlist/mywishlist.php" method="post" class="std">
				<br><br><h2><?php echo smartyTranslate(array('s' => 'Новый список','mod' => 'blockwishlist'), $this);?>
</h2>
				<fieldset>
				<input type="hidden" name="token" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
<!--[if IE]><label class="align_right" for="name"><?php echo smartyTranslate(array('s' => 'Name','mod' => 'blockwishlist'), $this);?>
</label><![endif]-->
				<input required style="width: 178px;" placeholder="Для моей Ямашки" type="text" id="name" name="name" value="<?php if (isset ( $_POST['name'] ) && count($this->_tpl_vars['errors']) > 0): ?><?php echo ((is_array($_tmp=$_POST['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
				<input style="font-size: 10pt; height: 27px; width: 167px; " type="submit" name="submitWishlist" id="submitWishlist" value="<?php echo smartyTranslate(array('s' => 'Save','mod' => 'blockwishlist'), $this);?>
" class="ebutton orange" />
			</fieldset>
		</form>
	<?php endif; ?>
	
	<br><br><h2>Списки хотелок других байкеров</h2>
	<p align="center"><a style="width: 137px;" class="ebutton blue small" href="/wishlists.php">Посмотреть</a></p><br><br>
		

	
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
my-account.php">В Кабинет</a></div></td>
    <td><div align="center"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
">На главную</a></div></td>
  </tr>
</table>
</div>

<?php echo '<!-- Yandex.Metrika mywishlist --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24459773 = new Ya.Metrika({id:24459773, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24459773" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika mywishlist -->'; ?>