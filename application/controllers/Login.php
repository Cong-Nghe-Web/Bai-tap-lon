<?php
class Login extends Controller{
    private $loginModel;

    public function __construct(){
        $this->model('LoginModel');
        $this->loginModel= new LoginModel;
    }

    public static function register($data){
        $this->loginModel::add($data);
        $this->CreateView('home');
    }
}