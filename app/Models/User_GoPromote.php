<?php

namespace App\Models;

use CodeIgniter\Model;

class User_GoPromote extends Model
{
    protected $table = 'pengeluaran';

    public function getPengeluaran($id = false)
    {
        $user = session()->get('username');
        if ($id === false) {
            return $this->where('username', $user)->findAll();
        } else {
            return $this->getWhere(['id_pengeluaran' => $id]);
        }
    }

    public function savePengeluaran($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePengeluaran($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_pengeluaran' => $id));
        return $query;
    }

    public function deletePengeluaran($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_pengeluaran' => $id));
        return $query;
    }
}
