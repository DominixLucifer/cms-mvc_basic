<?php 
use minapp\siteModel;

$home = new siteModel('homedata');
$dataHome = $home->getAll()

 ?>
<!DOCTYPE html>
<html lang="zxx">

<?php require_once(__DIR__.'/element/head.php'); ?>

<body>
    <div class="mian-content inner-page">
        <div class="header-top-w3layouts">
            <div class="container">

                <header>
                    <div class="top-head-w3-agile text-left">
                        <div class="row top-content-info-wthree">
                            <div class="col-lg-5 top-content-left">
                                <h6>Have any Quastions?</h6>
                            </div>
                            <div class="col-lg-7 top-content-right">
                                <div class="row">
                                    <div class="col-md-6 callnumber text-left">
                                        <h6>Call Us : <span><?php echo $dataHome->phone ?></span></h6>
                                    </div>
                                    <div class="col-md-6 top-social-icons p-0">
                                        <ul class="social-icons d-flex justify-content-end">
                                            <li class="mr-1"><a href="<?php echo $dataHome->linkFB ?>" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                            <li class="mx-1"><a href="<?php echo $dataHome->linkTW ?>"  target="_blank"><span class="fab fa-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo text-left">
                            <h1>
                                <a class="navbar-brand" href="index.php?route=home">
                            <?php echo $dataHome->name ?></a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                              
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?route=home">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?route=about">About</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php?route=contact">Contact</a>
                                </li>

                            </ul>


                        </div>

                    </nav>
                </header>
            </div>
        </div>

    </div>
    <!--//banner-->
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?route=home">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- /Contact-->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">Contact Us</h3>
                <div class="address row">

                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6>Address</h6>
                                <p> California, USA

                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6>Email</h6>
                                <p>Email :
                                    <a href="mailto:example@email.com"> mail@example.com</a>

                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6>Phone</h6>
                                <p>+1 234 567 8901</p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="contact_grid_right">
                    <form action="#" method="post">
                        <div class="row contact_left_grid">
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Subject</label>
                                    <input class="form-control" type="text" name="Subject" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-6 con-right-w3ls">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder="" required=""></textarea>
                                </div>
                                <input class="form-control" type="submit" value="Submit">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //Contact -->
    <div class="contact-map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
    </div>



 <?php require_once(__DIR__.'/element/footer.php'); ?>

<?php require_once(__DIR__.'/element/javascript.php'); ?>
</body>

</html>