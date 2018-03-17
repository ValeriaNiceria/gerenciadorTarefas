<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {

    public function index()
    {
        $dados['titulo'] = "Minhas tarefas";
		$dados['conteudo'] = "tarefa/lista";

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('base', $dados);
		$this->load->view('includes/html_footer');
    }
}