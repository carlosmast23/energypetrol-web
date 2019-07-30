<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ArchivoModel extends CI_Model {

    function cargar_archivo($nameId)
    {
        //echo  $this->input->post("nombre");
        $mi_archivo = $nameId;
        $nombreArchivo="upload".uniqid ();
        $config['upload_path'] = "uploads/";
        $config['file_name'] = $nombreArchivo;
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
        //echo var_dump($data);
        return $nombreArchivo.$data['uploadSuccess']['file_ext'] ; //Retorna el nombre del archivo creado para almacenar en la base de datos
    }
}