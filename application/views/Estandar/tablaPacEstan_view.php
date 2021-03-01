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
	
	
	
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4"><center><h2>Registro de pacientes</h2></center></div>
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<br><br>
		   <!--buscador de paciente-->
      <form action="<?php echo base_url()?>Vista_RegistroPac_Estan/buscarEstan" method="POST">
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
    <script type="text/javascript">
   function confirma(){
    if (confirm("¿Desea realmente eliminar el pasiente?")) {
      alert("El registro a sido elminado")
    }else{
      return false;
    }
   }

  </script>
	
	<div class="col-md-12">
    <?php if (isset($paciente)) {?> 
	<table class="table table-responsive" >
  <thead>
    <tr>
      <th scope="col">Archivo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th> 
      <th scope="col">Peso</th>
      <th scope="col">Referencia</th>
      <th scope="col">Centro Asistencial de referencia</th>
      <th colspan="3">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	 <?php foreach ($paciente as $u):?>

		 <tr>
			 <!--<td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td>-->
			 
       <td><?=$u->archivo?></td>
			 <td><?=$u->nombre_paciente?></td>
			 <td><?=$u->apellido_paciente?></td>
			 <td><?=$u->edad ?></td>
			 <td><?=$u->peso ?></td>
			 <td><?=$u->referencia ?></td>
			 <td><?=$u->centro_asistencial ?></td>
			 <td>		
               <!--redireccion para ver-->
            

            <a href="<?php echo base_url()?>Vista_RegistroPac_Estan/Ver_PacEstan/<?=$u->id_pac?>" class="btn btn-success glyphicon glyphicon-eye-open"> Ver</a>

            <!--<a href="<?php //echo base_url()?>mostrar" value="mostrar/index/<?=$u->id_pac?>"name="ver" class="btn btn-success glyphicon glyphicon-eye-open"> Ver</a>-->
          </td>

           


			 </tr>

  	 	<?php endforeach;?>
    </tbody>
</table>	
<?php } else {?>
      <div>No paciente. fallido.</div>
    <?php }?>
    <div class=" text-center">
    <?php if (isset($links)) { ?>
      <?php echo $links ?>
    <?php }?>  

    </div>
	</div>	
	</div>
<!--/**desde aqui para abajo no se que hace el promgrama :/ **/-->
<!-- Modal ver -->
<form  id="verDatos" >
<div class="modal fade" id="dataVer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Ver info:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          <div class="form-group">
            <label for="codigo" class="control-label">Archivo:</label>
            <input type="text" class="form-control" id="archivo" name="archivo" readonly="">
            <input type="hidden" class="form-control" id="archivo" name="archivo">
			</div>
		  <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" readonly="">
      </div>
          <div class="form-group">
            <label for="nombre" class="control-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" readonly="">
          </div>
          <div class="form-group">
            <label for="nombre" class="control-label">Genero:</label>
            <input type="text" class="form-control" id="genero" name="genero" readonly="">
          </div>
		  <div class="form-group">
            <label for="moneda" class="control-label">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad" required maxlength="3">
          </div>
		  <div class="form-group">
            <label for="capital" class="control-label">Direccion:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required maxlength="30"> 
          </div>
		  <div class="form-group">
            <label for="continente" class="control-label">Peso:</label>
            <input type="text" class="form-control" id="peso" name="peso" required maxlength="15">
          </div>
          <div class="form-group">
            <label for="continente" class="control-label">Telefono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required maxlength="15">
          </div>
          <div class="form-group">
            <label for="continente" class="control-label">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" required maxlength="15">
          </div>
          <div class="form-group">
            <label for="continente" class="control-label">Refencia:</label>
            <input type="text" class="form-control" id="refencia" name="refencia" required maxlength="15">
          </div>
          <div class="form-group">
            <label for="continente" class="control-label">Centro Asistencial de referencia:</label>
            <input type="text" class="form-control" id="centAsi" name="centAsi" required maxlength="15">
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary"></button>
      </div>
    </div>
  </div>
</div>
</form>
<!--/*****/-->

<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br>
   <?php require 'application/views/layouts/footer.php'; ?>
