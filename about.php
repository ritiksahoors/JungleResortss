<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Resort | About</title>
    <link href="assets/img/main_logo.png" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="assets/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/main_logo.png" class="img-fluid" alt="">
            </a>
            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ================= MODERN LOADER ================= -->
    <div id="loader">
        <div class="loader-box">
            <span class="loader-ring"></span>
            <img src="assets/img/main_logo.png" class="loader-logo">
        </div>
    </div>

    <!-- ================= CLICK TO CALL ================= -->
    <a href="tel:+919876543210" id="callBtn">
        <i class="bi bi-telephone-fill"></i>
    </a>

    <!-- ================= GO TO TOP ================= -->
    <button id="goTop">
        <i class="bi bi-arrow-up"></i>
    </button>
    <section class="about-banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 data-aos="fade-up">About JungleCamp</h1>
            <p data-aos="fade-up" data-aos-delay="200">
                Experience nature, adventure, and unforgettable jungle memories.
            </p>
        </div>
    </section>

    <section class="about-story py-5 d-none d-lg-block d-md-block">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/About_us.webp" class="img-fluid about-img">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2>Our Story</h2>
                    <p>
                        JungleCamp was founded with the idea of bringing people closer to nature.
                        Located near the beautiful forests of Odisha, we provide unique jungle
                        camping experiences that combine adventure, relaxation, and wildlife exploration.
                    </p>
                    <p>
                        Our goal is to create unforgettable memories for every traveler while
                        protecting and respecting nature.
                    </p>
                    <a href="contact.php" class="btn hero-btn mt-3">Book Your Adventure</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-story py-5 d-lg-none d-md-none d-sm-block">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-left">
                    <h2>Our Story</h2>
                    <p>
                        JungleCamp was founded with the idea of bringing people closer to nature.
                        Located near the beautiful forests of Odisha, we provide unique jungle
                        camping experiences that combine adventure, relaxation, and wildlife exploration.
                    </p>
                    <p>
                        Our goal is to create unforgettable memories for every traveler while
                        protecting and respecting nature.
                    </p>
                    <a href="contact.php" class="btn hero-btn mt-3">Book Your Adventure</a>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/About_us.webp" class="img-fluid about-img">
                </div>
            </div>
        </div>

    </section>

    <section class="mission-section pb-5">

        <div class="container">

            <!-- MISSION -->
            <div class="row align-items-center g-5 mb-5">

                <!-- CONTENT -->
                <div class="col-lg-6">

                    <div class="mission-content">
                        <!-- <i class="bi bi-bullseye"></i> -->
                        <h3>Our Mission</h3>
                        <p>
                            Our mission is to create safe, sustainable, and unforgettable jungle camping
                            experiences that bring people closer to nature. We aim to promote eco-tourism
                            by respecting the environment, preserving natural resources, and supporting
                            local communities.

                            Through thoughtfully designed stays, adventure activities, and personalized
                            hospitality, we strive to give every guest a peaceful escape from city life
                            while ensuring comfort, safety, and a deep connection with the wilderness.
                        </p>
                    </div>

                </div>

                <!-- IMAGE -->
                <div class="col-lg-6">
                    <img src="assets/img/About_us.webp" class="img-fluid rounded-4 shadow">
                </div>

            </div>

            <!-- VISION -->
            <div class="row align-items-center g-5 flex-lg-row-reverse">

                <!-- CONTENT -->
                <div class="col-lg-6">

                    <div class="mission-content">
                        <!-- <i class="bi bi-eye"></i> -->
                        <h3>Our Vision</h3>
                        <p>
                            Our vision is to become one of the most trusted and loved adventure tourism
                            destinations, known for delivering authentic nature experiences with modern
                            comfort. We aspire to build a space where travelers, families, and nature
                            lovers can reconnect with the outdoors and create lifelong memories.

                            We believe in growing responsibly by maintaining harmony with nature,
                            continuously improving our services, and setting new standards in eco-friendly
                            tourism and hospitality.
                        </p>
                    </div>


                </div>


                <!-- IMAGE -->
                <div class="col-lg-6">
                    <img src="assets/img/About_us2.webp" class="img-fluid rounded-4 shadow">
                </div>

            </div>

        </div>

    </section>

    <section class="features-section py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2>Our Facilities</h2>

                <p>Everything you need for a comfortable jungle experience</p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">

                    <div class="feature-box">

                        <i class="bi bi-tree"></i>

                        <h5>Nature Camping</h5>

                        <p>Enjoy peaceful camping in the heart of the forest.</p>

                    </div>

                </div>


                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                    <div class="feature-box">

                        <i class="bi bi-fire"></i>

                        <h5>Campfire Nights</h5>

                        <p>Memorable evenings with music and campfire.</p>

                    </div>

                </div>


                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">

                    <div class="feature-box">

                        <i class="bi bi-compass"></i>

                        <h5>Safari Tours</h5>

                        <p>Guided jungle safari and wildlife exploration.</p>

                    </div>

                </div>


                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">

                    <div class="feature-box">

                        <i class="bi bi-cup-hot"></i>

                        <h5>Organic Food</h5>

                        <p>Fresh local meals prepared by our camp chefs.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="stats-section py-5">

        <div class="container">

            <div class="row text-center">
                <?php
                include 'admin/conn.php';

                $sql = "SELECT * FROM about_counter WHERE status='1' ORDER BY name ASC";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {

                    // Set label based on name
                    if ($row['name'] == '1') {
                        $label = "Happy Visitors";
                    } elseif ($row['name'] == '2') {
                        $label = "Camping Events";
                    } elseif ($row['name'] == '3') {
                        $label = "Tour Guides";
                    } elseif ($row['name'] == '4') {
                        $label = "Years Experience";
                    } else {
                        $label = "Unknown";
                    }
                    ?>
                    <div class="col-md-3" data-aos="fade-up">
                        <h2 class="counter" data-target="<?php echo $row['counter_value']; ?>">0</h2>
                        <p><?php echo $label; ?></p>
                    </div>
                                <?php } ?>
            </div>
        </div>

    </section>
    <?php include 'common/footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script src="assets/main.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>