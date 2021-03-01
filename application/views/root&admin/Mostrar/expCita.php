

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
               <h2>Registro de citas</h2>
               </font>
            </center>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-4"></div>
      </div>
   
      <div class="row">
         <div></div>
         <div class="col-md-12">
            <div align="right">
               <a class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroCit/Ver_tablaCita"> Registro de cita</a>
              
            </div>
            <table class="table  table-bordered " id="dataTables-example">
               <thead>
                  <tr >
                     <th scope="col"> ID</th>
                     <th scope="col">Archivo Paciente</th>
                     <th scope="col">Hora</th>
                     <th scope="col">Fecha</th>
                     <th scope="col">Doctor</th>
                     <th scope="col">Consultorio</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($cita as $ci):?>
                  <tr class="odd gradeX">
                     <td><?=$ci->cod_citas?></td>
                     <td><?=$ci->nombrep?></td>
                     <td><?=$ci->fecha?></td>
                     <td><?=$ci->hora ?></td>
                     <td><?=$ci->nombre ?></td>
                     <td><?=$ci->consultorio?></td>
                  </tr>
                  <?php endforeach;?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <!--End Advanced Tables -->
</div>
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
                title: 'Datos De citas'  
            },
            {
              extend: 'excelHtml5',
              titleAttr: 'Excel',
              title: 'Datos De citas'
            }
            ],
             "searching": false,
            "paging": false,
            "showNEntries" : false
     
    } );


} );
</script>

