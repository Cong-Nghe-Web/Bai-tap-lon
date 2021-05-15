<?php
class RegisterModel extends BaseModel{
    const TABLE='login';
    public function addUser($data){
        $this->create(self::TABLE ,$data);
    }
}