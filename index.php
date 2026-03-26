<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Resort | Home</title>
    <link href="assets/img/main_logo.png" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- AOS Animation CSS -->
    <!-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"> -->
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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
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
    <section class="hero-slider mt-5">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

        <div class="carousel-inner">
            <?php
                include 'admin/conn.php';
                $sql10 = "SELECT * FROM banner WHERE status='1'";
                $result10 = $conn->query($sql10);

                $i = 0; // counter
                
                while ($row10 = $result10->fetch_assoc()) {

                    // Only first item active
                    $active = ($i == 0) ? 'active' : '';
                    ?>
                    <div class="carousel-item <?php echo $active; ?>">
                        <div class="hero-slide">
                            <img src="admin/upload/banner/<?php echo $row10['img']; ?>" class="hero-img w-100">
    
                            <div class="hero-content container">
                                <p class="mb-0">
                                    <i class="bi bi-geo-alt"></i> Puri Konark Marine Drive, Beldal, Odisha
                                </p>
    
                                <h1>
                                    Welcome to
                                    <span>Jungle Camp Resort,</span>
                                    Puri
                                </h1>
    
                                <h4><?php echo $row10['descc']; ?></h4>
    
                                <h5>Call or WhatsApp Us : +91-7064478501</h5>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
    
            <!-- Prev Button -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
    
            <!-- Next Button -->
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
    
        </div>
    </section>
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- CONTENT FIRST ON MOBILE -->
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                    <span class="about-tag fw-bolder fs-4">ABOUT US</span>
                    <h2 class="about-title fst-italic">
                        Experience Jungle Life <br> Like Never Before
                    </h2>
                    <p class="about-text">
                        Jungle Camp offers a unique camping experience surrounded by
                        beautiful forests and peaceful natural landscapes. Enjoy
                        campfires, nature walks, adventure activities, and relaxing
                        moments away from city life.
                    </p>
                    <p class="about-text">
                        Our goal is to create unforgettable outdoor experiences where
                        you reconnect with nature and enjoy the beauty of the jungle.
                    </p>
                    <a href="about.php" class="btn about-btn">
                        Discover More
                    </a>
                </div>

                <!-- IMAGE COLLAGE -->
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <div class="about-gallery">
                        <img src="assets/img/About_us.webp" class="about-imgs img1">
                        <img src="assets/img/About_us2.webp" class="about-imgs img2">
                        <!-- MOBILE PE HIDE -->
                        <img src="assets/img/About_us3.webp" class="about-imgs img3 d-none d-lg-block">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="why-title">Why Choose This Jungle Escape? 🌿</h2>
                <p class="why-subtitle">
                    Because normal vacations are boring… jungle adventures are better 😎
                </p>
            </div>
            <div class="row align-items-center">
                <!-- LEFT FEATURES -->
                <div class="col-lg-4">
                    <div class="why-card" data-aos="fade-right">
                        <h5>🌳 Pure Nature</h5>
                        <p>
                            Fresh air, tall trees and jungle sounds instead of traffic noise.
                            Your stress disappears faster than mobile network here 😄
                        </p>
                    </div>
                    <div class="why-card" data-aos="fade-right" data-aos-delay="200">
                        <h5>🥾 Real Adventure</h5>
                        <p>
                            Trekking, games and exciting outdoor activities
                            that will make your inner explorer very happy.
                        </p>
                    </div>
                </div>

                <!-- CENTER IMAGE -->
                <div class="col-lg-4 text-center" data-aos="zoom-in">
                    <div class="why-image">
                        <img src="assets/img/JC_BANNER_2.webp" class="img-fluid">
                    </div>
                </div>

                <!-- RIGHT FEATURES -->
                <div class="col-lg-4">
                    <div class="why-card" data-aos="fade-left">
                        <h5>🔥 Campfire Nights</h5>
                        <p>
                            Music, laughter and stories around the fire.
                            Best place to relax and forget city stress.
                        </p>
                    </div>

                    <div class="why-card" data-aos="fade-left" data-aos-delay="200">
                        <h5>🏕️ Comfortable Camping</h5>
                        <p>
                            Clean tents, cozy beds and safe facilities
                            so you enjoy nature without sacrificing comfort.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="jungle-accommodation py-5">
        <div class="container">
            <div class="text-center mb-5 jungle-head">
                <span class="jungle-tag">Accommodation</span>
                <h2 class="jungle-title">
                    Cozy Retreat – Treat your Soul at
                    <span>Jungle Camp Resort 🌿</span>
                </h2>
                <p class="jungle-sub">
                    Choose your jungle vibe — cottage, tent or villa 😎
                </p>
            </div>
            <div class="row g-4">
                <?php
                include 'admin/conn.php';
                $sql3 = "SELECT * FROM servicee WHERE status='1' ORDER BY id DESC";
                $result3 = $conn->query($sql3);
                while ($row3 = $result3->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">

                        <!-- CARD -->

                        <div class="jungle-card">

                            <div class="jungle-slider">
                                <div class="jungle-track">
                                    <img src="admin/upload/service/<?php echo $row3['room_img']; ?>">
                                    <img src="admin/upload/service/<?php echo $row3['room_img2']; ?>">
                                </div>
                            </div>
                            <div class="jungle-label"><?php echo $row3['room_nm']; ?></div>
                            <div class="jungle-bottom">
                                <span class="price">
                                    ₹<?php echo $row3['pricee']; ?> / Night
                                </span>
                                <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                    data-img="assets/img/wooden-cottage1.webp"
                                    data-desc="Luxury wooden stay with jungle vibes 🌿">
                                    Book Now
                                </button>
                            </div>

                        </div>

                    </div>


                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="jungle-card">
                        <div class="jungle-slider">
                            <div class="jungle-track">
                                <img src="assets/img/banjara-cottage1.webp">
                                <img src="assets/img/banjara-cottage1.webp">
                            </div>
                        </div>
                        <div class="jungle-label">🏕 Banjara Tent</div>
                        <div class="jungle-bottom">
                            <span class="price">₹4,999 / Night</span>
                            <button class="book-btn" data-title="🏕 Banjara Tent" data-price="4999"
                                data-img="assets/img/banjara-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div> -->

                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="jungle-card">

                        <div class="jungle-slider">

                            <div class="jungle-track">

                                <img src="assets/img/poool-villa1.webp">

                                <img src="assets/img/poool-villa1.webp">

                            </div>

                        </div>

                        <div class="jungle-label">🏊 Pool Villa</div>

                        <div class="jungle-bottom">
                            <span class="price">₹4,999 / Night</span>
                            <button class="book-btn" data-title="🏊 Pool Villa" data-price="4999"
                                data-img="assets/img/poool-villa1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->


                    <!-- CARD -->

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="jungle-card">

                        <div class="jungle-slider">

                            <div class="jungle-track">

                                <img src="assets/img/pool-swiss.webp">

                                <img src="assets/img/pool-swiss.webp">

                            </div>

                        </div>

                        <div class="jungle-label">👑 Royal Swiss Tent</div>

                        <div class="jungle-bottom">
                            <span class="price">₹4,999 / Night</span>
                            <button class="book-btn" data-title="👑 Royal Swiss Tent" data-price="4999"
                                data-img="assets/img/pool-swiss.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->
                    <!-- CARD -->

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="jungle-card">

                        <div class="jungle-slider">

                            <div class="jungle-track">

                                <img src="assets/img/wooden-cottage1.webp">

                                <img src="assets/img/wooden-cottage2.webp">

                            </div>

                        </div>

                        <div class="jungle-label">🌿 Premium Wooden Cottage</div>

                        <div class="jungle-bottom">
                            <span class="price">₹4,999 / Night</span>
                            <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                data-img="assets/img/wooden-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->


                    <!-- CARD -->

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="jungle-card">

                        <div class="jungle-slider">

                            <div class="jungle-track">

                                <img src="assets/img/banjara-cottage1.webp">

                                <img src="assets/img/banjara-cottage1.webp">

                            </div>

                        </div>

                        <div class="jungle-label">🏕 Banjara Tent</div>

                        <div class="jungle-bottom">
                            <span class="price">₹4,999 / Night</span>
                            <button class="book-btn" data-title="🏕 Banjara Tent" data-price="4999"
                                data-img="assets/img/banjara-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->


                    <!-- CARD -->

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="jungle-card">

                        <div class="jungle-slider">

                            <div class="jungle-track">

                                <img src="assets/img/poool-villa1.webp">

                                <img src="assets/img/poool-villa1.webp">

                            </div>

                        </div>

                        <div class="jungle-label">🏊 Pool Villa</div>

                        <div class="jungle-bottom">
                            <span class="price">₹4,999 / Night</span>
                            <button class="book-btn" data-title="🏊 Pool Villa" data-price="4999"
                                data-img="assets/img/poool-villa1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->


                    <!-- CARD -->

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="jungle-card">

                        <div class="jungle-slider">

                            <div class="jungle-track">

                                <img src="assets/img/pool-swiss.webp">

                                <img src="assets/img/pool-swiss.webp">

                            </div>

                        </div>

                        <div class="jungle-label">👑 Royal Swiss Tent</div>

                        <div class="jungle-bottom">
                            <span class="price">₹4,999 / Night</span>
                            <button class="book-btn" data-title="👑 Royal Swiss Tent" data-price="4999"
                                data-img="assets/img/pool-swiss.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->

                <?php } ?>
            </div>

            <!-- <div class="text-center mt-5">
                <button id="viewMoreBtn" class="btn gallery-btn">View More</button>
            </div> -->

        </div>

        <!-- DETAILS MODAL -->
        <div class="modal fade" id="detailsModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content fancy-modal">

                    <button class="btn-close ms-auto" data-bs-dismiss="modal"></button>

                    <img id="modalImg" class="img-fluid mod-img rounded mb-3">

                    <h3 id="modalTitle"></h3>
                    <p id="modalDesc"></p>
                    <h5 id="modalPrice"></h5>

                    <button class="btn btn-success w-100 mt-3" id="goForm">
                        😍 Continue Booking
                    </button>

                </div>
            </div>
        </div>


        <!-- FORM MODAL -->
        <div class="modal fade" id="formModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content fancy-modal p-3">

                    <button class="btn-close ms-auto" data-bs-dismiss="modal"></button>

                    <h4>📝 Enter Details</h4>

                    <!-- NAME + PHONE -->
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control my-2" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control my-2" placeholder="Phone Number">
                        </div>
                    </div>

                    <!-- DATE RANGE -->
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mt-2">Check-in Date</label>
                            <input type="date" id="checkIn" class="form-control my-2">
                        </div>
                        <div class="col-md-6">
                            <label class="mt-2">Check-out Date</label>
                            <input type="date" id="checkOut" class="form-control my-2">
                        </div>
                    </div>

                    <!-- DAYS + PRICE -->
                    <div class="row align-items-center mt-2">
                        <div class="col-md-4">
                            <input type="number" id="daysInput" class="form-control" min="1" value="1" readonly>
                        </div>
                        <div class="col-md-8">
                            <div class="price-box">
                                <p class="mb-1">Price/Night: <span id="pricePerNight">₹1000</span></p>
                                <h6 class="mb-0">Total: <span id="totalPrice">₹1000</span></h6>
                            </div>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <button class="btn btn-success w-100 mt-3" id="finalBook">
                        🚀 Confirm Booking
                    </button>

                </div>
            </div>
        </div>


        <!-- TOAST -->
        <div class="toast position-fixed bottom-0 end-0 p-3" id="bookingToast">
            <div class="toast-body bg-success text-white rounded">
                🎉 Booked Successfully!
            </div>
        </div>

    </section>

    <section class="services-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1>Adventure Activities</h1>
                <p>Experience thrilling outdoor adventures</p>
            </div>
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="ae-activity-title">
                        Jungle Activities That Will Wake Your Inner Explorer 🌿
                    </h2>
                    <p class="ae-activity-desc">
                        Sleeping under stars, roasting marshmallows near the fire,
                        getting lost in jungle trails (don't worry we’ll find you 😄),
                        and enjoying adventures you will remember forever.
                    </p>
                    <ul class="ae-activity-list">

                        <li>🏕️ Jungle Camping</li>
                        <li>🔥 Campfire Night & Music</li>
                        <li>🥾 Jungle Trekking</li>
                        <li>🎯 Outdoor Adventure Games</li>
                    </ul>
                    <a href="service.php" class="btn about-btn mb-5">
                        Explore All Activities
                    </a>
                </div>
                <div class="col-lg-6 mt-0 mb-5" data-aos="fade-left">
                    <div class="ae-activity-gallery py-sm-5">
                        <?php
                        include 'admin/conn.php';
                        $sql2 = "SELECT * FROM adven WHERE status='1'";
                        $result2 = $conn->query($sql2);
                        while ($row2 = $result2->fetch_assoc()) {
                            ?>
                            <img src="admin/upload/adventure/<?php echo $row2['image']; ?>" class="img1">

                            <!-- <img src="assets/img/activity2.jpeg" class="img2">

                                <img src="assets/img/activity3.jpeg" class="img3">

                                <img src="assets/img/activity4.jpeg" class="img4"> -->
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/Archery-copy.webp" class="service-icon">
                        <h5>Archery</h5>
                        <p>Archery, an ancient sport of precision and focus, involves skilled use of bows and arrows for
                            target shooting or hunting.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/SHOOTING-1.webp" class="service-icon">
                        <h5>Shooting</h5>
                        <p>Shooting, a popular recreational activity, involves precision aiming and firing firearms or
                            airguns at targets for sport or competition</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/ZOBRING.webp" class="service-icon">
                        <h5>Zorbing</h5>
                        <p>Zorbing: Roll inside a giant inflatable ball for thrilling fun, bouncing down hills or
                            floating on water. Excitement in motion!</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/zipline.webp" class="service-icon">
                        <h5>Zip Line</h5>
                        <p>Zip lining: Thrilling adventure gliding along suspended cables, offering breathtaking views
                            and adrenaline-pumping excitement for outdoor enthusiasts and thrill-seekers.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/cycleing.webp" class="service-icon">
                        <h5>Cycling</h5>
                        <p>Cycling promotes fitness, reduces pollution, and fosters community while exploring nature and
                            cityscapes on two wheels. Ride on!</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/rivercrossing.webp" class="service-icon">
                        <h5>River Crossing</h5>
                        <p>River Crossing: Team navigates obstacles using limited resources, fostering collaboration,
                            problem-solving, and strategic thinking in outdoor challenges</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/wallclimb.webp" class="service-icon">
                        <h5>Wall Climbing</h5>
                        <p>Wall climbing: exciting vertical challenge. Requires strength, strategy, and focus. Fun for
                            individuals or groups. Builds confidence and fitness.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="service-cards text-white">
                        <img src="assets/img/boating.webp" class="service-icon">
                        <h5>Paddle Boating</h5>
                        <p>Leisurely paddle boating offers tranquil water exploration, combining gentle exercise with
                            serene enjoyment amidst picturesque surroundings for all ages.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="jungle-food py-5">

        <div class="container">

            <!-- FOOD -->

            <div class="row align-items-center jungle-row mb-5">

                <div class="col-lg-6">

                    <div class="jungle-img-box">

                        <img src="assets/img/About_us.webp" class="img-fluid">

                        <div class="food-badge">🍛 Jungle Food Time</div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <span class="jungle-mini">Food</span>

                    <h2 class="jungle-head">
                        Flavours that Linger
                        <span>Jungle Camp Delicacy</span>
                    </h2>

                    <p class="jungle-text">
                        Indulge in a culinary masterpiece at Jungle Camp. Our exclusive
                        specialty lies in the scrumptious harmony of seafood and traditional
                        cuisine. Every dish is prepared with love and flavours that make your
                        taste buds dance happily.
                    </p>

                    <p class="jungle-text">
                        Saving flavours across cuisines, we ensure your dining experience is
                        not just food — it’s a tasty jungle adventure 😋
                    </p>

                </div>

            </div>


            <!-- RESTAURANT -->

            <div class="row align-items-center jungle-row flex-lg-row-reverse">

                <div class="col-lg-6">

                    <div class="jungle-img-box">

                        <img src="assets/img/About_us2.webp" class="img-fluid">

                        <div class="food-badge">🍽 Nature Dining</div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <span class="jungle-mini">Restaurant</span>

                    <h2 class="jungle-head">
                        Dine in Nature’s Lap
                        <span>Floating Restaurant</span>
                    </h2>

                    <p class="jungle-text">
                        Enjoy delicious meals while surrounded by lush greenery and calm
                        waters. Our floating restaurant lets you relax, eat great food and
                        enjoy the beauty of nature all at once.
                    </p>

                    <p class="jungle-text">
                        Good food + jungle vibes = perfect holiday mood 😎
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section class="jungle-hero">

        <!-- VIDEO BACKGROUND -->
        <video autoplay muted loop playsinline class="hero-video">
            <source src="assets/img/WhatsApp-Video-2024-03-07-at-6.30.24-PM.mp4" type="video/mp4">
        </video>

        <!-- OVERLAY -->
        <div class="hero-overlay"></div>

        <!-- CONTENT -->
        <div class="hero-content">
            <h1>Escape Into The Wild</h1>
            <p>
                Experience nature like never before at Jungle Camp Resort.
                Relax in the lap of greenery, enjoy luxury stays,
                delicious food and unforgettable adventures.
            </p>
        </div>

    </section>

    <section class="events-section p-5">

        <div class="events-wrapper">

            <!-- TEXT FIRST ON MOBILE -->
            <div class="events-content order-1 order-lg-2">

                <span class="events-mini">EVENTS</span>

                <h2>
                    Jungle Vows & <span>Cricket Matches</span>
                </h2>

                <p>
                    Offering a <b>1 lac sq. ft. field</b>, Jungle Camp invites you to soak in the perfect
                    blend of nature and celebration. Our picturesque venue hosts extravagant
                    <b>destination weddings</b> amidst lush greenery for couples seeking a magical
                    eco-friendly experience.
                </p>

                <p>
                    For sports lovers, our massive field is perfect for thrilling
                    <b>cricket matches and fun activities</b>. Let love bloom and your
                    sports keeda thrive in the heart of nature.
                </p>

                <p class="events-highlight">
                    ✨ Experience the magic of Jungle Camp – where love, nature, and adventure unite!
                </p>

            </div>

            <!-- IMAGE GRID -->
            <div class="events-grid order-2 order-lg-1">

                <img src="assets/img/activity1.jpeg">
                <img src="assets/img/activity2.jpeg">
                <img src="assets/img/activity3.jpeg">
                <img src="assets/img/activity4.jpeg">

            </div>

        </div>

    </section>


    <section class="gallery-section py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="gallery-title">Gallery</h2>
                <p class="gallery-subtitle">Explore some beautiful moments</p>
            </div>

            <div class="row g-4">
                <?php
                include 'admin/conn.php';
                $sql4 = "SELECT * FROM gallery WHERE status='1' ORDER BY id DESC LIMIT 3";
                $result4 = $conn->query($sql4);
                while ($row4 = $result4->fetch_assoc()) {
                    ?>
                    <!-- image 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-slide="0"
                            data-images='[
                        "https://images.unsplash.com/photo-1501785888041-af3ef285b470",
                        "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee",
                        "https://images.unsplash.com/photo-1470770841072-f978cf4d019e"
                        ]'>
                            <img src="admin/upload/gallery/<?php echo $row4['image']; ?>">
                        </div>
                    </div>

                    <!-- image 2 -->
                    <!-- <div class="col-lg-4 col-md-6">
                    <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-slide="1"
                        data-images='[
        "https://images.unsplash.com/photo-1501785888041-af3ef285b470",
        "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee",
        "https://images.unsplash.com/photo-1470770841072-f978cf4d019e"
        ]'>
                        <img src="assets/img/activity1.jpeg">
                    </div>
                </div> -->

                    <!-- image 3 -->
                    <!-- <div class="col-lg-4 col-md-6">
                    <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-slide="2"
                        data-images='[
        "https://images.unsplash.com/photo-1501785888041-af3ef285b470",
        "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee",
        "https://images.unsplash.com/photo-1470770841072-f978cf4d019e"
        ]'>
                        <img src="assets/img/About_us2.webp">
                    </div>
                </div> -->
                <?php } ?>
            </div>

            <div class="text-center mt-5">
                <a href="gallery.php" class="btn gallery-btn">View Gallery</a>
            </div>

        </div>

    </section>

    <div class="modal fade gallery-modal" id="galleryModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-dark">

                <button type="button" class="btn-close btn-close-white m-3 ms-auto" data-bs-dismiss="modal"></button>

                <div class="modal-body d-flex align-items-center">

                    <div id="gallerySlider" class="carousel slide w-100" data-bs-ride="false">

                        <div class="carousel-inner text-center">

                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470"
                                    class="gallery-full-img">
                            </div>

                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
                                    class="gallery-full-img">
                            </div>

                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e"
                                    class="gallery-full-img">
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#gallerySlider"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#gallerySlider"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include 'common/footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <!-- <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script> -->
    <script src="assets/main.js"></script>
    <!-- <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script> -->
</body>

</html>