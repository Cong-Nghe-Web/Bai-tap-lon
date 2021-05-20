<?php
class DethiController extends BaseController{
    private $dethiModel;
    public function __construct(){
        $this->CreateModel('DethiModel');
        $this->dethiModel= new DethiModel;
    }
    public function danhsach(){
        $data = $this->dethiModel->getAll();
        return $this->CreateViewData('dethi', $data);
    }

    public function bieudiendethi(){
        $id =$_REQUEST['id'];
        if (isset($_SESSION['username']) && $_SESSION['username'] && isset($_SESSION['name']) && $_SESSION['name']){
            return $this->CreateView($id);
        }else {
            echo "<script>
            alert('Bạn cần đăng nhập để làm bài kiểm tra!');
            history.back();
            </script>";
        }
    }
}