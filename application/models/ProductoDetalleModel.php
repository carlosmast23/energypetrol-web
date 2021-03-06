<?php
    class ProductoDetalleModel extends CI_Model
    {
        public function todos()
        {
            $result = $this->db->get('producto_detalle');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($titulo,$video)
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

        public function buscarPorProductoId($id)
        {
            $query=$this->db->get_where('producto_detalle',array('producto_id' => $id));
            return $query; //Devuelve un unico resultado
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