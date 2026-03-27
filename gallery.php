<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Resort | Gallery</title>
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
            <a class="navbar-brand" href="index">
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
                        <a class="nav-link" href="index">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="service">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="gallery">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
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

    <section class="gallery-banner d-flex align-items-center">

        <div class="container text-center text-white">

            <h1 data-aos="fade-up">Our Gallery</h1>

            <p data-aos="fade-up" data-aos-delay="200">
                Where every photo tells a jungle story.
            </p>

        </div>

    </section>

    <section class="gallery-section py-5">

        <div class="container">

            <!-- tabs -->

            <ul class="nav nav-pills justify-content-center mb-5 gallery-tabs">
                <li class="nav-item">
                    <button class="nav-link active" data-category="all">All</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-category="adventure">Adventure</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-category="rooms">Rooms</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-category="food">Food</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-category="events">Events</button>
                </li>
            </ul>



            <?php
            $categories = [
                '1' => 'adventure',
                '2' => 'rooms',
                '3' => 'food',
                '4' => 'events'
            ];
            ?>

            <div class="row g-4 gallery-row">
                <?php
                include 'admin/conn.php';
                $sql = "SELECT * FROM gallery WHERE status='1'";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {

                    $cat = $categories[$row['category']] ?? 'all';
                    ?>
                    <div class="col-lg-4 col-md-6 gallery-col" data-category="<?php echo $cat; ?>">
                        <div class="gallery-item">
                            <img src="admin/upload/gallery/<?php echo $row['image']; ?>" data-category="<?php echo $cat; ?>"
                                class="img-fluid">
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </section>

    <div class="modal fade" id="imageModal">

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content bg-dark">

                <button class="btn-close btn-close-white ms-auto m-3" data-bs-dismiss="modal"></button>

                <div class="modal-body text-center">

                    <img id="popupImage" class="img-fluid">

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