<?php
include_once( './classes/Route.php' );
include_once( './application/controllers/Controller.php' );
include_once( './application/controllers/Home.php' );
include_once( './application/controllers/Login.php' );
Route::set('home', function(){
    Home::CreateView('home');
});
Route::set('dangki', function(){
    Login::CreateView('register');
});
Route::set('login', function(){
    Login::CreateView('login');
});
Route::set('register', function(){
    $data =['name'=>$_POST['fullName'], 
            'username'=>$_POST['usr'],
            'password'=>$_POST['pwd'], 
            'password2'=>$_POST['vpass']];
    Login::register($data);
});