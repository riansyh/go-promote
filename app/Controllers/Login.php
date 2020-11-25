<?php 

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
	public function login()
    {
        $data = [];
        helper(['form', 'cookie']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[6]|max_length[50]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Username or Password don\'t match'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $user = $model->where('username', $this->request->getVar('username'))
                    ->first();

                $this->setUserSession($user);

                //Cookie
                $remember = $this->request->getVar('remember');
                if($remember == 'on'){
                    $cookie = array(
                        'name' => 'username',
                        'value' => $this->request->getVar('username'),
                        'expire' => '36000',
                    );
                    return redirect()->to('dashboard')
                    ->setCookie($cookie);
                } else {
                    return redirect()->to('dashboard');
                }
            }
        }
        return view('login', $data);
    }
    
    private function setUserSession($user)
	{
        $data = [
            'username' => $user['username'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        session()->get('username');
		return true;
    }

    public function register()
	{
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post'){
            $rules = [
                'username' => 'required|min_length[6]|max_length[50]|is_unique[users.username]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];
            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                ];

                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');

                return redirect()->to('/login');
            }
        }
        return view('register', $data);
    }

    public function logout()
	{
        session()->destroy();
		return redirect()->to('/')->deleteCookie('username');
	}

	//--------------------------------------------------------------------

}
