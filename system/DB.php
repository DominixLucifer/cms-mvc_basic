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
    contentText text not null,
    keyword text not null,
    phone varchar(15) not null,
    email varchar(50) not null,
    address text not null,
    recommend text not null,
    description text not null,
    logoSite text not null,
    mapIframe text not null,
    linkFB text not null,
    linkTW text not null
);
create TABLE banner(
	banner_id int PRIMARY KEY AUTO_INCREMENT,
    banner_name varchar(40) not null,
    banner_title text not null,
    banner_image text not null
);
create TABLE findMaster(
	m_id int PRIMARY KEY AUTO_INCREMENT,
	fullname varchar(30) not null,
	address text not null,
	phone varchar(15) not null,
	email varchar(50) not null,
	Stclass varchar(10) not null,
	school varchar(40) not null,
	sex varchar(3) not null,
	learning varchar(10) not null,
	subject text not null,
	count int not null,
	purpose varchar(20) not null,
	ask text not null
);
create TABLE userLogin(
	u_id int PRIMARY KEY AUTO_INCREMENT,
	fullname varchar(30) not null,
	username varchar(20) not null,
	email varchar(25) not null,
	password text not null,
	encrypt varchar(10) not null
);';
		mysqli_multi_query($this->__conn,$sql);
	}

	public function insertTableHome(){
		$sql = 'INSERT INTO homedata (name,contentText,keyword,phone,email,address,recommend,description,logoSite,mapIframe,linkFB,linkTW)
VALUES ("Minh Tâm social","MT social Mạng xã hội mở, kết bạn, chat, làm quen bạn bè mới","MTsocial, mạng xã hội", "+84-340682117","minhbv@icheck.vn", "Quang Trung - Kinh Môn - Hải Dương","<strong>Trung tâm Văn Min</strong> là đơn vị thuộc Công ty MT social. Được thành lập năm 2017, đơn vị chúng tôi luôn lấy khách hàng và chất lượng dịch vụ làm mục tiêu chính để phát triển công ty. Với phương châm đó, qua gần 3 năm khẳng định và phát triển, MT social đã gặt hái được nhiều thành công tại Việt Nam. ","TRUNG TÂM GIA SƯ VĂN MIN - CÔNG TY MT SOCIAL<br/>Văn phòng: Lai Xá - Kim Chung - Hoài Đức -HN<br/>
Phụ huynh liên hệ: 0342682117","logo.png","&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12901.528684109799!2d106.33158669038049!3d20.93428419750537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b359fd4763d%3A0xb656859adfa6c973!2zS2h1IGThu4tjaCB24bulIGR1IGzhu4tjaCDDgnUgQ8ah!5e0!3m2!1svi!2s!4v1559988081858!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen&gt;&lt;/iframe&gt;","https://www.facebook.com/zake.death","https://github.com/DominixLucifer/cms-mvc_basic");';
		mysqli_query($this->__conn,$sql);
	}
	public function insertDataAll(){
		$sql = 'INSERT INTO banner (banner_name,banner_title,banner_image)
VALUES ("Sự lựa chọn đúng đắn", "Thúc đẩy <span>bản thân</span> vào tương lai.","banner1.jpg");';
		$sql .= 'INSERT INTO banner (banner_name,banner_title,banner_image)
VALUES ("Sẵn sàng để đi", "Thúc đẩy <span>bản thân</span> vào tương lai.","banner2.jpg");';
		mysqli_multi_query($this->__conn,$sql);
	}

	function getValue(){
		$sql = 'select * from HomeData';
		$query = mysqli_query($this->__conn,$sql);
		$count = mysqli_num_rows($query);
		return $count;
	}
	function createUser($fullname,$username,$email,$password,$encrypt){

			if($encrypt == 'md5'){
				$password = md5($password);
				$sql = 'INSERT INTO userLogin (fullname,username,email,password,encrypt)
VALUES ("'.$fullname .'", "'.$username.'","'.$email.'","'.$password.'","'.$encrypt.'")';
				$a = mysqli_query($this->__conn,$sql) ? true : false;
				return  $a;

			}else if($encrypt == 'sha1'){
				$password = sha1($password);
				$sql = 'INSERT INTO userLogin (fullname,username,email,password,encrypt)
VALUES ("'.$fullname .'", "'.$username.'","'.$email.'","'.$password.'","'.$encrypt.'")';
				$a = mysqli_query($this->__conn,$sql)? true : false;
				return $a;
			}else{
				return false;
			}

	}
	
}

 ?>