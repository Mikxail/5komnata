﻿</div><!-- Конец контент -->
</div><!-- Конец мидл -->
</section><!-- Конец врапер -->
	
<!-- Начало футер -->

<footer id="footer">

<div id="footerup"></div>

<div id="footerInner">

<!-- Начало логотипа -->
<div class="logofooter">

<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('alltuts_logo_img'); ?>" alt="<?php echo get_option('alltuts_logo_alt'); ?>"/></a>

</div>
<!-- Конец логотипа -->

<div id="footernav">

			<?php if ( function_exists( 'wp_nav_menu' ) ){
					wp_nav_menu( array( 'theme_location' => 'secondary-menu','fallback_cb'=>'secondarymenu') );
				}else{
					secondarymenu();
			}?>
   
</div>

</div><!-- Конец футериннер -->

</footer>

<div id="footerdown">

<div id="footerInnerdown">

<div id="copyright">
<?php if (get_option('alltuts_copyright') <> ""){
echo stripslashes(stripslashes(get_option('alltuts_copyright')));
}else{
echo 'Этот текст Вы сможете изменить в настройках шаблона';
}?> 
</div>
<!--########## Конец футериннер ##########-->

<!--########## И не стыдно тебе ссылку удалять? :-) Оставь, я же старался :-) ##########-->
<!--########## Извини) ##########-->
	<!--
<div id="autorlink">
САЙТ РАБОТАЕТ НА <a href="http://wordpress.org/" rel="nofollow">WordPress</a>, ДИЗАЙН <a href="http://beloweb.ru" rel="nofollow">beloweb.ru</a>
</div>
-->

</div>

</div>

<?php wp_footer(); ?>

<script>

		$(window).scroll(function() {
			$('.bottomMenubg').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("pullDown");
				}
			});
				
								

		});

</script>

<?php wp_footer(); ?>

</body>
</html>
