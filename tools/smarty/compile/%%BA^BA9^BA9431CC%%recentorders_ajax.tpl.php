<?php /* Smarty version 2.6.20, created on 2018-11-18 21:39:25
         compiled from /Users/gluck/Sites/motokofr.com/modules//recentorders_ajax/recentorders_ajax.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', '/Users/gluck/Sites/motokofr.com/modules//recentorders_ajax/recentorders_ajax.tpl', 11, false),)), $this); ?>
<li id="recent_<?php echo $this->_tpl_vars['item']['index']; ?>
">
    <table width="100%" border="0"; >
        <tr>
            <td valign="middle"; height="90px" width="87px">
                <a href="<?php echo $this->_tpl_vars['item']['product_link']; ?>
">
                    <img class="recentorders" src="<?php echo $this->_tpl_vars['item']['img']; ?>
" alt="<?php echo $this->_tpl_vars['item']['product_name']; ?>
">
                </a>
            </td>

            <td valign="middle"; height="90px">
                <a rel="nofollow" href="<?php echo $this->_tpl_vars['item']['product_link']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['product_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15) : smarty_modifier_truncate($_tmp, 15)); ?>

                    <br>
                    Едет в <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['address'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15) : smarty_modifier_truncate($_tmp, 15)); ?>

                    <br> байкеру <?php echo $this->_tpl_vars['item']['biker']; ?>

                </a>
            </td>
        </tr>
    </table>
</li>  