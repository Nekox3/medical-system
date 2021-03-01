

<section id="main-content">
   <section class="wrapper">
      <div class="row">
         <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
            </div>
            <div class="container container-fluid">
               <br><br><br><br><br><br>
               <form class="alert btn-theme03 top-center" action="<?php echo base_url()?>vista_RegistroUsu/insercionUsuario" method="POST">
                  <div class="row">
                     <div class="col-md-2"></div>
                     <center>
                        <h2>Registro de usuarios</h2>
                     </center>
                     <br>
                  </div>
                  <div class="row">
                     <?php echo validation_errors('<div align="center" class="alert alert-danger">','</div>'); ?>

                     <?php if($mensajeInser): ?>
                     <div class="alert alert-danger">
                        <p><?=$mensajeInser?></p>
                     </div>
                     <?php endif;?>
                  
                  </div>
                  <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-4">
                        Nombre del usuario
                        <br>
                        <input type="text" class="form form-control" name="nombreUsuario" placeholder=" Nombre del usuario" value="<?php echo set_value('nombreUsuario') ?>" autocomplete="off">
                        <br>
                     </div>
                     <div class="col-md-4">
                        Apellido del usuario
                        <br>
                        <input type="text" class="form form-control" name="apellidoUsuario" placeholder="Apellido del usuario" value="<?php echo set_value('apellidoUsuario') ?>" autocomplete="off">
                        <br>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-4">
                        Usuario
                        <br>
                        <input type="text" class="form form-control" name="usuario" placeholder="Digite el usuario" value="<?php echo set_value('usuario') ?>" autocomplete="off">
                        <br>
                     </div>
                     <div class="col-md-4">
                        Rol del usuario
                        <br>
                        <select name="rol" class="form form-control">
                           <option value=""></option>
                           <option value="root" <?php echo set_select('rol','root',false) ?>> Super Usuario</option>
                           <option value="admin" <?php echo set_select('rol','admin',false) ?>> Usuario Administrativo</option>
                           <option value="estan" <?php echo set_select('rol','estan',false) ?>> Usuario Estándar</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-4">
                        Contraseña
                        <br>
                        <input type="text" class="form form-control" name="contra"  value="<?php echo set_value('contra') ?>" autocomplete="off">
                        <br>
                     </div>
                     </div>
                  <div class="row">
                     <div class="col-md-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-2">
                        <br>
                        <input type="submit" class="btn  btn-theme02" name="btnGuardar" value="Guardar" />
                     </div>
                     <div class="col-md-2">
                        <br>
                        <a onclick="if(confirma2()== false) return false" class="btn btn-info " href="<?php echo base_url();?>Vista_RegistroUsu/Ver_tablaUsu"> Registros de usuarios </a>
                     </div>
                  </div>
            </div>
            </form>
         </div>
      </div>
      </div>
      
   </section>
</section>
<!--main content end-->
<!--footer start-->
<br>

