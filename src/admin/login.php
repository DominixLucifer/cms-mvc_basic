
<!-- - var navbarCustom = "fixed-top navbar-semi-dark navbar-shadow"-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require_once __DIR__.'/element/head.php'; ?>


<body class="vertical-layout vertical-menu 2-columns  fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

        

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="navbar-brand" href="index.php?route=admin"><img class="brand-logo" alt="stack admin logo" src="src/admin/element/images/logo/stack-logo-light.png">
                        <h2 class="brand-text">Admin</h2>
                    </a></li>
                <li class="nav-item d-md-none float-right"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-ellipsis pe-2x fa-rotate-90"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon icon-expand2"></i></a></li>
                </ul>
                               
            </div>
        </div>
    </div>
</nav>        


<div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
               <i class="fas fa-user-circle"></i>
              </div>
          
              <!-- Login Form -->
              
          <div id="loginbox" style="display:none; margin-top:50px;" class="mainbox col-md-12">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                                                           <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="src/admin/element/password/reset">Forgot password?</a></div>
                                                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <div id="loginform" class="form-horizontal">                                     
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control"  placeholder="email" required>
                                                                                
                                    </div>
                                     
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control"  placeholder="password" required>
                                                                            </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" class="form-check-input" type="checkbox" name="remember" > Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" class="btn btn-success">Login </button>
                                      <div id="load" class="alert alert-info">
                                          
                                      </div>
                                    </div>
                                </div>


                                <div class="form-group">

                                </div>    
                            </div>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="col-md-12">
  

               
               
                
         </div>               <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover"  onclick="$('#loginbox').show();$('#formFooter').hide()">Đăng nhập</a>
              </div>


          
            </div>
          </div>
              <script>
        
                        $(document).ready(function(){
                            $("#load").hide();
                    $('#btn-login').on('click',function(){  
                    $("#load").html('<img src="https://www.drupal.org/files/issues/throbber_13.gif" width="30" height="30" /> Đang Lấy Thông Tin video. Vui Lòng Đợi...').fadeIn("slow");
                         $.ajax({
                            url : 'index.php',
                            type : 'POST',
                            data : {
                                username : $('#login-username').val(),
                                password : $('#login-password').val(),
                                key : 'login'

                            },      
                        success : function (result){
                         $("#load").hide();
                         $('body').html(result);
                            
                        }
                        });

                    });
                   
                });
    </script>
            
        
        
        
  <script src="src/admin/element/vendors/js/vendors.min.js"></script>
    <script src="src/admin/element/js/core/app-menu.js"></script>
    <script src="src/admin/element/js/core/app.js"></script>
    <script src="src/admin/element/js/scripts/customizer.js"></script>
    <script src="src/admin/element/js/scripts/documentation.js" type="text/javascript"></script>
    <script src="src/admin/element/vendors/js/ui/affix.js" type="text/javascript"></script>
    <script src="src/admin/element/js/config.js"></script>    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://www.facebook.com/zake.death" target="_blank">DOMINIX </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>



    
</body>

</html>