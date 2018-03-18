<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login($email, $senha, $tabela)
    {
        if (isset($email) && isset($senha) && isset($tabela))
        {
            $this->db->where('email', $email);
            $this->db->where('senha', $senha);
            $query = $this->db->get($tabela);

            if ($query->num_rows() > 0)
            {
                return $query->row_array();
            }
            return NULL;
        }
        return FALSE;
    }
}