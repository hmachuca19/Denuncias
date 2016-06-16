
<?php 
require_once('phpmailer/class.phpmailer.php');
error_reporting(E_ALL);
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();
//Definir que vamos a usar SMTP
$mail->IsSMTP();
echo 1;
//Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
// 0 = off (producción)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug  = 0;

echo 2;
//Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host       = 'smtp.gmail.com';
//El puerto será el 587 ya que usamos encriptación TLS
echo 3;

$mail->Port       = 587;
//Definmos la seguridad como TLS

echo 4;
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth   = true;

echo 5;
//Definimos la cuenta que vamos a usar. Dirección completa de la misma
$mail->Username   = "denuncias.se@educatrachos.hn";
//Introducimos nuestra contraseña de gmail
$mail->Password   = "Denuncias2o15";

echo "Entro a la Cuenta";
echo $mail;
//Definimos el remitente (dirección y, opcionalmente, nombre)

$mail->SetFrom('denuncias.se@educatrachos.hn', 'Denuncias SE');

echo "Envio correo";
//Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
$mail->AddReplyTo('hmachuca19@hotmail.com','SEGUNDO');
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress('hmachuca19@hotmail.com', 'MACHUCA');
//Definimos el tema del email
$mail->Subject = 'Esto es un correo de prueba';

echo "Escribio Subject";
//Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
$mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));
//Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
$mail->AltBody = 'This is a plain-text message body';
//Enviamos el correo
if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
  echo "Enviado!";
}
?>