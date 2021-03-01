<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Vista_RegistroEsp extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
       $this->load->model('Especialidad_model');
       $this->load->model("Config_model");
       $this->load->library('form_validation');
		
			
	}

  public function index(){


   if ($tipo=$this->session->userdata("acceso") == 'root' or 'admin'){
   if ($tipo == 'root'){
          $switch = 'root';
    }else{
          $switch = 'admin';
    }
   	    $data=$this->rand();
		$this->load->view('layouts/header');

       switch ($switch) {

      case 'root':
         $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
         $data['mensajeInser']= "";
        $this->load->view('root&admin/Insert/registroEsp_view', $data);
        break;

        case 'admin':
         $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
         $this->load->view('root&admin/admin/registroEspAdmin_view', $data);
          break;
    }
      
		
         $this->load->view('layouts/footer');
   }else{
         redirect(base_url().'root&admin/login_view'); 
}
		

	
	}

	public function rand (){

      $d=mt_rand(0,99999);
     
      if ( strlen($d)==5) {
          $idEsp = "Esp_{$d}";

        }else{
           if ( strlen($d)==4) {
            $idEsp = "Esp_0{$d}";
          }else{
            if ( strlen($d)==3) {
              $idEsp = "Esp_00{$d}";
            }
            else{
              if ( strlen($d)==2) {
                $idEsp = "Esp_000{$d}";
            }else {
                 if ( strlen($d)==1) {
                   $idEsp = "Esp_0000{$d}";
                  }
             }
           }
         }

       }

       $data['idEsp'] = $idEsp ;
       return $data;
  }

  #-----------------------------Funciones de la Especialidad-------------------------------------------

  public function insercionEsp (){

    if($this->input->post("btnGuardar")){

   $this->form_validation->set_rules('cod_Especialidad', 'cod_Especialidad', 'required');
    $this->form_validation->set_rules('especialidad', 'Especialidad', 'required|alpha');

    if($this->form_validation->run()==true){ //Si la validación es correcta

    $camposEsp['cod_Especialidad'] = $_POST['cod_Especialidad'];
    $camposEsp['especialidad'] = $_POST['especialidad'];
     $data=$this->rand();
   $this->Especialidad_model->ingresar_Esp($camposEsp);
   $data['mensajeInser']= "<font color='black'><center>¡Inserción Exitosa!</center></font>";
    $this->load->view('layouts/header');
    $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
   $this->load->view('root&admin/Insert/registroEsp1_view', $data);
   $this->load->view('layouts/footer');

   //redirect(base_url().'Vista_RegistroEsp');
  
  }else{
       $data=$this->rand();
//   $this->Especialidad_model->ingresar_Esp($camposEsp);
   $data['mensajeInser']= "";
    $this->load->view('layouts/header');
     $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
   $this->load->view('root&admin/Insert/registroEsp_view', $data);
   $this->load->view('layouts/footer');
  }
}
}

 public function insercionEspAdmin (){

    if($this->input->post("btnGuardar")){

   $this->form_validation->set_rules('cod_Especialidad', 'cod_Especialidad', 'required|min_length[9]|alpha|trim');
    $this->form_validation->set_rules('especialidad', 'especialidad', 'required|alpha|trim');

    if($this->form_validation->run()==false){ //Si la validación es correcta

    $camposEsp['cod_Especialidad'] = $_POST['cod_Especialidad'];
    $camposEsp['especialidad'] = $_POST['especialidad'];
    
   $this->Especialidad_model->ingresar_Esp($camposEsp);

   redirect(base_url().'Vista_RegistroEsp');
  }else{
     Echo "Error al insertar";
  }
}
}

public  function Ver_tablaEsp (){

  #cargamos en la vista con los parametros...
   $params["especialidad"] = $this->Especialidad_model->DatosEsp();
   $params["mensaje"] = "";
   $params["mensajeAct"] = "";
   $data['ver']= $this->Config_model->ver_config();
  $this->load->view('layouts/aside', $data);
 $this->load->view('root&admin/Mostrar/tablaEsp_view',$params );#, $data);
    
   
}





