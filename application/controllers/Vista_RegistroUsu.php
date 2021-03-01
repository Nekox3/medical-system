<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Vista_RegistroUsu extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
      $this->load->model('Usuario_model');
      $this->load->model("Config_model");
		$this->load->library('form_validation');
			
	}

  public function index(){


   if ($this->session->userdata("acceso") == 'root'){
   	    #$data=$this->rand();
		$this->load->view('layouts/header');
     $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
     $data['mensajeInser']= "";
		$this->load->view('root&admin/Insert/registroUsu_view',$data);
    $this->load->view('layouts/footer');
   }else{
         redirect(base_url().'root&admin/login_view'); 
}
		

	
	}



  public function insercionUsuario (){


 if($this->Usuario_model->Verificar($this->input->post("usuario"))){

    $user = $this->session->userdata('user');
   $this->form_validation->set_rules('nombreUsuario', 'nombre del usuario', 'required');
    $this->form_validation->set_rules('apellidoUsuario', 'apellido del usuario', 'required');
    $this->form_validation->set_rules('usuario', 'nombre de acceso', 'required');
    $this->form_validation->set_rules('rol', 'rol', 'required');
    $this->form_validation->set_rules('contra', 'contraseña del usuario', 'required|min_length[8]');

    if($this->form_validation->run()==true){ //Si la validación es correcta

    $camposUsuario['nombreUsuario'] = $_POST['nombreUsuario'];
    $camposUsuario['apellidoUsuario'] = $_POST['apellidoUsuario'];
    $camposUsuario['usuario'] = $_POST['usuario'];
    $camposUsuario['rol'] = $_POST['rol'];
    $camposUsuario['contra'] = md5($_POST[('contra')]);
    
   $this->Usuario_model->ingresar_Usuario($camposUsuario);

   $this->load->view('layouts/header');
     $data['ver']= $this->Config_model->ver_config();
     $this->load->view('layouts/aside', $data);
     $data['mensajeInser']= "<center>¡Inserción Exitosa!</center>";
    $this->load->view('root&admin/Insert/registroUsu1_view',$data);
    $this->load->view('layouts/footer');
  }else{
    $this->load->view('layouts/header');
     $data['ver']= $this->Config_model->ver_config();
     $this->load->view('layouts/aside', $data);
     $data['mensajeInser']= "";
    $this->load->view('root&admin/Insert/registroUsu_view',$data);
    $this->load->view('layouts/footer');
  }
}else{
$this->load->view('layouts/header');
      $data['ver']= $this->Config_model->ver_config();
      $this->load->view('layouts/aside', $data);
     $data['mensajeInser']= "<center>¡El usuario ya existe!</center>";
    $this->load->view('root&admin/Insert/registroUsu_view',$data);
    $this->load->view('layouts/footer');

}
	}


public  function Ver_tablaUsu (){

  #cargamos en la vista con los parametros...
  $params["usu"] = $this->Usuario_model->DatosUsu();
  $params['mensaje'] = "";
  $params['mensajeAct'] = "";
  $data['ver']= $this->Config_model->ver_config();
  $this->load->view('layouts/aside', $data);
 $this->load->view('root&admin/Mostrar/tablaUsu_view',$params );#, $data);  
   
}







public function actualizar(){
 $this->load->model('Usuario_model');
   $id=$this->uri->segment(3);

   $data['archivo']= $this->Usuario_model->obtener($id);
    $data['ver']= $this->Config_model->ver_config();
    $this->load->view('layouts/aside', $data);
  return $this->load->view('root&admin/Actualizar/actualizarUsu_view', $data);

}

public function actualizarUsu(){
$this->load->model('Usuario_model');
  
    $camposUsu['id'] =strip_tags($_POST['id'],ENT_QUOTES);
    $camposUsu['nombreUsu'] =strip_tags($_POST['nombreUsu'],ENT_QUOTES);
    $camposUsu['apellidoUsu'] = strip_tags($_POST['apellidoUsu'],ENT_QUOTES);
    $camposUsu['Usu'] =strip_tags($_POST['Usu'],ENT_QUOTES);
    $camposUsu['contra'] = md5(strip_tags($_POST['contra'],ENT_QUOTES));
    $camposUsu['rolUsu'] = strip_tags($_POST['rolUsu'],ENT_QUOTES);
   
    $this->Usuario_model->Update($camposUsu);
     $params["usu"] = $this->Usuario_model->DatosUsu();
  $params['mensaje'] = "";
  $params['mensajeAct'] = "<center>¡Actualización Exitosa!</center>";
   $data['ver']= $this->Config_model->ver_config();
  $this->load->view('layouts/aside', $data);
 $this->load->view('root&admin/Mostrar/tablaUsu_view',$params );

}
public function eliminarUsu(){
//$this->load->model('Usuario_model');
   $id=$this->uri->segment(3);
  $eli=$this->Usuario_model->eliminarUsu($id);
 if ($eli == false) {
   $params["usu"] = $this->Usuario_model->DatosUsu();
  $params['mensaje'] = "<center>¡Eliminación Exitosa!</center>";
  $params['mensajeAct'] = "";
   $data['ver']= $this->Config_model->ver_config();
  $this->load->view('layouts/aside', $data);
 $this->load->view('root&admin/Mostrar/tablaUsu_view',$params );
 }else
 {
echo "no borrado";

 }

}

}
  ?>