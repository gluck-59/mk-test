<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:10
         compiled from /Users/gluck/Sites/motokofr.com/modules/blockcurrencies/blockcurrencies.tpl */ ?>
<!-- Block currencies module -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['module_dir']; ?>
blockcurrencies.js"></script>
<div id="currencies_block_top">
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
		<p>
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
					</p>
	</form>
</div>
<!-- /Block currencies module -->