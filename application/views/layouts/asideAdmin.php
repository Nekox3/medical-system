 <aside>
   <style type="text/css">
       a{
        color: #ffffff;
       }
     </style>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="<?php echo base_url()?>img/subidas/thumbs/<?=$ver->imagen?>" class="img-circle" width="100"></a></p>
          <h4 class="centered"><?=$ver->nombre_inst?></h4>
            <br>
            <div align="center"> 
              <h4>
                <a  class="fa fa-home" href="<?php echo base_url();?>Vista_Admin"> Inicio </a>  
              </h4> 
            </div>
            <hr>
            
            <div align="center"> 
              <h4>
                <a  class="fa fa-users" href="<?php echo base_url();?>Vista_RegistroPac/Ver_tablaPacAdmin"> Pacientes </a>  
              </h4> 
            </div>
            <hr>
            <div align="center"> 
              <h4>
                <a  class="fa fa-user-md" href="<?php echo base_url();?>Vista_RegistroDoc/Ver_tablaDocAdmin"> Doctores </a>  
              </h4> 
            </div>
            <hr>
          <div align="center"> 
              <h4>
                <a  class="fa fa-id-card" href="<?php echo base_url();?>Vista_RegistroEsp/Ver_tablaEspAdmin"> Especialidad </a>  
              </h4> 
            </div>
            <hr>
            <div align="center"> 
              <h4>
                <a  class="fa fa-stethoscope" href="<?php echo base_url();?>Vista_RegistroCon/Ver_tablaConAdmin"> Consultorios </a>  
              </h4> 
            </div>
            <hr>
            <div align="center"> 
              <h4>
                <a  class="fa fa-map-marker" href="<?php echo base_url();?>Vista_RegistroArea/Ver_tablaAreaAdmin"> Areas </a>  
              </h4> 
            </div>
             <hr>
             <div align="center"> 
              <h4>
                <a  class="fa fa-address-book-o" href="<?php echo base_url();?>Vista_RegistroCit/Ver_tablaCitaAdmin"> Citas </a>  
              </h4> 
            </div>
            <hr>
             <div align="center"> 
              <h4>
                <a  class="fa fa-sign-out" href="<?php echo base_url();?>logout"> Cerrar Sesion </a>  
              </h4> 
            </div>

         <!-- <li class="sub-menu">
            <a href="assets1/javascript:;">
              <i class="fa fa-users"></i>
              <span>Pacientes</span>
              </a>
            <ul class="sub">
              <li><a href="<?php //echo base_url();?>Vista_RegistroPac">⤷&nbsp;Nuevo</a></li>
              <li><a href="<?php //echo base_url();?>Vista_RegistroPac/Ver_tablaPacAdmin">⤷&nbsp;Registro</a></li>
              <li><a >⤷&nbsp;Busqueda</a></li>
            
            </ul>
          </li>

          <li class="sub-menu">
            <a href="assets1/javascript:;">
              <i class="fa fa-user-md"></i>
              <span>Doctores</span>
              </a>
            <ul class="sub">
              <li><a href="<?php //echo base_url();?>Vista_RegistroDoc">⤷&nbsp;Nuevo</a></li>
              <li><a href="<?php //echo base_url();?>Vista_RegistroDoc/Ver_tablaDocAdmin">⤷&nbsp;Registro</a></li>
              <li><a >⤷&nbsp;Busqueda</a></li>
              
            </ul>
          </li>

           <li class="sub-menu">
            <a href="assets1/javascript:;">
              <i class="fa fa-id-card"></i>
              <span>Especialidades</span>
              </a>
            <ul class="sub">
              <li><a  href="<?php //echo base_url();?>Vista_RegistroEsp">⤷&nbsp;Nuevo</a></li>
              <li><a href="<?php //echo base_url();?>Vista_RegistroEsp/Ver_tablaEspAdmin">⤷&nbsp;Registro</a></li>
              <li><a >⤷&nbsp;Busqueda</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="assets1/javascript:;">
              <i class="fa fa-stethoscope"></i>
              <span>Consultorios</span>
              </a>
            <ul class="sub">
              <li><a  href="<?php //echo base_url();?>Vista_RegistroCon">⤷&nbsp;Nuevo</a></li>
              <li><a href="<?php// echo base_url();?>Vista_RegistroCon/Ver_tablaConAdmin">⤷&nbsp;Registro</a></li>
              <li><a >⤷&nbsp;Busqueda</a></li>
            </ul>
          </li>
         
          <li class="sub-menu">
            <a href="assets1/javascript:;">
              <i class="fa fa-map-marker"></i>
              <span>Areas</span>
              </a>
            <ul class="sub">
              <li><a  href="<?php// echo base_url();?>Vista_RegistroArea">⤷&nbsp;Nuevo</a></li>
              <li><a href="<?php// echo base_url();?>Vista_RegistroArea/Ver_tablaAreaAdmin">⤷&nbsp;Registro</a></li>
              <li><a >⤷&nbsp;Busqueda</a></li>
            </ul>
          </li>
          

          <li class="sub-menu">
            <a href="assets1/javascript:;">
              <i class=" fa fa-address-book-o "></i>
              <span>Citas</span>
              </a>
            <ul class="sub">
              <li><a href="<?php// echo base_url();?>Vista_RegistroCit">⤷&nbsp;Nueva</a></li>
              <li><a href="<?php// echo base_url();?>Vista_RegistroCit/Ver_tablaCitaAdmin">⤷&nbsp;Registro</a></li>
              <li><a >⤷&nbsp;Busqueda</a></li>
            </ul>
          </li>


         

          <li>
            <a href="<?php //echo base_url();?>logout">
              <i class="fa fa-sign-out"></i>
              <span>Cerrar Sesion </span>
              </a>
          </li>-->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>