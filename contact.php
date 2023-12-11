<?php 
	$nombre = $_POST['name'];
    $apellido = $_POST['lname'];
	$email = $_POST['email'];
	$asunto = 'Nueva consulta en su pagina web';
	$mensaje = "Nombre: ".$nombre."<br> Apellido: $apellido<br> Email: $email<br>  Mensaje:" . $_POST['message'];

	if(mail('reservas@ruta86evt.tur.ar', $asunto, $mensaje)){
		echo "Correo enviado";
	}
?>

<a href="/index.html">Volver al inicio</a>