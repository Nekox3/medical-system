<?php require 'application/views/Plantilla/Bootstrap.php'; ?>
<?php require 'application/views/layouts/header.php'; ?>
<!--direccion del aside-->
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
  <div class="col-md-4"><center><h2>Registro de Pacientes</h2> </font></center></div>
  <div class="col-md-1"></div>
  <div class="col-md-4">
  

  </div>
</div>
  <div class="row">
    
  
  <div class="col-md-12">
    <div align="right"> <h2><a class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroPac"> Registrar Nuevo Paciente</a> </h2>  </div>
    
                                <table class="table  table-bordered " id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th> Archivo</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Edad</th> 
                                            <th>Peso</th>
                                            <th>Referencia</th>
                                            <th>Centro Asistencial de referencia</th>
                                            
                                            <th>Ver</th>
                                           
                                            <th>Actualizar</th>
                                             <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($paciente as $u):?>
 
       
            
 
      
                                        <tr class="odd gradeX">
                                              <td class="center"><?=$u->archivo?></font></td>
                                               <td class="center"><?=$u->nombre_paciente?></td>
                                               <td class="center"><?=$u->apellido_paciente?></td>
                                               <td class="center"><?=$u->edad ?></td>
                                               <td class="center"><?=$u->peso ?></td>
                                               <td class="center"><?=$u->referencia ?></td>
                                               <td class="center"><?=$u->centro_asistencial ?></td>
                                              <td class="center">
                                                <a href="<?php echo base_url()?>Vista_RegistroPac/Ver_PacAdmin/<?=$u->id_pac?>" class="btn btn-success glyphicon glyphicon-eye-open"> </a>
                                              </td>
                                              <td class="center"><a  onclick="if(confirma1()== false) return false" href="<?php echo base_url()?>Vista_RegistroPac/actualizarPA/<?=$u->id_pac?>" class="btn btn-warning glyphicon glyphicon-edit"></a></td>
                                              <td class="center"><a  onclick="if(confirma()== false) return false"  href="<?php echo base_url()?>Vista_RegistroPac/eliminarPacAdmin/<?=$u->id_pac?>/<?=$u->archivo?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>

                                            
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
   
 





