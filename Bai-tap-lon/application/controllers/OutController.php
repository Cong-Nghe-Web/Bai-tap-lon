<?php if (!defined('IN_SITE')) die('The request not found');
class OutController extends BaseController{
    public function logout(){
        set_logout();
        redirect(base_url('index.php/?c=home&a=dangxuat'));
    }
}