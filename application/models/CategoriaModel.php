<?php
    class CategoriaModel extends CI_Model
    {
        public function todos()
        {
            $result = $this->db->get('categoria');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($nombre,$descripcion,$imagenNombre)
        {
            $consulta = $this->db->query("INSERT INTO categoria VALUES(NULL,'$nombre','$descripcion','$imagenNombre');");
            if ($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function eliminar($id)
        {
           $this->db->where('id',$id);
           $this->db->delete('categoria');
        }

        public function buscarPorId($id)
        {
            $query=$this->db->get_where('producto',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($id,$titulo,$video)
        {
            $data = array(
                'id' => $id,
                'titulo' => $titulo,
                'url' => $video
            );
    
            $this->db->where('id', $id);
            return $this->db->update('video', $data);
        }
    }
?>