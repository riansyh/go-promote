<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\TransaksiModel;
use App\Models\User_GoPromote;
use CodeIgniter\I18n\Time;

class Transaksi extends BaseController
{

    public function index()
    {
        $model = new JadwalModel();
        $model2 = new User_GoPromote();

        $data['users'] = $model2->getAll();
        $data['transaksi'] = $model->getJadwal();
        return view('dashboard', $data);
    }

    public function admin()
    {
        if(session()->get('level') === "2"){
        $model = new JadwalModel();
        $data['transaksi'] = $model->getAll();
        return view('admin', $data);
        }
        else{
            return redirect()->to('dashboard');
        }
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
        $session = session();
        $username = session()->get('username');

        $namaFile = $_FILES["konten"]["name"];
        $sizeFile = $_FILES["konten"]["size"];
        $error = $_FILES["konten"]["error"];
        $tmpName = $_FILES["konten"]["tmp_name"];

        $extensiFileAllowed = ["jpg", "jpeg", "png"];
        $extensiFile = explode('.', $namaFile);
        $extensiFile = strtolower(end($extensiFile));

        if($error === 4){
            $session->setFlashdata('error', 'Tidak ada foto yang diupload!');
            return redirect()->to('/profile');
        }else{
            if(!in_array($extensiFile, $extensiFileAllowed)){            
                $session->setFlashdata('error', 'Extensi File Salah!');
                return redirect()->to('/profile');
            }
            else{
                if($sizeFile > 2000000){
                    $session->setFlashdata('error', 'File yang diupload lebih dari 2mb!');
                    return redirect()->to('/profile');
                }
            }
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.' . $extensiFile;
        echo $namaFileBaru;

        $sesi = session()->get('username');

        $dir = "konten/$sesi";
        if (!is_dir($dir)) {
            mkdir("konten/" . session()->get('username'));
        }
        move_uploaded_file($tmpName, 'konten/' . session()->get('username') . '/' . $namaFileBaru);

        $model = new TransaksiModel();
        $time=time();
        $tgltransaksi = date("Y-m-d",$time);
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

    public function detail($id)
    {
        $transaksi = new TransaksiModel();
        $user = new User_GoPromote();

        $data['transaksi'] = $transaksi->getTransaksi($id)->getRow();
        $data['user'] = $user->getUser($data['transaksi']->username)->getRow();
        echo view('detail', $data);
    }    
}
