<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column">
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php if ($current_page == 'index')
                        echo 'active'; ?>">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="banner.php" class="nav-link <?php if ($current_page == 'banner')
                        echo 'active'; ?>">
                        <i class="fa fa-image nav-icon"></i>
                        <p>Banner</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="adventure.php" class="nav-link <?php if ($current_page == 'adventure')
                        echo 'active'; ?>">
                        <i class="fa fa-hiking nav-icon"></i>
                        <p>Adventure</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="gallery.php" class="nav-link <?php if ($current_page == 'gallery')
                        echo 'active'; ?>">
                        <i class="fa fa-images nav-icon"></i>
                        <p>Gallery</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="dining.php" class="nav-link <?php if ($current_page == 'dining')
                        echo 'active'; ?>">
                        <i class="fa fa-utensils nav-icon"></i>
                        <p>Dining</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="service.php" class="nav-link <?php if ($current_page == 'service')
                        echo 'active'; ?>">
                        <i class="fa fa-cogs nav-icon"></i>
                        <p>Rooms</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="user.php" class="nav-link <?php if ($current_page == 'user')
                        echo 'active'; ?>">
                        <i class="fa fa-user nav-icon"></i>
                        <p>User</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="contact.php" class="nav-link <?php if ($current_page == 'contact')
                        echo 'active'; ?>">
                        <i class="fa fa-address-book nav-icon"></i>
                        <p>Contact Form</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="activities.php" class="nav-link <?php if ($current_page == 'activities')
                        echo 'active'; ?>">
                        <i class="fa fa-wrench nav-icon"></i>
                        <p>Service Activities</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="about.php" class="nav-link <?php if ($current_page == 'about')
                        echo 'active'; ?>">
                        <i class="fa fa-info-circle nav-icon"></i>
                        <p>Aboutus Counter</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="booking.php" class="nav-link <?php if ($current_page == 'booking')
                        echo 'active'; ?>">
                        <i class="fa fa-bed nav-icon"></i>
                        <p>Room Booking</p>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</nav>