<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Resort | Contact</title>
    <link href="assets/img/main_logo.png" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- AOS Animation CSS -->
    <!-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"> -->

    <!-- Style CSS -->
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

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
                        <a class="nav-link" href="gallery">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="contact">Contact</a>
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

    <section class="contact-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right">

                    <h1>Your Adventure Starts Here 🌿
                        <!-- <span>Jungle Adventure</span> -->
                    </h1>

                    <p>
                        Dreaming of the jungle? Let us help you turn it into reality. Reach out for anything you
                        need—we’re always happy to help.
                    </p>

                    <div class="hero-contact">

                        <div>
                            <i class="bi bi-telephone"></i>
                            <span>+91 9876543210</span>
                        </div>

                        <div>
                            <i class="bi bi-telephone"></i>
                            <span>+91 1234567890</span>
                        </div>

                        <div>
                            <i class="bi bi-envelope"></i>
                            <span>info@junglecamp.com</span>
                        </div>

                    </div>

                </div>


                <div class="col-lg-6" data-aos="fade-left">

                    <div class="hero-image">

                        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="contact-main pt-5">
        <div class="container">
            <div class="row g-5">
                <!-- FORM -->
                <div class="col-lg-7">
                    <div class="contact-form-card">
                        <h3>Send Us A Message</h3>
                        <form id="contactForm">
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <input type="text" id="first-name" name="name" placeholder="Your Name"
                                        class="form-control" required oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '');
                this.value = this.value.split(' ').map(function(word) {
                return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }).join(' ');">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" id="form-email" name="email" placeholder="Your Email"
                                        class="form-control" required>
                                    <div id="emailError" style="color:red; display:none;">
                                        Please enter a valid email address.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <input type="text" id="form-subject" name="subject" placeholder="Subject"
                                        class="form-control" required>
                                </div>

                                <div class="col-12">
                                    <textarea rows="5" id="form-message" name="message"
                                        placeholder="Write your message..." class="form-control" required></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn contact-btn">Send Message</button>
                                </div>

                                <div id="Error" style="color:red; display:none;">
                                    Please fill in all fields.
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- CONTACT INFO -->

                <div class="col-lg-5">

                    <div class="contact-info-box">

                        <h4>Contact Information</h4>

                        <div class="info-item">
                            <i class="bi bi-geo-alt"></i>
                            <p>Jungle Camp Resort, <br>Puri, Odisha</p>
                        </div>

                        <div class="info-item">
                            <i class="bi bi-telephone"></i>
                            <p>+91 9876543210</p>
                        </div>

                        <div class="info-item">
                            <i class="bi bi-telephone"></i>
                            <p>+91 1234567890</p>
                        </div>

                        <div class="info-item">
                            <i class="bi bi-envelope"></i>
                            <p>support@junglecamp.com</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="contact-map py-5">

        <div class="container">

            <div class="map-card">

                <iframe src="https://maps.google.com/maps?q=simlipal&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </section>
    <?php include 'common/footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- AOS Animation JS -->
    <!-- <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script> -->

    <script src="assets/main.js"></script>

    <!-- <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script> -->
    <script>
        $(document).ready(function () {

            $('#contactForm').submit(function (e) {
                e.preventDefault();

                $('#Error').hide();
                $('#emailError').hide();

                let isValid = true;

                // Check empty fields
                $('#contactForm input, #contactForm textarea').each(function () {
                    if ($(this).val().trim() === '') {
                        isValid = false;
                    }
                });

                // Email validation
                let email = $('#form-email').val();
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!emailPattern.test(email)) {
                    $('#emailError').show();
                    return;
                }

                if (!isValid) {
                    $('#Error').show();
                    return;
                }

                $.ajax({
                    type: 'POST',
                    url: 'contactsubmit.php', // ✅ correct file
                    data: $('#contactForm').serialize(),
                    dataType: 'json',

                    success: function (response) {
                        console.log(response);

                        if (response.status === 'success') {
                            toastr.success(response.message);
                            $('#contactForm')[0].reset();
                        } else {
                            toastr.error(response.message);
                        }
                    },

                    error: function (xhr) {
                        console.log(xhr.responseText);
                        toastr.error('Something went wrong!');
                    }
                });

            });

        });
    </script>
</body>

</html>