

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
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                           <center>
                              <h2>Actualizacion de Citas</h2>
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
                        <form action="<?php echo base_url()?>Vista_RegistroCit/actualizarCit" method="POST" >
                           <table class="table table-responsive" >
                              <tbody>
                                 <tr>
                                    <td>ID</td>
                                    <td><?=$archivo->cod_citas?></td>
                                    <td><input  name="cod_citas" value="<?=$archivo->cod_citas?>"  type="hidden"/></td>
                                 </tr>
                                 <tr>
                                    <td>Archivo Paciente: </td>
                                    <td><input name="archivo_id" value="<?=$archivo->archivo_id?>" 
                                      class="form form-control" type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Hora: </td>
                                    <td><input name="hora" value="<?=$archivo->hora?>" class="form form-control" type="time" max="24:59" 
                                      min="00:00" /></td>
                                 </tr>
                                 <tr>
                                    <td>Fecha: </td>
                                    <td><input class="form form-control" name="fecha" value="<?=$archivo->fecha?>" type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Doctor: </td>
                                    <td>
                                       <select name="doctor_id" class="form form-control">
                                          <?php foreach($doc as $e ):
                                    
                                 if ($archivo->doctor_id == $e->cod_doctor){
                                      
                                   ?>
                                   <option value="<?php echo $e->cod_doctor; ?>" selected><?php echo $e->nombred;?></option>
                                 <?php } else{
                                   
                                   ?>
                                  <option value="<?php echo $e->cod_doctor; ?>" ><?php echo $e->nombred;?></option>
                                 <?php }
                               endforeach; ?>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Consultorio: </td>
                                    <td>
                                       <select name="consultorio_id" class="form form-control">
                                           <?php foreach($con as $c ):
                                    
                                 if ($archivo->consultorio_id == $c->cod_consultorio){
                                      
                                   ?>
                                   <option value="<?php echo $c->cod_consultorio; ?>" selected><?php echo $c->consultorio;?></option>
                                 <?php } else{
                                   
                                   ?>
                                  <option value="<?php echo $c->cod_consultorio; ?>" ><?php echo $c->consultorio;?></option>
                                 <?php }
                               endforeach; ?>

                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <!-- <a href="<?php //echo base_url()?>Vista_RegistroPac/editar/<?=$archivo->id_pac?>" 
                                       class="btn btn-success glyphicon glyphicon-eye-open"> Guardar</a>-->
                                    <input type="hidden" name="id" value="<?=$archivo->id_cit?>"/>  
                                   
                                 </tr>
                              </tbody>
                             
                           </table>

                        
                     </div>
                  </div>
                   <div class="row">
                    
                                 <div class="col-md-9"></div>
                                  <div class="col-md-1">
                         <a href="<?php echo base_url();?>Vista_RegistroCit/Ver_tablaCita" class="btn btn-info">Registro</a>
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

