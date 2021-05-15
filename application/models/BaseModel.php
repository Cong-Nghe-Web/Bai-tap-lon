<?php
class BaseModel extends Database{
    protected $connect;

    public function __construct(){
        $this->connect= $this->getConnection();
        // echo __METHOD__;
    }

    private function _query($sql){
        return mysqli_query($this->connect,$sql);
    }

    public function getAllQuery($sql){
        $data= [];
        $query = $this->_query($sql);
        while($row= mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }

        return $data;
    }

    public function danhsachName($table, $name){
        $sql = "select * FROM {$table} where name = '{$name}'";
        return $this->getAllQuery($sql);
    }

    public function create($table, $data =[]){

        $columns= implode(',', array_keys($data));
        $newValues= array_map(function ($value) {
            return "'". $value . "'";
        }, array_values($data));
        
        $newValues=  implode(',', $newValues);
        $sql= "insert into ${table}(${columns}) values (${newValues})";
        return $this->_query($sql);
    }

    public function all($table, $select= ['*'], $orderBys=[], $limit= 15){
        $columns= implode(',' , $select);
        $orderByString= implode(' ', $orderBys);

        if ($orderByString){
            $sql= "select ${columns} from ${table} order by ${orderByString} limit ${limit}";
        } else {
            $sql= "select ${columns} from ${table} limit ${limit}";
        }
        return $this->getAllQuery($sql);
    }
}