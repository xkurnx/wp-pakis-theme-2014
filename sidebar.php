<aside class="sidebar c-4-12">
	<div id="sidebars" class="sidebar">
			<div class="sidebar_list">
				<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
					<div id="sidebar-search" class="widget">
						<h3><?php _e('Search', 'mythemeshop'); ?></h3>
						<div class="widget-wrap">
							<?php get_search_form(); ?>
						</div>
					</div>
					<div id="sidebar-archives" class="widget">
						<h3><?php _e('Archives', 'mythemeshop') ?></h3>
						<div class="widget-wrap">
							<ul>
								<?php wp_get_archives( 'type=monthly' ); ?>
							</ul>
						</div>
					</div>
					<div id="sidebar-meta" class="widget">
						<h3><?php _e('Meta', 'mythemeshop') ?></h3>
						<div class="widget-wrap">
							<ul>
								<?php wp_register(); ?>
								<li><?php wp_loginout(); ?></li>
								<?php wp_meta(); ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>
			</div>
			
			<h3>Berita Populer</h3>	
			<?php  
				// ambil berita terbaru
				query_posts( 'posts_per_page=3&category_name=berita-internal' );
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
						<h4 class="title">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h4>
						<div class="post-info"><span class="theauthor"><?php the_author_posts_link(); ?></span> | <span class="thetime"><?php the_time( get_option( 'date_format' ) ); ?></span></div>

				
					</header><!--.header-->
					<div class="post-content image-caption-format-1">
						<p>
							<?php echo mts_excerpt(10);?>
						</p>
					
					</div>
				</article>
			<?php endwhile; else: ?>
				<div class="no-results">
					<h5><?php _e('No results found. We apologize for any inconvenience, please hit back on your browser or use the search form below.', 'mythemeshop'); ?></h5>
					<?php get_search_form(); ?>
				</div><!--noResults-->
			<?php endif; ?>			
	</div><!--sidebars-->
	
	<div class="fancyform">
	<?php
		$page_info = get_page_by_path('transparansi/transparansi-perkara/informasi-perkara/');
	?>
		<div class="title"></div>
		<div class="content">
			<form method="post" action="<?php echo get_permalink($page_info->ID);?>">
				<div class="row"><label>Nama </label><input type="text" name="nama"></div>
				<div class="row"><label>No. Perk </label><input type="text" style="width:50px" name="nomorperkara">
				<select name="pdt">
					<option value="G" selected="">Pdt.G</option>
					<option value="P">Pdt.P</option>
				</select>
				<select name="tahunperkara">
											<option value="2014" selected="">2014</option>";
														<option value="2013">2013</option>";
														<option value="2012">2012</option>";
														<option value="2011">2011</option>";
														<option value="2010">2010</option>";
														<option value="2009">2009</option>";
														<option value="2008">2008</option>";
														<option value="2007">2007</option>";
														<option value="2006">2006</option>";
														<option value="2005">2005</option>";
														<option value="2004">2004</option>";
														<option value="2003">2003</option>";
														<option value="2002">2002</option>";
														<option value="2001">2001</option>";
														<option value="2000">2000</option>";
											</select>
				</div>	
			<input class="btnSubmit" type="submit" value="Lihat">				
			</form>
			
		</div>
	</div>
</aside>