<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login_model extends CI_Model
{
	
public    function verificar_usuario($user)
    {

        $this->db->select("usuarios, rol");
        $this->db->where("usuarios", $user);
        //$this->db->where("contrasena",$pass);
       
            # code...
        $resultados = $this->db->get("usuario");
        return ($resultados->num_rows() == 1) ? $resultados->row(): false;
       
           
    }

public    function verificar_contra($user,$pass)
    {

        $this->db->select("*");
        $this->db->where("contrasena", $pass);
        $this->db->where("usuarios", $user);
        //$this->db->where("contrasena",$pass);
       
            # code...
        $resultados = $this->db->get("usuario");
        return ($resultados->num_rows() == 1) ? $resultados->row(): false;
       
           
    }

}
?>