<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container-fluid hero-container">
			<div class="row hero-banner hero-banner-full text-center align-items-center justify-content-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/');">
				<div class="col-12 col-md-10 row justify-content-center align-items-center">
					<div class="col-10 col-sm-9 col-md-6 text-black order-2 order-md-1">
						<h2 class="hero-header ml-3 text-black font-3 font-md-4"><strong>Hero Title</strong></h2>
						<p class="hero-sub-header font-1 font-md-2">Sub-title for hero banner</p>
						<div class="btn btn-black m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid text-white">
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
