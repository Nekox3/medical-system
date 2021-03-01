

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   /**
    * 
    */
   class Usuario_model extends CI_Model
   {
   public function ingresar_Usuario($camposUsuario){
   
        $this->db->set('nombre', $camposUsuario['nombreUsuario']);
        $this->db->set('apellido', $camposUsuario['apellidoUsuario']);
            $this->db->set('usuarios', $camposUsuario['usuario']);
        $this->db->set('rol', $camposUsuario['rol']);
        $this->db->set('contrasena',$camposUsuario['contra']);
   
        $this->db->insert('usuario');
        
    }


   
    public function DatosUsu(){
       $usu = $this->db->get('usuario');
       return $usu->result();
   }
   
   public function obtener($id){
   
           $this->db->select('*');
           $this->db->from('usuario');
           $this->db->where('id_user ='.$id);
               $contacto = $this->db->get();
               
           return $contacto->row();
   
           }
   
   
   
   
   
   
   public function eliminarUsu($id){
   
       $this->db->where('id_user', $id);
       $this->db->delete('usuario');   
   }
   
           public function Update($camposUsu){
           
           $this->db->set('nombre', $camposUsu['nombreUsu']);
           $this->db->set('apellido', $camposUsu['apellidoUsu']);
           $this->db->set('usuarios', $camposUsu['Usu']);
           $this->db->set('contrasena', $camposUsu['contra']);
           $this->db->set('rol', $camposUsu['rolUsu']);
           $this->db->where('id_user', $camposUsu['id']);
           $this->db->update('usuario');
   }
   
   
   
    public function buscador($dato){
                   //$this->db->where('archivo', $dato['dato']);
                   $this->db->or_like('nombre', $dato['dato']);
                   $this->db->or_like('apellido', $dato['dato']);
                   $this->db->or_like('usuarios', $dato['dato']);
                   $this->db->or_like('rol', $dato['dato']);
   
                   $contacto = $this->db->get('usuario');
   
                   return $contacto->result();
                   }
   

    public function Verificar($id1){

   
         $this->db->select('usuarios');
           $this->db->from('usuario');
           $this->db->where('usuarios',$id1);
            $contacto = $this->db->get();
           if($contacto->num_rows()>0){
            return false;
           }else{
            return true;
           }
             
    }
   }
   
   
   
   ?>
           
