
<!-- - var navbarCustom = "fixed-top navbar-semi-dark navbar-shadow"-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require_once __DIR__.'/element/head.php'; ?>


<body class="vertical-layout vertical-menu 2-columns  fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

        

    <!-- fixed-top-->
   <?php require_once __DIR__.'/element/navbar.php'; ?>       
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <!-- main menu header-->
    <!-- / main menu header-->
    <!-- main menu content-->
  <?php require_once __DIR__.'/element/menu.php'; ?>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- main menu footer-->
</div>
    <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h2 class="content-header-title">Overview</h2>
            </div>

            
            
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="index.php?route=admin">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Overview -->
            <div class="card">
                <div class="card-header">
                    <h4 id="basic-forms" class="card-title">Web application MVC</h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <p class="card-text">CMS-MVC-BASIC : <a href="https://github.com/DominixLucifer/cms-mvc_basic">Github</a></p>
                        <p><strong>Created:</strong> 05/06/2019 - V1.0</p>
                        <p><strong>Updated:</strong> 10/06/2019 - V2.0</strong></p>
                        <p><strong>By:</strong> Dominix (Văn Min)</strong></p>
                        <p><strong>Support Portal:</strong> <a href="https://www.facebook.com/zake.death" target="_bank">Facebook</a></strong></p>

                        <p class="card-text"><strong>Công cụ && môi trường</strong></br>
- php version >= 5.5</br>
- composer</br>
- webserver (apache, nginx,...)</br>
<strong>Hướng dẫn cài đặt:</strong></br>
- Sửa lại thông tin database trong file env.json (hỗ trợ mysql)</br>
- Tại thư mục gốc, chạy bash composer update và composer dump-autoload (yêu cầu đã cài composer).</br>
- Tiếp tục chạy php minapp database để trình thuật sĩ tự động tạo các bảng.</br>
- Chạy tiếp lệnh php minapp database home và php minapp database migrate để trình thuật sĩ tự động insert dữ liệu fake giúp website không bị lỗi.</br>
- Chạy lệnh php minapp database createsuperuser để tiến hành tạo superuser</br>
- Chạy lệnh php minapp database delete để xóa tất cả các bảng</br>
<strong>Deploy hosting:</strong>
- Chạy tất cả các lệnh bash ở trên trừ lệnh xóa bảng.</br>
- Lệnh php minapp database * có tác dụng tự khởi tạo database và dữ liệu.</br>
- Đẩy source code lên hosting sau đó chỉnh lại thông tin database file env.json khớp với thông tin hosting database.</br>
- Import file database tại local đã tạo vào database hosting</br>
<strong>Tùy chỉnh minapp :</strong></br>
- Ta có thể import nhiều class khác vào ứng dụng CLI PHP để run bằng cách thêm $application->add(new example()); ví dụ với class example</br>
- Viết class chạy CLI PHP vui lòng kham khảo tài liệu Symfony</br>
<strong>Hoạt động:</strong></br>
- File index.php tại folder root để nhận request -> Route (root/src/Route.php) -> Controller (root/src/Controller.php) tại đây controller sẽ lấy data từ model (root/src/siteModel.php) && teamplate ->Route (root/src/Route.php) -> index (root/index.php) render html hoặc json.</br>
- Autoloading: psr-4.</br>
<strong>đang cập nhật...<strong></br>
Nếu có lỗi vui lòng inbox cho tôi tại email bvminh101299@gmail.com hoặc phản hồi qua facebook <a href="https://www.facebook.com/zake.death" target="_bank">Văn Min</a></p></br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    

  <?php require_once __DIR__.'/element/js.php'; ?>    
    
</body>

</html>