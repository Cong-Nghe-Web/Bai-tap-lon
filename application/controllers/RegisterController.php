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

            $result= $this->registerModel->addUser($username);
            if ($result){
                $this->create($this->registerModel->TABLE, $data);
                set_logged($username);
                redirect('?c=home&a=homelogin');
            }else {
                
            }
        }
    }
}