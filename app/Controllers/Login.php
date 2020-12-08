<?php 

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserData;
use App\Models\User_GoPromote;

class Login extends BaseController
{
	public function login()
    {
        $data = [];
        helper(['form', 'cookie']);

        if (session()->get('isLoggedIn')) {
            return redirect()->to('dashboard');
        }    

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
                $direction = "";

                $user = $model->where('username', $this->request->getVar('username'))
                ->first();

                $this->setUserSession($user);                
                if (session()->get('level') === "2") {
                    return redirect()->to("admin");
                }  

                $modeluser = new User_GoPromote();
                $username = session()->get('username');
                $data['user'] = $modeluser->getUser($username)->getRow();
                
                //Cookie
                $remember = $this->request->getVar('remember');
                if ($remember == 'on') {
                    $cookie = array(
                        'name' => 'username',
                        'value' => $this->request->getVar('username'),
                        'expire' => '36000',
                    );
                    $direction = $this->direction($data);
                    return redirect()->to($direction)->setCookie($cookie);                    
                    } else {
                    $direction = $this->direction($data);
                    return redirect()->to($direction);
                }
            }
        }
        return view('login', $data);
    }
    
    private function direction($data){
        if ($data['user']->nama === "") {
            return "edit";
        } else {
            return "dashboard";
        }        
    } 

    private function setUserSession($user)
	{
        $data = [
            'username' => $user['username'],
            'level' => $user['level'],
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

        if(session()->get('isLoggedIn')){
            return redirect()->to('dashboard');
        }

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
                $model2 = new UserData();

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                ];

                $username = [
                    'username' => $this->request->getVar('username'),
                ];                

                $model->save($newData);
                $model2->save($username);

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

    public function sk(){
        return view('sk');
    }

    public function tips(){
        return view('tips');
    }

	//--------------------------------------------------------------------

}
