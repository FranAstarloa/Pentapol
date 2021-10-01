<?php

$lvStr_Nombre = $_POST["nombre"];
$lvStr_mail = $_POST["email"];
$lvStr_comentario = $_POST["mensajeContacto"];


// Enviamos el e-mail.
$lvStr_Body = "";
$lvStr_Body = $lvStr_Body . "<html>";
$lvStr_Body = $lvStr_Body . "	<body>";
$lvStr_Body = $lvStr_Body . "		<table border='0' cellpadding='3' cellspacing='0' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;'>";
$lvStr_Body = $lvStr_Body . "			<tr><td valign='top' align='right'><b>Nombre:</b>&nbsp;</td><td>" . $lvStr_Nombre . "</td></tr>";
$lvStr_Body = $lvStr_Body . "			<tr><td valign='top' align='right'><b>Mail:</b>&nbsp;</td><td>" . $lvStr_mail . "</td></tr>";
$lvStr_Body = $lvStr_Body . "			<tr><td valign='top' align='right'><b>Comentario:</b>&nbsp;</td><td>" . $lvStr_comentario . "</td></tr>";
$lvStr_Body = $lvStr_Body . "		</table>";
$lvStr_Body = $lvStr_Body . "	</body>";
$lvStr_Body = $lvStr_Body . "</html>";

$lvStr_Headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";

// Env�o del e-mail.
$lvBol_ProcesoOk = mail ("info@carroceriapentapol.com.ar", "Contacto desde Sitio Web", $lvStr_Body, "From: " . $lvStr_mail . "\r\n" . $lvStr_Headers);
//$lvBol_ProcesoOk = mail ("nmonjes@boulevard4.com", "Contacto desde Sitio Web", $lvStr_Body, "From: " . $lvStr_mail . "\r\n" . $lvStr_Headers);

?>