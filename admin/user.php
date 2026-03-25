<?php
session_start();
include 'conn.php';
$userid = $_SESSION['user'];
if ($userid === NULL) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Resort | User</title>
    <link href="dist/img/main_logo.png" rel="icon">
    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include 'common/navbar.php'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="nav-panel__logo heading_resize">
        <!-- <a href="index">
            <h2 class="text-white incolor">JUNGLE RESORT</h2>
        </a> -->
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
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="home_color">User</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">User Name</th>
                                        <th class="text-center">Password</th>
                                        <th class="text-center">Phone Number</th>
                                        <th class="text-center">Email I'd</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM login";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><?php echo $row['username']; ?></td>
                                            <td class="text-center"><?php echo $row['password']; ?></td>
                                            <td class="text-center"><?php echo $row['phone']; ?></td>
                                            <td class="text-center"><?php echo $row['email']; ?></td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'login';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'user.php';
                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update3" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn8(<?php echo $row['id']; ?>, '<?php echo $row['username']; ?>', '<?php echo $row['password']; ?>', '<?php echo $row['phone']; ?>', '<?php echo $row['email']; ?>')"
                                                    data-toggle="modal" data-target="#updateservice" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='about_counter', tbc='id', returnpage='about.php');"
                                                    title="Delete">
                                                    <i class="fas fa-trash-alt btn btn-danger btn-sm"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">User Name</th>
                                        <th class="text-center">Password</th>
                                        <th class="text-center">Phone Number</th>
                                        <th class="text-center">Email I'd</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updateservice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">User</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id8" id="id8">
                    <div class="form-group">
                        <label for="text">User Name:</label>
                        <input type="text" class="form-control" id="user_nm" name="user_name">
                    </div>
                    <div class="form-group">
                        <label for="text">Password:</label>
                        <input type="text" class="form-control" id="pass_word1" name="pass_word">
                    </div>
                    <div class="form-group">
                        <label for="text">Phone Number:</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_num">
                    </div>
                    <div class="form-group">
                        <label for="text">Email I'd:</label>
                        <input type="text" class="form-control" id="email_id" name="email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="banner_update" value="submit" class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['banner_update'])) {
    // Update without changing the image
    $id = $_POST["id8"];
    $user_name = $_POST["user_name"];
    $pass_word = $_POST["pass_word"];
    $phone_num = $_POST["phone_num"];
    $email = $_POST["email"];
    $currentDateTime = date('Y-m-d H:i:s');

    $sql1 = "UPDATE login SET username='$user_name', password='$pass_word', phone='$phone_num', email=' $email', update_at='$currentDateTime' WHERE id='$id'";
    if ($conn->query($sql1) == true) {
        echo "<script>
                        $(document).ready(function(){
                        toastr.success('Form submitted successfully');
                        setTimeout(function(){
                        window.location.href = 'user.php';
                        }, 2000); // 2000 milliseconds = 2 second
                        });
                    </script>";
    } else {
        echo $conn->error;
    }
    $conn->close();
}
?>
<?php include 'common/footer.php'; ?>

</html>