

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   /**
    * 
    */
   class Doctor_model extends CI_Model
   {
   
       public function select_Especialidad (){
   
       $arrEspecialidad = $this->db->get('especialidad');

    return $arrEspecialidad->result();

       }
       
   public function ingresar_Doctor($camposDoctor){
   
        $this->db->set('cod_doctor', $camposDoctor['id_Doctor']);
        $this->db->set('nombre_doctor', $camposDoctor['nombreDoctor']);
        $this->db->set('apellido_doctor', $camposDoctor['apellidoDoctor']);
        $this->db->set('especialidad_id', $camposDoctor['especialidadDoctor']);
        $this->db->set('turno', $camposDoctor['turnoDoctor']);
        $this->db->set('edad_doctor', $camposDoctor['edadDoctor']);
        $this->db->set('telefono', $camposDoctor['telefonoDoctor']);
        $this->db->set('direccion', $camposDoctor['Direccion']);
        
   
        $this->db->insert('medico');
        
    }
   
      public function DatosDoc(){
        
       $doctor = $this->db->get('medico');
       return $doctor->result();
   }
       public function DatosDoct(){
        $this->db->select('id_doctor, medico.cod_doctor, medico.nombre_doctor, medico.apellido_doctor, medico.edad_doctor, especialidad.especialidad, medico.turno, medico.telefono, medico.direccion');
    $this->db->from('medico');
    $this->db->join('especialidad', 'especialidad.cod_especialidad = medico.especialidad_id');
    $doct = $this->db->get();
    return $doct->result();
   }
   
   public function obtener($id){
   
           $this->db->select('*');
           $this->db->from('medico');
           $this->db->where('id_doctor ='.$id);
               $contacto = $this->db->get();
               
           return $contacto->row();
   
           }
   
   
   
   public function eliminarDoc($id){
   
       $this->db->where('id_doctor', $id);
       $this->db->delete('medico');   
   }
   
           public function Update($camposDoctor){
           
           $this->db->set('cod_doctor', $camposDoctor['id_Doctor']);
           $this->db->set('nombre_doctor', $camposDoctor['nombreDoctor']);
           $this->db->set('apellido_doctor', $camposDoctor['apellidoDoctor']);
           $this->db->set('especialidad_id', $camposDoctor['especialidadDoctor']);
           $this->db->set('turno', $camposDoctor['turnoDoctor']);
           $this->db->set('edad_doctor', $camposDoctor['edadDoctor']);
           $this->db->set('telefono', $camposDoctor['telefonoDoctor']);
           $this->db->set('direccion', $camposDoctor['Direccion']);
           $this->db->where('id_doctor', $camposDoctor['id']);
           $this->db->update('medico');
   }
   
   
    public function buscador($dato){
               //$this->db->where('archivo', $dato['dato']);
               $this->db->or_like('id_doctor', $dato['dato']);
               $this->db->or_like('cod_doctor', $dato['dato']);
               $this->db->or_like('nombre_doctor', $dato['dato']);
               $this->db->or_like('apellido_doctor', $dato['dato']);
               $this->db->or_like('especialidad_id',$dato['dato']);
               $this->db->or_like('turno', $dato['dato']);
               $this->db->or_like('edad_doctor', $dato['dato']);
               $this->db->or_like('telefono', $dato['dato']);
               $this->db->or_like('direccion', $dato['dato']);
               $contacto = $this->db->get('medico');
   
               return $contacto->result();
               }
     public function Verificar($id1){
   
         $this->db->select('especialidad_id');
           $this->db->from('medico');
           $this->db->where('especialidad_id =',$id1);
               $contacto = $this->db->get();
           return $contacto->result_array();
             
   }
   
   
   
   }
   
   
   
   ?>

