<?php
/* $nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];
*/
$nome ="Maylon" ;
$email = "maylon.rufino@escola.pr.gov.br";
$login = "maylon" ;
$senha = "258";

include ("classeUsuario.php");

$usuario = new Usuario();

$usuario->addusuario($nome, $email, $login, $senha);

print_r($usuario);
?>
