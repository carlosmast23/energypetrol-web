<?php
    class ProductoVentaModel extends CI_Model
    {
        public function todos()
        {
            $result = $this->db->query('SELECT pv.id id, pv.categoria_id, pv.nombre, pv.descripcion,pv.imagen,pv.orden, c.nombre categoria FROM producto_venta pv, categoria c WHERE pv.categoria_id=c.id ORDER BY pv.id asc');
            //$result = $this->db->get('producto_venta');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($categoriaId,$nombre,$descripcion,$videoNombre,$orden)
        {
            $consulta = $this->db->query("INSERT INTO producto_venta VALUES(NULL,'$categoriaId','$nombre','$descripcion','$videoNombre','$orden');");
            if ($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function buscarPorCategoriaId($id)
        {
            $query=$this->db->get_where('producto_venta',array('categoria_id' => $id));
            return $query; //Devuelve un unico resultado
        }

        public function eliminar($id)
        {
           $this->db->where('id',$id);
           $this->db->delete('producto_venta');
        }

        public function buscarPorId($id)
        {
            $query=$this->db->get_where('producto_venta',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($id,$categoriaId,$nombre,$descripcion,$videoNombre,$orden)
        {
            $data = array(
                'id' => $id,
                'categoria_id' => $categoriaId,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'orden' => $orden,                
            );

            if(strcmp ($videoNombre ,"") !== 0)
            {
                $data['imagen']=$videoNombre;
            }
    
            $this->db->where('id', $id);
            return $this->db->update('producto_venta', $data);
        }
    }
?>