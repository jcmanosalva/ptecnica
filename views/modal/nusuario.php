<div class="modal fade" id="nusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="row">
    <div class="col-md-6 col-sm-12">
     <div class="form-group text-center">
    <label>Usuario</label>
  
    <input type="text" class="form-control tonew" id="usuario" name="usuario" placeholder="Ingrese su usuario" >
  </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="form-group text-center">
    <label>Password</label>
    <input type="password" class="form-control tonew" id="password" name="password" placeholder="Ingrese su contraseña" >
  </div>
    </div>
   </div>

     <div class="row">
    <div class="col-md-6 col-sm-12">
     <div class="form-group text-center">
    <label>Nombre</label>
  
    <input type="text" class="form-control soloLetras tonew" id="nombre" name="nombre"  placeholder="Ingrese su nombre" >
  </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="form-group text-center">
    <label>Apellido Paterno</label>
    <input type="text" class="form-control soloLetras tonew" id="apaterno" name="apaterno" placeholder="Ingrese su Apellido paterno" >
  </div>
    </div>
   </div>
     <div class="row">
    <div class="col-md-6 col-sm-12">
     <div class="form-group text-center">
    <label>Apellido Materno</label>
  
    <input type="text" class="form-control soloLetras tonew" id="amaterno" name="amaterno" placeholder="Ingrese su Apellido materno" >
  </div>
    </div>
   
   </div>


  <div class="row">
    <div class="col-md-12 col-sm-12 text-center">
     <div class="form-group text-center">

  
    <button class="btn btn-sm btn-primary" onclick="nuevo_usuario()"><i class="fas fa-save"></i> Crear usuario</button> 
  </div>
    </div>
   
   </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     
      </div>
    </div>
  </div>
</div>