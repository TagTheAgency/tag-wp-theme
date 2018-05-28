<?php $args = array('post_type' => 'homepage-section'); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()): while($loop->have_posts()):$loop->the_post(); ?>

	<div class="container-fluid py-5 text-white">
		<!-- article -->
		<?php $alignment = get_post_meta($post->ID, 'text_alignment_meta', true);?>
		<div id="post-<?php the_ID(); ?>" <?php post_class("row justify-content-center align-items-center py-5 {$alignment}"); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<div class="col-10 col-md-6">
				<h2 class="ls-8">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong>
					</a>
				</h2>
				<?php the_content(); ?>
			</div>
		</div>
		<!-- /article -->
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
