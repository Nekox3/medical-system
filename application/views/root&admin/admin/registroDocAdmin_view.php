<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              

<div class="container container-fluid">
	<br><br><br><br><br><br>
	
	
	<form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_RegistroDoc/insercionDoctorAdmin" method="POST">
		<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-4"><h2>Registro de Doctor</h2></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
<div class="col-md-2">
  		ID
		<br>
		<input type="text" class="form form-control" name="id_Doctor" value="<?= $idDoc ?>"  readonly="readonly">
		<br>
</div>

 	<div class="col-md-3">
  		Nombre
		<br>
		<input type="text" class="form form-control" name="nombreDoctor" placeholder="Nombre del Doctor" required>
		<br>

	</div>
	<div class="col-md-3">
  		Apellido
		<br>
		<input type="text" class="form form-control" name="apellidoDoctor" placeholder="Apellido del Doctor" required>
		<br>

	</div>
</div>

<div class="row">
  <div class="col-md-1"></div>

	<div class="col-md-3">
  		Edad
		<br>
		<input type="number" class="form form-control" name="edadDoctor"   min="0" max="150" required>
		<br>

	</div>

	<div class="col-md-3">
  		Telefono
		<br>
		<input type="tel" class="form form-control" name="telefonoDoctor"placeholder="xxx-xxxx-xxxx"   pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
		<br>

	</div>
</div>


<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-7">
		Direccion
		<br>
		<input type="text" class="form form-control" name="Direccion" placeholder="Direccion" required>
		<br>
	</div>
	
</div>
<div class="row">
	<div class="col-md-1"></div>
 	<div class="col-md-3">
  		Especialidad
		<br>
		<!--Se manda a llamar a desde la bade de datos-->
		<select name="especialidadDoctor" class="form form-control">
			<option>
				<?php
foreach ($arrEspecialidad as $i => $Especialidad)
   echo '<option value="',$i,'">',$Especialidad,'</option>';
?>


			</option>
			
		</select>
		
	</div>
	<div class="col-md-2">
  		Turno
  		<br>
		<select name="turnoDoctor" class="form form-control">
			<option></option>
			<option value="Mañana"> Mañana </option>
			<option value="Tarde"> Tarde</option>
			<option value="Noche"> Noche</option>
		</select>

	</div>	
</div>


<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<div class="col-md-2">
			<br><br>
		<input type="submit" class="btn  btn-theme02" name="btnGuardar" value="Guardar" />
		</div>
		
	</div>
</div>


	</form>
	 </div>
  </div>
</div>
 <div align="center">  <h3><a  class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroDoc/Ver_tablaDocAdmin"> Registro de Doctores  </a> </h3> </div> 
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <br>