<?php
header("Content-Type: application/json");
require_once("config.php");

// require_once ("class/usuario.php");
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);


//Carrega um usuário
// $root = new Usuario();
// $root->loadbyId(2);
// echo $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//Carrega usuário usando login e a senha 
$usuario = new Usuario();
$usuario->login("fernando", "fa13sa11");

echo $usuario;

?>