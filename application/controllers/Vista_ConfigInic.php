<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Vista_ConfigInic extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("Config_model");
	       
	}	

  public function index(){
   if ($this->session->userdata("acceso") == 'root'){

		$data['error'] = "";
		$data['errorArch'] = "";
		$data['estado'] = "";
        $data['archivo'] = "";
        $data['ver']= $this->Config_model->ver_config();
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside', $data);
		$this->load->view('root&admin/insert/configInic_view', $data);
         $this->load->view('layouts/footer');
   }else{
         redirect(base_url().'root&admin/login_view'); 
		}
}
		



		//funcion para subir imagen a la base de datos
		public function subirimagen(){

			$config['upload_path'] = './img/subidas';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2024';
			$config['max_height'] = '2008';

			$this->load->library('upload', $config);
			//Aquí se muestra si ha habido un error al momento de insertar los datos de el formulario de configuración a la base de datos.

			if (!$this->upload->do_upload("imagen")) {
				$data['error'] = "<center class='alert alert-danger'> Error no se han podido instalar los datos </center>";//$this->upload->display_errors();
				$data['ver']= $this->Config_model->ver_config();
				$this->load->view("layouts/header");
				$this->load->view("layouts/aside", $data);
				$this->load->view("root&admin/insert/configInic_view", $data);
				$this->load->view("layouts/footer");
				# code...
			}else{

				$info = $this->upload->data();

				//$info['file_name'] = $_POST['nombre del post'];

				$this->crearMiniatura($info['file_name']);


				//En ésta parte se incertan los datos del formulario de configuración.
				//$titulo =chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90));
				$imagen= $info['file_name'];
				$ins= $_POST['inst'];
    			$tipo= $_POST['tipo'];
    			$rubro= $_POST['rubu'];

 //$camposEsp['especialidad'] = $_POST['especialidad'];	
			$this->Config_model->subir($imagen, $ins, $tipo, $rubro);


$data['error'] = "<center class='alert alert-warning'> Felicidades se ha instalado su configuracion </center>";
$data['ver']= $this->Config_model->ver_config();
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside', $data);
				$this->load->view('root&admin/insert/configInic_view', $data);
				$this->load->view('layouts/footer');
			}

		}



		function crearMiniatura($nombre_archivo){

			$config['image_library'] = 'gd2';
			$config['source_image'] = 'img/subidas/'.$nombre_archivo;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['new_image'] = 'img/subidas/thumbs';
			$config['thumb_marker'] = '';
			$config['width'] = 150;
			$config['height'] = 150;
			$this->load->library('image_lib',$config);
			$this->image_lib->resize();

		}



		//public function config_ver(){
			//$this->load->model('Config_model');
			//$data['ver']= $this->Config_model->ver_config();
			//print_r($data);
			//$this->load->view('layouts/aside', $data);

		//}

		
}


  ?>
