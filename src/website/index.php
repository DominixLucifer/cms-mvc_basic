<?php 
use minapp\siteModel;

$home = new siteModel('homedata');
$dataHome = $home->getAll();
$dataHome = json_decode($dataHome);
$dataHome = $dataHome->data[0];


$homeBanner = new siteModel('banner');
$dataBanner = $homeBanner->getAll();
$dataBanner = json_decode($dataBanner);
$dataBanner = $dataBanner->data;
$total = count((array)$dataBanner);

 ?>

<!DOCTYPE html>
<html lang="vi">
<?php require_once(__DIR__.'/element/head.php'); ?>
<body>
    <div class="mian-content">
        <!-- main image slider container -->
        <div class="slide-window">
            <div class="slide-wrapper" style="width: 300%;">

                <?php for ($i=0;$i<$total;$i++){ ?>

                <div class="slide" style="background: url(src/website/element/images/<?php echo $dataBanner[$i]->banner_image; ?>) no-repeat center;">
                    <div class="slide-caption">
                        <p><?php echo $dataBanner[$i]->banner_name; ?></p>
                        <h3><?php echo $dataBanner[$i]->banner_title; ?>.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="index.php?route=contact">
                            Contact</a>
                        </div>

                    </div>
                </div>

            <?php } ?>

            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <!-- main image slider container -->

        <div class="header-top-w3layouts">
            <div class="container">

                <header>
                    <div class="top-head-w3-agile text-left">
                        <div class="row top-content-info-wthree">
                            <div class="col-lg-5 top-content-left">
                                <!-- <h6>Have any Quastions?</h6> -->
                            </div>
                            <div class="col-lg-7 top-content-right">
                                <div class="row">
                                    <div class="col-md-6 callnumber text-left">
                                        <h6>Call Us : <span><?php echo $dataHome->phone ?></span></h6>
                                    </div>
                                    <div class="col-md-6 top-social-icons p-0">
                                        <ul class="social-icons d-flex justify-content-end">
                                            <li class="mr-1"><a href="<?php echo $dataHome->linkFB ?>" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                            <li class="mx-1"><a href="<?php echo $dataHome->linkTW ?>" target="_blank"><span class="fab fa-twitter"></span></a></li>

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
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php?route=home">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?route=about">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?route=contact">Contact</a>
                                </li>

                            </ul>

                        </div>

                    </nav>
                </header>
            </div>
        </div>

    </div>
    <!-- end of main image slider container -->
    <!-- banner-text -->
    <!-- ab -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <div class="intro text-left">
                    <h3 class="main mb-md-5 mb-3"><?php echo $dataHome->maxim ?>
                </div>
                    <?php require_once(__DIR__.'/element/support.php'); ?>


            </div>
        </div>
    </section>
    <!-- //ab -->
    <!-- banner-bottom-w3ls -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 about-img">
                </div>
                <div class="col-lg-6 about-right">
                    <h4>Who We Are</h4>
                    <h3>We give you complete control of your shipments.</h3>
                    <p class="my-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>

                    <ul class="author d-flex">
                        <li><img class="img-fluid" src="images/author.jpg" alt=""></li>
                        <li><span>Admin Name</span>Comany Namer</li>
                    </ul>
                    <div class="log-in mt-md-5 mt-3">
                        <a class="btn text-uppercase" href="single.html">
                                    Read More</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-w3ls -->
    <!--gallery  -->
    <section class="gallery py-md-5 py-3">
        <div class="gallery-inner pb-md-5 pb-3">
            <h3 class="tittle text-center mb-md-5 mb-4">Gallery</h3>
            <ul class="portfolio-categ filter pb-5 mb-lg-3 text-center">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">category 1</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">category 2</a>
                </li>
                <li class="cat-item-3">
                    <a href="#" title="Category 3">category 3</a>
                </li>


            </ul>
            <ul class="portfolio-area clearfix">
                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-3">
                    <span class="image-block img-hover">
                        <a class="image-zoom" href="src/website/element/images/g1.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g1.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-3">
                    <span class="image-block">
                       <a class="image-zoom" href="src/website/element/images/g2.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g2.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="src/website/element/images/g3.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g3.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                    <span class="image-block">
                       <a class="image-zoom" href="src/website/element/images/g4.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g4.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
                    <span class="image-block">
                       <a class="image-zoom" href="src/website/element/images/g5.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g5.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                       <a class="image-zoom" href="src/website/element/images/g6.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g6.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                       <a class="image-zoom" href="src/website/element/images/g7.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g7.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="src/website/element/images/g8.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="src/website/element/images/g8.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //gallery -->

    <!-- /bottom-last -->
    <section class="bottom-last py-5 text-center">
        <div class="bottom-bg">
            <h3><?php echo $dataHome->blog ?></h3>

        </div>
    </section>
    <!-- //bottom-last -->
    <!--/Blog-Posts-->
    <section class="banner-bottom-w3ls bg-light py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-4">
                <h3 class="tittle text-center mb-md-5 mb-4">
                    Tin tức mới nhất</h3>
                <!--/services-grids-->
                <div class="row blog-sec">
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g7.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">June 18, 2018</span>
                                    <h5 class="card-title text-uppercase mt-2"><a href="single.html">Vivamus id tempor felis. Cras sagittis mi sit amet </a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g1.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">June 20, 2018</span>
                                    <h5 class="card-title text-uppercase mt-2"><a href="single.html">Vivamus id tempor felis. Cras sagittis mi sit amet </a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g4.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">June 25, 2018</span>
                                    <h5 class="card-title text-uppercase mt-2"><a href="single.html">Vivamus id tempor felis. Cras sagittis mi sit amet </a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Blog-Posts-->
    <!--/testimonials-->

    <!--//testimonials-->
 <?php require_once(__DIR__.'/element/footer.php'); ?>

    <!--model-forms-->


    <?php require_once(__DIR__.'/element/javascript.php'); ?>

</body>

</html>