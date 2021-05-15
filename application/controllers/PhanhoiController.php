<?php
include_once ('./libs/helper.php');
include_once ('./libs/helper.php');
class PhanhoiController extends BaseController{
    private $phanhoiModel;
    public function __construct(){
        $this->CreateModel('PhanhoiModel');
        $this->phanhoiModel= new PhanhoiModel;
    }
    public function danhsach(){
        $data =$this->phanhoiModel->getAll();
        return $this->CreateViewData('phanhoi', $data);
    }
    public function add(){
        if (isset($_SESSION['username'])&& $_SESSION['username'] ){
            $username= $_SESSION['username'];
            $phanhoi= $_POST['phanhoi'];
            $data=['iduser'=>$username, 'phanhoi'=>$phanhoi];
            $this->addPhanhoi($phanhoi);
            redirect('?c=phanhoi&a=danhsach');
        }
    }
}