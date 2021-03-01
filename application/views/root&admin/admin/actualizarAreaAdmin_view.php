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
	<div class="col-md-4"><center><h2>Actualizacion de Areas</h2></center></div>
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
  <form action="<?php echo base_url()?>Vista_RegistroArea/actualizarAreaAdmin" method="POST" >
	<table class="table table-responsive" >
  <tbody>
        <tr>
          <td>Identificador de Area</td>
          <td><?=$archivo->cod_area?></td>
         
          <td><input  name="cod_area" value="<?=$archivo->cod_area?>" type="hidden"/></td>

        </tr>

  	<tr>
      <td>Area: </td><td><input name="area" class="form-control" value="<?=$archivo->area?>" 
        type="text"/></td>
    </tr>

      
    <tr>
     <!-- <a href="<?php //echo base_url()?>Vista_RegistroPac/editar/<?=$archivo->id_pac?>" 
        class="btn btn-success glyphicon glyphicon-eye-open"> Guardar</a>-->
        <input type="hidden" name="id" value="<?=$archivo->id_area?>"/>  
        <input type="submit" value="guardar">
    </tr>

    </tbody>
   
</table>	
</form>
	</div>	
	</div>
<a href="<?php echo base_url();?>Vista_RegistroArea/Ver_tablaAreaAdmin">⤷&nbsp;Registro</a>

<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br>
 </form></div></div></div></div></section></section>
 <?php require 'application/views/layouts/footer.php'; ?>