<?php
    class BannerModel extends CI_Model
    {
        public function todos()
        {
            //$result = $this->db->get('banner');
            $result = $this->db->query('select * from banner order by orden asc');
            return $result;
            //return $this->db->get('post');
        }

        public function crear($titulo,$subtitulo,$descripcion,$link,$imagen,$orden)
        {
            $consulta = $this->db->query("INSERT INTO banner VALUES(NULL,'$titulo','$subtitulo','$descripcion','$link','$imagen','$orden');");
            if ($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function eliminar($id)
        {
           $this->db->where('id',$id);
           $this->db->delete('banner');
        }

        public function buscarPorId($id)
        {
            $query=$this->db->get_where('banner',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($id,$titulo,$subtitulo,$descripcion,$link,$imagen,$orden)
        {
			
            $data = array(
                'id' => $id,
                'titulo' => $titulo,
                'subtitulo' => $subtitulo,
                'descripcion' => $descripcion,
                'link' => $link,
                'orden' => $orden
            );

            if(strcmp ($imagen ,"") !== 0)
            {
                $data['imagen']=$imagen;
            }
    
            $this->db->where('id', $id);
            return $this->db->update('banner', $data);
        }
    }
?>