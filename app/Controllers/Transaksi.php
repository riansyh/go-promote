<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\JadwalModel;

class Transaksi extends BaseController
{

    public function index()
    {
        $model = new JadwalModel();
        $data['transaksi'] = $model->getJadwal();
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
