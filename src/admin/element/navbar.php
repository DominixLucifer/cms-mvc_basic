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

                <?php if(isset($_SESSION['user'])){ ?>
                                 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="avatar avatar-online"><img class="img-header" src="src/admin/element/images/upload/1554733186.jpg" alt="avatar"><i></i></span>
                                    <?php echo $_SESSION['user'] ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="index.php?route=admin-profile">Profile</a>
                                    <a class="dropdown-item" href="index.php?route=logout">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="src/admin/element/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="V0irrp5DyxtYBTFlhuxWjGFY3c26102gM1tQLGr4">                                    </form>
                                </div>
                            </li>
                        <?php } ?>
                       

               
            </div>
        </div>
    </div>
</nav>    