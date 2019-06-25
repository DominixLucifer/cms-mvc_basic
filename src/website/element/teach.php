<div id="row-5" class="row-5">
                        <div class="container-fuild">
                            <div class="title wow bounce animated">
                                <center>
                                    <h2><a href="#">Đội ngũ giảng viên</a></h2>
                                    <div class="gach-left"></div>
                                    <div class="gach-right"></div>
                                </center>
                            </div>
                            <div id="data-doingu" class="list-tea">
                                <div class="container">
                                    <div id="owl-carousel-gt" class="owl-carousel owl-theme wow fadeInUp">

                                        <?php for($i=0;$i<$total2;$i++){ ?>
                                        <div class="item tea-item  wow slideInDown">
                                            <a href="#" class="imagez">
                                                <img src="<?php echo asset('home','images'); ?><?php echo $dataTeach[$i]->avatar; ?>" class="img-responsive img-zoom" >
                                            </a>
                                            <div class="text">
                                                <a  class="h4 hover-mo">
                                <?php echo $dataTeach[$i]->name; ?>                      </a>
                                                <p>
                                                    <?php echo $dataTeach[$i]->description; ?> </p>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="tel:<?php echo $dataTeach[$i]->phone; ?>  " data-toggle="tooltip" data-placement="top" title="Liên hệ "><i class="fa fa-phone"></i></a></li>
                                                        <li><a href="" target="_blank" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="mailto:" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="skype:live:?chat" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                        
                                        
                                        
                                        
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
