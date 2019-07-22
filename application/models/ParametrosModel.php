<?php
    class ParametrosModel extends CI_Model
    {
        public function todos()
        {
            $result = $this->db->get('parametro');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($video,$titulo)
        {
            $consulta = $this->db->query("INSERT INTO video VALUES(NULL,'$video','$titulo');");
            if ($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function eliminar($id)
        {
           $this->db->where('id',$id);
           $this->db->delete('video');
        }

        public function buscarPorId($id)
        {
            $query=$this->db->get_where('producto',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($clave,$valor)
        {
            $data = array(
                'clave' => $clave,
                'valor' => $valor
            );
    
            $this->db->where('clave', $clave);
            return $this->db->update('parametro', $data);
        }
    }
?>