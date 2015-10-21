<!-- Header -->
<?php include "header.php"; ?>

	<div class="container page">

		<div class="ten columns offset-by-one">
				
		<h2>CONTÁCTANOS</h2>
			
			<form action="send.php" method="post">
				
				<div class="six columns">
					
					Nombre ( <span>*</span> )<br>
					<input type="text" name="nombre" id="nombre" required> <br>

					Correo ( <span>*</span> )<br>
					<input type="email" name="email" id="email" required><br>

					Teléfono ( <span>*</span> )<br>
					<input type="text" name="telefono" id="telefono" required>
					
				</div>

				<div class="six columns">
					Asunto<br>
					<input type="text" name="asunto" id="asunto" required><br>

					Mensaje<br>
					<textarea name="comentarios" id="comentarios" required></textarea>
				</div>
				
				<div class="twelve columns botton__enviar">
					<p>Los campos marcados con ( <span>*</span> ) con obligatorios</p><input type="submit" value="ENVIAR">
				</div>
				

			</form>
		</div>
	</div>

<!-- Footer -->
<?php include "footer.php"; ?>