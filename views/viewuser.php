<?php
session_start();
   if (!isset($_SESSION['nombre'])) {
      header('Location: index.php');
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Prueba técnica</title>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
      <script defer src="js/fontawesome.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link href="js/pnotify-master/devnote.css" rel="stylesheet" />
      <link href="js/pnotify-master/includes/style.css" rel="stylesheet" />
      <script src="js/pnotify-master/lib/iife/PNotify.js"></script>
      <link rel="stylesheet" href="js/pnotify-master/lib/iife/PNotifyBrightTheme.css" />
      <script src="js/solo_letras.js"></script>

   </head>
   <style type="text/css">
   </style>
   <body>
      <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar" >
         <div class="sidebar-header">
            <img src="img/logo_big.png" class="top7" width="250px">
         </div>
         <div class="row">
          <div class="col-md-12 text-center">
           <div class="col-md-12 text-center">
                   <img src="img/usuario.png" class="card-img-top" width="130px" style="border-radius:150px;border:5px solid #FFF;margin-top: 15px ;width: 130px">
                   <p name="bus"></p>
                   
                 </div>
          </div> 
         </div>
          
     

       
         <a href="" onclick="out()"> <i class="fas fa-sign-out-alt"></i> Cerrar sesión </a> 
         <ul class="list-unstyled components">
            <li class="mtop20" >
               <i class="fas fa-user"></i> Usuarios
            </li>
         </ul>
       
      </nav>
      <div id="content"  >
      <nav class="container box bwhite" >
         <h2>Mantenedor de Usuarios</h2>
      </nav>
      <div class="container box">
         <!-- <a class="btn btn-primary pull-right" href="index.php?action=salir">Cerrar Sesión</a> -->
         <div class="row">
            <div class="col-md-6">
               <h3 class="h3s">Listado de usuarios</h3>
            </div>
            <div class="col-md-6">
               <button class="btn btn-success btn-sm derecha"  onclick="Abrirmodalnusuario();"> <i class="fas fa-plus"></i> Nuevo Usuario</button>
            </div>
         </div>
         <table class="table text-center table-hover table-responsive-sm" id="datatable_usuarios"    
            >
            <thead >
               <tr>
                  <th class="fondotablas text-center">Usuario</th>
                  <th class="fondotablas text-center">Nombre</th>
                  <th class="fondotablas text-center">Apellido Paterno</th>
                  <th class="fondotablas text-center">Apellido Materno</th>
                  <th class="fondotablas text-center">Acciones</th>
                
               </tr>
            </thead>
            <tbody class="usuarios">
            </tbody>
         </table>
      </div>

      <script   src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/datatable.min.js"></script>
      <?php include("modal/nusuario.php") ?>
      <?php include("modal/eusuario.php") ?>
      <script type="text/javascript" src="js/mantenedor.js"></script>

   </body>
</html>