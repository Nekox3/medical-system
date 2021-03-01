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
	<div class="col-md-4"><center><h2>Actualizacion de Doctores</h2></center></div>
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
  <form action="<?php echo base_url()?>Vista_RegistroDoc/actualizarDocAdmin" method="POST" >
	<table class="table table-responsive" >
  <tbody>
        <tr>
          <td>ID Doctor</td>
          <td><?=$archivo->cod_doctor?></td>
         
          <td><input  name="id_Doctor" value="<?=$archivo->cod_doctor?>" type="hidden"/></td>

        </tr>

  	<tr>
      <td>Nombre: </td><td><input name="nombreDoctor" class="form-control" value="<?=$archivo->nombre_doctor?>" 
        type="text"/></td>
    </tr>

      <tr>
      <td>Apellido: </td><td><input name="apellidoDoctor" class="form-control" value="<?=$archivo->apellido_doctor?>" type="text"/></td>
    </tr>

     

  <tr>
      <td>Edad: </td><td><input class="form form-control" name="edadDoctor" value="<?=$archivo->edad_doctor?>" type="number"/></td>
    </tr>

     <tr>
      <td>Telefono: </td><td><input name="telefonoDoctor" class="form form-control" value="<?=$archivo->telefono?>" type="tel"/></td>
    </tr>

      <tr>
      <td>Direccion: </td><td><input class="form form-control" name="Direccion" value="<?=$archivo->direccion?>" type="text"/></td>
    </tr>

 <tr>
      <td>Espepcialidad: </td>
       <td>
        <select name="especialidadDoctor" class="form form-control">
      <option value="<?=$archivo->especialidad_id?>"><?=$archivo->especialidad_id?>
      <option>
  
    </select>
      </td>
      
    </tr>

    <tr>
      <td>Turno: </td>
       <td>
        <select name="turnoDoctor" class="form form-control">
      <option value="<?=$archivo->turno?>"><?=$archivo->turno?> </option>
      <option value="Mañana"> Mañana </option>
      <option value="Tarde"> Tarde</option>
      <option value="Noche"> Noche</option>
    </select>
      </td>
      
    </tr>

    <tr>
     <!-- <a href="<?php //echo base_url()?>Vista_RegistroPac/editar/<?=$archivo->id_pac?>" 
        class="btn btn-success glyphicon glyphicon-eye-open"> Guardar</a>-->
        <input type="hidden" name="id" value="<?=$archivo->id_doctor?>"/>  
        
    </tr>

    </tbody>
    
</table>	
<div align="center">
<input class=" btn btn-success" type="submit" value="guardar">  
</div>

</form>
	</div>	
	</div>


<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br>
 </form></div></div></div></div></section></section>
 <?php require 'application/views/layouts/footer.php'; ?>