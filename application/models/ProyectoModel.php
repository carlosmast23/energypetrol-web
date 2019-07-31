<?php
    class ProyectoModel extends CI_Model
    {
        public function todos()
        {
            $result = $this->db->query("SELECT * FROM proyecto ORDER BY orden asc");
            //$result = $this->db->get('proyecto');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($nombre,$descripcion,$imagenNombre,$orden)
        {
            $consulta = $this->db->query("INSERT INTO proyecto VALUES(NULL,'$nombre','$descripcion','$imagenNombre','$orden');");
            if ($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function eliminar($id)
        {
           $this->db->where('id',$id);
           $this->db->delete('proyecto');
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