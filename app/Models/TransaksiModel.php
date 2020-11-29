<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $allowedFields = ['username', 'id_transaksi', 'tgl_transaksi', 'metode','id_paket','tgl_pp','caption','foto','status','jasa_desain'];

    public function getTransaksi($id = false)
    {
        $user = session()->get('username');
        if ($id === false) {
            return $this->where('username', $user)->findAll();
        } else {
            return $this->getWhere(['username' => $user]);
        }
    }

    public function saveTransaksi($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateTransaksi($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_transaksi' => $id));
        return $query;
    }

    public function deleteTransaksi($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_transaksi' => $id));
        return $query;
    }
}
