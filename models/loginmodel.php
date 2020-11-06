<?php
class loginmodel {
   public $db ;
   public $todos;
   public $id;
   public $name;
   public $query;

   public function __construct(){
   	$this->db =db::conectar();
   	$this->todos=array();
   }


   
   public function logearse(){
   
  session_start();


        try {

    $usuario = $_POST['usuario'];
  $contrasena = $_POST['password'];

     $stmt=$this->db->prepare("CALL sp_consultar_usuario('".$usuario."','". $contrasena."');");
      $stmt->execute();
    $todos = array();
   
 
  $datos = $stmt->fetch(PDO::FETCH_OBJ);


  if ($datos === FALSE) {
    echo("falso");
  }elseif($stmt->rowCount() == 1){
    $_SESSION['nombre'] = $datos->usuario;
 
 

  }     
  } catch (Exeption $e) {
    echo json_encode($e->getMessage());
  }
   }









    




}