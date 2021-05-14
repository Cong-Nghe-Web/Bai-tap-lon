<?php
class DethiController extends BaseController{
    private $dethiModel;
    public function __construct(){
        $this->model('DethiModel');
        $this->dethiModel= new DethiModel;
    }
    public static function danhsach(){
        $data= $this->dethiModel->getAll();
        return $this->CreateView('dethi');
    }

    public static function bieudien(){
        $id =$_REQUEST['id'];
        return $this->CreateView($id);
    }
}