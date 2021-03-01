<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * clase para llamada de las visata de tipo estandar
 */
class Vista_Estan extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("Config_model");
		$this->load->model("Citas_model");


		
			
	}
			//funcion para llamar a las vista que vera el usuario de rol estandar
			  public function index(){
			   if ($this->session->userdata("acceso") == 'estan'){
					$this->load->view('layouts/header');
					$data['ver']= $this->Config_model->ver_config();
			        $this->load->view('layouts/asideEstan',$data);
					$this->load->view('estandar/Estan_view');
			        // $this->load->view('layouts/footer');
			   }else{
			         redirect(base_url().'root&admin/login_view'); 
					}
			}



public function eventos(){

$eventos = $this->Citas_model->calendario();
			
				echo json_encode($eventos);	

	}
	
}

  ?>