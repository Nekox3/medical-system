

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
    * 
    */
   class Vista_RegistroCit extends CI_Controller
   {
    
    public function __construct()
    {
      parent:: __construct();
          $this->load->model('Citas_model');
          $this->load->model("Config_model");
         
        
    }
   
             public function index(){
               //inicio de secion de root y admin
              if ($tipo=$this->session->userdata("acceso") == 'root' or 'admin'){
               if ($tipo == 'root'){
                     $switch = 'root';//subtrae la seleccion de usuario para llamar al aside de la vista
                   }else{
                     $switch = 'admin';
                      }
   
               $data=$this->rand();
               $data['doc'] = $this->Citas_model->select_Doctor();
               $data['con'] = $this->Citas_model->select_Consultorio();
              $this->load->view('layouts/header');
               //escoge la vista dependiendo de del tipo de rol que ingresa
                 switch ($switch) {
                   case 'root':
                   $data['ver']= $this->Config_model->ver_config();
                    $this->load->view('layouts/aside', $data);
                   break;
   
                   case 'admin':
                   $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
                   break;
                 
               }
               //llamada de las vistas de registro
              $this->load->view('root&admin/Insert/registroCit_view', $data);
               $this->load->view('layouts/footer');
              }else{
                    redirect(base_url().'root&admin/login_view'); 
                 }
              
   
            
           }
   //funcion para crear el numero de cita de forma aleatoria
    public function rand (){
   
         $d=mt_rand(0,99999);
        
         if ( strlen($d)==5) {
             $idCit = "Cit_{$d}";
   
           }else{
              if ( strlen($d)==4) {
               $idCit = "Cit_0{$d}";
             }else{
               if ( strlen($d)==3) {
                 $idCit = "Cit_00{$d}";
               }
               else{
                 if ( strlen($d)==2) {
                   $idCit = "Cit_000{$d}";
               }else {
                    if ( strlen($d)==1) {
                      $idCit = "Cit_0000{$d}";
                     }
                }
              }
            }
   
          }
   
          $data['idCit'] = $idCit ;
          return $data;
     }
           //funcion para insertar las citas de los tipos de rol admin y root
             public function insercionCit (){
                $camposCit['id_Cita'] = $_POST['id_Cita'];
                $camposCit['archivo'] = $_POST['archivo'];
                $camposCit['hora'] = $_POST['hora'];
                $camposCit['fecha'] = $_POST['fecha'];
                $camposCit['doctor'] = $_POST['doctor'];
                $camposCit['consul'] = $_POST['consul'];
                $var=$_POST['fecha'];
                $var1=$_POST['hora'];
                $union=$var.'T'.$var1;
                $camposCit['fech']= $union;         
                
               //validacion de ingreso de citas en la base de datos
              if (!$this->Citas_model->ingresar_Cit($camposCit)){
                  redirect(base_url().'Vista_RegistroCit');
                 }else{
                   Echo "Error al insertar";
                   }
   
             }
   
   //********************************** ROOT ****************************************************
   
   
         //funcion para ver la tabla de las citas
           public  function Ver_tablaCita (){
             //obtencion de los datos del modelo
               $cita = $this->Citas_model->DatosCita();
               $data['cita'] = $cita;
               $data['mensaje']= "";
               $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/aside', $data);
               //llamada de la vista para mostrar
               $this->load->view('root&admin/Mostrar/tablaCita_view',$data );
              
           }
   
             //funcion para eliminar una cita
             public function eliminarCit(){
   
               
               $id=$this->uri->segment(3);
               //obtencion para la verificaion de la elimincaion
               $eli=$this->Citas_model->eliminarCit($id);
                 if ($eli == false) {
                     $this->Ver_tablaCita();
                   }else{
                     echo "no borrado";
                     }
   
             }
   
   
             public function actualizar(){
             // $this->load->model('Citas_model');
               //captura de la cita que se desea actualizar
              $id=$this->uri->segment(3);
               //obtiene los datos de para mostrar en la vista
                 $data['archivo']= $this->Citas_model->obtener($id);
                 $data['doc']=$this->Citas_model->select_Doctor();
                 $data['con']=$this->Citas_model->select_Consultorio();
                 $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
               return $this->load->view('root&admin/Actualizar/actualizarCit_view', $data);
             }
   
             ////funcion que recibe todos los datos de de las vista
               public function actualizarCit(){
               //$this->load->model('Citas_model');
                   //captura de los datos que se van a actualizar
                   $camposCitas['id'] =strip_tags($_POST['id'],ENT_QUOTES);
                   $camposCitas['cod_citas'] =strip_tags($_POST['cod_citas'],ENT_QUOTES);
                   $camposCitas['archivo_id'] = strip_tags($_POST['archivo_id'],ENT_QUOTES);
                   $camposCitas['hora'] = strip_tags($_POST['hora'],ENT_QUOTES);
                   $camposCitas['fecha'] = strip_tags($_POST['fecha'],ENT_QUOTES);
                   $camposCitas['doctor_id'] = strip_tags($_POST['doctor_id'],ENT_QUOTES);
                   $camposCitas['consultorio_id'] = strip_tags($_POST['consultorio_id'],ENT_QUOTES);
                   $var = $camposCitas['fecha'];
                   $var1 = $camposCitas['hora'];
                   $union = $var.'T'.$var1;

                   $camposCit['fech']= $union;
                   
                  //llamada del model para actualizar los datos
                   $this->Citas_model->Update($camposCitas);
                   $this->Ver_tablaCita();
   
               }
   
   //************************************ ADMIN *********************************************************
          //funcion para ver la tabla
           public  function Ver_tablaCitaAdmin (){
             //obtencion de los datos del modelo
               $cita = $this->Citas_model->DatosCita();
               $data['cita'] = $cita;
               //llamada de la vista para mostrar
               $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
               $this->load->view('root&admin/admin/tablaCitaAdmin_view',$data );
              
           }
   
   
   
               public function eliminarCitAdmin(){
               //$this->load->model('Citas_model');
                 //captura de el dato de la cita que se necesite elminar
                 $id=$this->uri->segment(3);
                  //obtencion para la verificaion de la elimincaion
                 $eli=$this->Citas_model->eliminarCit($id);
                   if ($eli == false) {
                    $this->Ver_tablaCitaAdmin();
                   }else{
                     echo "no borrado";
                    }
   
               }
   
   //funcion para actualizar en modo admin
         public function actualizarCi(){
          //$this->load->model('Citas_model');
           //captura de la cita que se desea actualizar
            $id=$this->uri->segment(3);
            //obtiene los datos de para mostrar en la vista
            $data['archivo']= $this->Citas_model->obtener($id);
            $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
           return $this->load->view('root&admin/admin/actualizarCitAdmin_view', $data);
   
         }
   
   
   
             ////funcion que recibe todos los datos de de las vista 
               public function actualizarCitAdmin(){
               //$this->load->model('Citas_model');
                 //captura de los datos que se van a actualizar
                   $camposCitas['id'] =strip_tags($_POST['id'],ENT_QUOTES);
                   $camposCitas['cod_citas'] =strip_tags($_POST['cod_citas'],ENT_QUOTES);
                   $camposCitas['archivo_id'] = strip_tags($_POST['archivo_id'],ENT_QUOTES);
                   $camposCitas['hora'] = strip_tags($_POST['hora'],ENT_QUOTES);
                   $camposCitas['fecha'] = strip_tags($_POST['fecha'],ENT_QUOTES);
                   $camposCitas['doctor_id'] = strip_tags($_POST['doctor_id'],ENT_QUOTES);
                   $camposCitas['consultorio_id'] = strip_tags($_POST['consultorio_id'],ENT_QUOTES);
                   
                   //llamada del model para actualizar los datos
                   $this->Citas_model->Update($camposCitas);
                   $this->Ver_tablaCitaAdmin();
   
               }

               public function exportarCit(){
                 $cita = $this->Citas_model->DatosCita();
               $data['cita'] = $cita;
               //llamada de la vista para mostrar
               $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/aside', $data);
               $this->load->view('root&admin/Mostrar/expCita',$data );

               }
   
   
    }
   
     ?>

