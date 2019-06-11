<?php 
use minapp\siteModel;

$home = new siteModel('banner');
$dataBanner = $home->getAll();
$dataBanner = json_decode($dataBanner);
$dataBanner = $dataBanner->data[0];
// var_dump($dataHome);

 ?>
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
                <h2 class="content-header-title">Add banner</h2>
            </div>

            
             <!-- breadcrumb -->
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="index.php?route=admin">Home</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Add banner</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        
            <!-- end breadcrumb -->
        <div class="content-body">
            <!-- Overview -->
            <div class="col-md-12 card">

                <div class="card-header">
                    <h4 id="basic-forms" class="card-title">Add banner</h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <hr>
                        <div class="container bootstrap snippet">
                             <div class="row">
                                 <div class="col-sm-8">
                                    <div class="tab-content">
                                        <div class="tab-pane active">

                                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="key" value="add-banner" >
                                             <input type="hidden" name="key" value="add-banner" >
                                            
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="banner_name"><h4>Banner name :</h4></label>
                                                    <input type="text" class="form-control" name="banner_name" id="banner_name" value="" title="enter your banner name " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="banner_title"><h4>Banner title :</h4></label>
                                                    <input type="text" class="form-control" name="banner_title" id="banner_title" value=" " title="enter your banner title " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="banner_image"><h4>Banner image :</h4></label>
                                                    <img id="review" style="max-width: 100px"  class="img-responsive" src="" alt="Banner image viewer">
                                                    <input type="file" class="form-control" name="image" id="banner_image" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <input type="submit" class="btn btn-success"  value="Add banner">
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>

                                 </div>
                             </div>
                        </div>



                    </div>
                </div>

            </div>

            
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                $('#review').attr('src', e.target.result);
         }
    
        reader.readAsDataURL(input.files[0]);
    }
    }

    $("#banner_image").change(function() {
        readURL(this);
    });
    </script>   

    

  <?php require_once __DIR__.'/element/js.php'; ?>    
    
</body>

</html>