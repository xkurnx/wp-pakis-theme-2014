<?php $mts_options = get_option('point'); ?>
<?php get_header(); ?>

<div id="page" class="single">
		<div class = 'featuredArticles'>
		 <?php
		 dynamic_sidebar( 'Slider' );
		 ?> 
		</div>

		<div class = 'recentNews'>

				<?php  
				// ambil berita terbaru
				query_posts( 'posts_per_page=4&category_name=berita-internal' );
				$j=0; $i =0; 
				if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="<?php echo 'pexcerpt'.$i++?> post excerpt <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>">
					<!-- <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
						<?php if ( has_post_thumbnail() ) { ?> 
							<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('featured',array('title' => '')); echo '</div>'; ?>
						<?php } else { ?>
							<div class="featured-thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
							</div>
						<?php } ?>
					</a>
					-->
					<header>						
						<h3 class="title">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h3>
						<div class="post-info"><span class="theauthor"><?php the_author_posts_link(); ?></span> | <span class="thetime"><?php the_time( get_option( 'date_format' ) ); ?></span></div>

				
					</header><!--.header-->
					<!-- <div class="post-content image-caption-format-1">
						<p>
							<?php echo mts_excerpt(10);?>
						</p>
					
					</div>
					-->
				</article>
			<?php endwhile; else: ?>
				<div class="no-results">
					<h5><?php _e('No results found. We apologize for any inconvenience, please hit back on your browser or use the search form below.', 'mythemeshop'); ?></h5>
					<?php get_search_form(); ?>
				</div><!--noResults-->
			<?php endif; ?>		


</div>

		<div class="topBanner">
		 <?php
		 dynamic_sidebar( 'Banner #1' );
		 ?> 
		</div>

	<div class="content">
		<article class="article">
			<div class="featuredIcons">
					<a class="infoPerkara" href="/transparansi/transparansi-perkara/informasi-perkara/informasi-perkara/"></a>
					<a class="jadwalSidang" href="/transparansi/transparansi-perkara/informasi-perkara/jadwal-sidang/"></a>
					<a class="keuanganPerkara last" href="/transparansi/transparansi-perkara/informasi-perkara/keuangan-perkara/"></a>
					
			</div>
			
			<div id="content_box" >
				
				<?php  
				// ambil categori berita pilihan
				query_posts( 'posts_per_page=5&category_name=berita-pilihan' );
				$j=0; $i =0; 
				if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="<?php echo 'pexcerpt'.$i++?> post excerpt <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
						<?php if ( has_post_thumbnail() ) { ?> 
							<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('featured',array('title' => '')); echo '</div>'; ?>
						<?php } else { ?>
							<div class="featured-thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
							</div>
						<?php } ?>
						<div class="featured-cat"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></div>
					</a>
					<header>						
						<h2 class="title">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h2>
						<div class="post-info"><span class="theauthor"><?php the_author_posts_link(); ?></span> | <span class="thetime"><?php the_time( get_option( 'date_format' ) ); ?></span></div>

					</header><!--.header-->
					<div class="post-content image-caption-format-1">
						<p>
							<?php echo mts_excerpt(29);?>
							<span class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php _e('Selengkapnya','mythemeshop'); ?></a></span>
						</p>
					</div>
				</article>
			<?php endwhile; else: ?>
				<div class="no-results">
					<h5><?php _e('No results found. We apologize for any inconvenience, please hit back on your browser or use the search form below.', 'mythemeshop'); ?></h5>
					<?php get_search_form(); ?>
				</div><!--noResults-->
			<?php endif; ?>	
			
			<?php
			$category_id = get_cat_ID( 'news' );
			// Get the URL of this category
			$category_link = get_category_link( $category_id );
			?>
			<br />
			<a href="<?php echo esc_url( $category_link ); ?>" title="Indeks Berita">+ Indeks Berita</a>
			<br /><br />
	</div>
			
			<div id="banner-2">
				<?php  dynamic_sidebar( 'Banner #2' ); 	 ?> 
			</div>	
			<h3 class="sectionTitle"><span><span class="color">Profile</span> Pengadilan</span></h3>
			<div class="widgetsRows">
			<?php dynamic_sidebar( 'Footer Widget 1' ) ;?>
			</div>
			
			<h3 class="sectionTitle"><span><span class="color">Sindikasi</span> Berita</span></h3>
			<div class="widgetsRows">
			<?php dynamic_sidebar( 'Footer Widget 2' ) ;?>
			</div>
			
			<!--
			<iframe id="grafikPerkara" name="" src="http://internal.pa-kisaran.net/grafikperkarahome.php" width="650" height="300" scrolling="no" align="top" frameborder="0" class="wrapper">
			Tidak Ada Iframe</iframe>	
			-->
			
		</article>
		<?php get_sidebar(); ?>
		<?php get_template_part( 'footer-section');?>
<?php get_footer(); ?>