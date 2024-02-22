<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function obtener_usuario_por_credenciales($username, $password) {
        $query = $this->db->get_where('usuarios', array('nombre_usuario' => $username, 'contrasena' => $password));
        return $query->row();
    }
}
