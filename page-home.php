<?php $mts_options = get_option('point'); ?>
<?php get_header(); ?>

<div class = 'featuredArticles'>
<?php
if( function_exists('FA_display_slider') ){
    FA_display_slider(372);
}
?>
</div>

<div class = 'topSidebar'>
 <?php
 dynamic_sidebar( 'Featured Section' );
 ?> 
</div>

<div class="banner">
	 <?php
 dynamic_sidebar( 'Banner #1' );
 ?> 
</div>

<div id="page" class="single">
	<div class="content">
		<article class="article">
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
				
			</div>
			
			<h3 class="sectionTile">Profile Pengadilan</h3>
			<div class="widgetsRows">
			<?php dynamic_sidebar( 'Footer Widget 1' ) ;?>
			</div>
			
			<h3 class="sectionTile">Informasi Keperkaraan</h3>
			<div class="widgetsRows">
			<?php dynamic_sidebar( 'Footer Widget 2' ) ;?>
			</div>
			
			<h3 class="sectionTile">Pengawasan & transaparansi</h3>
			<div class="widgetsRows">
			<?php dynamic_sidebar( 'Footer Widget 3' ) ;?>
			</div>
			
			
			
			
		</article>
		<?php get_sidebar(); ?>
<?php get_footer(); ?>