

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
    * clase para CRUD de los dosctores 
    */
   class Vista_RegistroDoc extends CI_Controller
   {
    
    public function __construct()
    {
      parent:: __construct();
          $this->load->model('Doctor_model');
          $this->load->model("Config_model");
         $this->load->library('form_validation');
        
    }
           //funcion para mostrar las vista dependiendo de los roles
           public function index(){
             //inicio de secion de root y admin
              if ($tipo=$this->session->userdata("acceso") == 'root'  or 'admin'){
                 if ($tipo == 'root'){
                       $switch = 'root';//subtrae la seleccion de usuario para llamar al aside de la vista
                    }else{
                       $switch = 'admin';
                      }
   
                $data=$this->rand();
   
               $data['esp'] = $this->Doctor_model->select_Especialidad();
              $this->load->view('layouts/header');
                //escoge la vista dependiendo de del tipo de rol que ingresa
               switch ($switch) {
                 case 'root':
                   $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                    $data['mensajeInser']= "";
                    $this->load->view('root&admin/Insert/registroDoc_view', $data);
                   break;
   
                 case 'admin':
                    $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
                    $this->load->view('root&admin/admin/registroDocAdmin_view', $data);
                    break;
               }
                //llamada de las vistas de registro
                   
                    $this->load->view('layouts/footer');
              }else{
                    redirect(base_url().'root&admin/login_view'); 
                 }
           }
   
             //funcion para crear el numero de Doctor de forma aleatoria
              public function rand (){
   
                   $d=mt_rand(0,99999);
                  
                   if ( strlen($d)==5) {
                       $idDoc = "Doc_{$d}";
   
                     }else{
                        if ( strlen($d)==4) {
                         $idDoc = "Doc_0{$d}";
                       }else{
                         if ( strlen($d)==3) {
                           $idDoc = "Doc_00{$d}";
                         }
                         else{
                           if ( strlen($d)==2) {
                             $idDoc = "Doc_000{$d}";
                         }else {
                              if ( strlen($d)==1) {
                                $idDoc = "Doc_0000{$d}";
                               }
                          }
                        }
                      }
   
                    }
   
                    $data['idDoc'] = $idDoc ;
                    return $data;
               }
   
   
           //Funcion para insertar los docotores  en rol admin y root
             public function insercionDoctor (){
                 //captura de los datos
                       $this->form_validation->set_rules('id_Doctor', 'id_Doctor', 'required');
                       $this->form_validation->set_rules('nombreDoctor', 'Nombre del Doctor', 'required|alpha|trim');
                       $this->form_validation->set_rules('apellidoDoctor', 'Apellido del Doctor', 'required|alpha|trim');
                       $this->form_validation->set_rules('turnoDoctor', 'turno del Doctor', 'required');
                       $this->form_validation->set_rules('edadDoctor', 'Edad del Doctor', 'required|numeric');
                       $this->form_validation->set_rules('Direccion', 'Direccion del Doctor', 'required');
                       $this->form_validation->set_rules('telefonoDoctor', 'Telefono del Doctor', 'required|numericTel');
                       
                       //validacion de los datos
                     if($this->form_validation->run()==true){
   
   
   
                         $camposDoctor['id_Doctor'] = $_POST['id_Doctor'];
                         $camposDoctor['nombreDoctor'] = $_POST['nombreDoctor'];
                         $camposDoctor['apellidoDoctor'] = $_POST['apellidoDoctor'];
                         $camposDoctor['telefonoDoctor'] = $_POST['telefonoDoctor'];
                         $camposDoctor['Direccion'] = $_POST['Direccion'];
                         $camposDoctor['edadDoctor'] = $_POST['edadDoctor'];
                         $camposDoctor['especialidadDoctor'] = $_POST['especialidadDoctor'];
                         $camposDoctor['turnoDoctor'] = $_POST['turnoDoctor'];
   
                         $this->Doctor_model->ingresar_Doctor($camposDoctor);
                         $data=$this->rand();
                      $data['mensajeInser']= "<font color='black'><center>¡Inserción Exitosa!</center></font>";
                      $this->load->view('layouts/header');
                      $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                     // redirect(base_url().'root&admin/Insert/registroDoc1_view', $data);
                      $this->load->view('root&admin/Insert/registroDoc1_view', $data);
                       $this->load->view('layouts/footer');
                        
                       }else{
                      $data=$this->rand();
                      $data['mensajeInser']= "";
                      $this->load->view('layouts/header');
                       $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                      $this->load->view('root&admin/Insert/registroDoc_view', $data);
                       $this->load->view('layouts/footer');
                         }
   
           }
   
   
           public function insercionDoctorAdmin (){
                 //captura de los datos
                       $this->form_validation->set_rules('id_Doctor', 'id_Doctor', 'required|min_length[9]|alpha|trim');
                       $this->form_validation->set_rules('nombreDoctor', 'nombreDoctor', 'required|alpha|trim');
                       $this->form_validation->set_rules('apellidoDoctor', 'ApellidoDoctor', 'required|alpha|trim');
                       $this->form_validation->set_rules('turnoDoctor', 'turnoDoctor', 'required');
                       $this->form_validation->set_rules('edadDoctor', 'EdadDoctor', 'required|numeric');
                       $this->form_validation->set_rules('pesoPaciente', 'PesoPaciente', 'required|numeric');
                       $this->form_validation->set_rules('telefonoDoctor', 'TelefonoDoctor', 'required|numericTel');
                       $this->form_validation->set_rules('especialidadDoctor', 'especialidadDoctor', 'required');
                       //validacion de los datos
                     if($this->form_validation->run()==false){
   
   
   
                         $camposDoctor['id_Doctor'] = $_POST['id_Doctor'];
                         $camposDoctor['nombreDoctor'] = $_POST['nombreDoctor'];
                         $camposDoctor['apellidoDoctor'] = $_POST['apellidoDoctor'];
                         $camposDoctor['telefonoDoctor'] = $_POST['telefonoDoctor'];
                         $camposDoctor['Direccion'] = $_POST['Direccion'];
                         $camposDoctor['edadDoctor'] = $_POST['edadDoctor'];
                         $camposDoctor['especialidadDoctor'] = $_POST['especialidadDoctor'];
                         $camposDoctor['turnoDoctor'] = $_POST['turnoDoctor'];
   
                         $this->Doctor_model->ingresar_Doctor($camposDoctor);
   
                        redirect(base_url().'Vista_RegistroDoc');
                       }else{
                           $datos["mensaje"]="Validación incorrecta";
                            Echo "Error al insertar";
                         }
   
           }
   
   
             //funcion para mostrar la tabla en modo root
             public  function Ver_tablaDoc (){
                 $params["doctor"] = $this->Doctor_model->DatosDoc();
                 $params["mensaje"] ="";
                  $params['mensajeAct'] = "";
                  $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                  $this->load->view('root&admin/Mostrar/tablaDoc_view',$params );
             
             }
   
   
              
   
   
             //muestar la tabla en modo administrador
         public  function Ver_tablaDocAdmin(){
   
         
           #cargamos en la vista con los parametros...
           $params["doctor"] = $this->Doctor_model->DatosDoc();
           $data['ver']= $this->Config_model->ver_config();
          $this->load->view('layouts/asideAdmin', $data); 
          $this->load->view('root&admin/admin/tablaDocAdmin_view',$params );   
                   
         }
   
   
   
        
    
   
     public function actualizar(){
    $this->load->model('Doctor_model');
      $id=$this->uri->segment(3);
   
      $data['archivo']= $this->Doctor_model->obtener($id);
       $data['esp']= $this->Doctor_model->select_Especialidad();
        $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
     return $this->load->view('root&admin/Actualizar/actualizarDoc_view', $data);
   
   }
   
   public function actualizarDoc(){
   $this->load->model('Doctor_model');
     
       $camposDoctor['id'] =strip_tags($_POST['id'],ENT_QUOTES);
       $camposDoctor['id_Doctor'] =strip_tags($_POST['id_Doctor'],ENT_QUOTES);
       $camposDoctor['nombreDoctor'] = strip_tags($_POST['nombreDoctor'],ENT_QUOTES);
       $camposDoctor['apellidoDoctor'] = strip_tags($_POST['apellidoDoctor'],ENT_QUOTES);
       $camposDoctor['telefonoDoctor'] = strip_tags($_POST['telefonoDoctor'],ENT_QUOTES);
       $camposDoctor['Direccion'] = strip_tags($_POST['Direccion'],ENT_QUOTES);
       $camposDoctor['edadDoctor'] = strip_tags($_POST['edadDoctor'],ENT_QUOTES);
       $camposDoctor['especialidadDoctor'] = strip_tags($_POST['especialidadDoctor'],ENT_QUOTES);
       $camposDoctor['turnoDoctor'] = strip_tags($_POST['turnoDoctor'],ENT_QUOTES);
      
       $this->Doctor_model->Update($camposDoctor);
      // $this->Ver_tablaDoc();
                $params["doctor"] = $this->Doctor_model->DatosDoct();
                 $params["mensaje"] ="";
                  $params['mensajeAct'] = "<center>¡Actualización Exitosa!</center>";
                   $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                  $this->load->view('root&admin/Mostrar/tablaDoc_view',$params );
   
   
   }
   
   public function actualizarD(){
    $this->load->model('Doctor_model');
      $id=$this->uri->segment(3);
   
      $data['archivo']= $this->Doctor_model->obtener($id);
      $data['ver']= $this->Config_model->ver_config();
          $this->load->view('layouts/asideAdmin', $data);
     return $this->load->view('root&admin/admin/actualizarDocAdmin_view', $data);
   
   }
   
   public function actualizarDocAdmin(){
   $this->load->model('Doctor_model');
     
       $camposDoctor['id'] =strip_tags($_POST['id'],ENT_QUOTES);
       $camposDoctor['id_Doctor'] =strip_tags($_POST['id_Doctor'],ENT_QUOTES);
       $camposDoctor['nombreDoctor'] = strip_tags($_POST['nombreDoctor'],ENT_QUOTES);
       $camposDoctor['apellidoDoctor'] = strip_tags($_POST['apellidoDoctor'],ENT_QUOTES);
       $camposDoctor['telefonoDoctor'] = strip_tags($_POST['telefonoDoctor'],ENT_QUOTES);
       $camposDoctor['Direccion'] = strip_tags($_POST['Direccion'],ENT_QUOTES);
       $camposDoctor['edadDoctor'] = strip_tags($_POST['edadDoctor'],ENT_QUOTES);
       $camposDoctor['especialidadDoctor'] = strip_tags($_POST['especialidadDoctor'],ENT_QUOTES);
       $camposDoctor['turnoDoctor'] = strip_tags($_POST['turnoDoctor'],ENT_QUOTES);
      
       $this->Doctor_model->Update($camposDoctor);
       $this->Ver_tablaDocAdmin();
   
   }
   
   public function eliminarDoc(){
   
      $id=$this->uri->segment(3);
     $eli=$this->Doctor_model->eliminarDoc($id);
    if ($eli == false) {
               $params["doctor"] = $this->Doctor_model->DatosDoc();
               $params["mensaje"] ="<font color='black'><center>¡Eliminación Exitosa! </center></font>";
               $params['mensajeAct'] = "";
                $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                  $this->load->view('root&admin/Mostrar/tablaDoc_view',$params );
    
     //$this->Ver_tablaDoc();
    }else
    {
   echo "no borrado";
   
    }
   
   }
   
   public function eliminarDocAdmin(){
   $this->load->model('Doctor_model');
      $id=$this->uri->segment(3);
     $eli=$this->Doctor_model->eliminarDoc($id);
    if ($eli == false) {
      # code...
    
     $this->Ver_tablaDocAdmin();
    }else
    {
   echo "no borrado";
   
    }
   
   } 
   
   
   public function exportarDoc () {
     $params["doct"] = $this->Doctor_model->DatosDoct();
     $data['ver']= $this->Config_model->ver_config();
    $this->load->view('layouts/aside', $data);
     $this->load->view('root&admin/Mostrar/expDoctor',$params );

   }
   
   }
 ?>

