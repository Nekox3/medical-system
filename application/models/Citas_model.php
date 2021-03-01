

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   /**
    * 
    */
   class Citas_model extends CI_Model
   {
    
   public function select_Doctor (){
   
  $this->db->select("id_doctor,cod_doctor, CONCAT(nombre_doctor,' ',apellido_doctor) as nombred");
$this->db->from('medico');

$arrDoctor = $this->db->get();
return $arrDoctor->result();

    }


    public function calendario(){

        $this->db->select('*');        
        $this->db->from('calendario');

       return $this->db->get()->result_array();

        }

        
   
   public function select_Consultorio (){
   
   $arrConsultorio = $this->db->get('consultorio');
    return $arrConsultorio->result();
        
    }
   
   
   public function ingresar_Cit($camposCitas){
   
        $this->db->set('cod_citas', $camposCitas['id_Cita']);
        $this->db->set('archivo_id', $camposCitas['archivo']);
        $this->db->set('hora', $camposCitas['hora']);
        $this->db->set('fecha', $camposCitas['fecha']);
        $this->db->set('doctor_id', $camposCitas['doctor']);
        $this->db->set('consultorio_id', $camposCitas['consul']);
        $this->db->set('fech',  $camposCitas['fech']);
            
        
   
        $this->db->insert('registro_citas');
        
    }
   
   
   
   public function DatosCita(){
   $this->db->select("registro_citas.id_cit, registro_citas.cod_citas, CONCAT(datos_pacientes.nombre_paciente, ' ',datos_pacientes.apellido_paciente) as nombrep, registro_citas.fecha, registro_citas.hora, CONCAT(medico.nombre_doctor,' ',medico.apellido_doctor) as nombre, consultorio.consultorio");
$this->db->from('registro_citas');
$this->db->join('datos_pacientes','datos_pacientes.archivo = registro_citas.archivo_id');
$this->db->join('medico','medico.cod_doctor = registro_citas.doctor_id');
$this->db->join('consultorio','consultorio.cod_consultorio=registro_citas.consultorio_id');
$cita = $this->db->get(); 
return $cita->result();
   }
   
   public function Verificar($id1){
   
         $this->db->select('archivo_id');
           $this->db->from('registro_citas');
           $this->db->where('archivo_id =',$id1);
               $contacto = $this->db->get();
           return $contacto->result_array();
             
   }
   
   public function obtener($id){
   
           $this->db->select('*');
           $this->db->from('registro_citas');
           $this->db->where('id_cit =',$id);//aqui lo toque un punto 
               $contacto = $this->db->get();
               
           return $contacto->row();
   }
   
   public function obtenerXpaciente($id1){
   
                       $this->db->select('*');
                       $this->db->from('registro_citas');
                       $this->db->where('archivo_id =',$id1);
                           $contacto = $this->db->get();
                           
                       return $contacto->result();
   
                       }
   
   public function eliminarCit($id){
   
       $this->db->where('id_cit', $id);
       $this->db->delete('registro_citas');   
   }
   
   public function Update($camposCitas){
           
           $this->db->set('cod_citas', $camposCitas['cod_citas']);
           $this->db->set('archivo_id', $camposCitas['archivo_id']);
           $this->db->set('hora', $camposCitas['hora']);
           $this->db->set('fecha', $camposCitas['fecha']);
           $this->db->set('doctor_id', $camposCitas['doctor_id']);
           $this->db->set('consultorio_id', $camposCitas['consultorio_id']);
           $this->db->set('fech', $camposCitas['fech']);
           
           $this->db->where('id_cit', $camposCitas['id']);
           $this->db->update('registro_citas');
   }
   

    
   

   }
   ?>

