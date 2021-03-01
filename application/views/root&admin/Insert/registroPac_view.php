
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              
            </div>

             
            
            <!--custom chart end-->
            <div class="container container-fluid">
  <br><br><br><br>
  

  


  <form id="register" class="alert btn-theme03 top-center" action="<?php echo base_url()?>vista_RegistroPac/insercionPaciente" method="POST">
    <div class="row">
      <div class="border-head">
              <center><h1>Registro Pacientes</h1></center>
            </div>

            <div class="col-md-1"></div>
  <div align="center" class="col-md-10">
    <?php echo validation_errors('<div align="center" class="alert alert-danger">','</div>'); ?>
  </div>
 
</div>
<div class="row">
                     <?php if($mensajeInser): ?>
                     <div class="alert alert-success">
                        <p><? echo $mensajeInser?></p>
                     </div>
                     <?php endif;?>
                  </div>
<div class="row">
  <div class="col-md-1"></div>

<div class="col-md-2">
      Archivo
    <br>
    <input type="text" class="form form-control" name="archivo" value="<?= $idPac ?>" readonly="readonly">
    <br>
</div> 
 
  <div class="col-md-3">
      Nombre del paciente
    <br>
    <input type="text" id="nombre" class="form form-control" name="nombrePaciente" placeholder="Nombre del paciente"  value="<?php echo set_value('nombrePaciente') ?>">
    <br>

  </div>

  <div class="col-md-3">
      Apellido del paciente
    <br>
    <input type="text" id="apellido" class="form form-control" name="apellidoPaciente" placeholder="Apellido del paciente" value="<?php echo set_value('apellidoPaciente') ?>">
    <br>

  </div>

  <div class="col-md-2">
      Edad
    <br>
    <input type="number" id="edad" class="form form-control" name="edadPaciente" placeholder="Edad"  min="0" max="150" value="<?php echo set_value('edadPaciente') ?>" >
    <br>
</div>
</div>

<div class="row">

  <div class="col-md-1"></div>
  <div class="col-md-2">
      Sexo
    <br>
    <select  name="sexo_paciente" class="form form-control">
      <option></option>
      <option value="Femenimo" <?php echo set_select('sexo_paciente','Femenimo',false) ?>> Femenino</option>
      <option value="Masculino" <?php echo set_select('sexo_paciente','Masculino',false) ?>> Masculino</option>
    </select>

  </div>
  <div class="col-md-8">
      Direccion
    <br>
    <input id="direccion" type="text" class="form form-control" name="direccionPaciente" placeholder="Direccion" value="<?php echo set_value('direccionPaciente') ?>" >
    <br>

  </div>
</div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-2">
      Peso (Kg)
    <br>
    <input type="number" id="peso" class="form form-control" name="pesoPasiente" placeholder="xx,x Kg" step="0.1" value="<?php echo set_value('pesoPasiente') ?>" >
    <br>

  </div>
  <div class="col-md-2">
      Telefono (xxxx-xxxx)
    <br>
    <input type="tel" id="telefono" class="form form-control" name="telefonoPaciente" placeholder="xxx-xxxx-xxxx"   pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" value="<?php echo set_value('telefonoPaciente')?>">
    <br>

  </div>
  <div class="col-md-2">
      Referencia
    <br>
    <input type="text" id="referencia" class="form form-control" name="referencia" placeholder="Ejemplo: DR. Perez" value="<?php echo set_value('referencia') ?>" >
    <br>

  </div>
  <div class="col-md-2">
      Centro Asistencial
    <br>
    <input type="text" id="centro" class="form form-control" name="centroAsisten" placeholder="Lugar de referencia"  value="<?php echo set_value('centroAsisten') ?>">
    <br>

  </div>
  <div class="col-md-2">
      Estado Familiar
    <br>
    <select  name="estado_paciente" class="form form-control">
      <option></option>
      <option value="Soltero" <?php echo set_select('estado_paciente','Soltero',false) ?> > Soltero</option>
      <option value="Casado" <?php echo set_select('estado_paciente','Casado',false) ?>> Casado</option>
      <option value="Viudo" <?php echo set_select('estado_paciente','Viudo',false) ?>> Viudo</option>
      <option value="Divorciado" <?php echo set_select('estado_paciente','Divorciado',false) ?>> Divorciado</option>
    </select>

  </div>
</div>
<div class="row">
  <div class="col-md-1"></div>
 <div class="col-md-2">
      
    <input type="submit" class="btn btn-theme02" name="btnGuardar" value="Guardar" />
   </div>

  
</div>
         
        <!-- /row -->
      </form>
    </div>
  </div>
</div>
      </section>
    </section>
    
     <div align="center">  <h3><a onclick="if(confirma2()== false) return false" class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroPac/Ver_tablaPac"> Registro de paciente  </a> </h3> </div> 
    <!--main content end-->
    <!--footer start-->
   <br><br> <br><br> <br><br> <br><br> <br>
   