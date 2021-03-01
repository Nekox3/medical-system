<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * inicializacion de la vista administrador
 */
class Vista_Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
$this->load->model("Citas_model");
$this->load->model("Config_model");
		
			
	}
				//funcion de la llamada de las vista del rol admin
			  public function index(){
			   if ($this->session->userdata("acceso") == 'admin'){
					$this->load->view('layouts/header');
			        $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
					$this->load->view('root&admin/Admin_view');
			       // $this->load->view('layouts/footer');
			   }else{
			         redirect(base_url().'root&admin/login_view'); 
					}
			}
public function eventos(){

$eventos = $this->Citas_model->calendario();
//$this->Citas_model->DatosCita();

//foreach ($datos as $n){

//	$eventos = array(

//				array(
				
//				'title' => $n->archivo_id ,
//				'start' => $n->fecha,
//				'end' => $n->fecha,
//				'color' => '#2E2EFE'
//					 ),

//				  );
				
				echo json_encode($eventos);	
			//}

	}





}

  ?>