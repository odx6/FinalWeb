<?php
	include 'men_horizontal.html';

	$Destino = "marethel@gmail.com";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	

	$Contenido = "name: " . $name . "\nemail: " . $email . "\nsubject " . $subject . "\nmessage: " . $message ;

	mail($Destino, "PEDIDO", $Contenido);

	header("mensaje enviado");

?>