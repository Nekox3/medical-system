<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Vista_RegistroPac extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
    $this->load->model('Paciente_model');
		$this->load->library('form_validation');
    $this->load->model("Config_model");
		
	}

#------------------------funciones del Login----------------------------------
  public function index(){


   if ($tipo =$this->session->userdata("acceso") == 'root' or 'admin'){
    if ($tipo == 'root'){
          $switch = 'root';
    }else{
          $switch = 'admin';
    }

   	 $data=$this->rand();
     $data['mensajeInser']= "";
	   $this->load->view('layouts/header');
   
   
   switch ($switch) {

      case 'root':
              $data['ver']= $this->Config_model->ver_config();
        $this->load->view('layouts/aside', $data);        
        $this->load->view('root&admin/Insert/registroPac_view', $data);
        break;

        case 'admin':
         $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
         $this->load->view('root&admin/admin/registroPacAdmin_view', $data);
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

  #-------------------------Funciones del Paciente--------------------------

   public function insercionPaciente (){

          if($this->input->post("btnGuardar")){
            //Validaciones           
             //name del campo, titulo, restricciones
                $this->form_validation->set_rules('archivo', 'Archivo', 'required');
                $this->form_validation->set_rules('nombrePaciente', 'Nombre  del Paciente', 'required');
                $this->form_validation->set_rules('apellidoPaciente', 'Apellido del Paciente', 'required');
                $this->form_validation->set_rules('sexo_paciente', 'Sexo del paciente', 'required');
                $this->form_validation->set_rules('edadPaciente', 'Edad del paciente', 'required|numeric');
               
                $this->form_validation->set_rules('estado_paciente', 'Estado Paciente', 'required');
                $this->form_validation->set_rules('referencia', 'Referencia del Doctor', 'required');
                $this->form_validation->set_rules('direccionPaciente', 'Direccion del Paciente', 'required');      

                 if($this->form_validation->run()==TRUE){ //Si la validación es correcta

                //$datos["mensaje"]="Validación correcta";
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
                //llamada de la funcion al modelo
               $this->Paciente_model->ingresar_Paciente($camposPaciente);

               $data=$this->rand();
               $data['mensajeInser']= "<center>¡Inserción Exitosa!</center>";
               $this->load->view('layouts/header');
               $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
               $this->load->view('root&admin/Insert/registroPac1_view', $data);
                $this->load->view('layouts/footer');
             
              }else{
                $data=$this->rand();
                $this->load->view('layouts/header');
                $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
                  $data['mensajeInser']= "";
                $this->load->view('root&admin/Insert/registroPac_view', $data);
                 $this->load->view('layouts/footer');
              }


          }
    }
    
     public function insercionPacienteAdmin (){

          if($this->input->post("btnGuardar")){
            //Validaciones
                                              //name del campo, titulo, restricciones
            
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
                //llamada de la funcion al modelo
               $this->Paciente_model->ingresar_Paciente($camposPaciente);

               redirect(base_url().'Vista_RegistroPac');
              }else{
                 $datos["mensaje"]="Validación incorrecta";
                 Echo "Error al insertar";
              }

          }
    }


          /*extracion de datos con la paginacion*/
          public  function Ver_tablaPac (){
             $params["paciente"] = $this->Paciente_model->DatosPac();
             $params['mensaje'] = "";
              $params['mensajeAct'] = "";
              $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/aside', $data);
              $this->load->view('root&admin/Mostrar/tablaPac_view',$params); 
          }

           public  function Ver_tablaPacAdmin (){
             $params["paciente"] = $this->Paciente_model->DatosPac();
             $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
              $this->load->view('root&admin/admin/tablaPacAdmin_view',$params); 
          }






          public function Ver_Pac(){
            $this->load->model('Paciente_model');
             $id=$this->uri->segment(3);

             $data['archivo']= $this->Paciente_model->obtener($id);
             $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
            return $this->load->view('root&admin/Mostrar/pacienteId_view', $data);
            
          }

        public function Ver_PacAdmin(){
          $this->load->model('Paciente_model');
           $id=$this->uri->segment(3);


           $data['archivo']= $this->Paciente_model->obtener($id);
           $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
          return $this->load->view('root&admin/admin/pacienteIdAdmin_view', $data);
          
        }

          public function eliminarPac(){
          //llamada de las funciones
          $this->load->model('Citas_model');
          //captura del dato del paciente
          $id=$this->uri->segment(3);
          $id1= $this->uri->segment(4);//
         
          if ($this->Citas_model->Verificar($id1)) {
              $citas['mensaje'] = "<font color='black'><center>¡Eliminación imposible! ".$id1.", Tiene una cita!!! </center></font>";

              $citas['cita'] = $this->Citas_model->obtenerXpaciente($id1);
              $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
              $elim =$this->load->view('root&admin/Mostrar/tablaCita_view',$citas);  
              
              }else{
                //echo "no trae";
                $eli=$this->Paciente_model->eliminarPac($id);
                $params['mensaje'] = "<font color='black'><center>¡Eliminación Exitosa!</center></font>";
                $params['mensajeAct'] = "";
                $params["paciente"] = $this->Paciente_model->DatosPac();
                $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
                 $this->load->view('root&admin/Mostrar/tablaPac_view',$params);
               
              }
              

          }


          public function eliminarPacAdmin(){
          $this->load->model('Paciente_model');
             $id=$this->uri->segment(3);
            $eli=$this->Paciente_model->eliminarPac($id);
               if ($eli == false) {
                $this->Ver_tablaPacAdmin();
               }else
               {
              echo "no borrado";
               }

          }

          public function actualizar(){
           $this->load->model('Paciente_model');
             $id=$this->uri->segment(3);

             $data['archivo']= $this->Paciente_model->obtener($id);
              $data['arch']= $this->Paciente_model->obtenerArchivo($id);
              $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
            $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
            return $this->load->view('root&admin/Actualizar/actualizarPac_view', $data);

          }

          public function actualizarPac(){
          $this->load->model('Paciente_model');
            //$this->load->model('Paciente_model');
             //$id=$this->uri->segment(3);
              $camposPaciente['id'] =strip_tags($_POST['id'],ENT_QUOTES);
              $camposPaciente['archivo'] =strip_tags($_POST['archivo'],ENT_QUOTES);
              $camposPaciente['nombrePaciente'] = strip_tags($_POST['nombrePaciente'],ENT_QUOTES);
              $camposPaciente['apellidoPaciente'] = strip_tags($_POST['apellidoPaciente'],ENT_QUOTES);
              $camposPaciente['sexo_paciente'] = strip_tags($_POST['sexo_paciente'],ENT_QUOTES);
              $camposPaciente['direccionPaciente'] = strip_tags($_POST['direccionPaciente'],ENT_QUOTES);
              $camposPaciente['edadPaciente'] = strip_tags($_POST['edadPaciente'],ENT_QUOTES);
              $camposPaciente['pesoPasiente'] = strip_tags($_POST['pesoPasiente'],ENT_QUOTES);
              $camposPaciente['telefonoPaciente'] = strip_tags($_POST['telefonoPaciente'],ENT_QUOTES);
              $camposPaciente['estado_paciente'] = strip_tags($_POST['estado_paciente'],ENT_QUOTES);
              $camposPaciente['referencia'] = strip_tags($_POST['referencia'],ENT_QUOTES);
              $camposPaciente['centroAsisten'] = strip_tags($_POST['centroAsisten'],ENT_QUOTES);

              $this->Paciente_model->Update($camposPaciente);
              $params["paciente"] = $this->Paciente_model->DatosPac();
              $params['mensajeAct'] = "<center>¡Actualización Exitosa!</center>";
              $params['mensaje'] = "";
              $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/aside', $data);
              $this->load->view('root&admin/Mostrar/tablaPac_view',$params); 

          }


            public function actualizarPA(){
             $this->load->model('Paciente_model');
               $id=$this->uri->segment(3);

               $data['archivo']= $this->Paciente_model->obtener($id);
               $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
              return $this->load->view('root&admin/admin/actualizarPacAdmin_view', $data);

            }
          
            public function actualizarPacAdmin(){
            $this->load->model('Paciente_model');
              //$this->load->model('Paciente_model');
               //$id=$this->uri->segment(3);
                $camposPaciente['id'] =strip_tags($_POST['id'],ENT_QUOTES);
                $camposPaciente['archivo'] =strip_tags($_POST['archivo'],ENT_QUOTES);
                $camposPaciente['nombrePaciente'] = strip_tags($_POST['nombrePaciente'],ENT_QUOTES);
                $camposPaciente['apellidoPaciente'] = strip_tags($_POST['apellidoPaciente'],ENT_QUOTES);
                $camposPaciente['sexo_paciente'] = strip_tags($_POST['sexo_paciente'],ENT_QUOTES);
                $camposPaciente['direccionPaciente'] = strip_tags($_POST['direccionPaciente'],ENT_QUOTES);
                $camposPaciente['edadPaciente'] = strip_tags($_POST['edadPaciente'],ENT_QUOTES);
                $camposPaciente['pesoPasiente'] = strip_tags($_POST['pesoPasiente'],ENT_QUOTES);
                $camposPaciente['telefonoPaciente'] = strip_tags($_POST['telefonoPaciente'],ENT_QUOTES);
                $camposPaciente['estado_paciente'] = strip_tags($_POST['estado_paciente'],ENT_QUOTES);
                $camposPaciente['referencia'] = strip_tags($_POST['referencia'],ENT_QUOTES);
                $camposPaciente['centroAsisten'] = strip_tags($_POST['centroAsisten'],ENT_QUOTES);

                $this->Paciente_model->Update($camposPaciente);
                $params["paciente"] = $this->Paciente_model->DatosPac();
                $params['mensaje'] = "";
                $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
                $this->load->view('root&admin/Mostrar/tablaPac_view',$params); 

            }

            public function ExportarPac (){
               $params["paciente"] = $this->Paciente_model->DatosPac();
               $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
                $this->load->view('root&admin/Mostrar/expPaciente',$params); 

            }

   

}
  ?>