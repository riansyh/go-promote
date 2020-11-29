<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Dashboard extends BaseController
{

    public function index()
    {
        $model = new TransaksiModel();
        
        $data['user'] = $model->getTransaksi()->getRow();
        return view('dashboard', $data);
        
    }

    public function update($id)
    {
        $model = new TransaksiModel();
        $data = array(
            'status' => 'Selesai'
        );
        $model->updateTransaksi($data, $id);
        return redirect()->to('/dashboard');
    }

    public function beli()
    {
        helper(['form']);
        $username = session()->get('username');

        $model = new TransaksiModel();

        $newData = [
            'metode' => '',
            'tgl_transaksi' => '',
            'id_paket' => '',
            'tgl_pp' => '',
            'username' => "$username",
            'caption' => '',
            'foto' => '',
            'status' => '',
        ];
        
        $model->save($newData);
        
        return view('/dashboard');
    }    
}
