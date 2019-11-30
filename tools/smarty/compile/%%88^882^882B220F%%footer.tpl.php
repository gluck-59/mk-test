<?php /* Smarty version 2.6.20, created on 2019-03-16 13:22:17
         compiled from /Users/gluck/Sites/motokofr.com/themes/Earth/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', '/Users/gluck/Sites/motokofr.com/themes/Earth/footer.tpl', 27, false),array('modifier', 'escape', '/Users/gluck/Sites/motokofr.com/themes/Earth/footer.tpl', 40, false),array('function', 'l', '/Users/gluck/Sites/motokofr.com/themes/Earth/footer.tpl', 45, false),)), $this); ?>
<?php if (! $this->_tpl_vars['content_only']): ?>
    </div> 
        <?php if (@site_version == 'mobile'): ?>
    <!-- Left -->
    	<div id="left_column" class="column">
    		<?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>

    	</div>
    <?php endif; ?>			
    
    <!-- Right -->
    	<div id="right_column" class="column">
    		<?php echo $this->_tpl_vars['HOOK_RIGHT_COLUMN']; ?>

    	</div>


    <?php if (@site_version == 'full'): ?>
    	<script type="text/javascript">
        <?php echo '    	

    	window.onload = function() 
    	{
            // vk comments
            if ($(\'body\').attr(\'id\') == \'product\')
            {
            	VK.Widgets.Comments(\'vk_comments\', {limit: '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['vklimit'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php echo '}, '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['vkid'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php echo ');	
            }
        }
            
        '; ?>

        </script>
       
    <?php endif; ?>

    
    <?php if (@site_version == 'mobile'): ?>
    <!-- Block permanent links module HEADER -->
    	<div class="link">
    		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><p id="home">Главная</p></a>
    		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
my-account.php"><p id="account">Кабинет</p></a>
    		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
order.php"><p id="cart">Корзина</p></a>
    		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php"><p id="new">Свежачок</p></a>	
    		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php"><p id="best-sales">Популярные ништяки</p></a>	
    		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php" title="<?php echo smartyTranslate(array('s' => 'contact','mod' => 'blockpermanentlinks'), $this);?>
"><p id="contact">Контакты</p></a>
    		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
sitemap.php" title="<?php echo smartyTranslate(array('s' => 'sitemap','mod' => 'blockpermanentlinks'), $this);?>
"><p id="sitemap"><?php echo smartyTranslate(array('s' => 'sitemap','mod' => 'blockpermanentlinks'), $this);?>
</p></a>
    	</div>
        
        <noindex>    	
    	<script type="text/javascript">
        <?php echo '    	

    	window.onload = function() 
    	{
            // vk comments
            if ($(\'body\').attr(\'id\') == \'product\')
            {
            	VK.Widgets.Comments(\'vk_comments\', {limit: '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['vklimit'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php echo '}, '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['vkid'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php echo ');	
            }
            
            // swiper фото товара
            if (typeof count =="undefined") count = 1;
            if (count > 1) // если фото товара больше 1 - запускаем
            {
                var swiper = new Swiper(\'.swiper-container\', {
                    effect: \'coverflow\',        
                    pagination: \'.swiper-pagination\',
                    nextButton: \'.swiper-button-next\',
                    prevButton: \'.swiper-button-prev\',
                    slidesPerView: count, // передается из product.tpl
                    centeredSlides: true,
                    paginationClickable: true,
                    spaceBetween: 60,
                    loop: true
                });
            }

        }

        window.onresize = function()
        {
            loadSwiper();
        }
        
            
        function loadSwiper()
        {
            // swiper blockviewed и wishlist
            delete swiper1;
            var swiper1 = new Swiper(\'.swiper-container1\', {
                slidesPerView: Math.round(screen.height / 190),
                paginationClickable: true,
                spaceBetween: 10,
                loop: false
            });
        }
        
        </script>

    
    	
        <!-- Yandex.Metrika общий mobile --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24648656 = new Ya.Metrika({id:24648656, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24648656" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika общий mobile -->
    	
        '; ?>

    <?php endif; ?>
    
    
    
    <!-- SEO schema -->
    <footer hidden itemscope itemtype="//schema.org/LocalBusiness">
        <img itemprop="image" src="//motokofr.com/img/logo/logo.png">
        <span itemprop="url">https://motokofr.com</span>.
        <elem itemprop="priceRange">RUB</elem>
        ЕООД «<span itemprop="name">Мотокофр</span>»
        <div itemprop="address" itemscope itemtype="//schema.org/PostalAddress">
            <span itemprop="addressLocality">Москва</span>,
            <span itemprop="addressRegion">Москва</span>
            <meta itemprop="addressCountry" content="RU"/>
        </div>
        Время работы менеджера-консультанта:
        <time itemprop="openingHours" datetime="Mo, Tu, We, Th, Fr, Sa, Su 10:00-0:00">10:00 - 20:00 Ежедневно</time>
        <span itemprop="telephone">+359892740300</span>.
        <span itemprop="email">support(at)motokofr.com</span>.
        <meta itemprop="logo" content="//motokofr.com/img/logo/logo_paypal.png"/>
    </footer>	
    		
    <?php if (@site_version == 'full'): ?>
        	<div id="footer" align="center"></div>
        	
            <!-- Footer -->
        	<div id="footer-content">
        		<?php echo $this->_tpl_vars['HOOK_FOOTER']; ?>

            </div>
       	</div>     	<?php endif; ?>


    		
    	
    	
    	<?php echo '
    	<!-- Yandex.Metrika общий full --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter924826 = new Ya.Metrika({id:924826, webvisor:true, clickmap:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/924826" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    	<!-- /Yandex.Metrika общий full  -->
    	'; ?>

    	

    	<div class="nonprintable" id="scroller"></div>
    <?php endif; ?>
    
    
    
        
    <?php if (@site_version == 'full'): ?>
    <?php echo '
    <script type="text/javascript">
    // грузим reformal        
        var reformalOptions = {
            project_id: 18022,
            project_host: "motokofr.reformal.ru",
            tab_orientation: "top-right",
            tab_indent: "10px",
            tab_bg_color: "#ff7733",
            tab_border_color: "#FFFFFF",
    //        tab_image_url: "http://tab.reformal.ru/T9GC0LfRi9Cy0Ysg0Lgg0L%252FRgNC10LTQu9C%252B0LbQtdC90LjRjw==/FFFFFF/9c87995e4a804015c7fcd66342939545/top-right/0/tab.png",
            tab_border_width: 0
        };
        
        (function() {
            var script = document.createElement(\'script\');
            script.type = \'text/javascript\'; script.async = true;
            script.src = (\'https:\' == document.location.protocol ? \'https://\' : \'http://\') + \'motokofr.com/js/reformal.js\'; 
            document.getElementsByTagName(\'head\')[0].appendChild(script);
        })();
    </script><noindex><noscript><a href="https://reformal.ru">Отзывы и предложения</a><a href="//motokofr.reformal.ru">Oтзывы и предложения</a></noscript></noindex>
    
    
    <script>
    // грузим header background
    if (document.getElementById(\'header\'))
    {
       season=new XMLHttpRequest();
       season.onreadystatechange=function()
       {
        if (season.readyState==4 && season.status==200)
        {
            document.getElementById(\'header\').style.background = \'url(/themes/Earth/img/back/\'+season.responseText+\')\';
        }
       }
       season.open(\'GET\',\'/themes/Earth/img/back/season.php\', true);
       season.send(season.responseText);
    }
    </script>
    '; ?>

    <?php endif; ?>




</noindex>
</body>
</html>