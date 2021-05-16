<?php

class LoginModel extends BaseModel{
    const TABLE='login';

    public function find($username){
        return $this->findByName(self::TABLE, $username);
    }


}
