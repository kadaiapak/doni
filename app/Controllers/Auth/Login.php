<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\AuthModel;

class Login extends BaseController
{
    protected $AuthModel;
    public function __construct()
    {
        $this->AuthModel = new AuthModel();
    }

    public function index()
    {
        if (session()->get('user_id')) {
            return redirect()->to('admin/dashboard');
        }
        $data = [  
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];
        echo view('auth/v_login', $data);
    }

    public function cek_login()
    {
        if(!$this->validate([
            'email' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'password' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ])){
            // $data['validation'] = \Config\Services::validation();
            return redirect()->to(base_url('login'))->withInput();
        }
        $err = '';
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
       
        $dataUser = $this->AuthModel->where('email', $email)->first();
        if(!$dataUser){
             session()->setFlashdata('gagal', 'Username atau Password salah');
            return redirect()->to(base_url('login'));
        }else {
            if ($dataUser['password'] != md5($password)) {
            session()->setFlashdata('gagal', 'Username atau Password salah');
            return redirect()->to(base_url('login'));
            }else {
                session()->set('user_id', $dataUser['id']);
                session()->set('email', $dataUser['email']);
                session()->set('avatar', $dataUser['avatar']);
                session()->set('nama_user', $dataUser['nama_user']); 
                session()->set('level', $dataUser['level']); 
                return redirect()->to(base_url('admin/dashboard'));
            }
        }
       
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}
