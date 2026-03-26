<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Resort | Service</title>
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
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="service.php">Services</a>
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

    <section class="service-banner d-flex align-items-center">

        <div class="container text-center text-white">

            <h1 data-aos="fade-up">Our Services</h1>

            <p data-aos="fade-up" data-aos-delay="200">
                Adventure, comfort, and unforgettable jungle experiences.
            </p>

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
                $sql3 = "SELECT * FROM servicee WHERE status='1'";
                $result3 = $conn->query($sql3);
                while ($row3 = $result3->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">

                        <div class="jungle-card">

                            <div class="jungle-slider">
                                <div class="jungle-track">
                                    <img src="admin/upload/service/<?php echo $row3['room_img']; ?>">
                                    <img src="admin/upload/service/<?php echo $row3['room_img2']; ?>">
                                </div>
                            </div>

                            <div class="jungle-label">
                                <?php echo $row3['room_nm']; ?>
                            </div>

                            <div class="jungle-bottom">

                                <span class="price">
                                    ₹ <?php echo $row3['pricee']; ?> / Night
                                </span>

                                <button class="book-btn" data-bs-toggle="modal" data-bs-target="#detailsModal"
                                    data-title="<?php echo $row3['room_nm']; ?>" data-price="<?php echo $row3['pricee']; ?>"
                                    data-img1="admin/upload/service/<?php echo $row3['room_img']; ?>"
                                    data-img2="admin/upload/service/<?php echo $row3['room_img2']; ?>"
                                    data-desc="<?php echo $row3['id']; ?>">
                                    Book Now
                                </button>

                            </div>

                        </div>

                    </div>
                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12">

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
                            <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                data-img="assets/img/wooden-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->
                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12">

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
                            <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                data-img="assets/img/wooden-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->
                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12 ">

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
                            <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                data-img="assets/img/wooden-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->
                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12 ">

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
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12 ">

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
                            <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                data-img="assets/img/wooden-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->
                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12 ">

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
                            <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                data-img="assets/img/wooden-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->
                    <!-- CARD -->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12 ">
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
                            <button class="book-btn" data-title="Premium Wooden Cottage" data-price="4999"
                                data-img="assets/img/wooden-cottage1.webp"
                                data-desc="Luxury wooden stay with jungle vibes 🌿">
                                Book Now
                            </button>
                        </div>

                    </div>

                </div> -->
                <?php } ?>
            </div>

        </div>

        <!-- DETAILS MODAL -->
        <!-- DETAILS MODAL -->
        <div class="modal fade" id="detailsModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content jungle-fancy-modal p-4">

                    <button class="btn-close ms-auto" data-bs-dismiss="modal"></button>

                    <!-- UNIQUE IMAGE SLIDER -->
                    <div class="jungle-modal-gallery">
                        <div class="jungle-modal-track" id="jungleModalTrack">

                            <img id="jungleModalImg1">
                            <img id="jungleModalImg2">

                        </div>
                    </div>

                    <h3 id="modalTitle" class="mt-3"></h3>

                    <p id="modalDesc" style="display:none;"></p>

                    <h5 id="modalPrice" class="text-success"></h5>

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

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" id="userName" class="form-control my-2" placeholder="Your Name">
                        </div>

                        <div class="col-md-6">
                            <input type="tel" id="userPhone" class="form-control my-2" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Check-in Date</label>
                            <input type="date" id="checkIn" class="form-control my-2">
                        </div>

                        <div class="col-md-6">
                            <label>Check-out Date</label>
                            <input type="date" id="checkOut" class="form-control my-2">
                        </div>
                    </div>

                    <div class="row align-items-center mt-2">
                        <div class="col-md-4">
                            <input type="text" id="daysInput" class="form-control" readonly>
                        </div>

                        <div class="col-md-8">
                            <div class="price-box">
                                <p>Price/Night: <span id="pricePerNight">₹1000</span></p>
                                <h6>Total: <span id="totalPrice">₹1000</span></h6>
                            </div>
                        </div>
                    </div>

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

    <section class="jc-eco-adventure-section py-5">

        <div class="container">
            <div class="row align-items-center">
                <!-- LEFT IMAGE SLIDER -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="jc-slider-wrapper">
                        <div class="jc-slider-track mt-sm-5">
                            <?php
                            include 'admin/conn.php';
                            $sql5 = "SELECT * FROM activities WHERE status='1' LIMIT 4";
                            $result5 = $conn->query($sql5);
                            while ($row5 = $result5->fetch_assoc()) {
                                ?>
                                <img src="admin/upload/activities/<?php echo $row5['image']; ?>"
                                    class="jc-slide jc-active-slide">
                                <!-- <img src="assets/img/About_us2.webp" class="jc-slide">
                                <img src="assets/img/About_us3.webp" class="jc-slide">
                                <img src="assets/img/JC_BANNER_1-copy-1.webp" class="jc-slide"> -->
                            <?php } ?>
                        </div>
                        <!-- dots -->
                        <div class="jc-slider-dots"></div>
                    </div>
                </div>


                <!-- RIGHT CONTENT -->
                <div class="col-lg-6 order-1 order-lg-2">

                    <h3 class="jc-eco-tag">activities</h3>

                    <h2 class="jc-eco-title">
                        Eco-Adventure at Jungle Camp Resort <br>
                        Explore & Engage in <span>Green</span>
                    </h2>

                    <p class="jc-eco-text">
                        Escape the chaos and immerse yourself in Jungle Camp’s pollution-free paradise!
                        Kickstart your day with a forest bath, boost immunity, and sip coffee amidst lush foliage.
                        Dive into thrilling activities like Zorbing, Wall Climbing, and Paddle Boating.
                    </p>

                    <p class="jc-eco-text2">
                        Jungle Camp Resort activities include Zorbing, Wall Climbing, Paddle Boating,
                        Shooting, and Cycling with eco-friendly initiatives and team-building exercises.
                    </p>

                    <button class="jc-eco-btn">
                        READ MORE <i class="bi bi-tree"></i>
                    </button>

                </div>

            </div>

        </div>

    </section>

    <section class="services-section py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2>Adventure Activities</h2>
                <p>Experience thrilling outdoor adventures</p>

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

    <section class="stay-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Dining</h2>
                <p>Comfortable accommodation with delicious food</p>
            </div>
            <div class="row g-4">
                <?php
                include 'admin/conn.php';
                $sql6 = "SELECT * FROM dining WHERE status='1'";
                $result6 = $conn->query($sql6);
                while ($row6 = $result6->fetch_assoc()) {
                    ?>
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="stay-img-box">

                            <img src="admin/upload/dining/<?php echo $row6['image']; ?>" class="img-fluid">

                            <div class="stay-overlay">
                                <h5><?php echo $row6['heading']; ?></h5>
                                <p><?php echo $row6['descc']; ?></p>
                            </div>

                        </div>
                    </div>

                    <!-- CAMPFIRE -->
                    <!-- <div class="col-md-4" data-aos="fade-up">
                    <div class="stay-img-box">

                        <img src="assets/img/About_us.webp" class="img-fluid">

                        <div class="stay-overlay">
                            <h5>Campfire Nights</h5>
                            <p>Enjoy music, stories, and warm campfire evenings.</p>
                        </div>

                    </div>
                </div> -->

                    <!-- ORGANIC FOOD -->
                    <!-- <div class="col-md-4" data-aos="fade-up">
                    <div class="stay-img-box">

                        <img src="assets/img/activity2.jpeg" class="img-fluid">

                        <div class="stay-overlay">
                            <h5>Organic Dining</h5>
                            <p>Fresh local cuisine prepared by experienced chefs.</p>
                        </div>

                    </div>
                </div> -->
                <?php } ?>
            </div>

        </div>

    </section>

    <section class="extra-services py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2>Other Facilities</h2>
                <p>Enjoy comfortable and safe jungle stay with essential facilities</p>
            </div>

            <div class="row g-4">

                <!-- Parking -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="facility-box">
                        <i class="bi bi-car-front"></i>
                        <h5>Parking Area</h5>
                        <p>Spacious and secure parking area for all visitors and vehicles.</p>
                    </div>
                </div>

                <!-- Safety -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="facility-box">
                        <i class="bi bi-shield-check"></i>
                        <h5>Safety Equipment</h5>
                        <p>All safety gear and trained staff available for secure adventure.</p>
                    </div>
                </div>

                <!-- Wifi -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="facility-box">
                        <i class="bi bi-wifi"></i>
                        <h5>WiFi Zone</h5>
                        <p>Stay connected with high-speed internet in common areas.</p>
                    </div>
                </div>

                <!-- Group Activities -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="facility-box">
                        <i class="bi bi-people"></i>
                        <h5>Group Activities</h5>
                        <p>Fun team games and adventure activities for groups and families.</p>
                    </div>
                </div>

                <!-- Camp Fire -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="facility-box">
                        <i class="bi bi-fire"></i>
                        <h5>Camp Fire</h5>
                        <p>Enjoy warm and relaxing campfire nights with music and stories.</p>
                    </div>
                </div>

                <!-- Organic Food -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="facility-box">
                        <i class="bi bi-cup-hot"></i>
                        <h5>Organic Food</h5>
                        <p>Fresh and hygienic organic meals prepared with local ingredients.</p>
                    </div>
                </div>

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

    <script>
        document.addEventListener("DOMContentLoaded", function () {

    // BOOKING
    let selected = {}
    let price = 0

            document.querySelectorAll(".book-btn").forEach(btn => {
                btn.onclick = function () {

            selected = this.dataset
            price = Number(selected.price)

            document.getElementById("modalImg").src = selected.img
            document.getElementById("modalTitle").innerText = selected.title
            document.getElementById("modalDesc").innerText = selected.desc
            document.getElementById("modalPrice").innerText = "₹" + price + "/Night"

            new bootstrap.Modal(document.getElementById('detailsModal')).show()
        }
    })

            // NEXT MODAL
            document.getElementById("goForm").onclick = function () {

        bootstrap.Modal
            .getInstance(document.getElementById('detailsModal'))
            .hide()

        document.getElementById("pricePerNight").innerText = "₹" + price
        document.getElementById("totalPrice").innerText = "₹" + price
        document.getElementById("daysInput").value = 1

        document.getElementById("checkIn").value = ""
        document.getElementById("checkOut").value = ""

        new bootstrap.Modal(
            document.getElementById('formModal')
        ).show()
    }

    const checkIn = document.getElementById("checkIn")
    const checkOut = document.getElementById("checkOut")
    const daysInput = document.getElementById("daysInput")

    checkIn.addEventListener("change", () => {
        checkOut.min = checkIn.value
        calculateDays()
    })

    checkOut.addEventListener("change", calculateDays)

    function calculateDays() {

        if (checkIn.value && checkOut.value) {

            const start = new Date(checkIn.value)
            const end = new Date(checkOut.value)

            let diffTime = end - start
            let diffDays = diffTime / (1000 * 60 * 60 * 24)

            if (diffDays <= 0) diffDays = 1

            daysInput.value = diffDays + " days"
            updatePrice(diffDays)
        }
    }

    function updatePrice(days) {
        let total = days * price
        document.getElementById("totalPrice").innerText = "₹" + total
    }

    // FINAL BOOK
    document.getElementById("finalBook").onclick = function() {

        let name = document.getElementById("userName").value.trim()
        let phone = document.getElementById("userPhone").value.trim()
        let cin = checkIn.value
        let cout = checkOut.value

        let total = document
            .getElementById("totalPrice")
            .innerText.replace("₹", "")

        let room = document
            .getElementById("modalTitle")
            .innerText

        // VALIDATION

        let nameRegex = /^[A-Za-z\s]+$/
        let phoneRegex = /^[0-9]{10}$/

        if (!name || !phone || !cin || !cout) {
            alert("All fields required")
            return
        }

        if (!nameRegex.test(name)) {
            alert("Name only alphabet allowed")
            return
        }

        if (!phoneRegex.test(phone)) {
            alert("Phone must be 10 digit")
            return
        }

        // SEND DATA TO PHP

        fetch("save-booking.php", {

            method: "POST",

            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },

            body:
                "name=" + name +
                "&phone=" + phone +
                "&room=" + room +
                "&checkin=" + cin +
                "&checkout=" + cout +
                "&total=" + total

        })

        .then(res => res.text())

        .then(data => {

            if (data.trim() === "success") {

                bootstrap.Modal
                    .getInstance(
                        document.getElementById('formModal')
                    )
                    .hide()

                new bootstrap.Toast(
                    document.getElementById('bookingToast')
                ).show()

                document.getElementById("userName").value = ""
                document.getElementById("userPhone").value = ""
                document.getElementById("checkIn").value = ""
                document.getElementById("checkOut").value = ""

            } else {

                alert("Booking Failed")

            }

        })

    }

            checkOut.addEventListener("change", calculateDays)

            function calculateDays() {
                if (checkIn.value && checkOut.value) {

                    const start = new Date(checkIn.value)
                    const end = new Date(checkOut.value)

                    let diffTime = end - start
                    let diffDays = diffTime / (1000 * 60 * 60 * 24)

                    if (diffDays <= 0) diffDays = 1

                    daysInput.value = diffDays + " days"
                    updatePrice(diffDays)
                }
            }

            function updatePrice(days) {
                let total = days * price
                document.getElementById("totalPrice").innerText = "₹" + total
            }

            // MANUAL CHANGE (fallback)
            daysInput.addEventListener("input", function () {

                let days = Number(this.value)

                if (days < 1) days = 1

                updatePrice(days)
            })

            // FINAL BOOK
            document.getElementById("finalBook").onclick = function () {

                bootstrap.Modal.getInstance(document.getElementById('formModal')).hide()

                new bootstrap.Toast(document.getElementById('bookingToast')).show()
            }

        });
    </script>

</body>

</html>