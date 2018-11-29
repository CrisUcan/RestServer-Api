<?php

class Users_Model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function insert_user($user_data)
    {
        return $this->db->insert('users', $user_data);
    }

    public function fetch_all_users()
    {
        $query = $this->db->get('users');
        foreach ($query->result() as $row)
        {
            $user_data[] = [
                'id' => $row->id,
                'nombre' => $row->nombre,
                'edad' => $row->edad,
                'correo' => $row->correo,
            ];
        }
        return $user_data;
    }
}