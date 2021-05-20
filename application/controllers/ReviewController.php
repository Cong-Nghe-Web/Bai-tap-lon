<?php

class ReviewController extends BaseController{
    private $reviewModel;
    public function __construct(){
        $this->CreateModel('ReviewModel');
        $this->reviewModel= new ReviewModel;
    }
    public function danhsach(){
        $data = $this->reviewModel->getAll();
        return $this->CreateViewData('review', $data);
    }

}