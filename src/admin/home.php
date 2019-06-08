
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
                                 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="avatar avatar-online"><img class="img-header" src="src/admin/element/images/upload/1554733186.jpg" alt="avatar"><i></i></span>
                                    Vũ Phương <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="src/admin/element/backend/profile">Profile</a>
                                    <a class="dropdown-item" href="src/admin/element/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="src/admin/element/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="V0irrp5DyxtYBTFlhuxWjGFY3c26102gM1tQLGr4">                                    </form>
                                </div>
                            </li>
               
            </div>
        </div>
    </div>
</nav>    
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <!-- main menu header-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content menu-accordion">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active"><a href="src/admin/element/backend"><i class="ft-home"></i><span class="menu-title" data-i18n="">Stack Admin</span></a>
            </li>
           
            <li class="nav-item"><a href="#"><i class="fas fa-user-cog"></i><span class="menu-title" data-i18n="">Profile</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="src/admin/element/backend/profile"><i class="fas fa-user-edit"></i> Profile config</a>
                    </li>
                    <li><a class="menu-item" href="#"><i class="fas fa-concierge-bell"></i> Registered service</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Subjects</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="documentation-content.html"><i class="fas fa-plus"></i> Add Subjects</a>
                    </li>
                    <li><a class="menu-item" href="documentation-card.html"><i class="fas fa-user-shield"></i> Permission</a>
                    </li>
                    <li><a class="menu-item" href="#"><i class="fas fa-list"></i> List Subjects</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="documentation-color-primary.html"><i class="far fa-file-code"></i> IT</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-danger.html"><i class="fas fa-project-diagram"></i> Technology</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-danger.html"><i class="fas fa-square-root-alt"></i> Maths</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-success.html"><i class="fas fa-atom"></i> Chemistry</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-warning.html"><i class="fas fa-microscope"></i> Biology</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-info.html"><i class="far fa-comment-dots"></i> English</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-red.html"><i class="fas fa-book-reader"></i> Literature</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-pink.html"><i class="fab fa-galactic-senate"></i> History</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-blue.html"><i class="fas fa-globe-americas"></i> Geography</a>
                            </li>
                            <li><a class="menu-item" href="documentation-color-cyan.html"><i class="fas fa-paint-brush"></i> Fine Art</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li><a class="menu-item" href="documentation-icons.html">Icons</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-box"></i><span class="menu-title" data-i18n="">Professional solutions</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="documentation-components.html">Questions</a>
                    </li>
                <li><a class="menu-item" href="src/admin/element/backend/subject">Subject</a>
                    </li>
                    <li><a class="menu-item" href="#">Forms</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="documentation-form-elements.html">Form Elements</a>
                            </li>
                            <li><a class="menu-item" href="documentation-form-layouts.html">Form Layouts</a>
                            </li>
                            <li><a class="menu-item" href="documentation-form-wizard.html">Form Wizard</a>
                            </li>
                            <li><a class="menu-item" href="documentation-form-repeater.html">Form Repeater</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">Tables</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="documentation-bootstrap-tables.html">Bootstrap Tables</a>
                            </li>
                            <li><a class="menu-item" href="documentation-datatables.html">Data Tables</a>
                            </li>
                            <li><a class="menu-item" href="documentation-jsgrid.html">jsGrid</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#.html">Charts</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="documentation-charts-echart.html">Echarts</a>
                            </li>
                            <li><a class="menu-item" href="documentation-charts-chartjs.html">Chart JS</a>
                            </li>
                            <li><a class="menu-item" href="documentation-charts-morris.html">Morris Charts</a>
                            </li>
                            <li><a class="menu-item" href="documentation-charts-flot.html">Flot Charts</a>
                            </li>
                            <li><a class="menu-item" href="documentation-charts-chartist.html">Chartist</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="documentation-maps.html">Maps</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="documentation-videos.html"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Video Tutorials</span></a>
            </li>
            <li class=" nav-item"><a href="documentation-migration-guide.html"><i class="ft-refresh-cw"></i><span class="menu-title" data-i18n="">Update &amp; Migration</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Other</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="documentation-sources-credits.html">Sources &amp; Credits</a>
                    </li>
                    <li><a class="menu-item" href="documentation-changelog.html">Changelog</a>
                    </li>
                    <li><a class="menu-item" href="documentation-notes.html">Notes</a>
                    </li>
                    <li><a class="menu-item" href="https://pixinvent.ticksy.com/">Support</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- main menu footer-->
</div>
    <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h2 class="content-header-title">Overview</h2>
            </div>

            
            
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="index.html">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Overview -->
            <div class="card">
                <div class="card-header">
                    <h4 id="basic-forms" class="card-title">Stack Admin Template Documentation</h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <p class="card-text">Thank you for purchasing Stack admin template. If you have any queries that are beyond the scope of this help file, please feel free to create a support ticket on our support portal : <a href="https://pixinvent.ticksy.com/">https://pixinvent.ticksy.com/</a></p>
                        <p><strong>Created:</strong> 09/06/2017 - V1.0</p>
                        <p><strong>Updated:</strong> 11/03/2019 - V3.2</strong></p>
                        <p><strong>By:</strong> PIXINVENT Team</strong></p>
                        <p><strong>Support Portal:</strong> <a href="https://pixinvent.ticksy.com/">https://pixinvent.ticksy.com/</a></strong></p>

                        <p class="card-text">Stack admin is super flexible, powerful, clean & modern responsive bootstrap admin template with unlimited possibilities. It includes 7 pre-built templates with organized folder structure, clean & commented code, 1500+ pages, 1000+ components, 100+ charts, 50+ advance cards (widgets) and many more.</p>
                        <p> Stack admin provides RTL support, searchable navigation, unique menu layouts, advance cards and incredible support. Stack admin can be used for any type of web applications: Project Management, eCommerce backends, CRM, Analytics, Fitness or any custom admin panels.</p>
                        <p> It comes with 3 niche dashboards. Stack admin template is powered with HTML 5, SASS & Twitter Bootstrap 4 which looks great on Desktops, Tablets, and Mobile Devices. Stack bootstrap admin template comes with starter kit which will help developers to get started quickly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    
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