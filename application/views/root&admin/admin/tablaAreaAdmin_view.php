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
	<div class="col-md-4"><center><h2>Registro Areas</h2></center></div>
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<br><br>
		 <!--buscador de paciente-->
      <form action="<?php echo base_url()?>Vista_RegistroArea/buscarArea" method="POST">
    <div class="input-group">
    <input type="text" class="form-control input-sm" class="form form-control" name="buscador"  id="buscador">
    <span class="input-group-btn">
    <button class="btn btn-default" type="submit" name="b" id="b" ><span class="glyphicon glyphicon-search"></span></button></span> 
    </div>
    </form>
<!--fin/buscador-->
	</div>
	<div class="row">
    
	
	<div class="col-md-12">
    <?php if (isset($area)) {?>
	<table class="table table-responsive" >
  <thead>
    <tr>
      <th scope="col">Identificador de Area </th>
      <th scope="col">Area</th>
      <th colspan="3">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	 <?php foreach ($area as $a):?>

		 <tr>
			 <!--<td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td>-->
			 
       <td><?=$a->cod_area?></td>
			 <td><?=$a->area?></td>
			
			 <td>		
        
            <!--<a href="<?php //echo base_url()?>mostrar" value="mostrar/index/<?=$u->id_pac?>"name="ver" class="btn btn-success glyphicon glyphicon-eye-open"> Ver</a>-->
          </td>

           <td>   
               <!--redireccion para eliminar-->
                 <a  onclick="if(confirma()== false) return false"  href="<?php echo base_url()?>Vista_RegistroArea/eliminarAreaAdmin/<?=$a->id_area?>" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a>
          </td>

         
			<!--redireccion de actualizar-->
           <td>    
                 <a href="<?php echo base_url()?>Vista_RegistroArea/actualizarA/<?=$a->id_area?>" class="btn btn-success glyphicon glyphicon-edit"> Actualizar</a>
          </td>



			 </tr>

  	 	<?php endforeach;?>
    </tbody>
</table>	
  <?php } else {?>
                <div>No Areas. fallido.</div>
              <?php }?>
              <div class=" text-center">
              <?php if (isset($links)) { ?>
                <?php echo $links ?>
              <?php }?>  

              </div>
	</div>	
	</div>

<div>
	
	
</div>

<script type="text/javascript" src="assets/js/jsapp.js"></script>
	<!--main content end-->
    <!--footer start-->
   <br>
   <?php require 'application/views/layouts/footer.php'; ?>
