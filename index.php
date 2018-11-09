<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root -> loadById(3);
//echo $root;

//Carrega uma lista
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login

//$search = Usuario :: search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;

?>