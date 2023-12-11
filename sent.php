<?php 
	$nombre = $_POST['name'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
	$asunto = 'Nueva consulta en su pagina web';
	$mensaje = "Nombre completo: ".$nombre."<br> Email: $email<br> Apellido: $phone<br> Mensaje:".$_POST['mensaje'];


	if(mail('reservas@ruta86evt.tur.ar', $asunto, $mensaje)){
		echo "Correo enviado";
	}
?>

<a href="/index.html">Volver al inicio</a>