<?php require 'application/views/Plantilla/Bootstrap.php'; ?>
<?php require 'application/views/layouts/header.php'; ?>
<?php require 'application/views/layouts/asideAdmin.php'; ?>


 

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
<div class="container container-fluid">

  
  
  
  <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-8"><center><h2>Registro de especialidades de doctores</h2> </font></center></div>
  <div class="col-md-1"></div>
  </div>
  <div class="row">
   
  
  <div class="col-md-12">
    <div align="right"> <h2><a class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroEsp/"> Registrar Nueva especialidad</a> </h2>  </div>
    
                                <table class="table  table-bordered " id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th scope="col">Identificador de Especialidad</th>
                                            <th scope="col">Especialidad</th>
                                                                                                                
                                            <th>Actualizar</th>
                                             <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($especialidad as $e):?>
 
       
            
 
      
                                        <tr class="odd gradeX">
                                              <td><?=$e->cod_especialidad?></td>
                                              <td><?=$e->especialidad?></td>
                                              <td class="center">
                                                <a onclick="if(confirma1()== false) return false" href="<?php echo base_url()?>Vista_RegistroEsp/actualizarEA/<?=$e->id_esp?>" class="btn btn-success glyphicon glyphicon-edit"> </a>
                                              </td>
                                              <td class="center">
                                                <a  onclick="if(confirma()== false) return false"  href="<?php echo base_url()?>Vista_RegistroEsp/eliminarEspAdmin/<?=$e->id_esp?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>
                                              

                                            
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
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Custom Js -->
   
 





