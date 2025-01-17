<!doctype html>
<html lang="en">
<?php require_once(__DIR__.'/element/head.php'); ?>

<style>
html,input[type=button]{background-color:#56baed;}h2[class~=inactive]{color:#ccc;}h2.active{color:#0d0d0d;}body{font-family:"Poppins",sans-serif;}body{height:100vh;}input[type=reset]:hover,input[type=button]:hover,input[type=submit]:hover{background-color:#39ace7;}h2.active{border-bottom-width:1.5pt;}h2.active{border-bottom-style:solid;}[class~=wrapper]{display:flex;}h2.active{border-bottom-color:#5fbae9;}h2.active{border-image:none;}input[type=button]{border-left-width:medium;}a{color:#92badd;}input[type=button]{border-bottom-width:medium;}input[type=button]{border-right-width:medium;}input[type=button]{border-top-width:medium;}input[type=button]{border-left-style:none;}input[type=button]{border-bottom-style:none;}[class~=wrapper]{align-items:center;}input[type=button]{border-right-style:none;}input[type=button]{border-top-style:none;}input[type=button]{border-left-color:currentColor;}input[type=button]{border-bottom-color:currentColor;}input[type=button]{border-right-color:currentColor;}#formContent{-webkit-border-radius:.104166667in 7.5pt 10px .625pc;}input[type=button]{border-top-color:currentColor;}input[type=button]{border-image:none;}input[type=button]{color:white;}#formContent{border-radius:10px 10px .104166667in 10px;}input[type=button]{padding-left:5pc;}input[type=button]:active,input[type=submit]:active{-moz-transform:scale(.95);}input[type=button]{padding-bottom:11.25pt;}#formContent{background:#fff;}#formContent{padding-left:0in;}input[type=button]{padding-right:5pc;}input[type=button]{padding-top:11.25pt;}h2,input[type=button]{text-align:center;}a,input[type=button]{text-decoration:none;}input[type=button],a{display:inline-block;}input[type=button]{text-transform:uppercase;}input[type=submit]:active,input[type=button]:active{-webkit-transform:scale(.95);}input[type=button]:active{-o-transform:scale(.95);}input[type=button]{font-size:9.75pt;}input[type=button]{-webkit-box-shadow:0 .104166667in 1.875pc 0 rgba(95,186,233,.4);}input[type=button]{box-shadow:0 .104166667in .3125in 0 rgba(95,186,233,.4);}input[type=button]{-webkit-border-radius:.052083333in .052083333in 3.75pt 3.75pt;}input[type=button]:active{-ms-transform:scale(.95);}#formContent{padding-bottom:0in;}input[type=button]{border-radius:.3125pc .3125pc .052083333in .3125pc;}a{font-weight:400;}input[type=button]{margin-left:15pt;}[class~=wrapper]{flex-direction:column;}input[type=button]{margin-bottom:2.5pc;}input[type=button]{margin-right:15pt;}input[type=button]{margin-top:.052083333in;}input[type=button]{-webkit-transition:all .3s ease-in-out;}#formContent{padding-right:0in;}input[type=button]{-moz-transition:all .3s ease-in-out;}input[type=button]{-ms-transition:all .3s ease-in-out;}input[type=button]{-o-transition:all .3s ease-in-out;}#formContent{padding-top:0in;}[class~=wrapper]{justify-content:center;}input[type=button]{transition:all .3s ease-in-out;}input[type=submit]{background-color:#56baed;}input[type=submit]{border-left-width:medium;}input[type=submit]:active,input[type=button]:active{transform:scale(.95);}input[type=submit]{border-bottom-width:medium;}input[type=submit]{border-right-width:medium;}input[type=submit]{border-top-width:medium;}input[type=submit]{border-left-style:none;}input[type=submit]{border-bottom-style:none;}input[type=submit]{border-right-style:none;}#formContent{width:90%;}input[type=submit]{border-top-style:none;}#formContent{max-width:4.6875in;}input[type=submit]{border-left-color:currentColor;}input[type=submit]{border-bottom-color:currentColor;}input[type=submit]{border-right-color:currentColor;}input[type=submit]{border-top-color:currentColor;}input[type=submit]{border-image:none;}#formContent{position:relative;}input[type=submit]{color:white;}input[type=submit]{padding-left:5pc;}input[type=submit]{padding-bottom:11.25pt;}input[type=submit]{padding-right:5pc;}input[type=submit]{padding-top:11.25pt;}#formContent,input[type=submit]{text-align:center;}input[type=submit]{text-decoration:none;}input[type=submit]{display:inline-block;}h2{font-size:.166666667in;}[class~=wrapper]{width:100%;}input[type=submit]:active{-o-transform:scale(.95);}h2,input[type=submit]{text-transform:uppercase;}input[type=submit]{font-size:9.75pt;}input[type=submit]{-webkit-box-shadow:0 .104166667in 1.875pc 0 rgba(95,186,233,.4);}input[type=submit]{box-shadow:0 .104166667in .3125in 0 rgba(95,186,233,.4);}input[type=submit]{-webkit-border-radius:.052083333in .052083333in 3.75pt 3.75pt;}input[type=submit]:active{-ms-transform:scale(.95);}input[type=submit]{border-radius:.3125pc .3125pc .052083333in .3125pc;}input[type=submit]{margin-left:15pt;}input[type=submit]{margin-bottom:2.5pc;}#formContent{-webkit-box-shadow:0 30px .625in 0 rgba(0,0,0,.3);}input[type=submit]{margin-right:15pt;}input[type=submit]{margin-top:.052083333in;}input[type=submit]{-webkit-transition:all .3s ease-in-out;}h2{font-weight:600;}input[type=submit]{-moz-transition:all .3s ease-in-out;}[class~=wrapper]{min-height:100%;}input[type=submit]{-ms-transition:all .3s ease-in-out;}input[type=submit]{-o-transition:all .3s ease-in-out;}input[type=submit]{transition:all .3s ease-in-out;}input[type=reset]{background-color:#56baed;}input[type=reset]{border-left-width:medium;}[class~=wrapper]{padding-left:.208333333in;}input[type=reset]{border-bottom-width:medium;}input[type=reset]{border-right-width:medium;}input[type=reset]{border-top-width:medium;}#formContent{box-shadow:0 30px 3.75pc 0 rgba(0,0,0,.3);}input[type=reset]{border-left-style:none;}input[type=reset]{border-bottom-style:none;}input[type=reset]{border-right-style:none;}input[type=reset]{border-top-style:none;}input[type=reset]{border-left-color:currentColor;}input[type=reset]:active{-moz-transform:scale(.95);}input[type=reset]{border-bottom-color:currentColor;}input[type=text],#formFooter{background-color:#f6f6f6;}[class~=wrapper]{padding-bottom:.208333333in;}#formFooter{border-top-width:.010416667in;}[class~=wrapper]{padding-right:.208333333in;}input[type=reset]{border-right-color:currentColor;}input[type=reset]{border-top-color:currentColor;}input[type=reset]{border-image:none;}input[type=reset]{color:white;}input[type=reset]:active{-webkit-transform:scale(.95);}[class~=wrapper]{padding-top:.208333333in;}input[type=reset]{padding-left:5pc;}input[type=reset],input[type=text]{padding-bottom:11.25pt;}#formFooter,input[type=text]{border-top-style:solid;}input[type=reset]{padding-right:5pc;}#formFooter{border-top-color:#dce8f1;}input[type=text],input[type=reset]{padding-top:11.25pt;}input[type=text],input[type=reset]{text-align:center;}input[type=reset],input[type=text]{text-decoration:none;}input[type=text],input[type=reset],h2{display:inline-block;}#formFooter{border-image:none;}input[type=reset]{text-transform:uppercase;}input[type=reset]{font-size:9.75pt;}input[type=reset]{-webkit-box-shadow:0 .104166667in 1.875pc 0 rgba(95,186,233,.4);}input[type=reset]{box-shadow:0 .104166667in .3125in 0 rgba(95,186,233,.4);}input[type=reset]{-webkit-border-radius:.052083333in .052083333in 3.75pt 3.75pt;}input[type=reset]{border-radius:.3125pc .3125pc .052083333in .3125pc;}input[type=reset]{margin-left:15pt;}input[type=reset]{margin-bottom:2.5pc;}input[type=reset]{margin-right:15pt;}input[type=reset],input[type=text]{margin-top:.052083333in;}h2{margin-left:6pt;}input[type=reset]{-webkit-transition:all .3s ease-in-out;}input[type=reset]{-moz-transition:all .3s ease-in-out;}input[type=reset]{-ms-transition:all .3s ease-in-out;}input[type=reset]{-o-transition:all .3s ease-in-out;}input[type=reset]{transition:all .3s ease-in-out;}h2{margin-bottom:.625pc;}input[type=text]{border-left-width:.125pc;}h2{margin-right:6pt;}input[type=text]{border-bottom-width:.125pc;}h2{margin-top:.416666667in;}input[type=text]{border-right-width:.125pc;}input[type=text]{border-top-width:.125pc;}input[type=text]{border-left-style:solid;}input[type=text],input[type=text]:focus{border-bottom-style:solid;}input[type=text]{border-right-style:solid;}input[type=text]{border-left-color:#f6f6f6;}input[type=text]{border-bottom-color:#f6f6f6;}input[type=text]{border-right-color:#f6f6f6;}input[type=reset]:active{-o-transform:scale(.95);}input[type=text]{border-top-color:#f6f6f6;}input[type=reset]:active{-ms-transform:scale(.95);}#formFooter{padding-left:.260416667in;}input[type=text]{border-image:none;}input[type=text]{color:#0d0d0d;}input[type=text]{padding-left:2pc;}[class~=fadeInDown]{-webkit-animation-name:fadeInDown;}input[type=text]{padding-right:2pc;}input[type=text]:placeholder,h2{color:#ccc;}#formFooter{padding-bottom:.260416667in;}input[type=text]{font-size:.166666667in;}input[type=text]{margin-left:.3125pc;}input[type=text]{margin-bottom:.3125pc;}input[type=text]{margin-right:.3125pc;}[class~=fadeInDown]{animation-name:fadeInDown;}input[type=text]{width:85%;}input[type=text]{-webkit-transition:all .5s ease-in-out;}input[type=reset]:active{transform:scale(.95);}input[type=text]{-moz-transition:all .5s ease-in-out;}input[type=text]{-ms-transition:all .5s ease-in-out;}input[type=text]{-o-transition:all .5s ease-in-out;}[class~=fadeInDown]{-webkit-animation-duration:1s;}[class~=fadeInDown]{animation-duration:1s;}#formFooter{padding-right:.260416667in;}input[type=text]{transition:all .5s ease-in-out;}[class~=fadeInDown]{-webkit-animation-fill-mode:both;}input[type=text]{-webkit-border-radius:.3125pc 3.75pt .052083333in 3.75pt;}input[type=text]{border-radius:3.75pt 3.75pt .3125pc 5px;}[class~=fadeInDown]{animation-fill-mode:both;}#formFooter{padding-top:.260416667in;}input[type=text]:focus{background-color:#fff;}#formFooter{text-align:center;}input[type=text]:focus{border-bottom-width:.020833333in;}input[type=text]:focus{border-bottom-color:#5fbae9;}#formFooter{-webkit-border-radius:0 0 7.5pt 7.5pt;}#formFooter{border-radius:0 0 .625pc 7.5pt;}input[type=text]:focus{border-image:none;}@-webkit-keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);}100%{opacity:1;-webkit-transform:none;transform:none;}}@keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);}100%{opacity:1;-webkit-transform:none;transform:none;}}@-webkit-keyframes fadeIn{from{opacity:0;}to{opacity:1;}}@-moz-keyframes fadeIn{from{opacity:0;}to{opacity:1;}}@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}.fadeIn.first{-webkit-animation-delay:.4s;}.fadeIn.first{-moz-animation-delay:.4s;}[class~=underlineHover]:after{display:block;}[class~=underlineHover]:after{left:0;}.fadeIn.first{animation-delay:.4s;}[class~=fadeIn][class~=second]{-webkit-animation-delay:.6s;}[class~=underlineHover]:hover:after{width:100%;}[class~=underlineHover]:after{bottom:-.625pc;}[class~=fadeIn]{opacity:0;}[class~=underlineHover]:after{width:0;}[class~=fadeIn][class~=second]{-moz-animation-delay:.6s;}[class~=fadeIn]{-webkit-animation:fadeIn ease-in 1;}[class~=fadeIn]{-moz-animation:fadeIn ease-in 1;}[class~=fadeIn][class~=second]{animation-delay:.6s;}[class~=fadeIn]{animation:fadeIn ease-in 1;}[class~=underlineHover]:after{height:.020833333in;}[class~=fadeIn][class~=third]{-webkit-animation-delay:.8s;}[class~=fadeIn][class~=third]{-moz-animation-delay:.8s;}[class~=fadeIn][class~=third]{animation-delay:.8s;}.fadeIn.fourth{-webkit-animation-delay:1s;}[class~=fadeIn]{-webkit-animation-fill-mode:forwards;}[class~=fadeIn]{-moz-animation-fill-mode:forwards;}[class~=fadeIn]{animation-fill-mode:forwards;}[class~=fadeIn]{-webkit-animation-duration:1s;}.fadeIn.fourth{-moz-animation-delay:1s;}[class~=underlineHover]:after{background-color:#56baed;}[class~=fadeIn]{-moz-animation-duration:1s;}[class~=fadeIn]{animation-duration:1s;}*:focus{outline:none;}.fadeIn.fourth{animation-delay:1s;}[class~=underlineHover]:hover{color:#0d0d0d;}[class~=underlineHover]:after{content:"";}[class~=underlineHover]:after{transition:width .2s;}
</style>
<body>

<div class="wrapper">

    <div class="main-panel">
        


        <div class="content">
            <div class="container-fluid">
                <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
     <i class="fas fa-user"></i>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login-username" class="fadeIn second" name="Username" placeholder="Username">
      <input type="password" id="login-password" class="form-control text-center" name="Password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In" id="btn-login">
      <div class="alert alert-info" role="alert" id="load">
      </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

            </div>

        </div>

    </div>
</div>
              <script>
        
                      $(document).ready(function(){
                            $("#load").hide();
                    $('#btn-login').on('click',function(e){  
                      e.preventDefault();
                      if($('#login-username').val() == '' || $('#login-password').val() == ''){
                        $.notify({
                              icon: 'pe-7s-gift',
                             message: "<b>Username</b> or <b>Password</b> is empty!"
                            },{
                                type: 'info',
                                timer: 4000
                            });
                      }else{
                    $("#load").html('<img src="https://www.drupal.org/files/issues/throbber_13.gif" width="30" height="30" /> Đang Lấy Thông Tin đăng nhập...').fadeIn("slow");
                          var data = {
                                username : $('#login-username').val(),
                                password : $('#login-password').val(),
                                key : 'login'
                            };
                            console.log(data);
                         $.ajax({
                            url : <?php PostRoute(); ?>,
                            type : 'POST',
                            data : data, 
                            headers: {
                              "accept": "application/json",
                              "Access-Control-Allow-Origin":"*"
                            },     
                        success : function (result){
                            console.log(result);
                            var delayInMilliseconds = 2000; //1 second
                            setTimeout(function() {
                                $("#load").hide();
                                if(result == false){
                                    $.notify({
                                  icon: 'pe-7s-gift',
                                  message: "This account is Invalid!"
                                  },{
                                type: 'danger',
                                timer: 4000
                            });
                                }else{
                                    setTimeout(function() {
                                        eval('window.location.href = "admin.html"');
                                    },delayInMilliseconds);
                                }
                                
                            }, delayInMilliseconds);
                                
                                
                            
                            }
                        });
                      }
                      
                    });
                   
                });
    </script>
    
</body>
<?php require_once(__DIR__.'/element/script.php'); ?>


</html>
