<?php
class Model extends Database{
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
    public function all($table, $select= ['*'], $orderBys=[], $limit= 15){
        $columns= implode(',' , $select);
        $orderByString= implode(' ', $orderBys);

        if ($orderByString){
            $sql= "select ${columns} from ${table} order by ${orderByString} limit ${limit}";
        } else {
            $sql= "select ${columns} from ${table} limit ${limit}";
        }

        $data= $this->getAllQuery($sql);

        return $data;
    }

    public function find($table,$id){
        $sql= "select * from ${table} where id= ${id}";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    public function findByData($table,$data=[]){
        $sql= "select * from ${table} where id= ${id}";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    public function create($table, $data =[]){

        $columns= implode(',', array_keys($data));
        $newValues= array_map(function ($value) {
            return "'". $value . "'";
        }, array_values($data));
        
        $newValues=  implode(',', $newValues);
        $sql= "insert into ${table}(${columns}) values (${newValues})";
        $this->_query($sql);
    }

    public function updateDataBase($table,$id, $data= []){
        $dataSet= [];

        foreach ($data as $key=>$val){
            array_push($dataSet,"${key}= '". $val ."'");
        }
        $dataSetString= implode(',', $dataSet);
        $sql= "update ${table} set ${dataSetString} where id= ${id}";

        $this->_query($sql);
    }

    public function delete($table, $id){
        $sql= "delete from ${table} where id=${id}";
        $this->_query($sql);
    }
}
}