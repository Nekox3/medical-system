
	<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              
            </div>
	<div class="container container-fluid">
	<br><br><br><br><br><br>
	
	
	<form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_RegistroArea/insercionArea" method="POST">
		<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"><center><h2>Registro de Areas</h2></center></div>
</div>
<div class="row">
  	<div class="col-md-3"></div>
	<div class="col-md-3">
  		Identificador de área
		<br>
		<input type="text" class="form form-control" name="id_Area" value="<?= $idArea ?>"  readonly="readonly">
		<br>
	</div>
	<div class="col-md-3">
  		Nombre del area
		<br>
		<input type="text" class="form form-control" name="area" placeholder="area" >
		<br>

	</div>
</div>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-1">
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
<div align="center">  <h3><a  class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroArea/Ver_tablaArea"> Registro de areas </a> </h3> </div> 
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <br>
