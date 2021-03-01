 <aside>

 <style type="text/css">
   a{
    color: #ffffff;
   }
 </style>
 
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="<?php echo base_url()?>img/subidas/thumbs/<?=$ver->imagen?>" class="img-circle" width="100"></a></p></ul>
          <h4 class="centered"><?=$ver->nombre_inst?></h4>
          <br>
            <div align="center"> 
              <h4>
                <a  class="fa fa-home" href="<?php echo base_url();?>Vista_Root"> Inicio </a>  
              </h4> 
            </div>
            
            <hr>

            <div align="center"> 
              <h4>
                <a class="fa fa-users" href="<?php echo base_url();?>Vista_RegistroPac/Ver_tablaPac"> Pacientes </a>  
              </h4> 
            </div>
            <hr>
             <div align="center"> 
              <h4>
                <a class="fa fa-user-md" href="<?php echo base_url();?>Vista_RegistroDoc/Ver_tablaDoc"> Doctores </a>  
              </h4> 
            </div>
            <hr>
         
          <div align="center"> 
              <h4>
                <a class="fa fa-id-card" href="<?php echo base_url();?>Vista_RegistroEsp/Ver_tablaEsp"> Especialidad </a>  
              </h4> 
            </div>
            <hr>
             <div align="center"> 
              <h4>
                <a class=" fa fa-stethoscope" href="<?php echo base_url();?>Vista_RegistroCon/Ver_tablaCon"> Consultorios </a>  
              </h4> 
            </div>
            <hr>
             <div align="center"> 
              <h4>
                <a class=" fa fa-map-marker" href="<?php echo base_url();?>Vista_RegistroArea/Ver_tablaArea"> Areas </a>  
              </h4> 
            </div>
             <hr>
             <div align="center"> 
              <h4>
                <a class=" fa fa-user-circle-o" href="<?php echo base_url();?>Vista_RegistroUsu/Ver_tablaUsu"> Usuarios </a>  
              </h4> 
            </div>
            <hr>
             <div align="center"> 
              <h4>
                <a class=" fa fa-address-book-o" href="<?php echo base_url();?>Vista_RegistroCit/Ver_tablaCita"> Citas </a>  
              </h4> 
            </div>
          
            <hr>
            
             <div align="center"> 
              <h4>
                <a class=" fa fa-cog" href="<?php echo base_url();?>Vista_ConfigInic"> Configuracion Inicial </a>  
              </h4> 
            </div>
          
            <hr>
             <div align="center"> 
              <h4>
                <a  class="fa fa-sign-out" href="<?php echo base_url();?>logout"> Cerrar Sesion </a>  
              </h4> 
            </div>
        <!-- sidebar menu end-->
     
      </div>
    </aside>