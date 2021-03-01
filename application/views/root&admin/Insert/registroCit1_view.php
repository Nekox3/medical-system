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
      <?php foreach($doc as $e ):?>
<option value="<?php echo $e->cod_doctor; ?>" ><?php echo $e->nombred;?></option>
                                 <?php 
                               endforeach; ?>
      <!--<option value=""></option>
      <?php #for ($i=0; $i <count($arrDoctor); $i++):?>
      <option value='<?php #echo $arrDoctor[$i]['cod_doctor']?>'>
        <?php #echo $arrDoctor[$i]['nombred'] ?>
      </option>
    <?php #endfor;?>-->
    </select>
    <br>

  </div>
  <div class="col-md-2">
      Consultorio
    <br>
    <select class="form form-control" name="consul">
    <?php foreach($con as $c ):?>
<option value="<?php echo $c->cod_consultorio; ?>" ><?php echo $c->consultorio;?></option>
                                 <?php 
                               endforeach; ?>
    </select>
    <br>

  </div>  
  </div>
  <div class="row">
  <div class="col-md-3"></div>
  
    <div class="col-md-2">
      
    <input type="submit" class="btn  btn-theme02" name="btnGuardar" value="Registrar cita" />
    </div>
  
  <div class="col-md-2">
   
  </div>
</div>
  </form>
  </div>
  </div>
   <a onclick="if(confirma2()== false) return false" class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroCit/Ver_tablaCita"> Registros de citas </a>
</div>
     
    <!--main content end-->
    <!--footer start-->
   <br>


