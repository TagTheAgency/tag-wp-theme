<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container-fluid hero-container">
			<div class="row hero-banner hero-banner-full vh-75 vh text-center justify-content-center align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpg');">
				<div class="col-8 text-white">
					<h2 class="hero-header ls-15"><strong>HEADER</strong></h2>
					<p class="hero-sub-header ls-6">THIS IS A TAG LINE</p>
					<div class="btn btn-white-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></div>
				</div>
			</div>
		</div>
		<div class="container text-white">
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
