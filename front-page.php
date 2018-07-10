<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container-fluid hero-container">
			<div class="row hero-banner hero-banner-full text-center align-items-center justify-content-center" style="background-image: url('<?= get_theme_mod('hero_banner_bg_img') ?>');">
				<div class="col-12 col-md-10 row justify-content-center align-items-center">
					<div class="col-10 col-sm-9 col-md-6 order-2 order-md-1" style="color: <?= get_theme_mod('hero_banner_text_color_settings', __(''))  ?>">
						<h2 class="hero-header ml-3 font-3 font-md-4"><strong><?= get_theme_mod('hero_banner_title_text_setting', __('Hero Banner')) ?></strong></h2>
						<p class="hero-sub-header font-1 font-md-2"><?= get_theme_mod('hero_banner_sub_title_text_setting', __('Sub-title for this banner')) ?></p>
						<a href="<?= get_theme_mod('hero_banner_link', __('')) ?>"><div class="btn m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow" style="color:<?= get_theme_mod('hero_banner_btn_text_color') ?>; background-color: <?= get_theme_mod('hero_banner_btn_color') ?>;">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></div></a>
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
