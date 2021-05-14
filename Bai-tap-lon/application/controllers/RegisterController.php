<?php
include_once ('./libs/helper.php');
include_once ('./libs/helper.php');
class RegisterController extends BaseController{

    private $registerModel;
    public function __contstruct(){
        $this->CreateModel('RegisterModel');
        $this->registerModel= new RegisterModel;
    }

    public function register(){
        if (is_submit('register')){    
            $name= $_POST['name'];
            $username= $_POST['username'];
            $password=$_POST['password'];
            $password2=$_POST['password2'];

            $data= ['name'=>$name, 'username'=>$username, 'password'=>$password,'password2'=>$password2];

            $data1= $this->registerModel->find($username);
            if (!empty($data1)){
                return $this->CreateView('register');
            }else {
                $this->create($this->registerModel->TABLE, $data);
                set_logged($data['username']);
                redirect('index.php/?c=home&a=homelogin');
            }
        }
    }
}