public  function Ver_tablaEspAdmin (){

  #cargamos en la vista con los parametros...
  $params["especialidad"] = $this->Especialidad_model->DatosEsp();
  $data['ver']= $this->Config_model->ver_config();
  $this->load->view('layouts/aside', $data);
 $this->load->view('root&admin/admin/tablaEspAdmin_view',$params );
   
}






            public function eliminarEsp(){
               //llamada del modelos doctor parqa validacion de doctor
               $this->load->model('Doctor_model');
               //captura de especialidad
               $id=$this->uri->segment(3);
               $id1=$this->uri->segment(4);

               //$eli=$this->Especialidad_model->eliminarEsp($id);
             if ($this->Doctor_model->Verificar($id1)) {
              $params["doctor"] = $this->Doctor_model->DatosDoc();
              $params['mensaje'] = "<font color='black'><center>¡Eliminación imposible! ".$id1.", Tiene una Especialidad vigente!!! </center></font>";
               $params['mensajeAct'] = "";
                $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
               $this->load->view('root&admin/Mostrar/tablaDoc_view',$params );
             }else
                 {
                    $eli=$this->Especialidad_model->eliminarEsp($id);
                    $params["especialidad"] = $this->Especialidad_model->DatosEsp();
                    $params['mensaje'] = "<font color='black'><center>¡Eliminación Exitosa!</center></font>";
                    $params['mensajeAct'] = "";
                     $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                    $this->load->view('root&admin/Mostrar/tablaEsp_view',$params );
                 }

            }

public function eliminarEspAdmin(){
$this->load->model('Especialidad_model');
   $id=$this->uri->segment(3);
  $eli=$this->Especialidad_model->eliminarEsp($id);
 if ($this->Doctor_model->Verificar($id1)) {
      $params["especialidad"] = $this->Especialidad_model->DatosEsp();
 $this->load->view('root&admin/Mostrar/tablaEsp_view',$params );
     }else
         {
        echo "no borrado";

         }

}

public function actualizar(){
 $this->load->model('Especialidad_model');
   $id=$this->uri->segment(3);

   $data['archivo']= $this->Especialidad_model->obtener($id);
    $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
  return $this->load->view('root&admin/Actualizar/actualizarEsp_view', $data);

}

public function actualizarEsp(){
$this->load->model('Especialidad_model');
  
    $camposEspecialidad['id'] =strip_tags($_POST['id'],ENT_QUOTES);
    $camposEspecialidad['cod_Especialidad'] =strip_tags($_POST['cod_Especialidad'],ENT_QUOTES);
    $camposEspecialidad['especialidad'] = strip_tags($_POST['especialidad'],ENT_QUOTES);
   
    $this->Especialidad_model->Update($camposEspecialidad);
   // $this->Ver_tablaEsp();
    $params["especialidad"] = $this->Especialidad_model->DatosEsp();
    $params['mensajeAct'] = "<font color='black'><center>¡Actualización Exitosa!</center></font>";
    $params['mensaje'] = "";
     $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
    $this->load->view('root&admin/Mostrar/tablaEsp_view',$params );

}

public function actualizarEA(){
 $this->load->model('Especialidad_model');
   $id=$this->uri->segment(3);

   $data['archivo']= $this->Especialidad_model->obtener($id);
   $data['ver']= $this->Config_model->ver_config();
          $this->load->view('layouts/asideAdmin', $data);
  return $this->load->view('root&admin/admin/actualizarEspAdmin_view', $data);

}

public function actualizarEspAdmin(){
$this->load->model('Especialidad_model');
  
    $camposEspecialidad['id'] =strip_tags($_POST['id'],ENT_QUOTES);
    $camposEspecialidad['cod_Especialidad'] =strip_tags($_POST['cod_Especialidad'],ENT_QUOTES);
    $camposEspecialidad['especialidad'] = strip_tags($_POST['especialidad'],ENT_QUOTES);
   
    $this->Especialidad_model->Update($camposEspecialidad);
    $this->Ver_tablaEspAdmin();

	}


      public function ExportarEsp(){
         $params["especialidad"] = $this->Especialidad_model->DatosEsp();
         $data['ver']= $this->Config_model->ver_config();
        $this->load->view('layouts/aside', $data);
         $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
         $this->load->view('root&admin/Mostrar/expEspecialidad',$params );
      }

}

  ?>