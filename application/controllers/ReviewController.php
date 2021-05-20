<?php

class ReviewController extends BaseController{
    private $dethiModel;
    public function __construct(){
        $this->CreateModel('ReviewModel');
        $this->dethiModel= new DethiModel;
    }
    public function danhsach(){
        $data = $this->dethiModel->getAll();
        return $this->CreateViewData('review', $data);
    }

}