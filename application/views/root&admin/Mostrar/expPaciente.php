

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
               <h2>Exportación de Registro de Pacientes</h2>
               </font>
            </center>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-4">
         </div>
      </div>
      <div class="row">
            <div class="row">
         <div class="col-md-12">
            <div align="right">
               <a class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroPac/Ver_tablaPac"> Registro de Paciente</a> 
            </div>
            <div align="right"> <h2> </h2></div>
            
            <table class="table  table-bordered " id="dataTables-example">
               <thead>
                  <tr >
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
                              <th scope="col">Centro Asistencial de referencia</th>
                     
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($paciente as $archivo):?>
                  <tr class="odd gradeX">
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
                  <?php endforeach;?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
   </div>
   <!--End Advanced Tables -->
</div>
<!-- /. ROW  -->
<!-- JS Scripts-->
<!-- jQuery Js 
<script src="<?php //echo base_url(); ?>assets1/js/jquery-1.10.2.js"></script>    -->   
<!-- DATA TABLE SCRIPTS 
<script src="<?php// echo base_url(); ?>assets1/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php //echo base_url(); ?>assets1/js/dataTables/dataTables.bootstrap.js"></script>-->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<link href="<?php echo base_url()?>assets1/css/buttons.dataTables.min.css" rel="stylesheet">

<script>

  $(document).ready(function() {
    $('#dataTables-example').DataTable({
           
     dom: 'Bfrtip',
      buttons: [
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                title: 'Datos de pacientes'
            },
            {
              extend: 'excelHtml5',
              titleAttr: 'Excel',
              title: 'Datos de pacientes'
            }
            ],
             "searching": false,
            "paging": false,
            "showNEntries" : false
     
    } );


} );
</script>