<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   /**
    * 
    */
   class Area_model extends CI_Model
   {
    
   public function ingresar_Area($camposArea){
   
        $this->db->set('cod_area', $camposArea['id_Area']);
        $this->db->set('area', $camposArea['area']);
        $this->db->insert('area');
        
    }
   
    public function DatosArea(){
       $area = $this->db->get('area');
       return $area->result();
   }
   
   
   
   public function eliminarArea($id){
   
       $this->db->where('id_area', $id);
       $this->db->delete('area');   
   }
   
   public function obtener($id){
   
           $this->db->select('*');
           $this->db->from('area');
           $this->db->where('id_area ='.$id);
               $contacto = $this->db->get();
               
           return $contacto->row();
   
           }
   
   public function Update($camposArea){
           
           $this->db->set('cod_area', $camposArea['cod_area']);
           $this->db->set('area', $camposArea['area']);
           $this->db->where('id_area', $camposArea['id']);
           $this->db->update('area');
   }
   
   
    public function buscador($dato){
                   //$this->db->where('archivo', $dato['dato']);
                   $this->db->or_like('cod_area', $dato['dato']);
                   $this->db->or_like('area', $dato['dato']);
                   $this->db->or_like('id_area', $dato['dato']);
                   $contacto = $this->db->get('area');
   
                   return $contacto->result();
                   }
   }
   ?>

