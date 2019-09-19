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
            if($usuario=="root" && $clave=="Adminsis2019")
            {
                return true;
            }

            if($usuario=="mecanica" && $clave=="Mecanica2019")
            {
                return true;
            }

            if($usuario=="electrica" && $clave=="Electronica2019")
            {
                return true;
            }

            if($usuario=="instrumentacion" && $clave=="Instrumentacion2019")
            {
                return true;
            }

            if($usuario=="sci" && $clave=="Sci2019")
            {
                return true;
            }
            
            return false;
        }

        

    }
?>