<?php 
use minapp\siteModel;

$home = new siteModel('homedata');
$dataHome = $home->getAll();
$dataHome = json_decode($dataHome);
$dataHome = $dataHome->data[0];
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
                <h2 class="content-header-title">Home data</h2>
            </div>

            
             <!-- breadcrumb -->
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="index.php?route=admin">Home</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="index.php?route=admin">Custom Home</a>
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
                    <h4 id="basic-forms" class="card-title">Custom Home</h4>
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
                                             <input type="hidden" name="key" value="home-update" >
                                            
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="name"><h4>Tên website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $dataHome->name ?>" title="enter your website name ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="contentText"><h4>Content website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="contentText" id="contentText" value="<?php echo $dataHome->contentText ?>" title="enter your Content ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="keyword"><h4>Keyword website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="Keyword" id="Keyword" value="<?php echo $dataHome->keyword; ?>" title="enter your Keyword ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="phone"><h4>Phone website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $dataHome->phone; ?>" title="enter your phone ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="email"><h4>Email website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $dataHome->email; ?>" title="enter your email ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="address"><h4>Address website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $dataHome->address; ?>" title="enter your address ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="recommend"><h4>Recommend website <strong>*:</strong></h4></label>
                                                    <textarea rows="8" name="recommend" id="recommend" class="form-control"><?php echo $dataHome->description; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="description"><h4>Description website <strong>*:</strong></h4></label>
                                                    <textarea rows="8" name="description" id="description" class="form-control"><?php echo $dataHome->description; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="logoSite"><h4>Logo website <strong>*:</strong></h4></label>
                                                    <img style="max-width: 100px" src="src/website/element/images/<?php echo $dataHome->logoSite; ?>" alt="logo" class="img-responsive">
                                                    <input type="file" class="form-control" name="image" id="logoSite">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="mapIframe"><h4>Map website <strong>*:</strong></h4></label>
                                                    <div >
                                                        <?php echo htmlspecialchars_decode($dataHome->mapIframe) ?>
                                                    </div>
                                                    <input type="text" class="form-control" name="mapIframe" id="mapIframe" value="<?php echo $dataHome->mapIframe ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="linkFB"><h4>Link facebook website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="linkFB" id="linkFB" value="<?php echo $dataHome->linkFB ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="linkTW"><h4>Link twitter website <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="linkTW" id="linkTW" value="<?php echo $dataHome->linkTW ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <input type="submit" class="btn btn-success"  value="update">
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

    

  <?php require_once __DIR__.'/element/js.php'; ?>    
    
</body>

</html>