<?php
include_once ('./libs/role.php');
include_once ('./libs/helper.php');
class LoginController extends BaseController{
    private $loginModel;

    public function __construct(){
        $this->CreateModel('LoginModel');
        $this->loginModel= new LoginModel;
    }

    public function login(){
        if(is_submit('login')){    
            $username = input_post('username');
            $password = input_post('password');

            $data= $this->loginModel->find($username);
            $error = array();
            if(empty($data)){
                $error['username']= 'Tên đăng nhập không đúng';
            } else if ($data['password'] != md5($password)){
                $error['password'] = 'Mật khẩu bạn nhập không đúng';
            } 

            if(!$error){
                set_logged($data['username']);
                redirect(base_url('index.php?c=home&a=homelogin'));
            }
            
            
        }
    }
}