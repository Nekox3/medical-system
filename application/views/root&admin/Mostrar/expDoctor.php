

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
               <h2>Exportación de Registro de Doctores</h2>
               </font>
            </center>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-4"> </div>
      </div>
        <div class="row">
         <div class="col-md-12">
            <div align="right">
               <h2><a class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroDoc/Ver_tablaDoc"> Registro de doctor</a> </h2>
            </div>
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
                  
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($doct as $d):?>
                  <tr class="odd gradeX">
                     <td><?=$d->cod_doctor?></td>
                     <td><?=$d->nombre_doctor?></td>
                     <td><?=$d->apellido_doctor?></td>
                     <td><?=$d->edad_doctor ?></td>
                     <td><?=$d->especialidad ?></td>
                     <td><?=$d->turno?></td>
                     <td><?=$d->telefono ?></td>
                     <td><?=$d->direccion ?></td>
                     
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
                title: 'Datos De Doctor'
            },
            {
              extend: 'excelHtml5',
              titleAttr: 'Excel',
              title: 'Datos De Doctor'
            }
            ],
             "searching": false,
            "paging": false,
            "showNEntries" : false
     
    } );


} );
</script>

