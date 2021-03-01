<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Vista_Root extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("Config_model");
		$this->load->model("Citas_model");

		
			
	}

  public function index(){


   if ($this->session->userdata("acceso") == 'root'){
   	$data['ver']= $this->Config_model->ver_config();
		$this->load->view('layouts/header', $data);
        $this->load->view('layouts/aside', $data);
		$this->load->view('root&admin/root_view');
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