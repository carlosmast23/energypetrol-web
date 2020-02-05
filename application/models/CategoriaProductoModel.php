<?php
    class CategoriaProductoModel extends CI_Model
    {
        public function todos()
        {
            //$result = $this->db->get('categoria_producto');
            $result = $this->db->query('select * from categoria_producto order by orden asc');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($nombre,$descripcion,$orden,$email)
        {
            $consulta = $this->db->query("INSERT INTO categoria_producto VALUES(NULL,'$nombre','$descripcion','$orden','$email');");
            if ($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function eliminar($id)
        {
           $this->db->where('id',$id);
           $this->db->delete('categoria_producto');
        }

        public function buscarPorId($id)
        {
            $query=$this->db->get_where('categoria_producto',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($id,$nombre,$descripcion,$orden,$email)
        {
            $data = array(
                'id' => $id,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'orden' => $orden,
				'email' => $email,
            );
        
            $this->db->where('id', $id);
            return $this->db->update('categoria_producto', $data);
        }
    }
?>