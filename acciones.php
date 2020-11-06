<?php

include("db/db.php");
include("models/usermodel.php");
include("models/loginmodel.php");
$user= new usermodel();
$logi= new loginmodel();
$acc=$_GET['accion'];
if ($acc=="traer_usuarios") {
    $user->traer_usuarios();
}    
 else if ($acc =="editar_usuario") {
    $user->editar_usuario();
}
else if ($acc =="nusuario") {
	$user->crear_nuevo_usuario();
}
else if($acc =="actualizar_usuario"){
	$user->actualizar_usuario();
}
else if($acc=="eliminar_usuarios")
{
	$user->eliminar_usuario();
}
else if($acc=="vusuario")
{
	$user->vusuario();
}
else if($acc=="traernus")
{
	$user->traernus();
}
else if($acc=="salir")
{
	$user->salir();
}
else if($acc=="logeo")
{
	$logi->logearse();
}



