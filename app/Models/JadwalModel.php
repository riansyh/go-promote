<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwalpp';

    public function getJadwal($id = false)
    {
        $user = session()->get('username');
        if ($id === false) {
            return $this->where('username', $user)->findAll();
        } else {
            return $this->getWhere(['username' => $user]);
        }
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function deleteJadwal($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_transaksi' => $id));
        return $query;
    }

    public function updateJadwal($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_transaksi' => $id));
        return $query;
    }
}
