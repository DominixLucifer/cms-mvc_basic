<?php 
namespace minapp;

use minapp\system\DB;
use minapp\lib\Model;
class siteModel 
{
   protected $tableName;
   protected $connect;

    
    
    public function __construct($table){
        $this->tableName = $table;
        $this->connect = new DB();
        $this->connect->connect();


    }
    function getAll(){
        // return $this->getColumnValue('id');
        $sql = 'select * from '.$this->tableName;
        $result = mysqli_query($this->connect->__conn,$sql);
        $json = new \stdClass();
        if(mysqli_num_rows($result)){
        	while($row = mysqli_fetch_object($result)){
        		$data[] = $row;
        	}
        	$json->data = $data; 
        }else{
        	$json->data = [];
        }
        return json_encode($json);
    }

    function insert($data){
        $data = (array) $data;
 
    $field_list = '';
    $value_list = '';
 
    // loop data
    foreach ($data as $key => $value){
        $field_list .= ",$key";
        $value_list .= ",'".$value."'";
    }
 
    $sql = 'INSERT INTO '.$this->tableName. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
 
    if(mysqli_query($this->connect->__conn, $sql)){
        return true;
    }else{
        return false;
    }

    }

    function getRow($sql){

    $result = mysqli_query($this->connect->__conn, $sql);
 
    if (!$result){
        return false;
    }
 
    $row = mysqli_fetch_object($result);
 
 
    if ($row){
        return $row;
    }
 
    return false;
}
    function update($data, $where){

        $sql = '';
        foreach ($data as $key => $value){
            $sql .= "$key = '".$value."',";
        }
 
        $sql = 'UPDATE '.$this->tableName. ' SET '.trim($sql, ',').' WHERE '.$where;
 
        if(mysqli_query($this->connect->__conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
 
}



 ?>