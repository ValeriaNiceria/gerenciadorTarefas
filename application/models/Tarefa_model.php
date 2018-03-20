<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa_model extends MY_Model {

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

}