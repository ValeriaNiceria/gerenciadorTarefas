<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    }


    public function verificar_sessao()
    {
        if (!$this->session->userdata('logado'))
        {
            redirect('login');
        }
    }


    /*chama a página de cadastro*/
    public function index()
    {
        $this->load->view('usuario/cadastro');
    }


    /*Adiciona um novo usuário no banco de dados*/
    public function adicionar()
    {
        /*validando o email - verifica se o email já está cadastrado*/
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'is_unique[usuarios.email]');

        if (!$this->form_validation->run())
        {
            $this->session->set_flashdata('error', 'O email informado já está cadastrado!');
            redirect('usuario');
        } else
        {
            /*pega os valores preenchidos no formulário e atribui as variáveis*/
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $senha = md5($this->input->post('senha'));


            /*Array dos dados que serão adicionados na tabela*/
            $dados = array(
                'nome' => $nome,
                'email' => $email,
                'senha' => $senha
            );

            /*tabela do banco*/
            $tabela = "usuarios";

            /*verifica se o usuário foi adicionado*/
            if ($this->Usuario_model->adicionar($tabela, $dados))
            {
                $this->session->set_flashdata('success', 'Cadastro realizado com sucesso!');
                redirect('login');
            } else
            {
                $this->session->set_flashdata('error', 'Não foi possível realizar o cadastro.');
                redirect('login');  
            }
        }
    }


    public function perfil()
    {
        $this->verificar_sessao();

        $usuario_id = $this->session->userdata('usuario_id');
        $tabela = "usuarios";

        $dados['usuario'] = $this->Usuario_model->getById($usuario_id, $tabela);

        $dados['titulo'] = "Perfil";
		$dados['conteudo'] = "usuario/perfil";

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('base', $dados);
		$this->load->view('includes/html_footer');
    }


    /*Atualizar senha*/
    public function atualizarSenha()
    {
        $this->verificar_sessao();
        
        $id = $this->session->userdata('usuario_id');

        $tabela = "usuarios";

        $senhaAtual = md5($this->input->post('senhaAtual'));
        $senhaNova = md5($this->input->post('senhaNova'));

        $usuario = $this->Usuario_model->getById($id, $tabela);

        if ($usuario['senha'] == $senhaAtual)
        {
            $dados = array(
                'senha' => $senhaNova
            );

            if ( $this->Usuario_model->atualizar($id, $tabela, $dados))
            {
                $this->session->set_flashdata('success', 'Senha atualizada com sucesso!');
                redirect('usuario/perfil');
            } else
            {
                $this->session->set_flashdata('error', 'Não foi possível atualizar a senha');
                redirect('usuario/perfil');
            }

        } else
        {
            $this->session->set_flashdata('error', 'Senha atual não é a mesma cadastrada');
            redirect('usuario/perfil');
        }
    }
}