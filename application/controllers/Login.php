<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function logar()
    {
        $email = $this->input->post('email');
        $senha = md5($this->input->post('senha'));

        $tabela = "usuarios";

        $dadosLogin = $this->Login_model->login($email, $senha, $tabela);

        if (empty($dadosLogin))
        {
            $this->session->set_flashdata('error', 'Email ou senha inválidos');
            redirect('login');
        } else
        {
            $dados = array(
                'logado' => TRUE,
                'nome' => $dadosLogin['nome'],
                'usuario_id' => $dadosLogin['id']
            );

            $this->session->set_userdata($dados);

            redirect('dashboard');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}