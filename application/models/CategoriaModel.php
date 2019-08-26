<?php
    class CategoriaModel extends CI_Model
    {
        public function todos()
        {
            $result = $this->db->query('SELECT c.id id,c.nombre nombre, c.descripcion descripcion,c.imagen imagen,c.archivo_descarga,cp.nombre nombre_tipo FROM categoria c,categoria_producto cp WHERE c.categoria_producto_id=cp.id ');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($tipoId,$nombre,$descripcion,$imagenNombre,$archivoDescarga)
        {
            $consulta = $this->db->query("INSERT INTO categoria VALUES(NULL,'$tipoId','$nombre','$descripcion','$imagenNombre','$archivoDescarga');");
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
            $query=$this->db->get_where('categoria',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function buscarPorCategoriaId($id)
        {
            $query=$this->db->get_where('categoria',array('categoria_producto_id' => $id));
            return $query; //Devuelve un unico resultado
        }


        public function editar($id,$tipoId,$nombre,$descripcion,$imagenNombre,$archivoDescarga)
        {
            $data = array(
                'id' => $id,
                'categoria_producto_id' => $tipoId,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'archivo_descarga'=>$archivoDescarga,
            );
        
            if(strcmp ($imagenNombre ,"") !== 0)
            {
                $data['imagen']=$imagenNombre;
            }

            $this->db->where('id', $id);
            return $this->db->update('categoria', $data);
        }
    }
?>