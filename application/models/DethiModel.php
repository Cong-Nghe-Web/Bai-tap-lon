<?php
class DethiModel extends BaseModel{
    //const TABLE='dethi';
    const TABLE = 'test';
//    public function getAll(){
//        $select=['id','name'];
//        return $this->all(self::TABLE, $select);
//    }
    public function getAll(){
        $select=['ID','Question','A','B','C','D','Answer'];
        return $this->all(self::TABLE, $select);
    }
}