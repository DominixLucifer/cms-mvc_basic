<?php 
namespace minapp\system;

class DB
{
	protected $host;
	protected $database;
	protected $username;
	protected $password;
	public $__conn;

	public function __construct($host, $username, $password,$database){
		$this->database = $database;
		$this->username = $username;
		$this->password = $password;
		$this->host = $host;
	}
	public function connect(){
		$conn = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if ($conn) {
    		$this->__conn = $conn;
			mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			return true;
		}else{
			return false;
		} 
	}
	
}

 ?>