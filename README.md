# CMS-MVC-BASIC
## Công cụ && môi trường
- php version >= 5.5
- composer
- webserver (apache, nginx,...)
## Hướng dẫn cài đặt:
- Bật mod_rewrite server
- Sửa lại thông tin database trong file env.json (hỗ trợ mysql) 
- Tại thư mục gốc, chạy lần lượt các lệnh bash ```composer install```,```composer update``` và ```composer dump-autoload``` (yêu cầu đã cài composer).
- Tiếp tục chạy ```php minapp database``` để trình thuật sĩ tự động tạo các bảng.
- Chạy tiếp lệnh ```php minapp database home``` và ```php minapp database migrate``` để trình thuật sĩ tự động insert dữ liệu default
- Chạy lệnh ```php minapp database createsuperuser``` để tiến hành tạo superuser
- Chạy lệnh ```php minapp database delete``` để xóa tất cả các bảng
## Deploy:
- run bash.
- ```php minapp database *``` migrate database.
- Sửa lại thông tin database file env.json.
## bash ```minapp``` :
- PHP CLI vui lòng kham khảo tài liệu [Symfony](https://symfony.com/doc/current/console.html)
## Hoạt động:
- index.php nhận request -> Route (root/src/Route.php) -> Controller (root/src/Controller.php) controller lấy data từ model (root/src/siteModel.php) && teamplate ->Route (root/src/Route.php) -> index (root/index.php)  render html hoặc json.
- Autoloading: psr-4.
## Sử dụng
- Admin panel: ```https://domain/index.php?route=admin``` or ```https://domain/admin.html``` (mod_rewrite)
- Web bash shell (beta): ```https://domain/index.php?route=[Tool][shell]```  or ```admin panel``` 
    + Beta: web bash shell beta có thể gây lỗi nếu được thực thi
## Không dùng để phát triển dự án thực tế

#### Facebook [Văn Min](https://www.facebook.com/zake.death) [likedin](https://www.linkedin.com/in/minh-bui-567486148/)
