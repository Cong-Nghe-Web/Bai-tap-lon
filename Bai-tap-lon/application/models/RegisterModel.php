<?php
class RegisterModel extends BaseModel{
    const TABLE='login';
    public function find($username){
        $this->findByUsername(self::TABLE ,$username);
    }
}