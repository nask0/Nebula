<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="sixteen columns">
			<? the_breadcrumb(); ?>
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
	<div class="row">
		
		<div class="ten columns">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
												
						<?php if ( current_user_can('manage_options') ) : ?>
							<div class="container entry-manage">
								<div class="row">
									<div class="sixteen columns">
										<hr/>
										<?php nebula_manage('edit'); ?> <?php nebula_manage('modified'); ?>
										<hr/>
									</div><!--/columns-->
								</div>
							</div>
						<?php endif; ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				<?php //comments_template( '', true ); ?>
			<?php endwhile; ?>
		</div><!--/columns-->
		
		<div class="five columns push_one">
			<?php get_sidebar(); ?>
		</div><!--/columns-->
		
	</div><!--/row-->
</div><!--/container-->

<?php get_footer(); ?>
