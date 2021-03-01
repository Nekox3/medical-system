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
	<div class="col-md-4"><center><h2>Registro de Citas</h2> </font></center></div>
	<div class="col-md-1"></div>
	<div class="col-md-4">
     <!--buscador de paciente-->
      <form action="<?php echo base_url()?>Vista_RegistroCita/buscarCita" method="POST">
    <div class="input-group">
    <input type="text" class="form-control input-sm" class="form form-control" name="buscador"  id="buscador">
    <span class="input-group-btn">
    <button class="btn btn-default" type="submit" name="b" id="b" ><span class="glyphicon glyphicon-search"></span></button></span> 
    </div>
    </form>
<!--fin/buscador-->

	</div>
</div>
	<div class="row">
  
	
	<div class="col-md-12">
    <!--<?php #if (isset($paciente)) {?>-->
	<table class="table table " >
  <thead>
    <tr>
      <th scope="col"> ID</font></th>
      <th scope="col">Archivo Paciente</font></th>
      <th scope="col">Hora</font></th>
      <th scope="col">Fecha</font></th> 
      <th scope="col">Doctor</font></th>
      <th scope="col">Consultorio</font></th>
      <th colspan="3"></th>
    </tr>
  </thead>
  <tbody>
  	 <?php foreach ($cita as $ci):?>

		 <tr>
			 <!--<td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td>-->
			 
       <td><?=$ci->cod_citas?></font></td>
			 <td><?=$ci->archivo_id?></font></td>
			 <td><?=$ci->fecha?></font></td>
			 <td><?=$ci->hora ?></font></td>
			 <td><?=$ci->doctor_id ?></font></td>
			 <td><?=$ci->consultorio_id ?></font></td>
			 

           <td>   
               <!--redireccion para eliminar-->
                 <a  onclick="if(confirma()== false) return false"  href="<?php echo base_url()?>Vista_RegistroCit/eliminarCitAdmin/<?=$ci->id_cit?>" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a>
          </td>

         
			<!--redireccion de actualizar-->
           <td>    
                 <a href="<?php echo base_url()?>Vista_RegistroCit/actualizarCi/<?=$ci->id_cit?>" class="btn btn-success glyphicon glyphicon-edit"> Actualizar</a>
          </td>



			 </tr>

  	 	<?php endforeach;?>
    </tbody>
</table>	






    </div>
    






	</div>	
	</div>

<div>
	
	
</div>

<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br><br>
   <?php require 'application/views/layouts/footer.php'; ?>
