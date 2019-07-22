<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('index.php');		
		$this->load->view('plantilla/piepagina.php');
	}

	public function vistaCabeceraConDatos()
	{
		$this->load->model('ParametrosModel');
        $parametros = $this->ParametrosModel->todos(); 

		$this->load->model('ProductoModel');
        $result = $this->ProductoModel->todos();
        $data = array('consulta' => $result,'parametro'=>$parametros);

		$this->load->view('plantilla/utilidades_vista.php');
		$this->load->view('plantilla/cabecera.php',$data);
	}

	public function vistaPiePaginaConDatos()
	{
		$this->load->model('ParametrosModel');
		$parametros = $this->ParametrosModel->todos(); 
		
		$data = array('parametro'=>$parametros);

		$this->load->view('plantilla/utilidades_vista.php');
		$this->load->view('plantilla/pie_pagina.php',$data);
	}

	public function contactanos()
	{
		$parametro= $this->input->get('enviado',TRUE);
		$dato['string']=""; //Si no hay dato no ingreso nada
		if( isset( $parametro ) ) { 
			//echo "PARAMETRO EXISTE CREO";
			$dato['string']=$parametro;
		}

		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Contactanos','ruta'=>'contactanos'));
		$this->load->view('contactanos.php',$dato);		
		$this->load->view('plantilla/piepagina.php');
	}


	public function stock()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Stock','ruta'=>'stock'));
		$this->load->view('stock.php');
		$this->load->view('plantilla/piepagina.php');
	}

	public function mecanico()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Mecánico','ruta'=>'mecanico'));
		$this->load->view('servicios/mecanico.php');
		$this->load->view('plantilla/piepagina.php');
	}	

	public function gabinetes()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Gabinetes','ruta'=>'gabinetes'));
		$this->load->view('servicios/gabinetes.php');
		$this->load->view('plantilla/piepagina.php');
	}	

	public function simoprime()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Simoprime','ruta'=>'simoprime'));
		$this->load->view('servicios/simoprime.php');
		$this->load->view('plantilla/piepagina.php');
	}	

	public function paquetizados()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Paquetizado','ruta'=>'paquetizado'));
		$this->load->view('servicios/paquetizados.php');
		$this->load->view('plantilla/piepagina.php');
	}	

	public function instrumentacion()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Instrumentación','ruta'=>'instrumentacion'));
		$this->load->view('servicios/instrumentacion.php');
		$this->load->view('plantilla/piepagina.php');
	}	

	public function electrico()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Eléctronico','ruta'=>'electronico'));
		$this->load->view('servicios/electrico.php');
		$this->load->view('plantilla/piepagina.php');
	}	

	public function firegas()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Fire Gas','ruta'=>'firegas'));
		$this->load->view('servicios/firegas.php');
		$this->load->view('plantilla/piepagina.php');
	}	


	public function videos()
	{
		$this->load->model('VideoModel');
        $result = $this->VideoModel->todosVideo();
        $data = array('consulta' => $result);

		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Videos','ruta'=>'videos'));
		$this->load->view('videos.php',$data);
		$this->load->view('plantilla/piepagina.php');
	}

	public function login()
	{
		if(isset($_POST['clave']))
        {
            $this->load->model('UsuarioModel');
            $resultado=$this->UsuarioModel->login($_POST['usuario'],$_POST['clave']);
            if($resultado)
            {
                redirect('admin');
                //$this->vistaLogin();
            }
            else{
                $this->vistaLogin(True);
            }
            
        }
        else
        {
            $this->vistaLogin(False);
        }

		
	}

	public function vistaLogin($error)
    {
		
		//$this->load->view('plantilla/cabecera_limpia.php');
		$this->vistaCabeceraConDatos();
		//$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Login','ruta'=>'login'));
		$this->load->view('admin/login.php',array("error"=>$error));
		//$this->load->view('admin/login.php');
		$this->load->view('plantilla/piepagina.php');
	}

	public function nosotros()
	{
		$this->vistaCabeceraConDatos();
		$this->load->view('plantilla/titulo_pagina.php',array('titulo' => 'Nosotros','ruta'=>'nosotros'));
		$this->load->view('nosotros.php');
		$this->load->view('plantilla/piepagina.php');
	}

	public function producto($id = NULL)
	{
		
		$this->load->model('ProductoModel');
        $result = $this->ProductoModel->buscarPorId($id);
		
		
		$this->load->model('ProductoDetalleModel');
		$productos= $this->ProductoDetalleModel->buscarPorProductoId($id);

		$resultado = array('consulta' => $result,'productos'=>$productos);

		//$datos['consulta'] =$data;
		//$datos['productos'] = $productos; 

		$this->vistaCabeceraConDatos();
		$this->load->view('producto.php',$resultado);
		$this->load->view('plantilla/piepagina.php');
	}
	
	public function enviarCorreo()
	{
		$mensaje="=================> MENSAJE DE CONTACTANOS <===================\n";

		$mensaje=$mensaje."Nombre: ".$this->input->post('nombre')."\n";
		$mensaje=$mensaje."Telefono: ".$this->input->post('telefono')."\n";
		$mensaje=$mensaje."Email: ".$this->input->post('email')."\n";
		$mensaje=$mensaje."Descripción: ".$this->input->post('descripcion')."\n";
		
		$this->load->model("email_model","model");

		if($this->model->enviar_mail($this->input->post('email'),"Correo de contactanos",$mensaje))
		{
			redirect('welcome/contactanos?enviado=ok');
		}
		else 
		{
			//redirect('welcome/contactanos?enviado=error');
		}
		
	
	}

	//==================> FUNCIONES ADICIONALES PARA LA VISTA <=====================================//
	
}
