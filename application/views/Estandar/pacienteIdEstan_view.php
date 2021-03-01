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
	<br><br><br><br><br><br>
	
	
	<form class="alert btn-theme03 top-center" action="<?php echo base_url()?>auth/login">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4"><center><h2>Registro de pacientes</h2></center></div>
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<br><br>
		<form action="<?php echo base_url()?>Paciente_model/burcar?>" method="POST">
		<div class="input-group">
		<input type="text" class="form form-control" name="buscador"  id="buscador">
		<span class="input-group-btn">
		<button class="btn btn-default" type="submit" name="b" id="b" ><span class="glyphicon glyphicon-search"></span></button></span>	
		</div>
		</form>
	</div>
	</div>
	<div class="row">
	
	<div class="col-md-12">
	<table class="table table-responsive" >
  <thead>
    <tr>
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
  	

		 <tr>
			 
       
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


        

			 </tr>

  	 
    </tbody>
   
</table>	

	</div>	
	</div>
</form>
</div>
</div>
</div>
</div>
</section>
</section>

<a href="<?php echo base_url();?>Vista_RegistroPac/Ver_tablaPac">⤷&nbsp;Registro</a>

<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br>
   <?php require 'application/views/layouts/footer.php'; ?>