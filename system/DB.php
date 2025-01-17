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
	public $passShell;

	public function __construct(){
		$strJsonFileContents = file_get_contents(__DIR__."/../env.json");
        $arrayEnv = json_decode($strJsonFileContents, true);
		$this->database = $arrayEnv['database'];
		$this->username = $arrayEnv['user'];
		$this->password =$arrayEnv['password'];
		$this->passShell =$arrayEnv['password_shell'];
		$this->host = $arrayEnv['host'];
	}
	public function connect(){
		$conn = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if ($conn) {
    		$this->__conn = $conn;
			mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			mysqli_query($this->__conn, "ALTER DATABASE ".$this->database." CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci");
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
		$sql = 'create TABLE homedata(
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
    banner_name varchar(50) not null,
    banner_title text not null,
    banner_image text not null,
    created_at text not null
);
create TABLE findmaster(
	m_id int PRIMARY KEY AUTO_INCREMENT,
	fullname varchar(50) not null,
	address text,
	phone varchar(15) not null,
	email varchar(50) not null,
	stclass varchar(10),
	school varchar(40),
	sex varchar(3),
	learning varchar(10),
	subject text,
	sl varchar(3),
	purpose varchar(20),
	ask text,
	status int not null,
	created_at text not null
);
create TABLE userlogin(
	u_id int PRIMARY KEY AUTO_INCREMENT,
	fullname varchar(60) not null,
	phone varchar(13),
	username varchar(40) not null,
	email varchar(25) not null,
	password text not null,
	image text not null,
	permission int not null
);
create TABLE contact(
	c_id int PRIMARY KEY AUTO_INCREMENT,
	fullname varchar(50) not null,
	email varchar(40) not null,
	phone varchar(15) not null,
	category varchar(50) not null,
	c_ask text not null,
	status int not null,
	created_at text not null
);
create TABLE teach(
	t_id int PRIMARY KEY AUTO_INCREMENT,
	name varchar(100) not null,
	email varchar(40) not null,
	phone varchar(15) not null,
	facebook varchar(50) not null,
	skype varchar(50) not null,
	description text not null,
	avatar text not null,
	created_at text not null
);
create TABLE image(
	img_id int PRIMARY KEY AUTO_INCREMENT,
	url_img text not null,
	created_at text not null
);
create TABLE blog(
	b_id int PRIMARY KEY AUTO_INCREMENT,
	title varchar(100) not null,
	meta text not null,
	body LONGTEXT not null,
	id_user int,
	image text not null,
	created_at text not null,
	updated_at text
);
';
		mysqli_multi_query($this->__conn,$sql);
	}

	public function insertTableHome(){
		$map = "&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119241.31837400644!2d106.25438797459819!3d20.94081786015388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b46ef2fba69%3A0x2c3c5975d0eceb2e!2zVHAuIEjhuqNpIETGsMahbmcsIEjhuqNpIETGsMahbmc!5e0!3m2!1svi!2s!4v1560246256062!5m2!1svi!2s&quot; width=&quot;400&quot; height=&quot;300&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen&gt;&lt;/iframe&gt;";
		$sql = 'INSERT INTO homedata (name,contentText,keyword,phone,email,address,recommend,description,logoSite,mapIframe,linkFB,linkTW)
VALUES ("Minh Tâm social","MT social Mạng xã hội mở, kết bạn, chat, làm quen bạn bè mới","MTsocial, mạng xã hội", "+84340682117","minhbv@icheck.vn", "Quang Trung - Kinh Môn - Hải Dương","<strong>Trung tâm Văn Min</strong> là đơn vị thuộc Công ty MT social. Được thành lập năm 2017, đơn vị chúng tôi luôn lấy khách hàng và chất lượng dịch vụ làm mục tiêu chính để phát triển công ty. Với phương châm đó, qua gần 3 năm khẳng định và phát triển, MT social đã gặt hái được nhiều thành công tại Việt Nam. ","TRUNG TÂM GIA SƯ VĂN MIN - CÔNG TY MT SOCIAL<br/>Văn phòng: Lai Xá - Kim Chung - Hoài Đức -HN<br/>
Phụ huynh liên hệ: 0342682117","src/asset/upload/logo.png","'.$map.'","https://www.facebook.com/zake.death","https://github.com/DominixLucifer/cms-mvc_basic")';
		mysqli_query($this->__conn,$sql);
		return $sql;
	}
	public function insertDataAll(){
		$date = getdate();
		$data= $date['year'].'-'.$date['mon'].'-'.$date['mday'].' | '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
		$sql = 'INSERT INTO banner (banner_name,banner_title,banner_image,created_at)
VALUES ("Sự lựa chọn đúng đắn", "Thúc đẩy <span>bản thân</span> vào tương lai.","src/asset/upload/banner1.jpg","'.$data.'");';
		$sql .= 'INSERT INTO banner (banner_name,banner_title,banner_image,created_at)
VALUES ("Sẵn sàng để đi", "Thúc đẩy <span>bản thân</span> vào tương lai.","src/asset/upload/banner2.jpg","'.$data.'");';
		$sql .= 'INSERT INTO banner (banner_name,banner_title,banner_image,created_at)
VALUES ("Sự thật sau một lời hứa", "Thúc đẩy <span>bản thân</span> vào tương lai.","src/asset/upload/banner3.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("LÃ KIM OANH - CHUYÊN GIA MAKEUP,NAIL,HAIR", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Tôi cần một tình yêu không hào nhoáng, không phô chương, một tình yêu bình thường. Tôi không cần người đàn ông giàu, tôi cần người đàn ông có ý chí. Tôi không cần người đàn ông trò chuyện với tôi hàng ngày, tôi chỉ cần một người đàn ông biết quan tâm tới tôi","src/asset/upload/51338496_611049015986424_4082011663434252288_n.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("TRÀ MY PHẠM - MEKETING", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Đêm buông xuống chính là chiếc màn che phủ những giọt nước mắt đang rơi trên mặt tôi.Đêm là lúc nỗi buồn như rơi xuống vực sâu. Đêm làm lòng ta lạnh giá.Đêm là lúc ta suy nghĩ vê những tâm trạng buồn không tên. Đang loang lổ và giật mình tỉnh giấc vì những giọt nước mắt ướt sũng trên gối nằm ","src/asset/upload/IMG_20190316_231453.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("NGUYỄN THỊ CHIÊM - Artist", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Đôi khi hạnh phúc không phải là được một người yêu
mà là có một người khiến mình yên đến quên đi tất cả.
Đó là hạnh phúc và đó cũng là đau lòng… vậy nên 1 Mình là ổn - Khoá Tym. Thanh xuân muốn đẹp, dẹp mẹ yêu đương...","src/asset/upload/FB_IMG_1556963837757.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("NGUYỄN HƯƠNG LY - UNKNOW", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Cô sẽ chờ cho đến khi tym cô mệt hẳn ,còn khả năng cô vẫn sẽ yêu anh...mặc dù tình yêu của cô không còn vị trong sáng tinh khiết như trc.dù tình yêu của cô bây giờ gồm sâu đậm và hận .thì vẫn là YÊU.EM tin anh vẫn đang yêu em 
Người con gái ấy luôn chờ anh ,luôn đợi anh dẫu thế nào....
EM HẬN ANH NHƯNG EM YÊU ANH.","src/asset/upload/zakedeath_7481d50d4b14b94e3ce89ccd0b72739d.jpg","'.$data.'");';

		$sql .= 'INSERT INTO teach (name,email,phone,facebook,skype,description,avatar,created_at)
VALUES ("Thùy Linh Nguyễn - Tour guide", "minhbv@icheck.vn","0342682117","https://fb.com/zake.death","bvminh101299","Là con gái thì phải thật xinh và giàu, sau đó mới tính chuyện trăm năm","src/asset/upload/NguyenThuyLinh.jpg","'.$data.'");';

		$sql .= 'INSERT INTO blog (title,meta,body,id_user,image,created_at,updated_at)
VALUES ("5 điểm mạnh của ngôn ngữ lập trình PHP", "PHP – Một cậu bé có nhiều tranh cãi trong giới lập trình viên. Vì một vài lý do, danh tiếng của PHP đã bị ảnh hưởng. Sự phát triển ban đầu của PHP đã bị thay đổi. Các thư viện chuẩn trong PHP không còn có sự gắn kết mạnh mẽ nữa. Nhiều thập kỷ trước nó còn vấp phải về vấn đề bảo mật. Và cộng đồng đa dạng của nó tiếp tục tung ra những phiên bản PHP tốt cũng như PHP chưa tốt","1. One Data Structure To Rule Them All (Một cấu trúc dữ liệu quy định tất cả) Đừng ngạc nhiên khi đây là điểm mạnh đầu tiên của PHP. PHP có bộ sưu tập đồ sộ các thư viện , và nó khiến chúng ta ngộ nhận rằng PHP array thực sự ra lệnh bảng băm. Nhưng … chúng ta phải thừa nhận điều này:Nếu bạn được yêu cầu tạo một cấu trúc dữ liệu cho một ngôn ngữ lập trình, và được yêu cầu làm cho nó đơn giản để dễ sử dụng, rất linh hoạt và tương đối nhanh về hiệu năng, tôi sẽ trỏ tới các mảng của PHP.Người bình thường có thể nhận thấy những thứ xấu xí của cấu trúc dữ liệu này, và hoàn toàn đồng ý … ngoại trừ rằng mảng trong PHP rất hữu ích.<br/>2. Web-first (Ngôn ngữ dành cho WEB)W3 Techs đã ra báo cáo tháng 5 năm 2014 của họ và không ngạc nhiên khi họ chỉ ra rằng các trang web viết bằng PHP chiếm nhiều nhất trên thế giới: PHP chiếm  82.0% các trang web có ngôn ngữ lập trình phía máy chủ mà chúng tôi biết.Tại sao PHP lại thành công vang dội? Chắc chắn có nhiều lý do, nhưng một trong số đó là PHP thực tế được xây dựng như một ngôn ngữ web. Không cần phải khởi động web trong mã PHP của bạn. Từ dòng mã đầu tiên, bạn có thể giả định rằng bạn đang chạy trên một máy chủ web.",null,"src/asset/upload/NguyenThuyLinh.jpg","'.$data.'","");';
		if(mysqli_multi_query($this->__conn,$sql)){
			return true;
		}else{
			return false;
		}
		// mysqli_multi_query($this->__conn,$sql);
		// return $sql;
		
	}

	function getValue(){
		$sql = 'select * from homedata';
		$query = mysqli_query($this->__conn,$sql);
		$count = mysqli_num_rows($query);
		return $count;
	}
	function createUser($fullname,$username,$email,$password){
				$password = password_hash($password, PASSWORD_BCRYPT);
				$sql = 'INSERT INTO userlogin (fullname,username,email,password,permission,image,phone)
VALUES ("'.$fullname .'", "'.$username.'","'.$email.'","'.$password.'",1," ","")';
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