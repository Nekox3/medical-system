

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   /**
    * 
    */
   class Consultorio_model extends CI_Model
   {
   
    public function select_Area (){

    $arrArea = $this->db->get('area');

    return $arrArea->result();
       }
   
   public function ingresar_Consultorio($camposConsultorio){
   
        $this->db->set('cod_consultorio', $camposConsultorio['idConsultorio']);
        $this->db->set('consultorio', $camposConsultorio['numConsultorio']);
            $this->db->set('area_id', $camposConsultorio['areas']);
        
   
        $this->db->insert('consultorio');
        
    }
      
   public function DatosCon(){
        $this->db->select('consultorio.id_con, consultorio.cod_consultorio, consultorio.consultorio, area.area');
    $this->db->from('consultorio');
    $this->db->join('area','area.cod_area=consultorio.area_id');
    $consul = $this->db->get();
    return $consul->result();
}
   
   
   public function obtener($id){
   
           $this->db->select('*');
           $this->db->from('consultorio');
           $this->db->where('id_con ='.$id);
               $contacto = $this->db->get();
               
           return $contacto->row();
   
           }
     public function obtenerArea($id1){
   
           $this->db->select('*');
           $this->db->from('consultorio');
           $this->db->where('area_id =',$id1);//aqui lo toque un punto 
               $contacto = $this->db->get();
               
           return $contacto->row();
   }
   
   
   public function eliminarCon($id){
   
       $this->db->where('id_con', $id);
       $this->db->delete('consultorio');   
   }
   
    public function Update($camposConsultorio){
           
           $this->db->set('cod_consultorio', $camposConsultorio['cod_consultorio']);
           $this->db->set('consultorio', $camposConsultorio['consultorio']);
           $this->db->set('area_id', $camposConsultorio['areas']);
           $this->db->where('id_con', $camposConsultorio['id']);
           $this->db->update('consultorio');
   }
   
   }
   ?>

