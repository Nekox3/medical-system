

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   /**
    * 
    */
   class Paciente_model extends CI_Model
   {
    
            public function ingresar_Paciente($camposPaciente){
   
                $this->db->set('archivo', $camposPaciente['archivo']);
                $this->db->set('nombre_paciente', $camposPaciente['nombrePaciente']);
                $this->db->set('apellido_paciente', $camposPaciente['apellidoPaciente']);
                $this->db->set('genero', $camposPaciente['sexo_paciente']);
                $this->db->set('edad', $camposPaciente['edadPaciente']);
                $this->db->set('direccion', $camposPaciente['direccionPaciente']);
                $this->db->set('peso', $camposPaciente['pesoPasiente']);
                $this->db->set('telefono', $camposPaciente['telefonoPaciente']);
                $this->db->set('estado_familiar', $camposPaciente['estado_paciente']);
                $this->db->set('referencia', $camposPaciente['referencia']);
                $this->db->set('centro_asistencial', $camposPaciente['centroAsisten']);
   
                $this->db->insert('datos_pacientes');
                
            }
   
       
               public function DatosPac(){
                   $paciente = $this->db->get('datos_pacientes');
                   return $paciente->result();
               }
   
   
   
   
               public function obtener($id){
   
                       $this->db->select('*');
                       $this->db->from('datos_pacientes');
                       $this->db->where('id_pac ='.$id);
                           $contacto = $this->db->get();
                           
                       return $contacto->row();
   
                       }
   
                       public function obtenerArchivo($id){
   
                       $this->db->select('archivo, genero');
                       $this->db->from('datos_pacientes');
                       $this->db->where('id_pac ='.$id);
                           $contacto = $this->db->get();
                           
                       return $contacto->result();
   
                       }
   
               public function eliminarPac($id){
   
                   $this->db->where('id_pac', $id);
                   $this->db->delete('datos_pacientes');   
               }
   
           public function Update($camposPaciente){
                   
                   $this->db->set('archivo', $camposPaciente['archivo']);
                   $this->db->set('nombre_paciente', $camposPaciente['nombrePaciente']);
                   $this->db->set('apellido_paciente', $camposPaciente['apellidoPaciente']);
                   $this->db->set('genero', $camposPaciente['sexo_paciente']);
                   $this->db->set('edad', $camposPaciente['edadPaciente']);
                   $this->db->set('direccion', $camposPaciente['direccionPaciente']);
                   $this->db->set('peso', $camposPaciente['pesoPasiente']);
                   $this->db->set('telefono', $camposPaciente['telefonoPaciente']);
                   $this->db->set('estado_familiar', $camposPaciente['estado_paciente']);
                   $this->db->set('referencia', $camposPaciente['referencia']);
                   $this->db->set('centro_asistencial', $camposPaciente['centroAsisten']);
                   $this->db->where('id_pac', $camposPaciente['id']);
                   $this->db->update('datos_pacientes');
                   }
   
   
   
   public function buscador($dato){
   //$this->db->where('archivo', $dato['dato']);
   $this->db->or_like('archivo', $dato['dato']);
   $this->db->or_like('nombre_paciente', $dato['dato']);
   $this->db->or_like('apellido_paciente', $dato['dato']);
   $this->db->or_like('genero', $dato['dato']);
   $this->db->or_like('edad', $dato['dato']);
   $this->db->or_like('direccion', $dato['dato']);
   $this->db->or_like('peso', $dato['dato']);
   $this->db->or_like('telefono', $dato['dato']);
   $this->db->or_like('estado_familiar', $dato['dato']);
   $this->db->or_like('referencia', $dato['dato']);
   $this->db->or_like('centro_asistencial', $dato['dato']);
   
   $contacto = $this->db->get('datos_pacientes');
   
   return $contacto->result();
   }
   
   
   }
   ?>

