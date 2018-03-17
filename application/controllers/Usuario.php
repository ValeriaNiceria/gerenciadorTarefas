<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index()
    {
        $this->load->view('usuario/cadastro');
    }

}