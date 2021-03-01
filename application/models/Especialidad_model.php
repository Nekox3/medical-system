

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   /**
    * 
    */
   class Especialidad_model extends CI_Model
   {
   
   public function ingresar_Esp($camposEsp){
   
        $this->db->set('cod_especialidad', $camposEsp['cod_Especialidad']);
        $this->db->set('especialidad', $camposEsp['especialidad']);
            
        
   
        $this->db->insert('especialidad');
        
    }
   
    public function DatosEsp(){
       $especialidad = $this->db->get('especialidad');
       return $especialidad->result();
   }
   
   public function eliminarEsp($id){
   
       $this->db->where('id_esp', $id);
       $this->db->delete('especialidad');   
   }
   
   public function obtener($id){
   
           $this->db->select('*');
           $this->db->from('especialidad');
           $this->db->where('id_esp ='.$id);
               $contacto = $this->db->get();
               
           return $contacto->row();
   
           }
   
   
   
   
   
   
   public function Update($camposEspecialidad){
           
           $this->db->set('cod_especialidad', $camposEspecialidad['cod_Especialidad']);
           $this->db->set('especialidad', $camposEspecialidad['especialidad']);
           $this->db->where('id_esp', $camposEspecialidad['id']);
           $this->db->update('especialidad');
   }
   
   
   
     public function buscador($dato){
               //$this->db->where('archivo', $dato['dato']);
               $this->db->or_like('cod_especialidad', $dato['dato']);
               $this->db->or_like('especialidad', $dato['dato']);
               $this->db->or_like('id_esp', $dato['dato']);
             
   
               $contacto = $this->db->get('especialidad');
   
               return $contacto->result();
               }
   
   }
   
   
   ?>

