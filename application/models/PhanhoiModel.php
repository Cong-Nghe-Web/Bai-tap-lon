<?php
class PhanhoiModel extends BaseModel{
    const TABLE='phanhoi';

    public function getAll(){
        $select=['iduser','phanhoi'];
        return $this->all(self::TABLE, $select);
    }
    public function addPhanhoi($data){
        return $this->create(self::TABLE, $data);
    }
}