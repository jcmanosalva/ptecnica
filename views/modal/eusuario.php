<div class="modal fade" id="eusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="row">
    <div class="col-md-6 col-sm-12">
     <div class="form-group text-center">
    <label>Usuario</label>
  
    <input type="text" class="form-control" id="edusuario" name="edusuario"  placeholder="Ingrese su usuario" >
  </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="form-group text-center">
          <input type="hidden" class="form-control" id="idu" name="idu">
    <label>Password</label>
    <input type="password" class="form-control" id="edpassword" name="edpassword" placeholder="Ingrese su contraseña" >
  </div>
    </div>
   </div>

     <div class="row">
    <div class="col-md-6 col-sm-12">
     <div class="form-group text-center">
    <label>Nombre</label>
  
    <input type="text" class="form-control" id="ednombre" name="ednombre" placeholder="Ingrese su nombre" >
  </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="form-group text-center">
    <label>Apellido Paterno</label>
    <input type="text" class="form-control" id="edapaterno" name="edapaterno" placeholder="Ingrese su Apellido paterno" >
  </div>
    </div>
   </div>
     <div class="row">
    <div class="col-md-6 col-sm-12">
     <div class="form-group text-center">
    <label>Apellido Materno</label>
  
    <input type="text" class="form-control" id="edamaterno" name="edamaterno" placeholder="Ingrese su Apellido materno" >
  </div>
    </div>
   
   </div>


  <div class="row">
    <div class="col-md-12 col-sm-12 text-center">
     <div class="form-group text-center">

  
    <button class="btn btn-sm btn-primary" onclick="actualizar_usuario()"><i class='fas fa-edit'></i> Editar usuario</button> 
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