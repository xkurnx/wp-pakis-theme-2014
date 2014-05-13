<?php $mts_options = get_option('point'); ?>
		</div><!--.content-->
	</div><!--#page-->

<div class="footerSection">
	
</div>	

<footer>
	<?php dynamic_sidebar( 'Footer Widget 4' ) ;?>
	<div class="clear"></div>
	<div class="footerMenu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
	</div>
</footer>
<!--footer-->
<!-- 
<div class="copyrights"></div>
-->
<?php wp_footer(); ?>
</div><!--.main-container-->
</body>
</html>