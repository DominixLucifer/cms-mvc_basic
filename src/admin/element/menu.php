<?php 

use minapp\siteModel;
use minapp\service\getByNumber;

$user = new siteModel('userlogin');
$datauser = $user->getAll();
$datauser = json_decode($datauser);
$datauser = $datauser->data[0];

// var_dump($datauser);

// $img = new getByNumber();
$img = getByNumber::getImage($datauser->image);
$permission = getByNumber::getPermission($datauser->u_id);

?>

<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fab fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <img src="<?php echo $img; ?>" alt="Avatar" class="avatar"> 
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										<?php echo $datauser->username; ?>
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="admin-profile.html">Profile</a></li>
                                <li><a href="#">Create user</a></li>
                                <li><a href="#">permission user</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a id="logout" href="logout.html">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
            $(document).ready(function(){
                $('#logout').on('click',function(e){
                    e.preventDefault();
                    swal({
                    title: 'Xác nhận logout?',
                    text: "",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Có',
                    cancelButtonText: 'Không',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function (confirmed) {
                    if (!confirmed.dismiss)
                        $.ajax({
                            url: $('#logout').attr('href'),
                            method: 'GET',
                            success: function(resp){
                                swal(
                                    'Logout!',
                                    'Your has been logout.',
                                    'success'
                                );
                                    setTimeout(function(){
                                        location.reload();
                                    }, 1000);
                            }
                        });
                }, function (dismiss) {

                });
                });
            });
        </script>