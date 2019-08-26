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
			$this->input->post("url_video"),
			$this->input->post("orden")

        );
        redirect('admin/videos');
	}

	public function videoEditarVista($id = NULL)
	{
		$this->load->model('VideoModel');
        $result = $this->VideoModel->buscarPorId($id);
        //$result=$this->db->get('pregunta');
        $data = array('consulta' => $result);

		//$this->load->view('plantilla/cabecera_admin');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Editar Videos','ruta'=>'videoEditar'));
        $this->load->view('admin/video_editar.php',$data);
        $this->load->view('plantilla/piepagina');
	}

	public function videoCrear()
	{
		$this->load->model("VideoModel");

        $add = $this->VideoModel->crearVideo(
            $this->input->post("titulo"),
			$this->input->post("url_video"),
			$this->input->post("orden")
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
		$this->load->model('ProductoVentaModel');
		$result = $this->ProductoVentaModel->todos();
		
		$this->load->model('CategoriaModel');
        $categorias = $this->CategoriaModel->todos();
		
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Producto','ruta'=>'producto'));
		$this->load->view('admin/producto_admin.php',array('consulta' =>$result,'categorias' =>$categorias));
		$this->load->view('plantilla/piepagina.php');
	}

	public function productoEditarVista($id = NULL)
	{
		$this->load->model('ProductoVentaModel');
		$result = $this->ProductoVentaModel->buscarPorId($id);
		
		$this->load->model('CategoriaModel');
        $categorias = $this->CategoriaModel->todos();
		
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Editar Producto','ruta'=>'productoEditarVista'));
		$this->load->view('admin/producto_editar.php',array('consulta' =>$result,'categorias' =>$categorias));
		$this->load->view('plantilla/piepagina.php');
	}

	public function productoEditar()
	{
		
		$this->load->model("ArchivoModel");
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");
		
		$this->load->model('ProductoVentaModel');
        $this->ProductoVentaModel->editar(
			$this->input->post("id"),
			$this->input->post("categoria"),
            $this->input->post("nombre"),
			$this->input->post("descripcion"),			
			$imagenNombre,
			$this->input->post("orden")			
		);
        redirect('admin/producto');
	}

	public function productoGrabar()
	{
		$this->load->model('ProductoVentaModel');
		$this->load->model("ArchivoModel");
		//echo "archivo subir ->".$this->upload;
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");

		$this->load->model("ProductoVentaModel");		
        $add = $this->ProductoVentaModel->crear(
			$this->input->post("categoria"),
            $this->input->post("nombre"),
			$this->input->post("descripcion"),			
			$imagenNombre,
			$this->input->post("orden")			
		);
		
		//echo $imagenNombre;
		redirect('admin/producto');
	}

	public function productoEliminar($id = NULL)
	{
		if($id != NULL)
        {
            $this->load->model("ProductoVentaModel");
            $this->ProductoVentaModel->eliminar($id);
            redirect('admin/producto');

        }
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

	public function categoria()
	{
		$this->load->model('CategoriaModel');
		$result = $this->CategoriaModel->todos();
		
		$this->load->model('CategoriaProductoModel');
        $tipos = $this->CategoriaProductoModel->todos();

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Categoria Producto','ruta'=>'categoria'));
		$this->load->view('admin/categoria_admin.php',array('consulta' =>$result,'tipos'=>$tipos));
		$this->load->view('plantilla/piepagina.php');
	}

	public function categoriaEditarVista($id = NULL)
	{
		$this->load->model('CategoriaModel');
		$result = $this->CategoriaModel->buscarPorId($id);
		
		$this->load->model('CategoriaProductoModel');
        $tipos = $this->CategoriaProductoModel->todos();

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Editar Categoria Producto','ruta'=>'categoriaEditarVista'));
		$this->load->view('admin/categoria_editar.php',array('consulta' =>$result,'tipos'=>$tipos));
		$this->load->view('plantilla/piepagina.php');
	}

	public function categoriaEditar()
	{	
		$this->load->model("ArchivoModel");
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");
		
		$this->load->model('CategoriaModel');
        $this->CategoriaModel->editar(
			$this->input->post("id"),
			$this->input->post("tipo"),
			$this->input->post("nombre"),
			$this->input->post("descripcion"),
			$imagenNombre,
			$this->input->post("archivo_descarga")

        );
        redirect('admin/categoria');
	}

	public function categoriaEliminar($id = NULL)
	{
		if($id != NULL)
        {
            $this->load->model("CategoriaModel");
            $this->CategoriaModel->eliminar($id);
            redirect('admin/categoria');

        }
	}

	public function categoriaCrear()
	{
		$this->load->model("ArchivoModel");
		//echo "archivo subir ->".$this->upload;
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");

		$this->load->model("CategoriaModel");
		
        $add = $this->CategoriaModel->crear(
			$this->input->post("tipo"),
            $this->input->post("nombre"),
			$this->input->post("descripcion"),
			$imagenNombre,
			$this->input->post("archivo_descarga")
		);
		
		//echo $imagenNombre;
		redirect('admin/categoria');

	}

	public function proyecto()
	{
		$this->load->model('ProyectoModel');
        $result = $this->ProyectoModel->todos();

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Proyectos','ruta'=>'proyecto'));
		$this->load->view('admin/proyecto_admin.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

	public function proyectoEditarVista($id = NULL)
	{
		$this->load->model('ProyectoModel');
        $result = $this->ProyectoModel->buscarPorId($id);

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Editar Proyectos','ruta'=>'proyectoEditarVista'));
		$this->load->view('admin/proyecto_editar.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

	public function proyectoEditar()
	{		
		$this->load->model("ArchivoModel");
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");
		
		$this->load->model('ProyectoModel');
        $this->ProyectoModel->editar(
			$this->input->post("id"),
            $this->input->post("nombre"),
			$this->input->post("descripcion"),			
			$imagenNombre,
			$this->input->post("orden")
		);
        redirect('admin/proyecto');
	}

	public function proyectoCrear()
	{
		$this->load->model("ArchivoModel");
		//echo "archivo subir ->".$this->upload;
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");

		$this->load->model("ProyectoModel");
		
        $add = $this->ProyectoModel->crear(
            $this->input->post("nombre"),
			$this->input->post("descripcion"),			
			$imagenNombre,
			$this->input->post("orden")
		);
		
		//echo $imagenNombre;
		redirect('admin/proyecto');

	}

	public function proyectoEliminar($id = NULL)
	{
		if($id != NULL)
        {
            $this->load->model("ProyectoModel");
            $this->ProyectoModel->eliminar($id);
            redirect('admin/proyecto');
        }
	}

	public function proyectoAnio()
	{
		$this->load->model('ProyectoModel');
        $result = $this->ProyectoModel->todos();

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Proyecto del año','ruta'=>'proyectoAnio'));
		$this->load->view('admin/proyecto_anio.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}
	
	public function proyectoAnioGrabar()
	{
		$this->load->model("ArchivoModel");		
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");

		$this->load->model('ParametrosModel');				
		$this->ParametrosModel->editar(
			"proyecto_anio",
            $imagenNombre
		);
		redirect('admin/proyectoAnio');		
	}

	public function nuestrosClientesGrabar()
	{
		$this->load->model("ArchivoModel");		
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");

		$this->load->model('NuestrosClientesModel');
		$add = $this->NuestrosClientesModel->crear(
			$imagenNombre,
			$this->input->post("orden")
		);
		
		//echo $imagenNombre;
		redirect('admin/nuestrosClientes');
	}

	public function nuestrosClientesEditar()
	{		
		$this->load->model("ArchivoModel");
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");
		
		$this->load->model('NuestrosClientesModel');
        $this->NuestrosClientesModel->editar(
			$this->input->post("id"),
			$imagenNombre,
			$this->input->post("orden")
		);
        redirect('admin/nuestrosClientes');
	}

	public function nuestrosClientesEliminar($id)
	{
		if($id != NULL)
        {
            $this->load->model("NuestrosClientesModel");
            $this->NuestrosClientesModel->eliminar($id);
            redirect('admin/nuestrosClientes');
        }
	}


	public function nuestrosClientes()
	{
		$this->load->model('NuestrosClientesModel');
        $result = $this->NuestrosClientesModel->todos();

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Nuestros Clientes','ruta'=>'nuestrosClientes'));
		$this->load->view('admin/nuestros_clientes_admin.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

	public function nuestrosClientesEditarVista($id = NULL)
	{
		$this->load->model('NuestrosClientesModel');
        $result = $this->NuestrosClientesModel->buscarPorId($id);

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Editar Nuestros Clientes','ruta'=>'nuestrosClientesEditarVista'));
		$this->load->view('admin/nuestros_clientes_editar.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

	
	public function categoriaProducto()
	{
		$this->load->model('CategoriaProductoModel');
        $result = $this->CategoriaProductoModel->todos();

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Categoria Marcas','ruta'=>'categoriaProducto'));
		$this->load->view('admin/categoria_producto_admin.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

	public function categoriaProductoEditarVista($id = NULL)
	{
		$this->load->model('CategoriaProductoModel');
        $result = $this->CategoriaProductoModel->buscarPorId($id);

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Editar Categoria Marcas','ruta'=>'categoriaProductoEditarVista'));
		$this->load->view('admin/categoria_producto_editar.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

	public function categoriaProductoEditar()
	{
		
		//$this->load->model("ArchivoModel");
		//$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");
		
		$this->load->model('CategoriaProductoModel');
        $this->CategoriaProductoModel->editar(
			$this->input->post("id"),
			$this->input->post("nombre"),
			$this->input->post("descripcion"),
			$this->input->post("orden"),
			$this->input->post("email")
        );
        redirect('admin/categoriaProducto');
	}

	public function categoriaProductoEliminar($id = NULL)
	{
		if($id != NULL)
        {
            $this->load->model("CategoriaProductoModel");
            $this->CategoriaProductoModel->eliminar($id);
            redirect('admin/categoriaProducto');

        }
	}

	public function categoriaProductoCrear()
	{		
		$this->load->model("CategoriaProductoModel");
		
        $add = $this->CategoriaProductoModel->crear(
            $this->input->post("nombre"),
			$this->input->post("descripcion"),
			$this->input->post("orden"),
			$this->input->post("email")
		);
		
		//echo $imagenNombre;
		redirect('admin/categoriaProducto');

	}

	public function banner()
	{
		$this->load->model('BannerModel');
        $result = $this->BannerModel->todos();

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Banner','ruta'=>'banner'));
		$this->load->view('admin/banner_admin.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

	public function bannerCrear()
	{
		$this->load->model("ArchivoModel");
		//echo "archivo subir ->".$this->upload;
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");

		$this->load->model("BannerModel");
		
        $add = $this->BannerModel->crear(
            $this->input->post("titulo"),
			$this->input->post("subtitulo"),			
			$this->input->post("descripcion"),
			$this->input->post("link"),
			$imagenNombre,
			$this->input->post("orden")
		);
		
		//echo $imagenNombre;
		redirect('admin/banner');

	}

	public function bannerEliminar($id)
	{
		if($id != NULL)
        {
            $this->load->model("BannerModel");
            $this->BannerModel->eliminar($id);
            redirect('admin/banner');
        }
	}

	public function bannerEditar()
	{		
		$this->load->model("ArchivoModel");
		$imagenNombre=$this->ArchivoModel->cargar_archivo("imagen");
				
		$this->load->model('BannerModel');
        $this->BannerModel->editar(
			$this->input->post("id"),
            $this->input->post("titulo"),
			$this->input->post("subtitulo"),			
			$this->input->post("descripcion"),
			$this->input->post("link"),
			$imagenNombre,
			$this->input->post("orden")
		);
		echo "Datos Editando";
        redirect('admin/banner');
	}

	public function bannerEditarVista($id = NULL)
	{		
		$this->load->model('BannerModel');
        $result = $this->BannerModel->buscarPorId($id);

		//$this->load->view('plantilla/cabecera_admin.php');
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Editar Banner','ruta'=>'nuestrosClientesEditarVista'));
		$this->load->view('admin/banner_editar.php',array('consulta' =>$result));
		$this->load->view('plantilla/piepagina.php');
	}

}
