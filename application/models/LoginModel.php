<?php
class LoginModel extends Model{
    const TABLE= 'login';
    public static function add($data){
        $this->create(self::TABLE, $data);
    }

    public function find($data){
        $sql= "select * from ".sefl::TABLE."where username='.$data['username'].' and password='.$data['password'].'";
        $this->_query($sql);
    }

}