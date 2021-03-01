

<section id="main-content">
   <section class="wrapper">
      <div class="row">
         <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
               <div class="container container-fluid">
                  <br><br><br><br><br><br>
                  <form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_RegistroCon/insercionConsultorio" method="POST">
                     <div class="row">
                        <div  class="col-md-3"></div>
                        <div class="col-md-4">
                           <center>
                              <h2>Registro de Consultorios</h2>
                           </center>
                        </div>
                     </div>
                     <div class="row">
                        <?php  echo validation_errors('<div align="center" class="alert alert-danger">','</div>'); ?>
                        <?php if($mensajeInser): ?>
                        <div class="alert alert-success">
                           <p><?=$mensajeInser?></p>
                        </div>
                        <?php endif;?>
                     </div>
                     <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                           Identificador de Consultorio
                           <br>
                           <input type="text" class="form form-control" name="idConsultorio" value="<?= $idCon ?>" readonly="readonly" >
                           <br>
                        </div>
                        <div class="col-md-3">
                           Consultorio
                           <br>
                           <input type="text" class="form form-control" name="numConsultorio" placeholder=" digite el número de Consultorio" value="<?php echo set_value('numConsultorio') ?>" >
                           <br>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                           Areas
                           <br>
                           <select  name="areas" class="form form-control">
                              <?php foreach($area as $ar ):?>
<option value="<?php echo $ar->cod_area ?>" ><?php echo $ar->area;?></option>
                                 <?php 
                               endforeach; ?>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                           <br><br>
                           <input type="submit" class="btn  btn-theme02" name="btnGuardar" value="Guardar" />
                        </div>
                        <div class="col-md-1">
                           <br><br>
                           <a onclick="if(confirma2()== false) return false" class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroCon/Ver_tablaCon"> Registros de conslutorios </a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div align="center">
            <h3> </h3>
         </div>
   </section>
</section>
<!--main content end-->
<!--footer start-->
<br>
</div></section></section>

