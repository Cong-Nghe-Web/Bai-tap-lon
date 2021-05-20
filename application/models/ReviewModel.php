<?php

class ReviewModel extends BaseModel{
    const TABLE='tenses';

    public function getAll(){
        $select=['ID','Question','A','B','C','D'];
        return $this->all(self::TABLE, $select);
    }
}

