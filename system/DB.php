<?php 
namespace minapp\system;

class DB
{
	protected $host;
	protected $database;
	protected $username;
	protected $password;
	public $__conn;

	public function __construct(){
		$strJsonFileContents = file_get_contents(__DIR__."/../env.json");
        $arrayEnv = json_decode($strJsonFileContents, true);
		$this->database = $arrayEnv['database'];
		$this->username = $arrayEnv['user'];
		$this->password =$arrayEnv['password'];
		$this->host = $arrayEnv['host'];
	}
	public function connect(){
		$conn = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if ($conn) {
    		$this->__conn = $conn;
			mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			mysqli_set_charset($this->__conn,"utf8");
			return true;
		}else{
			return false;
		} 
	}
	public function createTable(){
		$sql = 'create TABLE HomeData(
	id int PRIMARY key AUTO_INCREMENT,
    name varchar(50) not null,
    phone varchar(15) not null,
    maxim text not null,
    blog text not null,
    linkFB text not null,
    linkTW text not null
);
create TABLE banner(
	banner_id int PRIMARY KEY AUTO_INCREMENT,
    banner_name varchar(40) not null,
    banner_title text not null,
    banner_image text not null
);';
		mysqli_multi_query($this->__conn,$sql);
	}

	public function insertTableHome(){
		$sql = 'INSERT INTO homedata (name, phone,blog, maxim,linkFB,linkTW)
VALUES ("Minh Tâm shop", "+84-340682117","Chúng tôi luôn cố gắng tạo ra giá trị tốt đẹp. Chúng tôi là bạn đồng hành của bạn", "Chúng tôi luôn cố gắng tạo ra giá trị tốt đẹp","https://www.facebook.com/zake.death","https://github.com/DominixLucifer/cms-mvc_basic");';
		$sql.='INSERT INTO banner (banner_name,banner_title,banner_image)
VALUES ("Sự lựa chọn đúng đắn", "Thúc đẩy <span>bản thân</span> vào tương lai.","1.jpg");';
		mysqli_query($this->__conn,$sql);
	}
	public function insertDataAll(){
		$sql = 'INSERT INTO banner (banner_name,banner_title,banner_image)
VALUES ("Sự lựa chọn đúng đắn", "Thúc đẩy <span>bản thân</span> vào tương lai.","1.jpg");';
		$sql .= 'INSERT INTO banner (banner_name,banner_title,banner_image)
VALUES ("Sẵn sàng để đi", "Thúc đẩy <span>bản thân</span> vào tương lai.","2.jpg");';
		$sql .= 'INSERT INTO banner (banner_name,banner_title,banner_image)
VALUES ("Chăm sóc tận tình", "Thúc đẩy <span>bản thân</span> vào tương lai.","3.jpg");';
		mysqli_multi_query($this->__conn,$sql);
	}

	function getValue(){
		$sql = 'select * from HomeData';
		$query = mysqli_query($this->__conn,$sql);
		$count = mysqli_num_rows($query);
		return $count;
	}
	
}

 ?>