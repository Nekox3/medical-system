

<section id="main-content">
   <section class="wrapper">
      <div class="row">
      <div class="col-lg-12 main-chart">
      <!--CUSTOM CHART START -->
      <div class="border-head">
         <div class="container container-fluid">
            <br><br><br><br><br><br>
            <form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_RegistroEsp/insercionEsp" method="POST">
               <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                     <center>
                        <h2>Registro de Especialidad</h2>
                     </center>
                     <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                     <?php if($mensajeInser): ?>
                     <div class="alert alert-success">
                        <p><?=$mensajeInser?></p>
                     </div>
                     <?php endif;?>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3"></div>
                  <div class="row">
                     <div class="col-md-3">
                        Identificador de especialidad
                        <br>
                        <input type="text" class="form form-control" name="cod_Especialidad"  value="<?= $idEsp ?>" readonly="readonly" >
                        <br>
                     </div>
                     <div class="col-md-3">
                        Especialidad
                        <br>
                        <input type="text" class="form form-control" name="especialidad" value="<?php echo set_value('especialidad') ?>">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-3"></div>
                     <div class="col-md-3">
                        <input type="submit" class="btn  btn-theme02" name="btnGuardar" value="Guardar" />
                     </div>

                     <div class="col-md-2">
                        <a onclick="if(confirma2()== false) return false" class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroEsp/Ver_tablaEsp"> Registros de especialidades  </a>
                     </div>
                  </div>
            </form>
            </div>
         </div>
      </div>
      
   </section>
</section>
<!--main content end-->
<!--footer start-->
<br>

