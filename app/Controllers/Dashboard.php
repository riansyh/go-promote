<?php namespace App\Controllers;
use App\Models\Pengeluaran_Model;
use App\Models\User_GoPromote;

class Dashboard extends BaseController
{
	
	public function index()
	{
        $model = new User_GoPromote();
        // $data['user'] = $model->getUser();
        
        return view('dashboard');
    }

    // public function edit($id)
    // {
    //     $model = new User_GoPromote();
    //     $data['user'] = $model->getUser();
    //     echo view('edit_data_view', $data);
    // }

    // public function update()
    // {
    //     $model = new User_GoPromote();
    //     $username = $this->request->getPost('username');
    //     $data = array(
    //         'nama' => $this->request->getPost('task_name'),
    //         'no_hp' => $this->request->getPost('no_hp'),
    //         'email' => $this->request->getPost('email'),
    //         'instagram' => $this->request->getPost('instagram'),
    //     );
    //     $model->updateTask($data, $username);
    //     return redirect()->to('dashboard');
    // }    
	//--------------------------------------------------------------------

}
