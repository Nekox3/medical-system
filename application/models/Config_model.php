<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Config_model extends CI_Model
{

public function subir($imagen, $ins, $tipo, $rubro){

		$data=array(
			'imagen' =>$imagen, 
			'nombre_inst' =>$ins,
			'tipo' =>$tipo,
			'rubro' =>$rubro,
			
				);
		$this->db->update('configuracion', $data);
			}


			


		
		public function ver_config(){
			$this->db->select('*');
			$ver = $this->db->get('configuracion');
			return $ver->row();
		}
}
?>