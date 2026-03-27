<?php
session_start();
include 'conn.php';
$userid = $_SESSION['user'];
if ($userid === NULL) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jungle Resort | Home</title>
<link href="dist/img/main_logo.png" rel="icon">
<style>
    body {
        overflow-x: hidden;
    }
</style>
<?php include 'common/navbar.php'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="nav-panel__logo heading_resize">
        <a href="index">
            <img src="dist/img/main_logo.png" alt="Jungle Resort Logo" class="img-fluid" style="height:86px;">
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <?php include 'common/sidebar.php'; ?>
    </div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 home_color">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Count booking row -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-olive">
                        <div class="inner">
                            <div class="row">
                                <div class="col-6">
                                    <p>Booking</p>
                                    <?php
                                    include 'conn.php';
                                    if ($conn) {
                                        $query = "SELECT COUNT(*) as rowCount FROM bookings";
                                        $result = mysqli_query($conn, $query);

                                        if ($result) {
                                            $row = mysqli_fetch_assoc($result);
                                            echo isset($row['rowCount']) ? $row['rowCount'] : 0;
                                        } else {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        }

                                        mysqli_close($conn);
                                    } else {
                                        echo "Error connecting to the database: " . mysqli_connect_error();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Count contact row -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-olive">
                        <div class="inner">
                            <div class="row">
                                <div class="col-6">
                                    <p>Contact</p>
                                    <?php
                                    include 'conn.php';
                                    if ($conn) {
                                        $query = "SELECT COUNT(*) as rowCount FROM contact";
                                        $result = mysqli_query($conn, $query);

                                        if ($result) {
                                            $row = mysqli_fetch_assoc($result);
                                            echo isset($row['rowCount']) ? $row['rowCount'] : 0;
                                        } else {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        }

                                        mysqli_close($conn);
                                    } else {
                                        echo "Error connecting to the database: " . mysqli_connect_error();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php include 'common/footer.php'; ?>
</body>

</html>