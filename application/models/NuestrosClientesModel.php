<?php
    class NuestrosClientesModel extends CI_Model
    {
        public function todos()
        {
            $result = $this->db->query('select * from nuestros_clientes order by orden asc');
            //$result = $this->db->get('nuestros_clientes');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($imagenNombre,$orden)
        {
            $consulta = $this->db->query("INSERT INTO nuestros_clientes VALUES(NULL,'$imagenNombre',$orden);");
            if ($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function eliminar($id)
        {
           $this->db->where('id',$id);
           $this->db->delete('nuestros_clientes');
        }

        public function buscarPorId($id)
        {
            $query=$this->db->get_where('nuestros_clientes',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($id,$imagenNombre,$orden)
        {
            $data = array(
                'id' => $id,
                'orden' => $orden
            );

            if(strcmp ($imagenNombre ,"") !== 0)
            {
                $data['imagen']=$imagenNombre;
            }
    
            $this->db->where('id', $id);
            return $this->db->update('nuestros_clientes', $data);
        }
    }
?>