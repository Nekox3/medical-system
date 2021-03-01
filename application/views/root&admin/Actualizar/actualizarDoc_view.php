

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
                        <div class="col-md-2"></div>
                        <div class="col-md-7">
                           <center>
                              <h2>Actualizacion de Doctores</h2>
                           </center>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-1">
                           <br><br>
                  <form action="<?php echo base_url()?>Paciente_model/burcar?>" method="POST">
                  <div class="input-group">
                 
                  </div>
                  </form>
                  </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <form action="<?php echo base_url()?>Vista_RegistroDoc/actualizarDoc" method="POST" >
                           <table class="table table-responsive" >
                              <tbody>
                                 <tr>
                                    <td>ID Doctor</td>
                                    <td><?=$archivo->cod_doctor?></td>
                                    <td><input  name="id_Doctor" value="<?=$archivo->cod_doctor?>" type="hidden"/></td>
                                 </tr>
                                 <tr>
                                    <td>Nombre: </td>
                                    <td><input name="nombreDoctor" class="form-control" value="<?=$archivo->nombre_doctor?>" 
                                       type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Apellido: </td>
                                    <td><input name="apellidoDoctor"  class="form-control" value="<?=$archivo->apellido_doctor?>" type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Edad: </td>
                                    <td><input class="form form-control" name="edadDoctor" value="<?=$archivo->edad_doctor?>" type="number"/></td>
                                 </tr>
                                 <tr>
                                    <td>Telefono: </td>
                                    <td><input name="telefonoDoctor" class="form form-control" value="<?=$archivo->telefono?>" type="tel"/></td>
                                 </tr>
                                 <tr>
                                    <td>Direccion: </td>
                                    <td><input class="form form-control" name="Direccion" value="<?=$archivo->direccion?>" type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Espepcialidad: </td>
                                    <td>
                                       <select name="especialidadDoctor" class="form form-control">
                                           <?php foreach($esp as $es ):
                                    
                                 if ($archivo->especialidad_id == $es->cod_especialidad){
                                      
                                   ?>
                                   <option value="<?php echo $es->cod_especialidad; ?>" selected><?php echo $es->especialidad;?></option>
                                 <?php } else{
                                   
                                   ?>
                                  <option value="<?php echo $es->cod_especialidad; ?>" ><?php echo $es->especialidad;?></option>
                                 <?php }
                               endforeach; ?>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Turno: </td>
                                    <td>
                                       <select name="turnoDoctor" class="form form-control">
                                          <option value=""> </option>
                                          <option value="Mañana"> Mañana </option>
                                          <option value="Tarde"> Tarde</option>
                                          <option value="Noche" selected> Noche</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <!-- <a href="<?php //echo base_url()?>Vista_RegistroPac/editar/<?=$archivo->id_pac?>" 
                                       class="btn btn-success glyphicon glyphicon-eye-open"> Guardar</a>-->
                                    <input type="hidden" name="id" value="<?=$archivo->id_doctor?>"/>  
                                    
                                 </tr>
                              </tbody>
                           </table>
                        
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-9"></div>
                     <div class="col-md-1">
                  <a href="<?php echo base_url();?>Vista_RegistroDoc/Ver_tablaDoc" class="btn btn-info">Registro</a>
               </div>
               <div class="col-md-1">
                  <input type="submit" class="btn btn-success" value="guardar">
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

