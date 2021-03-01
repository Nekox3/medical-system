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
	
	
	
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-8"><center><h2>Actualizacion de pacientes</h2></center></div>
		
	</div>
	<div class="row">
	
	<div class="col-md-12">
  <form action="<?php echo base_url()?>Vista_RegistroPac/actualizarPacAdmin" method="POST" >
	<table class="table table-responsive" >
  <tbody>
        <tr>
          <td>Archivo</td>
          <td><?=$archivo->archivo?></td>
         
          <td><input  name="archivo" value="<?=$archivo->archivo?>" type="hidden"/></td>

        </tr>

  	<tr>
      <td>Nombre del paciente: </td><td><input name="nombrePaciente" class="form-control" value="<?=$archivo->nombre_paciente?>" 
        type="text"/></td>
    </tr>

      <tr>
      <td>Apellido del paciente: </td><td><input name="apellidoPaciente" class="form-control" value="<?=$archivo->apellido_paciente?>" type="text"/></td>
    </tr>

      <tr>
      <td>Genero: </td>
       <td>
        <select name="sexo_paciente" class="form form-control">
      <option value="<?=$archivo->estado_familiar?>"><?=$archivo->genero?> </option>
      <option value="Femenimo"> Femenino</option>
      <option value="Masculino"> Masculino</option>
    </select>
      </td>
      
    </tr>

  <tr>
      <td>Edad: </td><td><input class="form form-control" name="edadPaciente" value="<?=$archivo->edad?>" type="text"/></td>
    </tr>

      <tr>
      <td>Direccion: </td><td><input class="form form-control" name="direccionPaciente" value="<?=$archivo->direccion?>" type="text"/></td>
    </tr>

  <tr>
      <td>Peso: </td><td><input class="form form-control" name="pesoPasiente" value="<?=$archivo->peso?>" type="text"/></td>
    </tr>

  <tr>
      <td>Telefono: </td><td><input name="telefonoPaciente" class="form form-control" value="<?=$archivo->telefono?>" type="text"/></td>
    </tr>

  <tr>
      <td>Estado Familiar: </td>
      <td>
        <select name="estado_paciente" class="form form-control">
      <option value="<?=$archivo->estado_familiar?>"> <?=$archivo->estado_familiar?> </option>
      <option value="Soltero"> Soltero</option>
      <option value="Casado"> Casado</option>
      <option value="Viudo"> Viudo</option>
      <option value="Divorciado"> Divorciado</option>
    </select>
      </td>
    </tr>

  <tr>
      <td>Referencia de: </td><td><input name="referencia" value="<?=$archivo->referencia?>" class="form form-control" type="text"/></td>
    </tr>

      <tr>
      <td>Centro asistencial de referencia: </td><td><input name="centroAsisten" value="<?=$archivo->centro_asistencial?>" class="form form-control" type="text"/></td>
    </tr>

    <tr>
     <!-- <a href="<?php //echo base_url()?>Vista_RegistroPac/editar/<?=$archivo->id_pac?>" 
        class="btn btn-success glyphicon glyphicon-eye-open"> Guardar</a>-->
        <input type="hidden" name="id" value="<?=$archivo->id_pac?>"/>  
        
    </tr>

    </tbody>
   
</table>
<div align="center">
<input class="btn btn-warning" type="submit" value="guardar">   
</div>
</form>
	</div>	
	</div>

<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br>
 </div></div></div></div></section></section>
 <?php require 'application/views/layouts/footer.php'; ?>