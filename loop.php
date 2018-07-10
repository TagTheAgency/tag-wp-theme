<?php $args = array('post_type' => 'homepage-section'); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()): while($loop->have_posts()):$loop->the_post(); ?>
	<?php
		$alignment = get_post_meta( $post->ID, 'alignment_meta_key', true );
		$bg_color = get_post_meta( $post->ID, 'post_bg', true );
	?>
	<div class="container-fluid py-5 text-black" style="background-color: #<?= $bg_color ?>">
		<div class="container">
			<!-- article -->
			<div id="post-<?php the_ID(); ?>" <?php post_class("row justify-content-center align-items-center py-3 {$alignment}"); ?>>

				<div class="col-11 col-md-6 order-2 order-md-1">
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong>
						</a>
					</h2>
					<?php the_content(); ?>
				</div>
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()): // Check if Thumbnail exists ?>
					<div class="col-11 col-md-6 order-1 order-md-2">
						<div class="img-container">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</div>
					</div>
				<?php endif; ?>
				<!-- /post thumbnail -->
			</div>
			<!-- /article -->
		</div>
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
