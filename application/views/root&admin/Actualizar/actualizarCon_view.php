

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
                        <div class="col-md-5">
                           <center>
                              <h2>Actualizacion de Consultorios</h2>
                           </center>
                        </div>
                        <div class="col-md-1"></div>
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
                        <form action="<?php echo base_url()?>Vista_RegistroCon/actualizarCon" method="POST" >
                           <table class="table table-responsive" >
                              <tbody>
                                 <tr>
                                    <td>Identificador de Consultorio</td>
                                    <td><?=$archivo->cod_consultorio?></td>
                                    <td><input  name="cod_consultorio" value="<?=$archivo->cod_consultorio?>" type="hidden"/></td>
                                 </tr>
                                 <tr>
                                    <td>Consultorio: </td>
                                    <td><input name="consultorio" class="form-control" value="<?=$archivo->consultorio?>" 
                                       type="text"/></td>
                                 </tr>
                                 <tr>
                                    <td>Areas: </td>
                                    <td>
                                       <select name="areas" class="form form-control">
                                        <?php foreach($area as $ar ):
                                    
                                 if ($archivo->area_id == $ar->cod_area){
                                      
                                   ?>
                                   <option value="<?php echo $ar->cod_area; ?>" selected><?php echo $ar->area;?></option>
                                 <?php } else{
                                   
                                   ?>
                                  <option value="<?php echo $ar->cod_area ?>" ><?php echo $ar->area;?></option>
                                 <?php }
                               endforeach; ?>
                                       </option>
                                    </td>
                                 </tr>
                                 <tr>
                                    <input type="hidden" name="id" value="<?=$archivo->id_con?>"/>  
                                    
                                 </tr>
                              </tbody>
                           </table>
                        
                     </div>
                  </div>
                  <div class="row">
                  <div class="col-md-9"></div>
                  <div class="col-md-1">
                  <a href="<?php echo base_url();?>Vista_RegistroCon/Ver_tablaCon" class="btn btn-info">Registro</a>
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

