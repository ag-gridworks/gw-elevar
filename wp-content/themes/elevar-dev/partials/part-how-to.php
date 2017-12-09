<section id="apply" class="how-to section">
	<h2 class="this-title" data-animation="animated">
		<?php the_field("howto_section_title") ?>
	</h2>

	<div class="go-divider"></div>

	<div class="this-subtitle" data-animation="animated">
		<?php the_field("howto_section_subtitle") ?>
	</div>

	<?php $count1 = 0 ?>
	<?php while(have_rows('steps')): the_row(); ?>
	<?php $count1++ ?>
	<?php endwhile; ?>

	<div class="this-steps">
		<div class="this-title" data-animation="animated">
			<?php the_field("descrição") ?>
		</div>

		<?php $count = 1 ?>
		<?php $delay = 0 ?>

		<?php while(have_rows('steps')): the_row(); ?>

		<div class="step wow bounceInUp" data-wow-delay="0.<?php echo "$delay" ?>s">
		
			<div class="index">
				<?php echo "$count"; ?>
			</div>
			
			<div class="text">
				<?php the_sub_field("step_text") ?>
			</div>
		
		</div>

		<?php $count++ ?>
		<?php $delay = $delay + 2 ?>

		<?php endwhile; ?>

	</div>
</section>