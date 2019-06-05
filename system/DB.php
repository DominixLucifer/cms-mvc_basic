<?php 
namespace minapp\system;

class DB
{
	protected $servername;
	protected $username;
	protected $password;
	public $conn;

	public function __construct($servername, $username, $password){
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
	}
	public function connect(){
		$conn = new mysqli($this->servername, $this->username, $this->password);
		if ($conn->connect_error) {
    		return false;
		}else{
			$this->conn = $$conn;
			mysqli_query($this->conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			return true;
		} 
	}
	

// Check connection
	
	// echo "Connected successfully";
}

 ?>