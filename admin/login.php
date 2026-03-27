<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] != null) {
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
}
$usernameError = '';
$passwordError = '';
if (isset($_POST['signin'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'conn.php';
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Fetch the user details by username
        $sql = "SELECT * FROM login WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $dbPassword = $row['password'];

            // Direct compare (plain text)
            if ($password === $dbPassword) {
                $user_id = $row['id'];
                $_SESSION['user'] = $user_id;

                echo "<script>window.location.href='index.php';</script>";
            } else {
                $passwordError = "Invalid password. Please try again.";
            }
        } else {
            $usernameError = "User not found. Please register if you don't have an account.";
        }
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jungle Resort | Log In</title>
    <link href="dist/img/main_logo.png" rel="icon">

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
            background: url("dist/img/JC_BANNER_1-copy-1.webp") no-repeat center center/cover;
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
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
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
            color: white;
            background-color: #73B805;
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
            <img src="dist/img/main_logo.png" alt="logo">
        </div>

        <h4 class="title">Secure Admin Login</h4>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <!-- <input type="email" id="email" class="form-control" placeholder="Enter email"> -->
                    <input type="text" class="form-control" placeholder="username" name="username"
                        oninput="validateUsername(this)" onpaste="validatePaste(event)" />
                    <?php if (isset($usernameError)) { ?>
                        <p class="error-message">
                            <?php echo $usernameError; ?>
                        </p>
                    <?php } ?>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <!-- <input type="password" id="password" class="form-control" placeholder="Enter password"> -->
                    <input type="password" class="form-control" placeholder="password" name="password" />
                    <?php if (isset($passwordError)) { ?>
                        <p class="error-message">
                            <?php echo $passwordError; ?>
                        </p>
                    <?php } ?>
                    <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">
                        <i class="bi bi-eye" id="eyeIcon"></i>
                    </span>
                </div>
            </div>
            <!-- Button -->
            <div class="d-grid">
                <button class="btn btn-login" type="submit" name="signin">
                    Login
                </button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>