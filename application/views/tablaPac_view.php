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
  <div class="col-md-4"><center><h2>Registro de pacientes</h2> </font></center></div>
  <div class="col-md-1"></div>
  <div class="col-md-4">
   

  </div>
</div>
  <div class="row">
    <script type="text/javascript">
   function confirma(){
    if (confirm("¿Desea realmente eliminar el pasiente?")) {
      alert("El registro a sido elminado")
    }else{
      return false;
    }
   }

  </script>
  
  <div class="col-md-12">
                                <table class="table  table-bordered " id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($paciente as $u):?>
 
       
            
 
      
                                        <tr class="odd gradeX">
                                            <td><?=$u->archivo?></font></td>
                                             <td><?=$u->nombre_paciente?></td>
                                             <td><?=$u->apellido_paciente?></td>
                                             <td><?=$u->edad ?></td>
                                                <td class="center"><a onclick="if(confirma() == false) return false" href="<?=base_url()?>usuario/eliminar/<?=$u->id_pac?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>
                                            <td class="center"><a href="<?=base_url()?>usuario/modificar/<?=$u->id_pac?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span></a></td>
 </tr>
                                                


                                        <?php endforeach;?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
           
                <!-- /. ROW  -->

         

       
    <!-- JS Scripts-->
 

    <!-- jQuery Js -->
    <script src="<?php echo base_url(); ?>assets1/js/jquery-1.10.2.js"></script>       
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets1/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets1/js/dataTables/dataTables.bootstrap.js"></script>


<script src="<?php echo base_url(); ?>assets1/js/dataTables/jquery-3.3.1.js"></script>
<script src="<?php echo base_url(); ?>assets1/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets1/js/dataTables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets1/js/dataTables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets1/js/dataTables/buttons.html5.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Custom Js -->
    <script src="<?php //echo base_url(); ?>assets1/js/custom-scripts.js"></script> 
 




