

<?php require 'application/views/Plantilla/Bootstrap.php'; ?>
<?php require 'application/views/layouts/header.php'; ?>
<?php require 'application/views/layouts/aside.php'; ?>
<section id="main-content">
   <section class="wrapper">
      <div class="row">
         <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
               <div class="container container-fluid">
                  <br><br><br><br><br><br>
                  <form class="alert btn-theme03 top-center" action="<?php echo base_url()?>auth/login">
                     <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                           <center>
                              <h2>Actualizacion de Usuarios</h2>
                           </center>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                           <br><br>
                  <form action="<?php echo base_url()?>Paciente_model/burcar?>" method="POST">
                  <div class="input-group">
                
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <form action="<?php echo base_url()?>Vista_RegistroUsu/actualizarUsu" method="POST" >
                           <table class="table table-responsive" >
                              <tbody>
                                 <tr>
                                    <td>Nombre</td>
                                    <td><input  name="nombreUsu" class="form-control" value="<?=$archivo->nombre?>"  type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Apellido</td>
                                    <td><input name="apellidoUsu" class="form-control" value="<?=$archivo->apellido?>" 
                                       type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Usuario</td>
                                    <td><input name="Usu" class="form-control" value="<?=$archivo->usuarios?>" 
                                       type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Contraseña</td>
                                    <td><input name="contra" class="form-control"  
                                       type="text" required /></td>
                                 </tr>
                                 <tr>
                                    <td>Rol</td>
                                    <td>
                                       <select name="rolUsu" class="form form-control">
                                          <option value="root" selected="<?=$archivo->rol?>"> Super Usuario</option>
                                          <option value="admin" selected="<?=$archivo->rol?>"> Usuario Administrativo</option>
                                          <option value="estan" selected="<?=$archivo->rol?>"> Usuario Estándar</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <!-- <a href="<?php //echo base_url()?>Vista_RegistroPac/editar/<?=$archivo->id_pac?>" 
                                       class="btn btn-success glyphicon glyphicon-eye-open"> Guardar</a>-->
                                    <input type="hidden" name="id" value="<?=$archivo->id_user?>"/>  
                                  
                                 </tr>
                              </tbody>
                           </table>
                    
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-md-9"></div>
                     <div class="col-md-1">
                         <a href="<?php echo base_url();?>Vista_RegistroUsu/Ver_tablaUsu" class="btn btn-info">Registro</a>
                     </div>
                      
                     <div class="col-md-1">
                          <input type="submit" value="guardar" class="btn btn-success">
                     </div>

                  </div>
                 
                  <script type="text/javascript" src="assets/js/jsapp.js"></script>
                  <!--main content end-->
                  <!--footer start-->
                  <br>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
<?php require 'application/views/layouts/footer.php'; ?>

