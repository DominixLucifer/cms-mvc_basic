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
    
 
}



 ?>