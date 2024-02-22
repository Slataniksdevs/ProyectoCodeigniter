<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function autenticar() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('usuario_model');
        $usuario = $this->usuario_model->obtener_usuario_por_credenciales($username, $password);

        if ($usuario) {
            // Usuario autenticado, redirigir a la página de inicio
            redirect('inicio');
        } else {
            // Credenciales incorrectas, mostrar mensaje de error
            echo "Usuario o contraseña incorrectos";
        }
    }
}
