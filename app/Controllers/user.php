<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_user;

class user extends Controller
{

    public function index(){
        $data =[
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('templates/wrapper', $data);
    }

    public function register(){
        $data =[
            'title' => 'Form Register',
            'tampil' => 'register',
        ];
        echo view('templates/wrapper', $data);
    }

    public function regis(){
        helper(['form', 'url', 'date']);

        $userModel = new M_user();
        
        $now = date('Y-m-d H:i:s');
        
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'update_at' => $now
        ];

        $save = $userModel->insert($data);
       
        return redirect() -> to(base_url('user'));
    }
    public function login(){

        if($this->ada($_POST['email'],$_POST['password'])!=NULL) {

            $session=session();
            $session->set('email',$_POST['email']);
            return $this->response->redirect(site_url('home'));
        }else{
            session()->setFlashdata('msg','Email/Password Salah');
            return redirect()->to(site_url('user'));
        }
    }

    
}