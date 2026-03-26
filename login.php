<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Secure Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Background Image */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url("assets/img/JC_BANNER_1-copy-1.webp") no-repeat center center/cover;
            opacity: 0.2;
            z-index: -1;
        }

        .login-box {
            width: 100%;
            max-width: 420px;
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 130px;
        }

        .title {
            text-align: center;
            font-weight: 600;
            margin-bottom: 30px;
            color: #333;
        }

        .form-control {
            height: 50px;
            border-radius: 10px;
        }

        .input-group-text {
            border-radius: 10px 0 0 10px;
        }

        .btn-login {
            height: 50px;
            border-radius: 10px;
            font-weight: 600;
        }

        .extra {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: gray;
        }

        @media(max-width:500px) {
            .login-box {
                margin: 15px;
                padding: 25px;
            }
        }
    </style>

</head>

<body>

    <div class="login-box">

        <!-- Logo -->
        <div class="logo">
            <img src="assets/img/main_logo.png" alt="logo">
        </div>

        <h4 class="title">Secure Admin Login</h4>

        <form id="loginForm">

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <input type="email" id="email" class="form-control" placeholder="Enter email">
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input type="password" id="password" class="form-control" placeholder="Enter password">

                    <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">
                        <i class="bi bi-eye" id="eyeIcon"></i>
                    </span>
                </div>
            </div>

            <!-- Remember -->
            <div class="extra mb-3">
                <label>
                    <input type="checkbox"> Remember me
                </label>

                <a href="#">Forgot Password?</a>
            </div>

            <!-- Button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-login">
                    Login
                </button>
            </div>

        </form>

        <div class="footer">
            © 2026 Secure Panel
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        // show hide password
        function togglePassword() {
            let pass = document.getElementById("password");
            let eye = document.getElementById("eyeIcon");

            if (pass.type === "password") {
                pass.type = "text";
                eye.classList.replace("bi-eye", "bi-eye-slash");
            } else {
                pass.type = "password";
                eye.classList.replace("bi-eye-slash", "bi-eye");
            }
        }

        document.getElementById("loginForm").addEventListener("submit", function(e) {

            e.preventDefault();

            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();

            let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            let adminEmail = "admin@gmail.com";
            let adminPassword = "123456";

            // empty
            if(email === "" || password === ""){
                Swal.fire({
                    icon: 'warning',
                    title: 'Missing Fields',
                    text: 'Please fill all fields'
                });
                return;
            }

            // email format
            if(!email.match(emailPattern)){
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Email',
                    text: 'Enter correct email format'
                });
                return;
            }

            // password length
            if(password.length < 6){
                Swal.fire({
                    icon: 'error',
                    title: 'Weak Password',
                    text: 'Password must be 6 characters'
                });
                return;
            }

            // login check
            if(email === adminEmail && password === adminPassword){

                Swal.fire({
                    icon: 'success',
                    title: 'Login Successful',
                    text: 'Welcome Admin',
                    confirmButtonColor: '#0d6efd'
                }).then(() => {
                    window.location.href = "index.html";
                });

            } else {

                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Credentials',
                    text: 'Email or Password incorrect'
                });

            }

        });

    </script>

</body>

</html>