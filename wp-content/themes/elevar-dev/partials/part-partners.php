<div id="partners" class="go-partners section" data-animation="animated">
	<div class="title">
		<?php the_field("partners_title") ?>
	</div>
	
	<div class="owl-carousel owl-theme owl-partners">
		
		<?php while(have_rows('partners')): the_row(); ?>

		<div class="item">
			<img src="<?php the_sub_field("logo") ?>" alt="">
		</div>

		<?php endwhile; ?>
	</div>
</div>