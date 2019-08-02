<?php
    class VideoModel extends CI_Model
    {
        public function todosVideo()
        {
            $result = $this->db->get('video');
            return $result;
            //return $this->db->get('post');
        }

        public function crearVideo($titulo,$video,$orden)
        {
            $consulta = $this->db->query("INSERT INTO video VALUES(NULL,'$video','$titulo','$orden');");
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
            $query=$this->db->get_where('video',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function editar($id,$titulo,$video,$orden)
        {
            $data = array(
                'id' => $id,
                'titulo' => $titulo,
                'url' => $video,
                'orden' => $orden
            );
    
            $this->db->where('id', $id);
            return $this->db->update('video', $data);
        }
    }
?>