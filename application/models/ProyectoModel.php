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
            $query=$this->db->get_where('proyecto',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($id,$nombre,$descripcion,$imagenNombre,$orden)
        {
            $data = array(
                'id' => $id,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'orden' => $orden,
            );

            if(strcmp ($imagenNombre ,"") !== 0)
            {
                $data['imagen']=$imagenNombre;
            }
    
            $this->db->where('id', $id);
            return $this->db->update('proyecto', $data);
        }
    }
?>