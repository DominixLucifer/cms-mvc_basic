
<!-- - var navbarCustom = "fixed-top navbar-semi-dark navbar-shadow"-->
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
                <h2 class="content-header-title"></h2>
            </div>
            <!-- breadcrumb -->
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="http://localhost/tol/public/backend">Home</a>
                        </li><li class="breadcrumb-item active">Profile config</li>
                    </ol>
                </div>
            </div>
            <!-- end breadcrumb -->
        </div>
        <div class="content-body">
            <!-- Overview -->
            <div class="card">
                <div class="card-header">
                    <h4 id="basic-forms" class="card-title">Custom profile</h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <!-- custom profile  -->

                        <hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2"><img id="myImg" title="profile image" class="img-avatar img-circle img-responsive " src="http://localhost/tol/public/images/upload/1554733186.jpg" alt="image by <?php echo $_SESSION['user']; ?>"></div>
        <div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
        <div class="col-sm-8"><h1 class="name-user"><?php echo $_SESSION['user']; ?></h1></div>
        
    </div>
    <div class="row">
        <div class="col-sm-4"><!--left col-->
              

      <div class="text-center">
        <!-- <img src="http://localhost/tol/public/images/upload/1554733186.jpg" class="avatar img-circle img-thumbnail" alt="avatar"> -->
        <h6>Upload a different photo...</h6>
        <form class="form" id="registrationForm" enctype="multipart/form-data">
                <input type="file" name="image" class="form-control">
                <input id="key" value="update-user" type="hidden">
      </div></hr><br>

        
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fas fa-tachometer-alt"></i></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> updating...</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> updating...</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> updating...</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> updating...</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->


             <div class="col-md-8"> 
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $_SESSION['name']; ?>" title="enter your name if any.">
                          </div>
                      </div>


                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <p id="result_email" style="color:red"></p>
                              <span id="email_user" class="form-control"><?php echo $_SESSION['email']; ?></span>
                          </div>
                      </div>


                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>password confirmation</h4></label>
                              <input type="password" class="form-control" name="password_confirmation" id="password2" placeholder="password confirmation" title="enter your password confirmation .">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <div id="submit" class="btn btn-lg btn-success" ><i class="glyphicon glyphicon-ok-sign"></i> Save</div>
                            </div>
                      </div>
                </form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <script>
                 $(document).ready(function(){
                    $('#submit').on('click',function(){
                         $.ajax({
        url: 'index.php',
        type: 'POST',
        data: {
            key : $('#key').val(),
            fullname : $('#fullname').val(),
            password : $('#password').val(),
            password_confirmation : $('#password2').val(),
        },
        success: function (data) {
            console.log(data)
        },
        cache: false,
        contentType: false,
        processData: false
    });
                    });
                 });
             </script>
            
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div>

                        <!--end custom profile -->
                        
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