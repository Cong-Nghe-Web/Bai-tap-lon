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

    public function check(){
        $data = $this->reviewModel->getAll();
        $count = 0;
        $wrong = [];
        echo "Những câu bạn sai: ";
        foreach($data as $val1){
            if (isset($_POST[$val1['ID']])){
                if ($val1['Answer']==$_POST[$val1['ID']])   $count++;
                else    array_push ($wrong, $val1['ID']);
            }
        }
        return $this->CreateViewData2('diem', $count, $wrong);
    }

}