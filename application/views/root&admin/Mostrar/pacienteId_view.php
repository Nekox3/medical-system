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
               <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-4">
                     <center>
                        <h2>Registro de pacientes</h2>
                     </center>
                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                     <br><br>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <table class="table table-responsive" >
                        <thead>
                           <tr>
                              <th scope="col">Archivo</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Apellido</th>
                              <th scope="col">Genero</th>
                              <th scope="col">Edad</th>
                              <th scope="col">Direccion</th>
                              <th scope="col">Peso</th>
                              <th scope="col">Telefono</th>
                              <th scope="col">Estado Familiar</th>
                              <th scope="col">Referencia</th>
                              <th scope="col">C.A de referencia</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><?=$archivo->archivo?></td>
                              <td><?=$archivo->nombre_paciente?></td>
                              <td><?=$archivo->apellido_paciente?></td>
                              <td><?=$archivo->genero?></td>
                              <td><?=$archivo->edad?></td>
                              <td><?=$archivo->direccion?></td>
                              <td><?=$archivo->peso?></td>
                              <td><?=$archivo->telefono?></td>
                              <td><?=$archivo->estado_familiar?></td>
                              <td><?=$archivo->referencia?></td>
                              <td><?=$archivo->centro_asistencial?></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div align="center">
                  <a class="btn btn-info" href="<?php echo base_url()?>Vista_RegistroPac/Ver_tablaPac">Registro</a>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
<script type="text/javascript" src="assets/js/jsapp.js"></script>
<!--main content end-->
<!--footer start-->
<br>
<?php require 'application/views/layouts/footer.php'; ?>

