<?php

namespace App\Models;

use CodeIgniter\Model;

class User_GoPromote extends Model
{
    // protected $table = 'users_data';

    // public function getUser($id = false)
    // {
    //     $user = session()->get('username');
    //     if ($id === false) {
    //         return $this->where('username', $user)->findAll();
    //     } else {
    //         return $this->getWhere(['username' => $id]);
    //     }
    // }

    // public function saveUser($data)
    // {
    //     $query = $this->db->table($this->table)->insert($data);
    //     return $query;
    // }

    // public function updateUser($data, $id)
    // {
    //     $query = $this->db->table($this->table)->update($data, array('username' => $id));
    //     return $query;
    // }

    // public function deleteUser($id)
    // {
    //     $query = $this->db->table($this->table)->delete(array('username' => $id));
    //     return $query;
    // }
}
