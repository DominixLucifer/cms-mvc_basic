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

$homeTeach = new siteModel('teach');
$dataTeach = $homeTeach->getAll();
$dataTeach = json_decode($dataTeach);
$dataTeach = $dataTeach->data;
$total2 = count((array)$dataTeach);
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
                    </style><img src="src/website/element/images/thong-ke.jpg" width="0" height="0" style="width: 0; height: 0; display: none;" rel="nofollow" alt="Thong ke" />
                    <div id="row-1" class="row-1 wow slideInUp animated">
                        <div class="container">
                            <div class="title wow bounce animated">
                                <center>
                                    <a href="#"><h2>Giới thiệu <?php echo $dataHome->name; ?></h2></a>
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
                                                    <input class="text" placeholder="Họ và tên *" type="text" value="" name="W3NF[9829][c21]" id="W3NF_9829_c21" required>
                                                    <div class="errorMessage" id="AutoForm_c21_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item">
                                                    <div class="label"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                                    <input class="text" placeholder="Điện thoại của bạn *" type="text" value="" name="W3NF[9831][c83]" id="W3NF_9831_c83" required>
                                                    <div class="errorMessage" id="AutoForm_c83_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item">
                                                    <div class="label"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                                    <input class="text" placeholder="Email của bạn *" type="text" value="" name="W3NF[9830][c52]" id="W3NF_9830_c52" required>
                                                    <div class="errorMessage" id="AutoForm_c52_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item textArea-item">
                                                    <textarea class="text" placeholder="Nội dung" name="W3NF[9991][c193]" id="W3NF_9991_c193" required></textarea>
                                                    <div class="errorMessage" id="AutoForm_c193_em_" style="display:none"></div>
                                                </div>
                                                <div class="frm-item button">
                                                    <button type="submit" id="submitForm">Đăng ký tìm gia sư</button>
                                                </div>
                                            </form>
              <script>
                $(document).ready(function(){
                    $('#submitForm').on('click',function(){ 
                        if($('#W3NF_9829_c21').val() == '' || $('#W3NF_9831_c83').val() == '' || $('#W3NF_9830_c52').val() == '' ||  $('#W3NF_9991_c193').val() == ''){
                            alert('Vui lòng nhập đủ thông tin !');

                        }else{ 
                            var data = {
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

                            };
                            console.log(data);
                         $.ajax({
                            url : '/index.php',
                            type : 'POST',
                            data : data, 
                            contentType: "application/x-www-form-urlencoded;charset=utf-8",     
                        success : function (result){
                            console.log(result);
                            // if(result == 1){
                            //     $('form').fadeIn("slow").hide();
                            //     $('#result').html('Yêu cầu của bạn đang được gửi đi và đang xử lí').fadeIn("slow");
                            // }else{
                            //     alert('Lỗi không xác định! ');
                            // }
                            
                        }
                        });
                     }

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


                    
                     <?php require_once(__DIR__.'/element/teach.php'); ?>


                    <?php require_once(__DIR__.'/element/partner.php'); ?>


                </div>
            </div>
    

                <?php require_once(__DIR__.'/element/footer.php'); ?>
                <?php require_once(__DIR__.'/element/js.php'); ?>
    </body>

</html>