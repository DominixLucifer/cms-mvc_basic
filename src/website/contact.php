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
    </style>
    <div id="row-1" class="row-lienhe-1 wow slideInUp  animated" style="visibility: visible; animation-name: slideInUp;">
        <div class="container">
            <div class="title wow bounce" style="visibility: visible; animation-name: bounce;">
                <center>
                    <h3>Thông tin liên hệ</h3>
                    <div class="gach-left"></div>
                    <div class="gach-right"></div>
                </center>
            </div>
            <div class="content">
                <div id="lh" class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <span>Địa chỉ liên hệ</span>
                            <p><?php echo $dataHome->address; ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 center">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <span>Email hỗ trợ</span>
                            <p><?php echo $dataHome->email; ?></p>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-4  col-xs-12">
                        <div class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <span>Số điện thoại</span>
                            <p><?php echo $dataHome->phone; ?></p>
                        </div>
                    </div>
                </div>
                <div id="map">
                    <div class="content-footer text">
                        <h4 class="sm-title h4">Map</h4>
                        <div class="box-ft box-map">
                            <?php echo $dataHome->mapIframe; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="row-2" class="row-5 row-lienhe-2">
        <div class="container-fuild">

            <div class="title wow bounce  animated" style="visibility: visible; animation-name: bounce;">
                <center>
                    <h3>Bạn có câu hỏi nào không</h3>
                    <div class="gach-left"></div>
                    <div class="gach-right"></div>
                </center>
            </div>
            <div class="list-tea">
                <div class="container">
                    <div class="title-sm">
                        <center>Bạn có bất kì câu hỏi hay thắc mắc nào, hãy gửi cho chúng tôi một email, các tư vấn viên của chúng tôi sẽ đưa ra các giải pháp tốt nhất cho bạn ngay sau khi nhận được email của bạn.</center>
                    </div>
                    <h4 style="text-align: center" id="result"></h4>
                    <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="col-md-3 tea-item  wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                            <a class="imagez">
                                <img src="https://giasuducminh.com/mediacenter/media/images/1590/siteusers/ava/s350_350/img3820-1501425708.jpg" class="img-responsive" alt="Uông Thị Thu Nga">
                            </a>
                            <div class="text">
                                <a class="h4 hover-mo">
		        Uông Thị Thu Nga - CSKH		    </a>
                                <div class="icons">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $dataHome->phone; ?> </li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $dataHome->email; ?></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <form enctype="multipart/form-data" class="w3f-form" role="form" id="w3n-submit-form">
                                <div class="input  wow slideInUp" style="visibility: visible; animation-name: slideInUp;">

                                    <input class="" placeholder="Tên của bạn*" type="text" value="" name="W3NF[9819][c21]" id="W3NF_9819_c21">
                                    <div class="errorMessage" id="AutoForm_c21_em_" style="display:none"></div>

                                    <input class="" placeholder="Email của bạn*" type="text" value="" name="W3NF[9824][c343]" id="W3NF_9824_c343">
                                    <div class="errorMessage" id="AutoForm_c343_em_" style="display:none"></div>

                                    <input class="" placeholder="Số điện thoại*" type="text" value="" name="W3NF[9820][c143]" id="W3NF_9820_c143">
                                    <div class="errorMessage" id="AutoForm_c143_em_" style="display:none"></div>

                                    <input class="" placeholder="Chủ đề*" type="text" value="" name="W3NF[9823][c281]" id="W3NF_9823_c281">
                                    <div class="errorMessage" id="AutoForm_c281_em_" style="display:none"></div>
                                </div>
                                <div class="textarea  wow slideInRight" style="visibility: visible; animation-name: slideInRight;">

                                    <textarea class="" placeholder="Nhập câu hỏi tại đây*" name="W3NF[9821][c225]" id="W3NF_9821_c225"></textarea>
                                    <div class="errorMessage" id="AutoForm_c225_em_" style="display:none"></div>

                                    <input class="hover-mo submit" id="submit" type="submit" name="yt0" value="Gửi tin nhắn">
                                </div>
                            </form>
                        </div>
                         <script>
                $(document).ready(function(){
                    $('#submit').on('click',function(){
                         $.ajax({
                            url : 'index.php',
                            type : 'POST',
                            data : {
                                fullname : $('#W3NF_9819_c21').val(),
                                email : $('#W3NF_9824_c343').val(),
                                phone : $('#W3NF_9820_c143').val(),
                                category : $('#W3NF_9823_c281').val(),
                                c_ask : $('#W3NF_9821_c225').val(),
                                
                                key : 'submit-contact'

                            },      
                        success : function (result){
                            console.log(result);
                            if(result == 1){
                                $('form').hide();
                                $('#result').html('Yêu cầu của bạn đang được gửi đi và đang xử lí').fadeIn("slow");
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

    

    <?php require_once(__DIR__.'/element/partner.php'); ?>
</div>



         </div>
    
         <?php require_once(__DIR__.'/element/footer.php'); ?>
         <?php require_once(__DIR__.'/element/js.php'); ?>
     </body>
     </html>