<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\TransaksiModel;
use CodeIgniter\I18n\Time;

class Transaksi extends BaseController
{

    public function index()
    {
        $model = new JadwalModel();
        $data['transaksi'] = $model->getJadwal();
        return view('dashboard', $data);
    }

    public function admin()
    {
        $model = new JadwalModel();
        $data['transaksi'] = $model->getAll();
        return view('admin', $data);
    }

    public function update($id)
    {
        $model = new JadwalModel();
        $data = array(
            'status' => 'Selesai'
        );
        $model->updateJadwal($data, $id);
        return redirect()->to('/admin');
    }

    public function beli()
    {
        helper(['form']);
        $username = session()->get('username');

        $namaFile = $_FILES["konten"]["name"];
        $sizeFile = $_FILES["konten"]["size"];
        $error = $_FILES["konten"]["error"];
        $tmpName = $_FILES["konten"]["tmp_name"];

        if ($error === 4) {
            echo "tidak ada foto yang diupload";
        }

        $extensiFileAllowed = ["jpg", "jpeg", "png"];
        $extensiFile = explode('.', $namaFile);
        $extensiFile = strtolower(end($extensiFile));
        if (!in_array($extensiFile, $extensiFileAllowed)) {
            echo "hei salah masukkan type data";
        }

        if ($sizeFile > 2000000) {
            echo "kegedean boi";
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.' . $extensiFile;
        echo $namaFileBaru;

        $session = session()->get('username');

        $dir = "konten/$session";
        if (!is_dir($dir)) {
            mkdir("konten/" . session()->get('username'));
        }
        move_uploaded_file($tmpName, 'konten/' . session()->get('username') . '/' . $namaFileBaru);

        $model = new TransaksiModel();
        $tgltransaksi = new Time('now');
        $newData = [
            'metode' => $this->request->getVar('metode'),
            'tgl_transaksi' => $tgltransaksi,
            'id_paket' => $this->request->getVar('paket'),
            'tgl_pp' => $this->request->getVar('tgl_pp'),
            'username' => $username,
            'caption' => $this->request->getVar('caption'),
            'foto' => $namaFileBaru,
            'status' => 'Proses',
            'jasa_desain' => $this->request->getVar('desain'),
        ];

        $model->save($newData);

        return redirect()->to('/dashboard');
    }

    public function delete($id)
    {
        $model = new JadwalModel();
        $model->deleteJadwal($id);
        return redirect()->to("/admin");
    }
}
