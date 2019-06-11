<?php 
namespace minapp\system;

class DB
{
	protected $host;
	protected $database;
	protected $username;
	protected $password;
	private $connection;
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
	public function getConnection(){
		$this->connection = null;

        try{
            $this->connection = mysqli_connect($this->host, $this->username, $this->password,$this->database);
        }catch(PDOException $exception){
            return "Connection failed: " . $exception->getMessage();
        }

        return $this->connection;
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
    banner_image text not null,
    created_at text not null
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
	ask text not null,
	created_at text not null
);
create TABLE userLogin(
	u_id int PRIMARY KEY AUTO_INCREMENT,
	fullname varchar(30) not null,
	username varchar(20) not null,
	email varchar(25) not null,
	password text not null,
	image text not null,
	permission int not null
);
create TABLE contact(
	c_id int PRIMARY KEY AUTO_INCREMENT,
	fullname varchar(30) not null,
	email varchar(25) not null,
	phone varchar(15) not null,
	category varchar(50) not null,
	c_ask text not null,
	created_at text not null
);
create TABLE teach(
	t_id int PRIMARY KEY AUTO_INCREMENT,
	name varchar(30) not null,
	email varchar(25) not null,
	phone varchar(15) not null,
	facebook varchar(50) not null,
	skype varchar(50) not null,
	description text not null,
	avatar text not null,
	created_at text not null
);';
		mysqli_multi_query($this->__conn,$sql);
	}

	public function insertTableHome(){
		$map = "&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119241.31837400644!2d106.25438797459819!3d20.94081786015388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b46ef2fba69%3A0x2c3c5975d0eceb2e!2zVHAuIEjhuqNpIETGsMahbmcsIEjhuqNpIETGsMahbmc!5e0!3m2!1svi!2s!4v1560246256062!5m2!1svi!2s&quot; width=&quot;400&quot; height=&quot;300&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen&gt;&lt;/iframe&gt;";
		$sql = 'INSERT INTO homedata (name,contentText,keyword,phone,email,address,recommend,description,logoSite,mapIframe,linkFB,linkTW)
VALUES ("Minh Tâm social","MT social Mạng xã hội mở, kết bạn, chat, làm quen bạn bè mới","MTsocial, mạng xã hội", "+84340682117","minhbv@icheck.vn", "Quang Trung - Kinh Môn - Hải Dương","<strong>Trung tâm Văn Min</strong> là đơn vị thuộc Công ty MT social. Được thành lập năm 2017, đơn vị chúng tôi luôn lấy khách hàng và chất lượng dịch vụ làm mục tiêu chính để phát triển công ty. Với phương châm đó, qua gần 3 năm khẳng định và phát triển, MT social đã gặt hái được nhiều thành công tại Việt Nam. ","TRUNG TÂM GIA SƯ VĂN MIN - CÔNG TY MT SOCIAL<br/>Văn phòng: Lai Xá - Kim Chung - Hoài Đức -HN<br/>
Phụ huynh liên hệ: 0342682117","logo.png","'.$map.'","https://www.facebook.com/zake.death","https://github.com/DominixLucifer/cms-mvc_basic");';
		mysqli_query($this->__conn,$sql);
	}
	public function insertDataAll(){
		$date = getdate();
		$data= $date['year'].'-'.$date['mon'].'-'.$date['mday'].' | '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
		$sql = 'INSERT INTO banner (banner_name,banner_title,banner_image,created_at)
VALUES ("Sự lựa chọn đúng đắn", "Thúc đẩy <span>bản thân</span> vào tương lai.","banner1.jpg","'.$data.'");';
		$sql .= 'INSERT INTO banner (banner_name,banner_title,banner_image,created_at)
VALUES ("Sẵn sàng để đi", "Thúc đẩy <span>bản thân</span> vào tương lai.","banner2.jpg","'.$data.'");';
		$sql .= 'INSERT INTO banner (banner_name,banner_title,banner_image,created_at)
VALUES ("Sự thật sau một lời hứa", "Thúc đẩy <span>bản thân</span> vào tương lai.","banner3.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("LÃ KIM OANH - CHUYÊN GIA MAKEUP,NAIL,HAIR", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Tôi cần một tình yêu không hào nhoáng, không phô chương, một tình yêu bình thường. Tôi không cần người đàn ông giàu, tôi cần người đàn ông có ý chí. Tôi không cần người đàn ông trò chuyện với tôi hàng ngày, tôi chỉ cần một người đàn ông biết quan tâm tới tôi","51338496_611049015986424_4082011663434252288_n.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("VĂN MIN - PHP&LARAVEL, PYTHON3&DJANGO, ANGULAR", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","You may only be one person to the world but with me be the world.","64352248_488525578587070_2038940461401374720_n.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("TRÀ MY PHẠM - UNKNOWN", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Đêm buông xuống chính là chiếc màn che phủ những giọt nước mắt đang rơi trên mặt tôi.Đêm là lúc nỗi buồn như rơi xuống vực sâu. Đêm làm lòng ta lạnh giá.Đêm là lúc ta suy nghĩ vê những tâm trạng buồn không tên. Đang loang lổ và giật mình tỉnh giấc vì những giọt nước mắt ướt sũng trên gối nằm ","IMG_20190316_231453.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("NGUYỄN THỊ CHIÊM - UNKNOWN", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Đôi khi hạnh phúc không phải là được một người yêu
mà là có một người khiến mình yên đến quên đi tất cả.
Đó là hạnh phúc và đó cũng là đau lòng… vậy nên 1 Mình là ổn - Khoá Tym. Thanh xuân muốn đẹp, dẹp mẹ yêu đương...","FB_IMG_1556963837757.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("NGUYỄN HƯƠNG LY - UNKNOW", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Cô sẽ chờ cho đến khi tym cô mệt hẳn ,còn khả năng cô vẫn sẽ yêu anh...mặc dù tình yêu của cô không còn vị trong sáng tinh khiết như trc.dù tình yêu của cô bây giờ gồm sâu đậm và hận .thì vẫn là YÊU.EM tin anh vẫn đang yêu em 
Người con gái ấy luôn chờ anh ,luôn đợi anh dẫu thế nào....
EM HẬN ANH NHƯNG EM YÊU ANH.","zakedeath_7481d50d4b14b94e3ce89ccd0b72739d.jpg","'.$data.'");';
		mysqli_multi_query($this->__conn,$sql);
	}

	function getValue(){
		$sql = 'select * from HomeData';
		$query = mysqli_query($this->__conn,$sql);
		$count = mysqli_num_rows($query);
		return $count;
	}
	function createUser($fullname,$username,$email,$password){
				$password = password_hash($password, PASSWORD_BCRYPT);
				$sql = 'INSERT INTO userLogin (fullname,username,email,password,permission,image)
VALUES ("'.$fullname .'", "'.$username.'","'.$email.'","'.$password.'",1," ")';
				$a = mysqli_query($this->__conn,$sql)? true : false;
				return $sql;


	}

	function delete(){
		$q=mysqli_query($this->__conn,"SHOW TABLES FROM ".$this->database);

        while($r=mysqli_fetch_assoc($q)){
        	$sql = "DROP TABLE ".$r["Tables_in_".$this->database]."";
        	mysqli_query($this->__conn,$sql);
        	echo "\e[33m+++".$sql."\n";
         }

	}
	
}

 ?>