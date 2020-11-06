<?php
class usermodel {
   public $db ;
   public $todos;
   public $id;
   public $name;
   public $query;

   public function __construct(){
   	$this->db =db::conectar();
   	$this->todos=array();
   }


   public function traernus(){
    session_start();
    echo  $_SESSION['nombre'];
   }


   function salir(){
    session_start();
  session_destroy();
  header('Location:index.php');
   }


   function id(){
      return $this->id= $_POST["id"];
   }
   function name(){
      return $this->name=$_POST["Nombre"];
   }

   public function traer_usuarios(){

      try {

  

     $stmt=$this->db->prepare("CALL sp_traer_todos_usuarios();");
      $stmt->execute();

    $i = 0;
     foreach($stmt->fetchAll() as $row) {
      $todos[$i] = $row;      
      $i++;
    }
    
    echo json_encode($todos);   
    
  } catch (Exeption $e) {
    echo json_encode($e->getMessage());
  }

   }


    

   public function editar_usuario()
   {      


    try {
        $Id=$_POST["Id"];

    $stmt=$this->db->prepare("CALL sp_editar_usuario(".$Id.");");
      $stmt->execute();

    $i = 0;
     foreach($stmt->fetchAll() as $row) {
      $todos[$i] = $row;      
      $i++;
    }
    
    echo json_encode($todos);   
    
  } catch (Exeption $e) {
    echo json_encode($e->getMessage());
  }

   }
   

   public function crear_nuevo_usuario(){

      $usuario=$_POST["usuario"];
      $password=$_POST["password"];
      $nombre=$_POST["nombre"];
      $apaterno=$_POST["apaterno"];
      $amaterno=$_POST["amaterno"];
       $nuevo=$this->db->prepare("CALL sp_nuevo_usuario('".$usuario."','".$nombre."','".$apaterno."','".$amaterno."','".$password."');");     
      $result=$nuevo->execute();
      echo json_encode($result);
    }

   public function actualizar_usuario()
   {
   
    
      $usuario=$_POST["usuario"];
      $password=$_POST["password"];
      $nombre=$_POST["nombre"];
      $apaterno=$_POST["apaterno"];
      $amaterno=$_POST["amaterno"];
      $idu=$_POST["idu"];
      
       $nuevo=$this->db->prepare("CALL sp_actualizar_usuario('".$usuario."','".$nombre."','".$apaterno."','".$amaterno."','".$password."','".$idu."');");   
       var_dump($nuevo);  
      $result=$nuevo->execute();
      echo json_encode($result);

   }


   public function eliminar_usuario(){

      $Id=$_POST["Id"];
      $eliminar=$this->db->prepare("CALL sp_eliminar_usuario(".$Id.");");
      $result=$eliminar->execute();
      echo json_encode($result);

    }

    public function vusuario(){


         try {
        $usuario=$_POST["usuario"];

     $validar=$this->db->prepare("CALL sp_validar_usuario('".$usuario."');");
      $validar->execute();

    $i = 0;
     foreach($validar->fetchAll() as $row) {
      $todos[$i] = $row;      
      $i++;
    }
    
    echo json_encode($todos);   
    
  } catch (Exeption $e) {
    echo json_encode($e->getMessage());
  }

    }

    




}