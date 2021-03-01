

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
    * 
    */
   class Auth extends CI_Controller
   {
     
     public function __construct()
     {
       parent:: __construct();
       $this->load->model("login_model");
   
     }
   
   
     public function index(){
       #crear las opciones 
       //inicializa con la funcion session para el acceso del logeo
         switch ($this->session->userdata('acceso')) {
           case '':
               $data['error'] = "";
               $data['token'] = $this->token();
               $data['page_title'] = 'login';
               //carga la vista del login
               $this->load->view('root&admin/login_view', $data);
           break;
           //carga el controlador dependiendo del tipo de rol
           case 'root':
              #carga el controla de root
              redirect(base_url().'Vista_Root'); 
   
           case 'admin':
              #Aqui vas poner econtrolador del admin
              redirect(base_url().'Vista_Admin'); 
           break;
   
            case 'estan':
              #Aqui vas poner econtrolador del estandar
              redirect(base_url().'Vista_Estan'); 
           break;
                  default:
           $data['error'] = "";
           $data['token'] = $this->token();
           $data['page_title'] = 'Iniciar Sesion';
           $this->load->view('root&admin/login_view', $data);
          
           break;
         }
     
         }
   
   
   
   //
    public function login(){

    if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {
     
    $user = $this->input->post('user');
    $pass = $this->input->post('contra');

        if ( $this->login_model->verificar_usuario($user)) {
          if ($this->login_model->verificar_contra($user,md5($pass))) {
           $chk_usr = $this->login_model->verificar_contra($user, md5($pass));
            $session_data = array('rol' => $chk_usr->usuario,'acceso' => $chk_usr->rol);
            $this->session->set_userdata($session_data);
            $this->index();
          } else {
               $this->session->set_flashdata("error","<center>Contraseña no es correcta</center>");
             // redirect(base_url());
             /*$this->index();*/
        $data['error'] = "";
        $data['token'] = $this->token();
        $data['page_title'] = 'Iniciar Sesion';
        $this->load->view('root&admin/login_view', $data);
          }
         
         
        }else{
        
          $this->session->set_flashdata("error","<center>El usuario o contraseña no son correctos</center>");
          redirect(base_url());
        }
       
      }else {
       $this->index();
      }
  }
   
     public function token(){
       $token = md5(uniqid(rand(),true));
       $this->session->set_userdata('token', $token);
       return $token;
   
     }
   
   
   
   }
   ?>

