
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">

<div class="container container-fluid">
	<br><br><br><br><br><br>
	
	
	<form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_RegistroEsp/insercionEsp" method="POST">
		<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"><center><h2>Registro de Especialidad</h2></center></div>
</div>
<div class="row">
  	<div class="col-md-3"></div>
	<div class="col-md-3">
  		Identificador de especialidad
		<br>
		<input type="text" class="form form-control" name="cod_Especialidad"  value="<?= $idEsp ?>" readonly="readonly" >
		<br>
	</div>
	<div class="col-md-3">
  		Especialidad
		<br>
		<input type="text" class="form form-control" name="especialidad" placeholder="" >
		

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
<div align="center">  <h3><a  class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroEsp/Ver_tablaEsp"> Registro de especialidades  </a> </h3> </div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <br>