<?php
//Funcion que me permite buscar un dato especifico en conjunto de datos resultado de una consulta
function buscarDato($resultado, $datoBuscar)
{
    foreach ($resultado->result() as $fila) {
        if ($fila->clave === $datoBuscar) {
            return $fila->valor;
        }
    }
}
?>