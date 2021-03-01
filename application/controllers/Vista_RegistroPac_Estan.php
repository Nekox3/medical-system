<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Vista_RegistroPac_Estan extends CI_Controller
{
	
    	public function __construct()
    	{
    		parent:: __construct();
        $this->load->model('Paciente_model');
        $this->load->model("Config_model");
    		$this->load->library('form_validation');
    			
    	}

  public function index(){
    if ($tipo =$this->session->userdata("acceso") == 'estan'){
   
        $data=$this->rand();
    		$this->load->view('layouts/header');
        $this->load->view('layouts/asideEStan');
    		$this->load->view('Estandar/registroPac_Estan_view', $data);
        $this->load->view('layouts/footer');
       }
    else{
         redirect(base_url().'root&admin/login_view'); 
        }

  }

      public function rand (){

            $d=mt_rand(0,99999);
           
            if ( strlen($d)==5) {
                $idPac = "Pac_{$d}";

              }else{
                 if ( strlen($d)==4) {
                  $idPac = "Pac_0{$d}";
                }else{
                  if ( strlen($d)==3) {
                    $idPac = "Pac_00{$d}";
                  }
                  else{
                    if ( strlen($d)==2) {
                      $idPac = "Pac_000{$d}";
                  }else {
                       if ( strlen($d)==1) {
                         $idPac = "Pac_0000{$d}";
                        }
                   }
                 }
               }

             }

             $data['idPac'] = $idPac ;
             return $data;
        }

  public function insercionPaciente (){
 if($this->input->post("btnGuardar"))
      {
            $this->form_validation->set_rules('archivo', 'Archivo', 'required|min_length[9]|alpha|trim');
            $this->form_validation->set_rules('nombrePaciente', 'NombrePaciente', 'required|alpha|trim');
            $this->form_validation->set_rules('apellidoPaciente', 'ApellidoPaciente', 'required|alpha|trim');
            $this->form_validation->set_rules('sexo_paciente', 'Sexo_paciente', 'required');
            $this->form_validation->set_rules('edadPaciente', 'EdadPaciente', 'required|numeric');
            $this->form_validation->set_rules('pesoPaciente', 'PesoPaciente', 'required|numeric');
            $this->form_validation->set_rules('telefonoPaciente', 'TelefonoPaciente', 'required|numericTel');
            $this->form_validation->set_rules('estado_paciente', 'EstadoPaciente', 'required|numeric');
            $this->form_validation->set_rules('referencia', 'Referencia', 'required|alpha|trim');
            $this->form_validation->set_rules('centroAsisten', 'CentroAsisten', 'required|alpha|trim');
            $this->form_validation->set_rules('direccionPaciente', 'DireccionPaciente', 'required|alpha|trim');

       if($this->form_validation->run()==false){ //Si la validación es correcta

          $datos["mensaje"]="Validación correcta";
          $camposPaciente['archivo'] = $_POST['archivo'];
          $camposPaciente['nombrePaciente'] = $_POST['nombrePaciente'];
          $camposPaciente['apellidoPaciente'] = $_POST['apellidoPaciente'];
          $camposPaciente['sexo_paciente'] = $_POST['sexo_paciente'];
          $camposPaciente['direccionPaciente'] = $_POST['direccionPaciente'];
          $camposPaciente['edadPaciente'] = $_POST['edadPaciente'];
          $camposPaciente['pesoPasiente'] = $_POST['pesoPasiente'];
          $camposPaciente['telefonoPaciente'] = $_POST['telefonoPaciente'];
          $camposPaciente['estado_paciente'] = $_POST['estado_paciente'];
          $camposPaciente['referencia'] = $_POST['referencia'];
          $camposPaciente['centroAsisten'] = $_POST['centroAsisten'];

         $this->Paciente_model->ingresar_Paciente($camposPaciente);

         redirect(base_url().'Vista_RegistroPac_Estan');
       }
        else{
             $datos["mensaje"]="Validación incorrecta";
             Echo "Error al insertar";
          }

      }
  }


      public  function Ver_tablaPacEstan (){
        $params = array();
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->Paciente_model->get_total();

        $this->config->load('pagination', TRUE);#carga archivo de pagination en config
        $settings = $this->config->item('pagination');#buscamos el iten del paginad
        $settings['total_rows'] = $this->Paciente_model->get_total();  #Número total de registros
        $settings['base_url'] = base_url().'pagina/pacientes';#La URL que será usada mientras construimos enlaces de paginado
       
        if($total_records > 0) 
        {
          #recogemos los registros de la página actual
          $params["paciente"] = $this->Paciente_model->get_current_page_records($settings['per_page'] ,$start_index);
          #inicializamos la libreria de paginacion
          $this->pagination->initialize($settings);
          # creamos los enlaces del paginado
          $params['links'] = $this->pagination->create_links();
        }
        #cargamos en la vista con los parametros...
        $data['ver']= $this->Config_model->ver_config();
        $this->load->view('layouts/aside', $data);
       $this->load->view('Estandar/tablaPacEstan_view',$params );#, $data);
         
      }



      public function Ver_PacEstan(){
        $this->load->model('Paciente_model');
         $id=$this->uri->segment(3);

         $data['archivo']= $this->Paciente_model->obtener($id);
        return $this->load->view('Estandar/pacienteIdEstan_view', $data);

      }

  
  public function buscarEstan(){
        $this->load->model('Paciente_model');
       //$dato=$this->uri->segment(3);
      $dato['dato'] =strip_tags($_POST['buscador'],ENT_QUOTES);

      $data['paciente']=$this->Paciente_model->buscador($dato);
        return $this->load->view('Estandar/tablaPacEstan_view', $data);
        //return $this->load->view('root/verPaciente', $data);
      }


}

  ?>