<!-- Header -->
<?php include "header.php"; ?>

<div class="container banner">
  <div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item"><img src="images/fullimage1.jpg" alt=""></div>
    <div class="item"><img src="images/fullimage2.jpg" alt=""></div>
    <div class="item"><img src="images/fullimage3.jpg" alt=""></div>
  </div>
</div>
<div class="sonbra__banner"></div>

<div class="container inicio">

	<div class="eight columns">
		<img class="twelve columns" src="images/banner-mision.png" alt="">
		
		<div class="twelve columns">
			<br>
			<h3><img width="20px" src="images/corazon-wh.png" alt="">&nbsp;TU SALUD ES LO MÁS IMPORTANTE</h3>
			
			<div class="row cajas__inicio">
				<div class="six columns">
					<img class="twelve columns" src="images/venas-varices.jpg" alt="">
					<p>Las várices son venas dilatadas que se inflaman y se elevan a la superficie de la piel. Pueden ser de un color morado o azul oscuro y parecer estar torcidas...</p>
					<a class="botones__red" href="venosas.php">LEER MÁS</a>
				</div>
				<div class="six columns">
					<img class="twelve columns" src="images/escleroteriapia.jpg" alt="">
					<p>Escleroterapia corresponde a un método seguro y efectivo para la eliminación de venas reticulares (a 5 mm de diámetro) y de telangiectasias o arañas...</p>
					<a class="botones__red" href="#">LEER MÁS</a>
				</div>
			</div>		
			
		</div>	
		

	</div>

	<div class="four columns contacto">
		<div class="fondo--titulo--contacto">
			<h2>CONTÁCTENOS</h2>
		</div>

		<div class="border-form">
			<p>Los campos marcados con ( <span>*</span> ) con obligatorios</p>
			<hr>
			<form action="send.php" method="post">
					Nombre ( <span>*</span> )<br>
					<input type="text" name="nombre" id="nombre" required> <br>

					Correo ( <span>*</span> )<br>
					<input type="email" name="email" id="email" required><br>

					Teléfono ( <span>*</span> )<br>
					<input type="text" name="telefono" id="telefono" required>

					Asunto<br>
					<input type="text" name="asunto" id="asunto" required><br>

					Mensaje<br>
					<textarea name="comentarios" id="comentarios" required></textarea>

					<input class="botton-large" type="submit" value="ENVIAR">
			</form>
		</div>
	</div>

	<div class="twelve columns">
		<br>
		<h3><img width="20px" src="images/icon-consejos.png" alt="">&nbsp;CONSEJOS QUE TE AYUDARAN</h3>
		
		<div class="row consejos">
			<div class="three columns">
				<a class="twelve columns" href=""><img class="twelve columns" src="images/cuando-duermes-1.jpg" alt=""></a>
				<div class="twelve columns caja__consejos">
					<a href="">CUANDO DUERMES</a>
				</div>	
			</div>
			<div class="three columns">
				<a class="twelve columns" href=""><img class="twelve columns" src="images/haz-ejercicio.png" alt=""></a>
				<div class="twelve columns caja__consejos">
					<a href="">HAZ EJERCICIO</a>
				</div>	
			</div>
			<div class="three columns">
				<a class="twelve columns" href=""><img class="twelve columns" src="images/cuida-tus-posturas.png" alt=""></a>
				<div class="twelve columns caja__consejos">
					<a href="">CUIDA TUS POSTURAS</a>
				</div>	
			</div>
			<div class="three columns">
				<a class="twelve columns" href=""><img class="twelve columns" src="images/dieta-sana.png" alt=""></a>
				<div class="twelve columns caja__consejos">
					<a href="">DIETA SANA</a>
				</div>	
			</div>
		</div>		
	</div>	
</div>


<!-- Footer -->
<?php include "footer.php"; ?>