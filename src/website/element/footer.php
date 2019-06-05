    <!--/newsletter-->
    <footer class="newsletter_right_w3agile bg-dark pymd-5 py-4">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4 text-white">Subscribe our Newsletter</h3>
                <div class="n-right-w3ls">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="Email" placeholder=" Email Address" required="">
                        </div>

                        <div class="form-group">
                            <input class="form-control submit text-uppercase" type="submit" value="Subscribe">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="row footer-bottom-wthree mt-lg-5 mt-3">
                    <div class="col-lg-6 copyright">
                        <h2><a class="navbar-brand" href="index.html">
                            <?php echo $dataHome->name ?></a></h2>
                        <p class="copy-right mt-3">© 2019 <?php echo $dataHome->name ?>. All Rights Reserved | Design by
                            <a href="https://www.facebook.com/zake.death" target="_blank"> Văn Min</a>
                        </p>
                    </div>
                    <div class="col-lg-6 social-icon footer">
                        <ul class="links-nav d-flex justify-content-end">
                            <li>
                                <a class="active" href="index.php?route=home">Home</a>
                            </li>
                            <li>
                                <a href="index.php?route=about">About</a>
                            </li>

                            <li>
                                <a href="index.php?route=contact">Contact</a>
                            </li>
                        </ul>
                        <ul class="social-icons d-flex justify-content-end mt-3">
                            <li class="mr-1"><a href="<?php echo $dataHome->linkFB ?>" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mx-1"><a href="<?php echo $dataHome->linkTW ?>" target="_blank"><span class="fab fa-twitter"></span></a></li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </footer>
    <!--//newsletter-->