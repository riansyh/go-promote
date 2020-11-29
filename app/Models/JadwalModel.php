<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwalpp';

    public function getJadwal($id = false)
    {
        if ($id === false) {
            return $this->getAll();
        } else {
            return $this->getWhere(['id_transaksi' => $id]);
        }
    }
}
