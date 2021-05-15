<?php
class SreachController extends BaseController{
    private $sreacModel;
    public function __construct(){
        $this->CreateModel('SreachModel');
        $this->sreachModel= new SreachModel;
    }
    public function danhsach(){
        $name= $_REQUEST['sreach'];
        $data =$this->sreachModel->danhsachN($name);
        // return $this->CreateViewData('timkiem',$data);
        print_r($data);
    }

}