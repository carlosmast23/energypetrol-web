<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function vistaCabeceraConDatos()
	{
		$this->load->model('ParametrosModel');
        $parametros = $this->ParametrosModel->todos(); 

        $data = array('parametro'=>$parametros);

		$this->load->view('plantilla/utilidades_vista.php');
		$this->load->view('plantilla/cabecera_admin.php',$data);
	}


	public function index()
	{
		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Parametros Generales','ruta'=>'index'));
		$this->load->view('admin/index.php');
		$this->load->view('plantilla/piepagina.php');
	}

	public function videos()
	{
		$this->load->model('VideoModel');
        $result = $this->VideoModel->todosVideo();
        //$result=$this->db->get('pregunta');
        $data = array('consulta' => $result);
		$this->videosPagina($data);
	}

	public function videoEditar()
	{
		$this->load->model('VideoModel');
        $this->VideoModel->editar(
            $this->input->post("id"),
            $this->input->post("titulo"),
            $this->input->post("url_video")

        );
        redirect('admin/videos');
	}

	public function videoEditarVista($id = NULL)
	{
		$this->load->model('VideoModel');
        $result = $this->VideoModel->buscarPorId($id);
        //$result=$this->db->get('pregunta');
        $data = array('consulta' => $result);

        $this->load->view('plantilla/cabecera_admin');
        $this->load->view('admin/video_editar.php',$data);
        $this->load->view('plantilla/piepagina');
	}

	public function videoCrear()
	{
		$this->load->model("VideoModel");

        $add = $this->VideoModel->crearVideo(
            $this->input->post("titulo"),
            $this->input->post("url_video")            
		);
		redirect('admin/videos');
	}

	public function videoEliminar($id = NULL)
    {
        if($id != NULL)
        {
            $this->load->model("VideoModel");
            $this->VideoModel->eliminar($id);
            redirect('admin/videos');

        }
    }


	public function videosPagina($data)
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Gestionar Videos','ruta'=>'videos'));
		//s$this->load->view('plantilla/cabecera_admins.php',$data);
		$this->load->view('admin/videos_admin.php',$data);
		$this->load->view('plantilla/piepagina.php');
	
	}
	
	public function producto()
	{
		
		$this->load->view('plantilla/cabecera_admin.php');
		$this->load->view('admin/producto_admin.php');
		$this->load->view('plantilla/piepagina.php');
	}

	public function grabarParametros()
	{
		$this->load->model('ParametrosModel');
		
		$this->ParametrosModel->editar(
			"correo",
            $this->input->post("correo")
		);
		
		$this->ParametrosModel->editar(
			"telefono",
            $this->input->post("telefono")
		);
		
		$this->ParametrosModel->editar(
			"facebook",
            $this->input->post("facebook")
		);
		
		$this->ParametrosModel->editar(
			"twiter",
            $this->input->post("twiter")
		);
		
		$this->ParametrosModel->editar(
			"google",
            $this->input->post("google")
		);
		
		$this->ParametrosModel->editar(
			"linkedin",
            $this->input->post("linkedin")
		);
		
		$this->ParametrosModel->editar(
			"pie_pagina",
            $this->input->post("piePagina")
        );

        redirect('admin/index');
	}

}
