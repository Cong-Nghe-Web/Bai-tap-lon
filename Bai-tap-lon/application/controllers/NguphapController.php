<?php
class NguphapController extends BaseController{
    private $nguphapModel;
    public function __construct(){
        $this->model('NguphapModel');
        $this->nguphapModel= new NguphapModel;
    }
    public static function danhsach(){
        $data =$this->nguphapModel->getAll();
        return $this->CreateView('nguphap');
    }
    public static function bieudien(){
        $id =$_REQUEST['id'];
        return $this->CreateView($id);
    }

}