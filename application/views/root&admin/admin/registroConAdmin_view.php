<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              
<div class="container container-fluid">
	<br><br><br><br><br><br>
	
	
	<form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_RegistroCon/insercionConsultorio" method="POST">
		<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-4"><center><h2>Registro de Consultorios</h2></center></div>
</div>
<div class="row">
  	<div class="col-md-3"></div>
	<div class="col-md-3">
  		Identificador de Consultorio
		<br>
		<input type="text" class="form form-control" name="idConsultorio" value="<?= $idCon ?>" readonly="readonly" >
		<br>
	</div>
	<div class="col-md-3">
  		Consultorio
		<br>
		<input type="text" class="form form-control" name="numConsultorio" placeholder=" digite el número de Consultorio" >
		<br>

	</div>

</div>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3">
  		Areas
		<br>
		<select  name="areas" class="form form-control">
			<option> <?php
foreach ($arrArea as $i => $Area)
   echo '<option value="',$i,'">',$Area,'</option>';
?>
	
</option>
		</select>
		
	</div>	
	</div>
<div class="row">
	<div class="col-md-3"></div>
	
		<div class="col-md-2">
			<br><br>
		<input type="submit" class="btn  btn-theme02" name="btnGuardar" value="Guardar" />
		</div>
		
	
</div>
	</form>
	 </div>
  </div>
</div>
 <div align="center">  <h3><a  class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroCon/Ver_tablaCon"> Registro de conslutorios </a> </h3> </div> 
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <br>