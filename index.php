<?php get_header(); ?>
<?php get_sidebar(); ?>
				<div class="main-content">
				
				<?php while ( have_posts() ) : the_post(); ?>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>

		</div><!-- .entry-content -->
				<?php endwhile; ?>
								<div class="navigation-links">
			<?php posts_nav_link(); ?>
		</div><!-- .navigation-links -->
				</div>

				<div style="clear:both;"></div>
<?php get_footer(); ?>