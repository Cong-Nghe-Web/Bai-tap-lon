<?php
class LoginModel extends BaseModel{
    const TABLE= 'login';

    public function find( $username){
        $this->findByName(self::TABLE, $username);
    }

}
