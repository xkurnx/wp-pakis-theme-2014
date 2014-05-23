<!DOCTYPE html>
<?php $mts_options = get_option('point'); ?>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php mts_meta(); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox-1.3.4.css' rel='stylesheet' type='text/css'>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>
	
</head>
<body id ="blog" <?php body_class('main'); ?>>
	<div class="main-container">
		<?php if(isset($mts_options['mts_trending_articles'])) { if($mts_options['mts_trending_articles'] == '1' && $mts_options['mts_trending_articles'] != '') { ?>
			<div class="trending-articles">
				<ul>
					<li class="firstlink"><?php _e('Now Trending','mythemeshop'); ?>:</li>
					<?php $i = 1; $my_query = new wp_query( 'category_name=berita-internal&posts_per_page=4&ignore_sticky_posts=1' ); ?>
					<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<li class="trendingPost <?php if($i % 4 == 0){echo 'last';} ?>">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php mts_short_title('...', 24); ?></a>
						</li>                   
					<?php $i++; endwhile; endif;?>
				</ul>
			</div>
		<?php }} ?>
		<header class="main-header">
			<div id="header">
				<div class="image">
					
				</div>
				<div class="header-small-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'header-small-menu', 'menu_class' => 'menu', 'container' => ''));?>
				</div>
				<div class="secondary-navigation">
					<nav id="navigation" >
						<?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
							<?php $walker = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'menu', 'container' => '') ); ?>
						<?php } else { ?>
							<ul class="menu">
								<?php wp_list_categories('title_li='); ?>
							</ul>
						<?php } ?>
						<a href="#" id="pull"><?php _e('Menu','mythemeshop'); ?></a>
					</nav>
				</div>
			</div>
		</header>
		<?php if ($mts_options['mts_header_adcode'] != '') { ?>
			<div class="header-bottom-second">
				<?php echo '<div id="header-widget-container">';
				if ($mts_options['mts_header_adcode'] != ''){
					echo '<div class="widget-header">';
					echo $mts_options['mts_header_adcode'];
					echo '</div>';
				}
				?>
				<?php if ($mts_options['mts_posttopleft_adcode'] != ''){ ?>
					<div class="widget-header-bottom-right">
						<div class="textwidget">
							<div class="topad"><?php echo $mts_options['mts_posttopleft_adcode']; ?> </div>
						</div>
					</div> 
				<?php } ?>
		<?php echo '</div></div>'; } ?>
		<?php if(isset($mts_options['mts_featured_slider'])) { if($mts_options['mts_featured_slider'] == '1' && $mts_options['mts_featured_slider'] != '') { ?>
			<?php if(is_home() && !is_paged()) { ?>
				<div class="featuredBox">
					<?php $i = 1; $slider_cat = 1; if($mts_options['mts_featured_slider_cat'] != '') { $slider_cat = implode(",", $mts_options['mts_featured_slider_cat']); } $my_query = new WP_Query('cat='.$slider_cat.'&posts_per_page=4&ignore_sticky_posts=1'); 
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<?php if($i == 1){ ?> 
							<div class="firstpost excerpt">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="first-thumbnail">
									<?php if ( has_post_thumbnail() ) { ?> 
										<?php the_post_thumbnail('bigthumb',array('title' => '')); ?>
									<?php } else { ?>
										<div class="featured-thumbnail">
											<img src="<?php echo get_template_directory_uri(); ?>/images/bigthumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
										</div>
									<?php } ?>
									<p class="featured-excerpt">
										<span class="featured-title"><?php the_title(); ?></span>
										<span class="f-excerpt"><?php echo mts_excerpt(10);?></span>
									</p>
								</a>
							</div><!--.post excerpt-->
						<?php } elseif($i == 2) { ?>
							<div class="secondpost excerpt">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="second-thumbnail">
									<?php if ( has_post_thumbnail() ) { ?> 
										<?php the_post_thumbnail('mediumthumb',array('title' => '')); ?>
									<?php } else { ?>
										<div class="featured-thumbnail">
											<img src="<?php echo get_template_directory_uri(); ?>/images/mediumthumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
										</div>
									<?php } ?>
									<p class="featured-excerpt">
										<span class="featured-title"><?php the_title(); ?></span>
									</p>
								</a>
							</div><!--.post excerpt-->
						<?php } elseif($i == 3 || $i == 4) { ?>
							<div class="thirdpost excerpt">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="third-thumbnail">
									<?php if ( has_post_thumbnail() ) { ?> 
										<?php the_post_thumbnail('smallthumb',array('title' => '')); ?>
									<?php } else { ?>
										<div class="featured-thumbnail">
											<img src="<?php echo get_template_directory_uri(); ?>/images/smallfthumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
										</div>
									<?php } ?>
									<p class="featured-excerpt">
										<span class="featured-title"><?php the_title(); ?></span>
									</p>
								</a>
							</div><!--.post excerpt-->
						<?php } ?>                   
					<?php $i++; endwhile; wp_reset_query(); ?> 
				</div>
			<?php } ?>
		<?php }} ?>