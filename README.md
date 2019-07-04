# CMS-MVC-BASIC
## Công cụ && môi trường
- php version >= 5.5
- composer
- webserver (apache, nginx,...)
## Hướng dẫn cài đặt:
- Bật mod_rewrite server
- Sửa lại thông tin database trong file env.json (hỗ trợ mysql) 
- Tại thư mục gốc, chạy bash ```composer update``` và ```composer dump-autoload``` (yêu cầu đã cài composer).
- Tiếp tục chạy ```php minapp database``` để trình thuật sĩ tự động tạo các bảng.
- Chạy tiếp lệnh ```php minapp database home``` và ```php minapp database migrate``` để trình thuật sĩ tự động insert dữ liệu default
- Chạy lệnh ```php minapp database createsuperuser``` để tiến hành tạo superuser
- Chạy lệnh ```php minapp database delete``` để xóa tất cả các bảng
## Deploy hosting:
- Chạy tất cả các lệnh bash ở trên trừ lệnh xóa bảng.
- Lệnh ```php minapp database *``` có tác dụng tự khởi tạo database và dữ liệu.
- Đẩy source code lên hosting sau đó chỉnh lại thông tin database file env.json khớp với thông tin hosting database.
- Import file database tại local đã tạo vào database hosting hoặc dùng chính terminal chạy bash trong hosting để thực hiện import database
## Tùy chỉnh ```minapp``` :
- Ta có thể import nhiều class khác vào ứng dụng CLI PHP để run bằng cách thêm ```$application->add(new example());``` ví dụ với class example
- Viết class chạy CLI PHP vui lòng kham khảo tài liệu [Symfony](https://symfony.com/doc/current/console.html)
## Hoạt động:
- File index.php tại folder root để nhận request -> Route (root/src/Route.php) -> Controller (root/src/Controller.php) tại đây controller sẽ lấy data từ model (root/src/siteModel.php) && teamplate ->Route (root/src/Route.php) -> index (root/index.php)  render html hoặc json.
- Autoloading: psr-4.
## Sử dụng
- Admin panel: ```https://domain/index.php?route=admin``` or ```https://domain/admin.html``` (đã bật mod_rewrite)
- Web bash shell cho hosting (beta): ```https://domain/index.php?route=[Tool][shell]```  or trong ```admin panel``` 
    + Lưu ý: web bash shell đang trong quá trình beta lên sẽ có thể gây lỗi nghiêm trọng và sinh ra các file swap rác
    + Hosting hỗ trợ các hàm như exec() or shell_exec() mới có thể thực thi
    + Không lên chia sẻ mật khâu web bash shell trong file ```env.json```, điều này có nguy cơ bị tấn công local attack và chiếm quyền root, thực thi các mã độc,...
## Không lên dùng để phát triển dự án thực tế
- Hiện tại đang trong quá trình phát triển, bộ khung chưa có các cơ chế kiểm soát truy cập file

#### Nếu có bug vui lòng inbox cho tôi tại email ```bvminh101299@gmail.com``` hoặc phản hồi qua facebook [Văn Min](https://www.facebook.com/zake.death) [likedin](https://www.linkedin.com/in/minh-bui-567486148/)
