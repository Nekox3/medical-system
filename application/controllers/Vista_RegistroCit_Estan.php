

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
    * clase para el crud de citas en modo estandar
    */
   class Vista_RegistroCit_Estan extends CI_Controller
   {
    
    public function __construct()
    {
      parent:: __construct();
          $this->load->model('Citas_model');
          $this->load->model("Config_model");
         
        
    }
   
           public function index(){
              //inicio de secion de estandar
             if ($tipo =$this->session->userdata("acceso") == 'estan'){
            
                 $data=$this->rand();
                 $data['arrDoctor'] = $this->Citas_model->select_Doctor();
                 $data['arrConsultorio'] = $this->Citas_model->select_Consultorio();
                 $this->load->view('layouts/header');
                 //subtrae la seleccion de usuario para llamar al aside de la vista
                 $this->load->view('layouts/asideEStan');
                 //llamada de las vistas de registro
                 $this->load->view('Estandar/registroCit_Estan_view', $data);
                 $this->load->view('layouts/footer');
                }
             else{
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
           //funcion para insertar las citas de los tipos de rol estandar
             public function insercionCit (){
               $camposCit['id_Cita'] = $_POST['id_Cita'];
               $camposCit['archivo'] = $_POST['archivo'];
               $camposCit['hora'] = $_POST['hora'];
               $camposCit['fecha'] = $_POST['fecha'];
               $camposCit['doctor'] = $_POST['doctor'];
               $camposCit['consul'] = $_POST['consul'];
               //validacion de ingreso de citas en la base de datos
              if (!$this->Citas_model->ingresar_Cit($camposCit)){
              redirect(base_url().'Vista_RegistroCit_Estan');
               }else{
                Echo "Error al insertar";
               }
   
           }
               //funcion para ver las citas en rol estandar
                 public  function Ver_tablaCitaEstan (){
                   //llamda del modelo
                 $cita = $this->Citas_model->DatosCita();
   
                 $data['cita'] = $cita;
                 $data['ver']= $this->Config_model->ver_config();
                $this->load->view('layouts/aside', $data);
                     //llamda de las vistas de tipo estandar
                       $this->load->view('Estandar/tablaCitEstan_view',$data );
                    
                 }
   
   
   
   
   
    }
   
     ?>

