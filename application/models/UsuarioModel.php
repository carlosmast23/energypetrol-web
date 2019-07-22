<?php
    class UsuarioModel extends CI_Model
    {
        public function __construct() 
        {
            //llamamos al constructor de la clase padre
            parent::__construct();
                
            //cargamos la base de datos
            $this->load->database();    
        }

        public function login($usuario,$clave)
        {
            if($usuario=="root" && $clave=="1234")
            {
                return true;
            }
            return false;
        }

        

    }
?>