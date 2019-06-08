# CMS-MVC-BASIC
## Công cụ && môi trường
- php version >= 5.5
- composer
- webserver (apache, nginx,...)
## Hướng dẫn cài đặt:
- Sửa lại thông tin database trong file env.json (hỗ trợ mysql) 
- Tại thư mục gốc, chạy bash ```composer update``` và ```composer dump-autoload``` (yêu cầu đã cài composer).
- Tiếp tục chạy ```php minapp database``` để trình thuật sĩ tự động tạo các bảng.
- Chạy tiếp lệnh ```php minapp database home``` và ```php minapp database migrate``` để trình thuật sĩ tự động insert dữ liệu fake giúp website không bị lỗi.
- Chạy lệnh ```php minapp database createsuperuser``` để tiến hành tạo superuser
## Tùy chỉnh ```minapp``` :
- Ta có thể import nhiều class khác vào ứng dụng CLI PHP để run bằng cách thêm ```$application->add(new example());``` ví dụ với class example
- Viết class chạy CLI PHP vui lòng kham khảo tài liệu [Symfony](https://symfony.com/doc/current/console.html)
## Hoạt động:
- File index.php tại folder root để nhận request -> Route (root/src/Route.php) -> Controller (root/src/Controller.php) tại đây controller sẽ lấy data từ model (root/src/siteModel.php) && teamplate ->Route (root/src/Route.php) -> index (root/index.php)  render html hoặc json.
- Autoloading: psr-4.
## đang cập nhật...

#### Nếu có lỗi vui lòng inbox cho tôi tại email ```bvminh101299@gmail.com``` hoặc phản hồi qua facebook [Văn Min](https://www.facebook.com/zake.death)
