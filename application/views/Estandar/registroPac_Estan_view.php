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
  
  
  <form class="alert btn-theme03 top-center" action="<?php echo base_url()?>vista_RegistroPac_Estan/insercionPaciente" method="POST">
    <div class="row">
      <div class="border-head">
              <center><h1>Registro Pacientes</h1></center>
            </div>
  <div class="col-md-1"></div>
 
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
    <input type="text" class="form form-control" name="nombrePaciente" placeholder="Nombre del paciente" required>
    <br>

  </div>

  <div class="col-md-3">
      Apellido del paciente
    <br>
    <input type="text" class="form form-control" name="apellidoPaciente" placeholder="Apellido del paciente" required>
    <br>

  </div>

  <div class="col-md-2">
      Edad
    <br>
    <input type="number" class="form form-control" name="edadPaciente" placeholder="Edad"  min="0" max="150" required>
    <br>
</div>
</div>

<div class="row">

  <div class="col-md-1"></div>
  <div class="col-md-2">
      Sexo
    <br>
    <select name="sexo_paciente" class="form form-control">
      <option></option>
      <option value="Femenimo"> Femenino</option>
      <option value="Masculino"> Masculino</option>
    </select>

  </div>
  <div class="col-md-8">
      Direccion
    <br>
    <input type="text" class="form form-control" name="direccionPaciente" placeholder="Direccion" required>
    <br>

  </div>
</div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-2">
      Peso
    <br>
    <input type="number" class="form form-control" name="pesoPasiente" placeholder="xx,x Kg" step="0.1" required>
    <br>

  </div>
  <div class="col-md-2">
      Telefono
    <br>
    <input type="tel" class="form form-control" name="telefonoPaciente" placeholder="xxx-xxxx-xxxx"   pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}">
    <br>

  </div>
  <div class="col-md-2">
      Referencia
    <br>
    <input type="text" class="form form-control" name="referencia" placeholder="Ejemplo: DR. Perez" >
    <br>

  </div>
  <div class="col-md-2">
      Centro Asistencial
    <br>
    <input type="text" class="form form-control" name="centroAsisten" placeholder="Lugar de referencia" >
    <br>

  </div>
  <div class="col-md-2">
      Estado Familiar
    <br>
    <select name="estado_paciente" class="form form-control">
      <option></option>
      <option value="Soltero"> Soltero</option>
      <option value="Casado"> Casado</option>
      <option value="Viudo"> Viudo</option>
      <option value="Divorciado"> Divorciado</option>
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
    <!--main content end-->
    <!--footer start-->
   <br>
    