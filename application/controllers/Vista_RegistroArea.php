

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
    * 
    */
   class Vista_RegistroArea extends CI_Controller
   {
     
     public function __construct()
     {
       parent:: __construct();
         $this->load->model('Area_model');
         $this->load->model("Config_model");
         $this->load->library('form_validation');
         
     }
   //funcion para cargar el tipo de rol en area
     public function index(){
      if ($tipo=$this->session->userdata("acceso") == 'root' or 'admin'){
             if ($tipo == 'root'){
                  $switch = 'root';
               }else{
                      $switch = 'admin';
                     }
                $data=$this->rand();
                $this->load->view('layouts/header');
                $data['mensajeInser']= "";
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
   
                       $this->load->view('root&admin/Insert/registroArea_view', $data);
                       $this->load->view('layouts/footer');
        }else{
              redirect(base_url().'root&admin/login_view'); 
              }
     }
   
   
   //funcion para crear el ID del area
         public function rand (){
               $d=mt_rand(0,99999);
               if ( strlen($d)==5) {
                   $idArea = "Area_{$d}";
   
                 }else{
                    if ( strlen($d)==4) {
                     $idArea = "Area_0{$d}";
                   }else{
                     if ( strlen($d)==3) {
                       $idArea = "Area_00{$d}";
                     }
                     else{
                       if ( strlen($d)==2) {
                         $idArea = "Area_000{$d}";
                     }else {
                          if ( strlen($d)==1) {
                            $idArea = "Area_0000{$d}";
                           }
                      }
                    }
                  }
   
                }
   
                $data['idArea'] = $idArea ;
                return $data;
           }
   
            //funcion para insertar un area con el tipo de rol root y admin
           public function insercionArea (){
   
            if($this->input->post("btnGuardar")){
   
                $this->form_validation->set_rules('id_Area', 'id_Area', 'required');
                 $this->form_validation->set_rules('area', 'area', 'required');
   
                 if($this->form_validation->run()==true){ //Si la validación es correcta
   
                 $camposArea['id_Area'] = $_POST['id_Area'];
                 $camposArea['area'] = $_POST['area'];
                 
                  $this->Area_model->ingresar_Area($camposArea);
   
                  $data=$this->rand();
                  $data['mensajeInser']= "<font color='black'><center>¡Inserción Exitosa!</center></font>";
                  $this->load->view('layouts/header');
                  $data['ver']= $this->Config_model->ver_config();
                   $this->load->view('layouts/aside', $data);
                  $this->load->view('root&admin/Insert/registroArea1_view', $data);
                   $this->load->view('layouts/footer');
               }else{
                   $data=$this->rand();
                 
                  $this->load->view('layouts/header');
                 $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                  $this->load->view('root&admin/Insert/registroArea_view', $data);
                   $this->load->view('layouts/footer');
                }
             }
         }
   
   
   
   //********************************* ROOT *****************************************
   
   //funcion para poder ver la tabla desde el rol root incluyendo la paginacion.
                 public  function Ver_tablaArea (){
                       
                       #cargamos en la vista con los parametros...
                          $params["area"] = $this->Area_model->DatosArea();
                           $params['mensaje'] = "";
                            $params['mensajeAct'] = "";
                            $data['ver']= $this->Config_model->ver_config();
                            $this->load->view('layouts/aside', $data);
                         $this->load->view('root&admin/Mostrar/tablaArea_view',$params );#, $data);
                        
                   }
   
   
                  
   
   
        
   
   //funcion para actualizar desde el rol root, esta manda a llamar los datos directamente para el valor que se pide
         public function actualizar(){
          $this->load->model('Area_model');
            $id=$this->uri->segment(3);//captura el el id de la area para poder extraer los datos espesificos
   
            $data['archivo']= $this->Area_model->obtener($id);
            $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
           return $this->load->view('root&admin/Actualizar/actualizarArea_view', $data);
         }
   
   
         //funcion para actualizar los datos desde el root 
           public function actualizarArea(){
           $this->load->model('Area_model');
             //captura de datos 
               $camposArea['id'] =strip_tags($_POST['id'],ENT_QUOTES);
               $camposArea['cod_area'] =strip_tags($_POST['cod_area'],ENT_QUOTES);
               $camposArea['area'] = strip_tags($_POST['area'],ENT_QUOTES);
              //invocaion del modelo para actulizar en la base
               $this->Area_model->Update($camposArea);
               //$this->Ver_tablaAreaAdmin();
               $params["area"] = $this->Area_model->DatosArea();
                $params['mensajeAct'] = "<center>¡Actualización Exitosa!</center>";
                 $params['mensaje'] = "";
                 $data['ver']= $this->Config_model->ver_config();
                        $this->load->view('layouts/aside', $data);
                         $this->load->view('root&admin/Mostrar/tablaArea_view',$params );
   
           }
   
   
           //eliminacion del area desde el root
             public function eliminarArea(){
                 $this->load->model('Consultorio_model');
                    $id=$this->uri->segment(3);//captura del elemento a eliminar
                    $id1=$this->uri->segment(4);
                   //$eli=$this->Area_model->eliminarArea($id);
                  if ($this->Consultorio_model->obtenerArea($id1)) {
                   //$this->Ver_tablaArea();
                   $params["consultorio"] = $this->Consultorio_model->DatosCon();
                   $params['mensaje'] = "<font color='black'><center>¡Eliminación imposible! ".$id1.", Tiene una consultorio!!! </center></font>";
                   $params['mensajeAct'] = "";
                   $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
                   $this->load->view('root&admin/Mostrar/tablaCon_view',$params );
                  }else
                      {
                       $eli=$this->Area_model->eliminarArea($id);
                       $params['mensaje'] = "<font color='black'><center>¡Eliminación Exitosa!</center></font>";
                       $params['mensajeAct'] = "";
                       $params["area"] = $this->Area_model->DatosArea();
                       $data['ver']= $this->Config_model->ver_config();
                        $this->load->view('layouts/aside', $data);
                       $this->load->view('root&admin/Mostrar/tablaArea_view',$params );
   
                      }
             }
   
   
           
   //*************************************** ADMIN ***************************************
   
   //funcion para visualizar la tabla de area en rol administrador
         public  function Ver_tablaAreaAdmin (){
                
               $params["area"] = $this->Area_model->DatosArea();
                $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);            
               $this->load->view('root&admin/admin/tablaAreaAdmin_view',$params );   
         }
   
   
   
                 
   
   //funcion para actualizar desde el rol administrador, esta manda a llamar los datos directamente para el valor que se pide
           public function actualizarA(){
            $this->load->model('Area_model');
              $id=$this->uri->segment(3);
   
              $data['archivo']= $this->Area_model->obtener($id);
              $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);           
             return $this->load->view('root&admin/admin/actualizarAreaAdmin_view', $data);
   
           }
   //funcion para actualizar los datos desde el admin
           public function actualizarAreaAdmin(){
           $this->load->model('Area_model');
             
               $camposArea['id'] =strip_tags($_POST['id'],ENT_QUOTES);
               $camposArea['cod_area'] =strip_tags($_POST['cod_area'],ENT_QUOTES);
               $camposArea['area'] = strip_tags($_POST['area'],ENT_QUOTES);
              
               $this->Area_model->Update($camposArea);
               $this->Ver_tablaAreaAdmin();
   
           }
   
   //eliminacion del area desde el admin        
           public function eliminarAreaAdmin(){
               $this->load->model('Area_model');
                 $id=$this->uri->segment(3);
                 $eli=$this->Area_model->eliminarArea($id);
                if ($eli == false) {
                 $this->Ver_tablaAreaAdmin();
                }else
                  {
                 echo "no borrado";
                  }
           }
   
   
   
   
   }
   ?>

