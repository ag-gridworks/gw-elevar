<footer>
<?php wp_footer() ?>

<div class="left-box">
	<div class="logo">
		<?php the_custom_logo(); ?>
	</div>

	<div class="info">
		<div class="phone">
		<?php the_field("telefone") ?>
	</div>

	<div class="email">
		<?php the_field("email") ?>
	</div>

	<div class="address">
		<?php the_field("endereço") ?> <br>
		<?php the_field("cidade") ?>
	</div>
	</div>


	<div class="copyright">
		<div class="go-divider blue"></div>
		<?php the_field("direitos_reservados") ?>
		<a href="http://www.gridworks.com.br" target="_blank" class="gridworks">Built by Gridworks</a>
	</div>
	
</div>

<div class="right-box">
	<div class="title">
		Newsletter
	</div>

	<div class="text">
		<?php the_field("newsletter_text") ?>
	</div>

	<div class="input">
		<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
		<input class="go-input newsletter" type="text">
	</div>

	<div class="social">
		<?php if(get_field("facebook")): ?>
		<a href="<?php the_field("facebook") ?>" target="_blank">
			<i class="fa fa-facebook hvr-bounce-in" aria-hidden="true"></i>
		</a>
		<?php endif; ?>

		<?php if(get_field("linkedin")): ?>
		<a href="<?php the_field("linkedin") ?>" target="_blank">
			<i class="fa fa-linkedin hvr-bounce-in" aria-hidden="true"></i>
		</a>
		<?php endif; ?>

		<?php if(get_field("twitter")): ?>
		<a href="<?php the_field("twitter") ?>" target="_blank">
			<i class="fa fa-twitter hvr-bounce-in" aria-hidden="true"></i>
		</a>
		<?php endif; ?>
	</div>
</div>

</footer>

</body>
</html>

