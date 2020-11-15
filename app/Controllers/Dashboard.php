<?php namespace App\Controllers;
use App\Models\Pengeluaran_Model;
use App\Models\User_GoPromote;

class Dashboard extends BaseController
{
	
	public function index()
	{
        $model = new User_GoPromote();
        // $data['pengeluaran'] = $model->getPengeluaran();
        return view('dashboard');
    }
	//--------------------------------------------------------------------

}
