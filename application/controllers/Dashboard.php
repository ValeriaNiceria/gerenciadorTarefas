<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function verificar_sessao()
	{
		if (!$this->session->userdata('logado'))
		{
			redirect('login');
		}
	}


	public function index()
	{
		$this->verificar_sessao();

		$dados['titulo'] = "Dashboard";
		$dados['conteudo'] = "dashboard";

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('base', $dados);
		$this->load->view('includes/html_footer');
	}
}
