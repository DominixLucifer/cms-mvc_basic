<?php 
use minapp\siteModel;

$home = new siteModel('homedata');
$dataHome = $home->getAll();
$dataHome = json_decode($dataHome);
$dataHome = $dataHome->data[0];
// var_dump($dataHome);

$homeBanner = new siteModel('banner');
$dataBanner = $homeBanner->getAll();
$dataBanner = json_decode($dataBanner);
$dataBanner = $dataBanner->data;
$total = count((array)$dataBanner);
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">
<?php require_once(__DIR__.'/element/head.php'); ?>

    <body>
        <!--   id="barba-wrapper"  -->

        <?php require_once(__DIR__.'/element/navbar_mobile.php'); ?>

            <div class="shadow-mobile"></div>
            <div id="row-0 home">

                <div class="banner-slider-index">
                    
                    <?php require_once(__DIR__.'/element/slide.php'); ?>
                       
                        <!-- end SLIDER -->
                     <?php require_once(__DIR__.'/element/header.php'); ?>

                </div>


                <div id="main">
                    <style type="text/css">
                        .dmca {
                            margin-top: 20px;
                        }
                    </style><img src="/thong-ke.jpg" width="0" height="0" style="width: 0; height: 0; display: none;" rel="nofollow" alt="Thong ke" />
                    <div id="row-1" class="row-1 wow slideInUp animated">
                        <div class="container">
                            <div class="title wow bounce animated">
                                <center>
                                    <a href="/gioi-thieu-ve-cong-ty-nc7550.html"><h2>Giới thiệu <?php echo $dataHome->name; ?></h2></a>
                                    <div class="gach-left"></div>
                                    <div class="gach-right"></div>
                                </center>
                            </div>
                            <div class="list-pr">
                                <div class="row">
                                    <div class="col-md-3 content wow fadeInLeft animated">
                                        <div class="item list">
                                            <div class="content-about-us">
                                                <div class="content-ab">
                                                    <div role="tabpanel">
                                                        <p style="text-align: justify;"><?php echo $dataHome->recommend; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 wow fadeInRight animated">
                                        <div id="owl-carousel3" class="owl-carousel owl-theme">
                                            <div class="item list">
                                                <a href="/gia-su-duc-minh-ha-noi-nd25214.html" class="imagez">
                                                    <img class="img-responsive img-op" src="https://giasuducminh.com/mediacenter/media/images/1590/news/ava/s300_300/gia-su-lop-3-day-kem-tai-nha-uy-tin-1512483021.jpg" alt="Gia sư Đức Minh - Hà Nội">
                                                </a>
                                                <div class="text">
                                                    <a href="/gia-su-duc-minh-ha-noi-nd25214.html" class="h4">Gia sư Đức Minh - Hà Nội</a>
                                                    <div>
                                                        <p>
                                                            <br/>Trung Tâm Gia sư Đức Minh - Hà Nội, tự hào là địa chỉ tin cậy cho các bậc phụ huynh và gia ...</p>
                                                    </div>
                                                    <a href="/gia-su-duc-minh-ha-noi-nd25214.html"><span class="hover-mo">Xem chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="item list">
                                                <a href="/cong-ty-gia-su-duc-minh-nd24648.html" class="imagez">
                                                    <img class="img-responsive img-op" src="https://giasuducminh.com/mediacenter/media/images/1590/news/ava/s300_300/logo-trung-tam-gia-su-duc-minh-1523870013.png" alt="Công ty Gia sư Đức Minh - Giá trị của thương hiệu">
                                                </a>
                                                <div class="text">
                                                    <a href="/cong-ty-gia-su-duc-minh-nd24648.html" class="h4">Công ty Gia sư Đức Minh - Giá trị của thương hiệu</a>
                                                    <div>
                                                        <p>
                                                            <br/>Đức Minh là một công ty hoạt động trong lĩnh vực Giáo Dục và Đào Tạo. Được thành lập năm 2003, ...</p>
                                                    </div>
                                                    <a href="/cong-ty-gia-su-duc-minh-nd24648.html"><span class="hover-mo">Xem chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="row-6" class="row-6">
                        <div class="container-fuild bong">
                            <div class="container">
                                <div id="reg-course-form1">
                                    <div class="title wow bounce animated">
                                        <h3>Đăng ký tìm gia sư</h3>
                                        <div class="gach-left"></div>
                                        <div class="gach-right"></div>
                                    </div>
                                    <div class="row">
                                        <div class="text wow slideInLeft animated col-lg-10 col-md-10 col-sm-10">
                                            <p>Hãy hoàn thành form đăng kí bên dưới để chúng tôi có thể sắp xếp cho bạn một lịch học hợp lý nhất, mọi thắc mắc xin gửi thư đến địa chỉ <u>email: <?php echo $dataHome->email; ?></u> hoặc gọi điện đến số <u> <?php echo $dataHome->phone; ?></u> để được tư vấn miễn phí</p>
                                        </div>
                                        <div class="col-lg-5 form  wow slideInRight animated" id="reg-course-form">
                                            <h4 style="color: white" id="result"></h4>
                                            <form enctype="multipart/form-data" class="w3f-form" role="form" id="w3n-submit-form">
                                                <div class="frm-item">
                                                    <div class="label"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                                                    <input class="text" placeholder="Họ và tên *" type="text" value="" name="W3NF[9829][c21]" id="W3NF_9829_c21" />
                                                    <div class="errorMessage" id="AutoForm_c21_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item">
                                                    <div class="label"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                                    <input class="text" placeholder="Điện thoại của bạn *" type="text" value="" name="W3NF[9831][c83]" id="W3NF_9831_c83" />
                                                    <div class="errorMessage" id="AutoForm_c83_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item">
                                                    <div class="label"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                                    <input class="text" placeholder="Email của bạn *" type="text" value="" name="W3NF[9830][c52]" id="W3NF_9830_c52" />
                                                    <div class="errorMessage" id="AutoForm_c52_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item textArea-item">
                                                    <textarea class="text" placeholder="Nội dung" name="W3NF[9991][c193]" id="W3NF_9991_c193"></textarea>
                                                    <div class="errorMessage" id="AutoForm_c193_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item button">
                                                    <button type="submit" id="submitForm">Đăng ký tìm gia sư</button>
                                                </div>
                                            </form>
              <script>
                $(document).ready(function(){
                    $('#submitForm').on('click',function(){  
                         $.ajax({
                            url : 'index.php',
                            type : 'POST',
                            data : {
                                fullname : $('#W3NF_9829_c21').val(),
                                address : ' ',
                                phone : $('#W3NF_9831_c83').val(),
                                email : $('#W3NF_9830_c52').val(),
                                Stclass : ' ',
                                school : ' ',
                                sex : ' ',
                                learning : ' ',
                                tieuhoc : ' ',
                                toan : ' ',
                                tiengviet : ' ',
                                toeic : ' ',
                                vatly : ' ',
                                tienganh : ' ',
                                laptrinh : ' ',
                                monkhac :' ',
                                count : ' ',
                                purpose :' ',
                                ask : $('#W3NF_9991_c193').val(),
                                key : 'submit-timgiasu'

                            },      
                        success : function (result){
                            console.log(result);
                            if(result == 1){
                                $('form').fadeIn(1000).hide();
                                $('#result').html('Yêu cầu của bạn đang được gửi đi và đang xử lí').fadeIn(3000);
                            }else{
                                alert('Lỗi không xác định! ');
                            }
                            
                        }
                        });

                    });
                   
                });
            </script>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    <div id="row-2" class="row-2">-->
                    <!--        <div class="container">-->
                    <!--            <div class="title wow bounce animated">-->
                    <!--                <center>-->
                    <!--                    <h3>Danh cho phụ huynh</h3>-->
                    <!--                    <div class="gach-left"></div>-->
                    <!--                    <div class="gach-right"></div>-->
                    <!--                </center>-->
                    <!--            </div>-->
                    <!--            <div class="list-pr">-->
                    <!--                -->
                    <!---->
                    <!--                <div class="col-md-4 pr-item right  wow fadeInUp animated">-->
                    <!--                    -->
                    <!---->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <div id="row-2" class="row-2 layout-row-2">
                        <div class="row-2-content">

                            <div class="layout-cate layout-cate2 clearfix">
                                <div class="container">
                                    <div class="layout-content-cate layout-content-cate2">
                                        <div class="title wow bounce animated">
                                            <center>
                                                <a href="/danh-cho-gia-su-nc7545.html"><h3>DÀNH CHO GIA SƯ</h3></a>
                                                <div class="gach-left"></div>
                                                <div class="gach-right"></div>
                                            </center>
                                        </div>
                                        <div class="list-pr">
                                            <div class="col-md-4 pr-item center  wow  fadeInUp animated">
                                                <div class="pr-title">
                                                    <div class="box">
                                                        <!--                                    <span class="h4">-->
                                                        <!--</span>-->
                                                        <a href="/quy-trinh-lam-gia-su-nc8075.html" class="h4">QUY TRÌNH LÀM GIA SƯ</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul class="list">
                                                        <li>
                                                            <a href="/hinh-thuc-phong-van-gia-su-nd24727.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Hình thức phỏng vấn gia sư </a>
                                                        </li>
                                                        <li>
                                                            <a href="/quy-trinh-lam-gia-su-nd24678.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Quy Trình Làm Gia Sư </a>
                                                        </li>
                                                        <li>
                                                            <a href="/mach-nho-ban-khi-di-phong-van-gia-su-nd24670.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Mách nhỏ bạn khi đi phỏng vấn gia sư </a>
                                                        </li>
                                                    </ul>
                                                    <span class="view-all hover-mo">
                                            <a href="/quy-trinh-lam-gia-su-nc8075.html">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem tất cả
                                            </a>
                                        </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-item center  wow  fadeInUp animated">
                                                <div class="pr-title">
                                                    <div class="box">
                                                        <!--                                    <span class="h4">-->
                                                        <!--</span>-->
                                                        <a href="/gia-su-nen-biet-nc8896.html" class="h4">GIA SƯ NÊN BIẾT</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul class="list">
                                                        <li>
                                                            <a href="/kinh-nghiem-tim-trung-tam-uy-tin-khi-lam-gia-su-tai-ha-noi-nd39714.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Kinh nghiệm tìm trung tâm uy tín khi làm gia sư tại Hà Nội </a>
                                                        </li>
                                                        <li>
                                                            <a href="/chia-se-nhung-kinh-nghiem-can-thiet-khi-lam-gia-su-nd39707.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Chia sẻ những kinh nghiệm cần thiết khi làm gia sư </a>
                                                        </li>
                                                        <li>
                                                            <a href="/the-nao-la-mot-gia-su-gioi-nd39042.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Thế nào là một gia sư giỏi? </a>
                                                        </li>
                                                        <li>
                                                            <a href="/ky-nang-gia-su-toan-de-hieu-cho-hoc-sinh-nd38859.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Kỹ năng gia sư Toán dễ hiểu cho học sinh </a>
                                                        </li>
                                                    </ul>
                                                    <span class="view-all hover-mo">
                                            <a href="/gia-su-nen-biet-nc8896.html">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem tất cả
                                            </a>
                                        </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-item center  wow  fadeInUp animated">
                                                <div class="pr-title">
                                                    <div class="box">
                                                        <!--                                    <span class="h4">-->
                                                        <!--</span>-->
                                                        <a href="/thu-tuc-nhan-va-huy-lop-nc8076.html" class="h4">THỦ TỤC NHẬN VÀ HỦY LỚP</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul class="list">
                                                        <li>
                                                            <a href="/quy-trinh-xu-ly-hop-dong-nd24726.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Quy trình xử lý hợp đồng </a>
                                                        </li>
                                                        <li>
                                                            <a href="/thu-tuc-nhan-lop-nd24725.html">
                                                                <i class="fa fa-book" aria-hidden="true"></i> Thủ tục nhận lớp </a>
                                                        </li>
                                                    </ul>
                                                    <span class="view-all hover-mo">
                                            <a href="/thu-tuc-nhan-va-huy-lop-nc8076.html">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem tất cả
                                            </a>
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="row-3" class="row-3 autonumber1">

                        <div class="container-fuild down">
                            <div class="container">
                                <div class="title-down">
                                    <div class="text">Bạn muốn tìm gia sư giỏi
                                    </div>
                                    <div class="button"><a class="reg-course-form1" href="">Đăng ký ngay</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="row-5" class="row-5">
                        <div class="container-fuild">
                            <div class="title wow bounce animated">
                                <center>
                                    <h2><a href="/giang-vien.html">Đội ngũ giảng viên</a></h2>
                                    <div class="gach-left"></div>
                                    <div class="gach-right"></div>
                                </center>
                            </div>
                            <div class="list-tea">
                                <div class="container">
                                    <div id="owl-carousel-gt" class="owl-carousel owl-theme wow fadeInUp">
                                        <div class="item tea-item  wow slideInDown">
                                            <a href="/nguyen-thi-huyen-gia-su-hoa-chat-luong-cao-tai-ha-noi-eld1664.html" class="imagez">
                                                <img src="https://giasuducminh.com/mediacenter/media/images/1590/lecturer/ava/s300_300/co-huyen-duc-minh-1512480884.jpg" class="img-responsive img-zoom" alt="Nguyễn Thị Huyền - Gia sư Hóa chất lượng cao tại Hà nội">
                                            </a>
                                            <div class="text">
                                                <a href="/nguyen-thi-huyen-gia-su-hoa-chat-luong-cao-tai-ha-noi-eld1664.html" class="h4 hover-mo">
                                Nguyễn Thị Huyền - Gia sư Hóa chất lượng cao tại Hà nội                         </a>
                                                <p>
                                                    Cô Huyền là Giáo viên Hóa đã từng đi Mỹ tham gia khóa học thực tế 10 ngày theo chương trình được tài trợ của Bộ Giáo dục. </p>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="tel:Liên hệ " data-toggle="tooltip" data-placement="top" title="Liên hệ "><i class="fa fa-phone"></i></a></li>
                                                        <li><a href="" target="_blank" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="mailto:" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="skype:live:?chat" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tea-item  wow slideInDown">
                                            <a href="/vu-van-thoai-gia-su-sinh-vien-chat-luong-cao-tai-ha-noi-eld1321.html" class="imagez">
                                                <img src="https://giasuducminh.com/mediacenter/media/images/1590/lecturer/ava/s300_300/thoai-gia-su-duc-minh-1501678295.jpg" class="img-responsive img-zoom" alt="Vũ Văn Thoại - Gia sư Sinh viên chất lượng cao tại Hà Nội">
                                            </a>
                                            <div class="text">
                                                <a href="/vu-van-thoai-gia-su-sinh-vien-chat-luong-cao-tai-ha-noi-eld1321.html" class="h4 hover-mo">
                                Vũ Văn Thoại - Gia sư Sinh viên chất lượng cao tại Hà Nội                           </a>
                                                <p>
                                                    Bạn Thoại là Sinh viên đã tốt nghiệp 2 trường Đại học Ngoại thương (Ngành Kinh tế đối ngoại) và Đại học Kinh tế Quốc dân, có kiến thức tốt, kỹ năng sư phạm tốt, có thể luyện thi đại học cấp tốc môn Toán và Lý. </p>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="tel:Liên hệ Trung tâm" data-toggle="tooltip" data-placement="top" title="Liên hệ Trung tâm"><i class="fa fa-phone"></i></a></li>
                                                        <li><a href="https://www.facebook.com/giasusuphamducminh " target="_blank" data-toggle="tooltip" data-placement="top" title="https://www.facebook.com/giasusuphamducminh "><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="mailto:giasusuphamducminh@gmail.com" data-toggle="tooltip" data-placement="top" title="giasusuphamducminh@gmail.com"><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="skype:live:?chat" data-toggle="tooltip" data-placement="top" title=""><i class="fab fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tea-item  wow slideInDown">
                                            <a href="/bui-thi-thuc-gia-su-tieu-hoc-chat-luong-cao-tai-ha-noi-eld1320.html" class="imagez">
                                                <img src="https://giasuducminh.com/mediacenter/media/images/1590/lecturer/ava/s300_300/lam-gi-de-tre-hoc-mau-giao-khong-khoc-1501677298.jpg" class="img-responsive img-zoom" alt="Bùi Thị Thức - Gia sư tiểu học chất lượng cao tại Hà Nội">
                                            </a>
                                            <div class="text">
                                                <a href="/bui-thi-thuc-gia-su-tieu-hoc-chat-luong-cao-tai-ha-noi-eld1320.html" class="h4 hover-mo">
                                Bùi Thị Thức - Gia sư tiểu học chất lượng cao tại Hà Nội                            </a>
                                                <p>
                                                    Cô Thức (Tên hay gọi là cô Thảo) là Giáo viên nghỉ hưu. Nhiệt tình, tâm huyết và rất yêu trẻ con. </p>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="tel:Liên hệ Trung tâm" data-toggle="tooltip" data-placement="top" title="Liên hệ Trung tâm"><i class="fa fa-phone"></i></a></li>
                                                        <li><a href="https://www.facebook.com/giasusuphamducminh " target="_blank" data-toggle="tooltip" data-placement="top" title="https://www.facebook.com/giasusuphamducminh "><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="mailto:" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="skype:live:?chat" data-toggle="tooltip" data-placement="top" title=""><i class="fab fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tea-item  wow slideInDown">
                                            <a href="/co-phuong-gia-su-van-chat-luong-cao-tai-ha-noi-eld1300.html" class="imagez">
                                                <img src="https://giasuducminh.com/mediacenter/media/images/1590/lecturer/ava/s300_300/trung-tam-gia-su-duc-minh-co-phuong-1501376982.jpg" class="img-responsive img-zoom" alt="Cô Phượng - Gia sư Văn chất lượng cao tại Hà Nội">
                                            </a>
                                            <div class="text">
                                                <a href="/co-phuong-gia-su-van-chat-luong-cao-tai-ha-noi-eld1300.html" class="h4 hover-mo">
                                Cô Phượng - Gia sư Văn chất lượng cao tại Hà Nội                            </a>
                                                <p>
                                                    Cô Phượng là giảng viên Đại học Sư phạm Hà Nội 2, Giáo viên hợp đồng trường Lomonoxop. Cô giáo luôn là người mà Trung tâm Gia sư Đức Minh luôn tin tưởng giao cho những ca khó như "Luyện thi cấp tốc Đại học", "Ôn thi chuyên cấp tốc". </p>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="tel:Liên hệ Trung tâm" data-toggle="tooltip" data-placement="top" title="Liên hệ Trung tâm"><i class="fa fa-phone"></i></a></li>
                                                        <li><a href="https://www.facebook.com/giasuducminh" target="_blank" data-toggle="tooltip" data-placement="top" title="https://www.facebook.com/giasuducminh"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="mailto:" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="skype:live:?chat" data-toggle="tooltip" data-placement="top" title=""><i class="fab fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tea-item  wow slideInDown">
                                            <a href="/hoang-thi-thanh-nga-gia-su-toan-chat-luong-cao-tai-ha-noi-eld1298.html" class="imagez">
                                                <img src="https://giasuducminh.com/mediacenter/media/images/1590/lecturer/ava/s300_300/logo-trung-tam-gia-su-duc-minh-1512481006.png" class="img-responsive img-zoom" alt="Hoàng Thị Thanh Nga - Gia sư Toán chất lượng cao tại Hà Nội">
                                            </a>
                                            <div class="text">
                                                <a href="/hoang-thi-thanh-nga-gia-su-toan-chat-luong-cao-tai-ha-noi-eld1298.html" class="h4 hover-mo">
                                Hoàng Thị Thanh Nga - Gia sư Toán chất lượng cao tại Hà Nội                         </a>
                                                <p>
                                                    Cô Hoàng Thị Thanh Nga là Tiến sĩ Toán, Giảng viên Đại học Kinh tế thuộc Đại học Quốc Gia Hà Nội. Cô đã từng gia sư cho rất nhiều gia đình trên địa bàn Hà Nội, trong đó có cả những học sinh là con, cháu của Bộ trưởng, Thứ trưởng. Vì vậy, nếu được cô Nga dạy thì các bậc Phụ huynh luôn luôn yên tâm về chất lượng. </p>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="tel:" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-phone"></i></a></li>
                                                        <li><a href="https://www.facebook.com/giasuducminh " target="_blank" data-toggle="tooltip" data-placement="top" title="https://www.facebook.com/giasuducminh "><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="mailto:" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="skype:live:skype?chat" data-toggle="tooltip" data-placement="top" title="skype"><i class="fab fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tea-item  wow slideInDown">
                                            <a href="/dao-dinh-cong-gia-su-toan-chat-luong-cao-eld1297.html" class="imagez">
                                                <img src="https://giasuducminh.com/mediacenter/media/images/1590/lecturer/ava/s300_300/trung-tam-gia-su-duc-minh-thay-cong-1501375483.jpg" class="img-responsive img-zoom" alt="Đào Đình Công - Gia sư Toán chất lượng cao">
                                            </a>
                                            <div class="text">
                                                <a href="/dao-dinh-cong-gia-su-toan-chat-luong-cao-eld1297.html" class="h4 hover-mo">
                                Đào Đình Công - Gia sư Toán chất lượng cao                          </a>
                                                <p>
                                                    Cấp 3 học chuyên Lý, tốt nghiệp Đại học Sư phạm Hà Nội chuyên ngành Toán, có thể dạy cơ bản, nâng cao và luyện thi vào lớp 10, luyện thi Đại học cả 2 môn Toán và Lý cấp 2, cấp 3. Kinh nghiệm giảng dạy lâu năm, tâm huyết với nghề nên luôn được các Phụ huynh và Học sinh tin yêu. </p>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="tel:Liên hệ Trung tâm" data-toggle="tooltip" data-placement="top" title="Liên hệ Trung tâm"><i class="fa fa-phone"></i></a></li>
                                                        <li><a href="https://www.facebook.com/" target="_blank" data-toggle="tooltip" data-placement="top" title="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="mailto:" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="skype:live:TNHH Giáo dục và Đào tạo Đức Minh?chat" data-toggle="tooltip" data-placement="top" title="TNHH Giáo dục và Đào tạo Đức Minh"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php require_once(__DIR__.'/element/partner.php'); ?>


                </div>
            </div>
    

                <?php require_once(__DIR__.'/element/footer.php'); ?>
                <?php require_once(__DIR__.'/element/js.php'); ?>
    </body>

</html>