

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
                  <div class="row">
                     <div class="col-md-1"></div>
                     <div class="col-md-4">
                        <center>
                           <h2>Registro de Areas</h2>
                        </center>
                     </div>
                     <div class="col-md-1"></div>
                     <div class="col-md-4"></div>
                  </div>
                  <div class="row">
                     <?php if($mensaje): ?>
                     <div class="alert alert-danger">
                        <p><?=$mensaje ?></p>
                     </div>
                     <?php endif;?>
                  </div>
                  <div class="row">
                     <?php if($mensajeAct): ?>
                     <div class="alert alert-success">
                        <p><?=$mensajeAct ?></p>
                     </div>
                     <?php endif;?>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div align="right">
                           <h2><a class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroArea"> Registrar Nuevas Areas</a> </h2>
                        </div>
                        <table class="table  table-bordered " id="dataTables-example">
                           <thead>
                              <tr >
                                 <th scope="col">Identificador de Area </th>
                                 <th scope="col">Area</th>
                                 <th>Actualizar</th>
                                 <th>Eliminar</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($area as $a):?>
                              <tr class="odd gradeX">
                                 <td><?=$a->cod_area?></td>
                                 <td><?=$a->area?></td>
                                 <td class="center">
                                    <a onclick="if(confirma1()== false) return false" href="<?php echo base_url()?>Vista_RegistroArea/actualizar/<?=$a->id_area?>" class="btn btn-warning glyphicon glyphicon-edit"> </a>
                                 </td>
                                 <td class="center">
                                    <a  onclick="if(confirma()== false) return false"  href="<?php echo base_url()?>Vista_RegistroArea/eliminarArea/<?=$a->id_area?>/<?=$a->cod_area?>" class="btn btn-danger glyphicon glyphicon-trash"></a>
                                 </td>
                              </tr>
                              <?php endforeach;?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!--End Advanced Tables -->
            </div>
         </div>
      </div>
   </section>
</section>
<!-- /. ROW  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="<?php echo base_url(); ?>assets1/js/jquery-1.10.2.js"></script>       
<!-- DATA TABLE SCRIPTS -->
<script src="<?php echo base_url(); ?>assets1/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets1/js/dataTables/dataTables.bootstrap.js"></script>
<script>
   $(document).ready(function () {
       $('#dataTables-example').dataTable();
   });
</script>
<!-- Custom Js -->

