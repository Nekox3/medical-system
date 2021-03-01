<?php

class Logout extends CI_Controller
{
	//funcion para cerrar la secion
	public function index()
	{
		//destruccion de la secion
		$this->session->sess_destroy();
		redirect(base_url().'Auth');
	}
	
}

