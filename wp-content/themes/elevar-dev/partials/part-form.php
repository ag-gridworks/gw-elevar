<div id="contact" class="go-form section" data-animation="animated">
	<div class="header hide">
		Favor preencher o formulário abaixo para mais informações sobre a ONG. <br>
		Obrigado!
	</div>
	
	<div class="frame">
		<div class="form">
			<div class="title">
				<?php the_field("form_title") ?>
			</div>
			<form action="https://formspree.io/paesvitor@outlook.com" method="POST">
				<input type="hidden" name="_language" value="pt" />
			<input class="go-input" type="text" placeholder="Nome" name="nome">
			<input class="go-input" type="text" placeholder="E-Mail" name="_replyto">
			<input type="hidden" name="_format" value="plain" />
			<input type="text" name="_gotcha" style="display:none" />
			<textarea class="go-input" name="mensagem" id="" cols="30" rows="5" placeholder="Mensagem"></textarea>
			<input type="submit" class="go-button" value="Enviar">
			</form>
		</div>
		<div class="iframe">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59879.01656363456!2d-40.320723378861544!3d-20.282107559491973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb83d5d85374ee9%3A0x97595e7ea70ed809!2zVml0w7NyaWEsIEVT!5e0!3m2!1spt-BR!2sbr!4v1508611841822" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>