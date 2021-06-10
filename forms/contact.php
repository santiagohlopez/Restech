<?php
if(isset($_POST['email'])) {

$email_to = "santiagohlopez@gmail.com";
$email_subject = "Contacto desde el sitio web";


if(!isset($_POST['name']) ||
!isset($_POST['lastname']) ||
!isset($_POST['provincia']) ||
!isset($_POST['ciudad']) ||
!isset($_POST['area'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "Apellido: " . $_POST['lastname'] . "\n";
$email_message .= "E-mail: " . $_POST['provincia'] . "\n";
$email_message .= "Teléfono: " . $_POST['ciudad'] . "\n";
$email_message .= "Comentarios: " . $_POST['area'] . "\n\n";

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>