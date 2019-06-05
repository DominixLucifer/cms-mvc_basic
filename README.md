# CMS-MVC-BASIC
## Công cụ && môi trường
- php version >= 5.5
- composer
- webserver (apache, nginx,...)
## Hướng dẫn cài đặt
- Sửa lại thông tin database trong file env.json (hỗ trợ mysql) 
- Tại thư mục gốc, chạy bash ```composer update``` và ```composer dump-autoload``` (yêu cầu đã cài composer).
- Tiếp tục chạy ```php minapp database``` để trình thuật sĩ tự động tạo các bảng.
- Chạy tiếp lệnh ```php minapp database home``` và ```php minapp database migrate``` để trình thuật sĩ tự động insert dữ liệu cần thiết.
#### Nếu có lỗi vui lòng inbox cho tôi tại email ```bvminh101299@gmail.com``` hoặc phản hồi qua facebook [Văn Min](https://www.facebook.com/zake.death)
