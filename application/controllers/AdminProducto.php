<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProducto extends CI_Controller {

    public function vistaCabeceraConDatos()
	{
		$this->load->model('ParametrosModel');
        $parametros = $this->ParametrosModel->todos(); 

        $data = array('parametro'=>$parametros);

		$this->load->view('plantilla/utilidades_vista.php');
		$this->load->view('plantilla/cabecera_admin.php',$data);
	}

    
}