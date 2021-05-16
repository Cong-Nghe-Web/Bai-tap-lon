<?php
class RegisterController extends BaseController{
    private $registerModel;
    public function __contstruct(){
        $this->CreateModel('RegisterModel');
        $this->registerModel= new RegisterModel;
    }

    public function register(){  
            $name= addslashes($_POST['name']);
            $username= addslashes($_POST['username']);
            $password=addslashes($_POST['password']);
            $password2=addslashes($_POST['password2']);

            $data= ['name'=>"'${name}'", 
                    'username'=>"'$username'", 
                    'password'=>"'$password'",
                    'password2'=>"'$password2'"];
            
            $data1=$this->registerModel->find($username);
            print_r($data1);
            // if(empty($data1)){
            //     $this->addUser( $data);
            //     $_SESSION['username']=$username;
            //     $_SESSION['name']=$name;
            //     header('Location: index.php?');
                    
            // } else {
            //     echo "<script>
            //             alert('Tên đăng nhập đã có, sử dụng tên khác');
            //             history.back();
            //         </script>";
            // }
    }
}