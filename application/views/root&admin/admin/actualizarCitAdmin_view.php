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
	<br><br><br><br><br><br>
	
	
	<form class="alert btn-theme03 top-center" action="<?php echo base_url()?>auth/login">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4"><center><h2>Actualizacion de Citas</h2></center></div>
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
  <form action="<?php echo base_url()?>Vista_RegistroCit/actualizarCitAdmin" method="POST" >
	<table class="table table-responsive" >
  <tbody>
        <tr>
          <td>ID</td>
          <td><?=$archivo->cod_citas?></td>
         
          <td><input  name="cod_citas" value="<?=$archivo->cod_citas?>" type="hidden"/></td>

        </tr>

  	<tr>
      <td>Archivo Paciente: </td><td><input name="archivo_id" class="form-control" value="<?=$archivo->archivo_id?>" 
        type="text"/></td>
    </tr>

      <tr>
      <td>Hora: </td><td><input name="hora" class="form-control" value="<?=$archivo->hora?>" type="text"/></td>
    </tr>

<tr>
      <td>Fecha: </td><td><input class="form form-control" name="fecha" value="<?=$archivo->fecha?>" type="text"/></td>
    </tr>

      <tr>
      <td>Doctor: </td>
       <td>
        <select name="doctor_id" class="form form-control">
      <option value="<?=$archivo->doctor_id?>"> <?=$archivo->doctor_id?></option>
      
    </select>
      </td>
      
    </tr>


  <tr>
      <td>Consultorio: </td>
      <td>
        <select name="consultorio_id" class="form form-control">
      <option value="<?=$archivo->consultorio_id?>"> <?=$archivo->consultorio_id?></option>
 
    </select>
      </td>
    </tr>

     
    <tr>
     <!-- <a href="<?php //echo base_url()?>Vista_RegistroPac/editar/<?=$archivo->id_pac?>" 
        class="btn btn-success glyphicon glyphicon-eye-open"> Guardar</a>-->
        <input type="hidden" name="id" value="<?=$archivo->id_cit?>"/>  
        <input type="submit" value="guardar">
    </tr>

    </tbody>
   
</table>	
</form>
	</div>	
	</div>
<a href="<?php echo base_url();?>Vista_RegistroCit/Ver_tablaCitaAdmin">⤷&nbsp;Registro</a>

<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br>
 </form></div></div></div></div></section></section>
 <?php require 'application/views/layouts/footer.php'; ?>