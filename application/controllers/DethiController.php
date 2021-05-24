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
    
    public function check(){
        $data = $this->dethiModel->getAll();
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