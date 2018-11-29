<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article_Model extends CI_Model
{
    protected $article_table = 'articles';

    /**
     * Add a new Article
     * @param: {array} Article Data
     */
    public function all()
    {
        $query = $this->db->get('users');
        foreach ($query->result() as $row)
        {
            $user_data[] = [
                'username' => $row->username,
                'email' => $row->email,
                'full_name' => $row->full_name,
            ];
        }
        return $user_data;
    }
}
