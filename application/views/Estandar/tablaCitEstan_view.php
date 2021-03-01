<?php require 'application/views/Plantilla/Bootstrap.php'; ?>
<?php require 'application/views/layouts/header.php'; ?>
<?php require 'application/views/layouts/asideEstan.php'; ?>


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
		  <form action="<?php echo base_url()?>Vista_RegistroCit/buscar" method="POST">
    <div class="input-group">
    <input type="text" class="form-control input-sm" class="form form-control" name="buscador"  id="buscador">
    <span class="input-group-btn">
    <button class="btn btn-default" type="submit" name="b" id="b" ><span class="glyphicon glyphicon-search"></span></button></span> 
    </div>
    </form>

	</div>
</div>
	<div class="row">
    <script type="text/javascript">
   function confirma(){
    if (confirm("¿Desea realmente eliminar la cita?")) {
      alert("El registro a sido elminado")
    }else{
      return false;
    }
   }

  </script>
	
	<div class="col-md-12">
    <!--<?php #if (isset($paciente)) {?>-->
	<table class="table table-responsive " >
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
