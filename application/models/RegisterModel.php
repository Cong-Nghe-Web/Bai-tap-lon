<?php
class RegisterModel extends BaseModel{
    const TABLE='login';

    public function find($username){
        return $this->findByName(self::TABLE, $username);
    }
    public function addUser($data){
        $this->create(self::TABLE ,$data);
    }
}