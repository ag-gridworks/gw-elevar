<div id="volunteers" class="go-colaborators section">
	<h2 class="this-title">
		<?php the_field("colaborators_title") ?>
	</h2>

	<?php $delay = 0 ?>

	<?php while(have_rows('colaborators')): the_row(); ?>

	<div class="this-item" data-animation="animated" data-wow-delay="0.<?php echo "$delay" ?>s">
		<div class="thumb hvr-bounce-in">
			<img src="<?php the_sub_field('profile_image') ?>" alt="">
		</div>
		<div class="title">
			<?php the_sub_field('name') ?>
		</div>

		<?php if(get_sub_field("colaborator_facebook") || get_sub_field("colaborator_twitter") || get_sub_field("colaborator_linkedin")): ?>
			<div class="social">
				<?php if(get_sub_field("colaborator_facebook")): ?>
				<a href="<?php the_sub_field("colaborator_facebook") ?>" target="_blank">
					<i class="fa fa-facebook hvr-bounce-in" aria-hidden="true"></i>
				</a>
				<?php endif; ?>

				<?php if(get_sub_field("colaborator_linkedin")): ?>
				<a href="<?php the_sub_field("colaborator_linkedin") ?>" target="_blank">
					<i class="fa fa-linkedin hvr-bounce-in" aria-hidden="true"></i>
				</a>
				<?php endif; ?>

				<?php if(get_sub_field("colaborator_twitter")): ?>
				<a href="<?php the_sub_field("colaborator_twitter") ?>" target="_blank">
					<i class="fa fa-twitter hvr-bounce-in" aria-hidden="true"></i>
				</a>
				<?php endif; ?>
			</div>
		<?php endif ?>
	</div>
	
	<?php $delay = $delay + 2 ?>

	<?php endwhile ?>

</div>