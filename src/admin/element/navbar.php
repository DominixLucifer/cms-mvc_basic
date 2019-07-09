    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php admin_route(); ?>" class="simple-text">
                    <?php panel_name(); ?>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="admin-profile.html">
                        <i class="pe-7s-user"></i>
                        <p>Admin Profile</p>
                    </a>
                </li>
                <li>
                    <a href="admin-home.html">
                        <i class="pe-7s-note2"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="admin-list-banner.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Banner list</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-mail-open-file"></i>
                        <p>Guests contact</p>
                        <ul>
                            <li><a href="guests-contact.html"><i class="fas fa-file-signature"></i> Guests contact</a></li>
                            <li><a href="guests-course.html"><i class="fas fa-address-card"></i> Guests course register</a></li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="admin-teach.html">
                        <i class="pe-7s-users"></i>
                        <p>Teach</p>

                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="index.php?route=[Tool][shell]" target="_bank">
                        <i class="pe-7s-rocket"></i>
                        <p>Shell tool (beta)</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>