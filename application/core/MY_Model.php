<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    public function adicionar($tabela, $dados)
    {
        if (isset($tabela) && is_array($dados))
        {
            return $this->db->insert($tabela, $dados);
        }
        return FALSE;
    }


    public function getById($id, $tabela)
    {
        if (isset($id) && isset($tabela))
        {
            $this->db->where('id', $id);
            $query = $this->db->get($tabela);
            if ($query->num_rows() > 0)
            {
                return $query->row_array();
            }
            return NULL;
        }
        return FALSE;
    }


    public function excluir($id, $tabela)
    {
        if (isset($id) && isset($tabela))
        {
            $this->db->where('id', $id);
            return $this->db->delete($tabela);
        }
        return FALSE;
    }


    public function atualizar($id, $tabela, $dados)
    {
        if (isset($id) && isset($tabela) && is_array($dados))
        {
            $this->db->where('id', $id);
            return $this->db->update($tabela, $dados);
        }
        return FALSE;
    }
}