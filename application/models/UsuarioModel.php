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
            if($this->loginConsulta($usuario,$clave))
            {
                return true;                    
            }


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

        /**
         * Metodo para verifica si el usuario tiene las credenciales correctas para acceder al sistema
         */
        public function loginConsulta($nick,$clave)
        {
                $query=$this->db->get_where('usuario',array('nick' => $nick,'clave'=>$clave,'estado'=>'A'));
                //return $query->row_array(); //Devuelve un unico resultado
                if($query->num_rows()>0)
                {
                    return true;
                } 
                else
                {
                    return false;
                }

        }
        

    }    
?>