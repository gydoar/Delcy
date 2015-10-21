<?

	// Replace this with your own email address
	$to="handresvegarodriguez@gmail.com";

	// Extract form contents
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$tel = $_POST['telefono'];
	$asunto = $_POST['asunto'];
	$comentarios = $_POST['comentarios'];
		
	// Validate email address
	function valid_email($str) {
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	
	// Return errors if present
	$errors = "";
	
	if($name =='') { $errors .= "nombre,"; }
	if(valid_email($email)==FALSE) { $errors .= "email,"; }
	if($comentarios =='') { $errors .= "comentarios,"; }

	// Send email
	if($errors =='') {

		$headers =  'De: Delcy Araque <consulta@dradelcyaraquelafaurie.com>'. "\r\n" .
					'Reply-To: '.$email.'' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		$email_subject = "Nuevo mensaje desde Dra Delcy Araque: $email";
		$message="Nombre: $name \n\nEmail: $email \n\nTel: $tel \n\nAsunto: $asunto \n\nComentarios:\n\n $comentarios";
	
		mail($to, $email_subject, $message, $headers);
		header('Location: /gracias.php');	
	} else {
		echo $errors;
	}
	
?>