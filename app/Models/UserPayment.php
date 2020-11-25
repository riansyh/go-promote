<?php

namespace App\Models;

use CodeIgniter\Model;

class UserPayment extends Model
{
    protected $table = 'payment';

    public function getPayment($id = false)
    {
        $user = session()->get('username');
        if ($id === false) {
            return $this->where('id_pembeli', $user)->findAll();
        } else {
            return $this->getWhere(['id_payment' => $id]);
        }
    }

    public function savePayment($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePayment($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_payment' => $id));
        return $query;
    }

    public function deletePayment($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_payemnt' => $id));
        return $query;
    }
}
