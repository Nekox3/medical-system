
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
<div class="container container-fluid">
	<br><br><br><br><br><br>
	
	
	<form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_RegistroCit/insercionCit" method="POST">
		<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-4"><center><h2>Registro de Citas</h2></center></div>
</div>
<div class="row">
  	<div class="col-md-3"></div>
	<div class="col-md-2">
  		ID
		<br>
		<input type="text" class="form form-control" name="id_Cita"  value="<?= $idCit ?>" readonly="readonly">
		<br>
	</div>
	<div class="col-md-2">
  		Archivo
		<br>
		<input type="text" class="form form-control" name="archivo" placeholder="archivo"  >
		<br>

	</div>
	</div>

	<div class="row">
	<div class="col-md-3"></div>
 	<div class="col-md-2">
  		Hora
		<br>
		<input type="time" class="form form-control"   name="hora"  max="24:59" min="00:00"  >
		<br>

	</div>
	<div class="col-md-2">
  		Fecha
		<br>
		<input type="date" class="form form-control" name="fecha"  required>
		<br>

	</div>
	</div>

	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-2">
  		Doctor
		<br>
		<select class="form form-control" name="doctor">
			<option></option>
			<?php
foreach ($arrDoctor as $i => $Doctor)
   echo '<option value="',$i,'">',$Doctor,'</option>';
?>

		</select>
		<br>

	</div>
	<div class="col-md-2">
  		Consultorio
		<br>
		<select class="form form-control" name="consul">
			<option></option>
			<?php
foreach ($arrConsultorio as $i => $Consultorio)
   echo '<option value="',$i,'">',$Consultorio,'</option>';
?>
		</select>
		<br>

	</div>	
	</div>
	<div class="row">
	<div class="col-md-3"></div>
	
		<div class="col-md-2">
			
		<input type="submit" class="btn  btn-theme02" name="btnGuardar" value="Guardar" />
		</div>
	
</div>
	</form>
	</div>
  </div>
</div>
		
<div align="center">  <h3><a  class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroCit/Ver_tablaCita"> Registro de citas </a> </h3> </div> 
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <br>