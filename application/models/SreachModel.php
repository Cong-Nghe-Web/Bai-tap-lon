<?php
class SreachModel extends BaseModel{
    const TABLE='nguphap';

    public function danhsachN($name){
        return $this->danhsachName(self::TABLE, $name);
    }
}