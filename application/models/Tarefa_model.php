<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa_model extends MY_Model {

    /*Todos os registros de acordo com o usuario_id*/
    public function getAll($usuario_id, $tabela, $por_pagina, $inicio)
    {
        if (isset($usuario_id) && isset($tabela) && isset($por_pagina) && isset($inicio))
        {
            $this->db->where('usuario_id', $usuario_id); /*pega todos os registros que possuem o usuario_id informado*/

            $this->db->limit($por_pagina, $inicio); /*limita o número de registros*/

            $this->db->order_by('id desc'); /*ordena as tarefas pelo ID*/
            $query = $this->db->get($tabela);

            if ($query->num_rows() > 0)
            {
                return $query->result_array();
            } else
            {
                return NULL;
            }
        }
        return FALSE;
    }


	/*filtrar tarefas*/
    public function filtro($usuario_id, $filtro, $tabela)
    {
        if (isset($usuario_id) && isset($filtro) && isset($tabela))
        {
            $this->db->where('usuario_id', $usuario_id);
            $this->db->like('status', $filtro);

            $query = $this->db->get($tabela);

            if ($query->num_rows() > 0)
            {
                return $query->result_array();
            } else
            {
                return NULL;
            }
        }
        return FALSE;
    }


    /*número de registros da tabela*/
    public function num_rows($usuario_id, $tabela)
    {
        if (isset($usuario_id) && isset($tabela))
        {
            $this->db->where('usuario_id', $usuario_id);

            $query = $this->db->get($tabela);

            return $query->num_rows();
        }
        return FALSE;
    }

}