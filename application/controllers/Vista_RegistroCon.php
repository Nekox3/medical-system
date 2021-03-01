

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**registro para el control de los consulrotios 
    * 
    */
   class Vista_RegistroCon extends CI_Controller
   {
    
    public function __construct()
    {
      parent:: __construct();
       $this->load->model('Consultorio_model');   
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
                   $data['area']=$this->Consultorio_model->select_Area();
                  $data['mensajeInser']= "";
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
                $this->load->view('root&admin/Insert/registroCon_view', $data);
                 $this->load->view('layouts/footer');
                }else{
                      redirect(base_url().'root&admin/login_view'); 
                   }
   
             }
             //funcion para crear el numero de consultacion de forma aleatoria
            public function rand (){
   
                 $d=mt_rand(0,99999);
                
                 if ( strlen($d)==5) {
                     $idCon = "Con_{$d}";
   
                   }else{
                      if ( strlen($d)==4) {
                       $idCon = "Con_0{$d}";
                     }else{
                       if ( strlen($d)==3) {
                         $idCon = "Con_00{$d}";
                       }
                       else{
                         if ( strlen($d)==2) {
                           $idCon = "Con_000{$d}";
                       }else {
                            if ( strlen($d)==1) {
                              $idCon = "Con_0000{$d}";
                             }
                        }
                      }
                    }
   
                  }
   
                  $data['idCon'] = $idCon ;
                  return $data;
             }


             //funcion para la insercion de consultorios en los orles admin y root
             public function insercionConsultorio(){
              if($this->input->post("btnGuardar")){
                $this->form_validation->set_rules('idConsultorio', 'identificador de consultorio', 'required');
                $this->form_validation->set_rules('numConsultorio', 'numero de consultorio', 'required');
                $this->form_validation->set_rules('areas', 'areas', 'required');

                if ($this->form_validation->run()==TRUE) {
                  //captura de los datos de las vista
             $camposConsultorio['idConsultorio'] = $_POST['idConsultorio'];
             $camposConsultorio['numConsultorio'] = $_POST['numConsultorio'];
             $camposConsultorio['areas'] = $_POST['areas'];
             $this->Consultorio_model->ingresar_Consultorio($camposConsultorio);
             $data=$this->rand();
               $data['mensajeInser']= "<center>¡Inserción Exitosa!</center>";
               $this->load->view('layouts/header');
                $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
               $this->load->view('root&admin/Insert/registroCon1_view', $data);
                $this->load->view('layouts/footer');

                } else {
                  $data=$this->rand();
                $this->load->view('layouts/header');
                  $data['ver']= $this->Config_model->ver_config();
                  $this->load->view('layouts/aside', $data);
                  $data['mensajeInser']= "";
                $this->load->view('root&admin/Insert/registroCon_view', $data);
                 $this->load->view('layouts/footer');
                }
                
              }
             }

         /*  public function insercionConsultorio (){
             //captura de los datos de las vista
             $camposConsultorio['idConsultorio'] = $_POST['idConsultorio'];
             $camposConsultorio['numConsultorio'] = $_POST['numConsultorio'];
             $camposConsultorio['areas'] = $_POST['areas'];
             //validacion de el ingreso de los datos
             if (!$this->Consultorio_model->ingresar_Consultorio($camposConsultorio)){
               //redireccion de hacia la pagina para ver la insercion
                  $data=$this->rand();
                  $data['mensajeInser']= "<font color='black'><center>¡Inserción Exitosa!</center></font>";
                  $this->load->view('layouts/header');
                  $this->load->view('layouts/aside');
                  $this->load->view('root&admin/Insert/registroCon_view', $data);
                   $this->load->view('layouts/footer');
               }else{
                 Echo "Error al insertar";
                 }
           }*/
   
   //********************************* ROOT **************************************
   
           //funcion para ver la tabla
           public  function Ver_tablaCon (){
                
               #cargamos en la vista con los parametros...
               $params["consultorio"] = $this->Consultorio_model->DatosCon();
               $params['mensaje'] = "";
               $params['mensajeAct'] = "";
               $data['ver']= $this->Config_model->ver_config();
              $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
              $this->load->view('root&admin/Mostrar/tablaCon_view',$params );
           }
   
   
           //elimina el consultorio
           public function eliminarCon(){
   
             //$this->load->model('Consultorio_model');
             //captura el consultorio en espesifico desde el id
             $id=$this->uri->segment(3);
             //llamara de la funcion en el model para eliminar el consultorio
             $eli=$this->Consultorio_model->eliminarCon($id);
             //validacion de la eliminacion y llamada de la vista
             if ($eli == false) {
              $params["consultorio"] = $this->Consultorio_model->DatosCon();
               $params['mensaje'] = "<center>¡Eliminación Exitosa!</center>";
                $params['mensajeAct'] = "";
              $this->load->view('root&admin/Mostrar/tablaCon_view',$params );
             }else{
                 echo "no borrado";
               }
   
           }
   
           //funcion para obter los datos de un cosultorio en especifico
           public function actualizar(){
              //$this->load->model('Consultorio_model');
             //captura del consultorio en especifico
              $id=$this->uri->segment(3);
              //captura de los datos 
               $data['archivo']= $this->Consultorio_model->obtener($id);
               $data['area']= $this->Consultorio_model->select_Area();
               $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
             return $this->load->view('root&admin/Actualizar/actualizarCon_view', $data);
   
             }
             //funcion para capturar los datos que se van a actualizar
               public function actualizarCon(){
               $this->load->model('Consultorio_model');
                   //captura de los datos desde la vista actualizacion  
                   $camposConsultorio['id'] =strip_tags($_POST['id'],ENT_QUOTES);
                   $camposConsultorio['cod_consultorio'] =strip_tags($_POST['cod_consultorio'],ENT_QUOTES);
                   $camposConsultorio['consultorio'] = strip_tags($_POST['consultorio'],ENT_QUOTES);
                   $camposConsultorio['areas'] = strip_tags($_POST['areas'],ENT_QUOTES);
                   
                  //llamda de la funcion para actualizar
                   $this->Consultorio_model->Update($camposConsultorio);
                    $params["consultorio"] = $this->Consultorio_model->DatosCon();
               $params['mensaje'] = "";
               $params['mensajeAct'] = "<center>¡Actualización Exitosa!</center>";
               $data['ver']= $this->Config_model->ver_config();
            $this->load->view('layouts/aside', $data);
              $this->load->view('root&admin/Mostrar/tablaCon_view',$params );
   
   
               }
   
   //************************ **** ADMIN ***************************************
           //funcion para ver la tabla
           public  function Ver_tablaConAdmin (){
                 
                   #cargamos en la vista con los parametros...
                   $params["consultorio"] = $this->Consultorio_model->DatosCon();
                   $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
                  $this->load->view('root&admin/admin/tablaConAdmin_view',$params );
              }
   
            //elimina el consultorio
         public function eliminarConAdmin(){
               //$this->load->model('Consultorio_model');
           //captura el consultorio en espesifico desde el id
               $id=$this->uri->segment(3);
               //llamara de la funcion en el model para eliminar el consultorio
               $eli=$this->Consultorio_model->eliminarCon($id);
                //validacion de la eliminacion y llamada de la vista
               if ($eli == false) {
                 $this->Ver_tablaConAdmin();
                  }else{
                     echo "no borrado";
                   }
   
         } 
   
   
   
              //funcion para obter los datos de un cosultorio en especifico
             public function actualizarC(){
              $this->load->model('Consultorio_model');
              //captura del consultorio en especifico
                $id=$this->uri->segment(3);
             //captura de los datos
                $data['archivo']= $this->Consultorio_model->obtener($id);
                $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
               return $this->load->view('root&admin/admin/actualizarConAdmin_view', $data);
   
             }
   
              //funcion para capturar los datos que se van a actualizar
             public function actualizarConAdmin(){
             $this->load->model('Consultorio_model');
                //captura de los datos desde la vista actualizacion  
                 $camposConsultorio['id'] =strip_tags($_POST['id'],ENT_QUOTES);
                 $camposConsultorio['cod_consultorio'] =strip_tags($_POST['cod_consultorio'],ENT_QUOTES);
                 $camposConsultorio['consultorio'] = strip_tags($_POST['consultorio'],ENT_QUOTES);
                 $camposConsultorio['areas'] = strip_tags($_POST['areas'],ENT_QUOTES);
                 
                //llamda de la funcion para actualizar
                 $this->Consultorio_model->Update($camposConsultorio);
               $params["consultorio"] = $this->Consultorio_model->DatosCon();
               $params['mensaje'] = "";
               $params['mensajeAct'] = "<center>¡Actualización Exitosa!</center>";
               $data['ver']= $this->Config_model->ver_config();
              $this->load->view('layouts/asideAdmin',$data);
              $this->load->view('root&admin/Mostrar/tablaCon_view',$params );
   
             }
   
    }
   
    ?>

