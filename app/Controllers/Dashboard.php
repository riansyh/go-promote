<?php namespace App\Controllers;
use App\Models\User_GoPromote;

class Dashboard extends BaseController
{
	
	public function index()
    {
        $username = session()->get('username');
        $model = new User_GoPromote();
        $data['user'] = $model->getUser($username)->getRow();

        if ($data['user']->nama === "") {
            return redirect()->to("edit/$username");
        } else {
            return view('dashboard',$data);
        }
    }

    public function edit($id)
    {
        $username = session()->get('username');

        if($id == $username){
            $model = new User_GoPromote();
            $data['user'] = $model->getUser($username)->getRow();
            echo view('edit', $data);
        } else {
            session()->destroy();
            return redirect()->to('/')->deleteCookie('username');	
        }
    }

    public function update()
    {
        $model = new User_GoPromote();
        $username = $this->request->getPost('username');
        $data = array(
            'nama' => $this->request->getPost('name'),
            'no_hp' => $this->request->getPost('nohp'),
            'email' => $this->request->getPost('email'),
            'instagram' => $this->request->getPost('instagram'),
        );
        $model->updateUser($data, $username);
        return redirect()->to('/dashboard');
    }    
	//--------------------------------------------------------------------

}
