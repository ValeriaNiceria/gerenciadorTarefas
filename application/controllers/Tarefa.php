<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Tarefa_model');
	}

    public function index()
    {
        $dados['titulo'] = "Minhas tarefas";
		$dados['conteudo'] = "tarefa/lista";

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('base', $dados);
		$this->load->view('includes/html_footer');
	}
	
	
	/*Formulário cadastro de tarefas*/
	public function cadastro()
	{
		$dados['titulo'] = "Adicionar tarefa";
		$dados['conteudo'] = "tarefa/cadastro";

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('base', $dados);
		$this->load->view('includes/html_footer');
	}


	/*Adicionar tabela no banco de dados*/
	public function adicionar()
	{
		$titulo = $this->input->post('titulo');
		$descricao = $this->input->post('descricao');
		$prioridade = $this->input->post('prioridade');
		$status = 0;
		$data_criacao = date('Y-m-d');
		$usuario_id = $this->session->userdata('usuario_id');

		$dados = array(
			'titulo' => $titulo,
			'descricao' => $descricao,
			'prioridade' => $prioridade,
			'status' => $status,
			'data_criacao' => $data_criacao,
			'usuario_id' => $usuario_id
		);

		$tabela = "tarefas";

		if ($this->Tarefa_model->adicionar($tabela, $dados))
		{
			$this->session->set_flashdata('success', 'Tarefa adicionada com sucesso!');
			redirect('tarefa');
		} else
		{
			$this->session->set_flashdata('error', 'Não foi possível adicionar a tarefa.');
			redirect('tarefa');
		}
	}
}