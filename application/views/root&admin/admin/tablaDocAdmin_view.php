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
  <div class="col-md-4"><center><h2>Registro de Doctores</h2> </font></center></div>
  <div class="col-md-1"></div>
  <div class="col-md-4">
  

  </div>
</div>
  <div class="row">
    
  
  <div class="col-md-12">
    <div align="right"> <h2><a class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroDoc"> Registrar Nuevo doctor</a> </h2>  </div>
    
                                <table class="table  table-bordered " id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th scope="col">ID Doctor</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Edad</th> 
                                            <th scope="col">Especialidad</th>
                                            <th scope="col">Turno</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Direccion</th>
                                                                                                                
                                            <th>Actualizar</th>
                                             <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($doctor as $d):?>
 
       
            
 
      
                                        <tr class="odd gradeX">
                                              <td><?=$d->cod_doctor?></td>
                                               <td><?=$d->nombre_doctor?></td>
                                               <td><?=$d->apellido_doctor?></td>
                                               <td><?=$d->edad_doctor ?></td>
                                               <td><?=$d->especialidad_id ?></td>
                                               <td><?=$d->turno?></td>
                                               <td><?=$d->telefono ?></td>
                                               <td><?=$d->direccion ?></td>
                                              <td class="center">
                                                <a onclick="if(confirma1()== false) return false" href="<?php echo base_url()?>Vista_RegistroDoc/actualizarD/<?=$d->id_doctor?>" class="btn btn-success glyphicon glyphicon-edit"> </a>
                                              </td>
                                              <td class="center">
                                                <a  onclick="if(confirma()== false) return false"  href="<?php echo base_url()?>Vista_RegistroDoc/eliminarDocAdmin/<?=$d->id_doctor?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>
                                              

                                            
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
   
 





