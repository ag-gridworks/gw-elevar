<section id="inicio" class="go-hero-container">
	<div class="go-hero" style="
	background-image: url('<?php the_field('hero_image') ?>');
	">

		<div class="this-inner" data-animation="animated">

			<h1 class="this-title">
				<?php the_field('hero_title') ?>
			</h1>

			<div class="go-divider"></div>

			<h2 class="this-subtitle">
				<?php the_field('hero_subtitle') ?>
			</h2>

			<div class="this-options">
				<a href="#projetos" class="go-button navbar-option">
					<?php the_field('hero_button_text') ?>
				</a>
			</div>
		</div>

	</div>

</section>

<section class="hero-boxes">
	
	<?php while(have_rows('hero_boxes')): the_row(); ?>

	<div class="box">
		<div class="inner">
			<div class="this-icon">
				<img src="<?php the_sub_field('box_icon') ?>" alt="">
			</div>

			<div class="this-title">
				<?php the_sub_field('box_title') ?>
			</div>

			<div class="go-divider white"></div>

			<div class="this-text">
				<?php the_sub_field('box_text') ?>
			</div>
		</div>
	</div>
	
	<?php endwhile ?>

</section>