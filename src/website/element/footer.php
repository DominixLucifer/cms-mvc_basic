                <div id="footer">
                    <div class="container">
                        <div class="col-md-3 wow fadeInLeft info-footer">
                            <p><?php echo $dataHome->description; ?>

                            
                                <br/>Email: <?php echo $dataHome->email; ?>
                          

                            <ul class="icon social-footer">
                                <li>
                                    <a href="<?php echo $dataHome->linkFB; ?>" target="_blank" rel="nofollow"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo $dataHome->linkTW; ?>" target="_blank" rel="nofollow"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 wow fadeInUp">
                            <h4 class="sm-title h4">Bài viết gần đây</h4>
                            <div class="content row-2">
                                <ul class="list">
                                    <li>
                                        <div class="pr-item">
                                            <div class="canlendar">
                                                <div class="gach-left"></div>
                                                <div class="gach-bottom"></div>
                                                <div class="goclich_bg"></div>
                                                <!--                                <img src="-->
                                                <!--/images/goclich.png" alt="calendar">-->
                                                <div class="text">
                                                    <span class="up">23</span>
                                                    <span class="down">Tháng 06</span>
                                                </div>
                                            </div>
                                            <div class="pr-content">
                                                <a href="/tim-dong-doi-2018-nd39715.html">TÌM ĐỒNG ĐỘI 2018</a>
                                                <div class="chat-add">

                                                    <div class="view">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span> 521 Lượt xem</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pr-item">
                                            <div class="canlendar">
                                                <div class="gach-left"></div>
                                                <div class="gach-bottom"></div>
                                                <div class="goclich_bg"></div>
                                                <!--                                <img src="-->
                                                <!--/images/goclich.png" alt="calendar">-->
                                                <div class="text">
                                                    <span class="up">03</span>
                                                    <span class="down">Tháng 05</span>
                                                </div>
                                            </div>
                                            <div class="pr-content">
                                                <a href="/kinh-nghiem-tim-trung-tam-uy-tin-khi-lam-gia-su-tai-ha-noi-nd39714.html">Kinh nghiệm tìm trung tâm uy tín khi làm gia sư tại Hà Nội</a>
                                                <div class="chat-add">

                                                    <div class="view">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span> 231 Lượt xem</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pr-item">
                                            <div class="canlendar">
                                                <div class="gach-left"></div>
                                                <div class="gach-bottom"></div>
                                                <div class="goclich_bg"></div>
                                                <!--                                <img src="-->
                                                <!--/images/goclich.png" alt="calendar">-->
                                                <div class="text">
                                                    <span class="up">02</span>
                                                    <span class="down">Tháng 05</span>
                                                </div>
                                            </div>
                                            <div class="pr-content">
                                                <a href="/nen-hay-khong-tim-gia-su-lop-1-cho-con-nd39713.html">Nên hay không tìm gia sư lớp 1 cho con?</a>
                                                <div class="chat-add">

                                                    <div class="view">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span> 94 Lượt xem</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInRight">
                            <div class="content-footer text">
                                <div class="box-ft box-fb" style="width:280px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInRight">
                            <div class="content-footer text">
                                <h4 class="sm-title h4">Bản đồ</h4>
                                <div class="box-ft box-map responsive-map-container">
                                    <?php echo htmlspecialchars_decode($dataHome->mapIframe); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="content-footer text">
                        <p style="text-align: center;">© Copyright <a href="https://mangxahoi.club" target="_blank">MT social </a>.&nbsp;&nbsp; Designed by admin MT social <a href="https://mangxahoi.club" target="_blank">Văn Min </a></p>
                    </div>
                    <span class="backtotop"><i class="fas fa-chevron-up"></i></span>

                </div>
                <script>
                    
                     $('#doingu').click(function(){
    $('html, body').animate({
      scrollTop: $('#data-doingu').offset().top
    }, 1000);
    return false;
  });
                </script>