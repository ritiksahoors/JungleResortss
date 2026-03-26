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
    <title>Jungle Resort | Service</title>
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
                            <h3 class="home_color">Rooms</h3>
                            <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
                                data-target="#myModal">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">1st Image</th>
                                        <th class="text-center">2nd Image</th>
                                        <th class="text-center">Room Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM servicee";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><img
                                                    src="upload/service/<?php echo $row['room_img']; ?>" alt="profile image"
                                                    width="50" height="50">
                                            </td>
                                            <td class="text-center"><img
                                                    src="upload/service/<?php echo $row['room_img2']; ?>"
                                                    alt="profile image" width="50" height="50">
                                            </td>
                                            <td class="text-center"><?php echo $row['room_nm']; ?></td>
                                            <td class="text-center">₹<?php echo $row['pricee']; ?></td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'servicee';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'service.php';
                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update3" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn2(<?php echo $row['id']; ?>,'<?php echo $row['room_img']; ?>','<?php echo $row['room_img2']; ?>','<?php echo $row['room_nm']; ?>', '<?php echo $row['pricee']; ?>')"
                                                    data-toggle="modal" data-target="#updateservice" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='servicee', tbc='id', returnpage='service.php');"
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
                                        <th class="text-center">1st Image</th>
                                        <th class="text-center">2nd Image</th>
                                        <th class="text-center">Room Name</th>
                                        <th class="text-center">Price</th>
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

<!-- Insert Modal -->
<div class="modal fade" data-backdrop="static" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Services</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="exampleInputcname">1st Image:</label>
                                <input type="file" class="form-control" name="image" accept="image/*" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">2nd Image:</label>
                                <input type="file" class="form-control" name="image1" accept="image/*" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Name:</label>
                                <input type="text" class="form-control" name="room_nm" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Price:</label>
                                <input type="text" class="form-control" name="room_price" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="banner_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['banner_insert'])) {
    include 'conn.php';

    // Inputs
    $room_nm = $conn->real_escape_string($_POST["room_nm"]);
    $room_price = $conn->real_escape_string($_POST["room_price"]);

    $upload_dir = "upload/service/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // ===================== 1st Image =====================
    $image1_name = $_FILES['image']['name'];
    $image1_tmp = $_FILES['image']['tmp_name'];
    $ext1 = pathinfo($image1_name, PATHINFO_EXTENSION);
    $new_image1 = uniqid() . '.' . $ext1;

    move_uploaded_file($image1_tmp, $upload_dir . $new_image1);

    // ===================== 2nd Image =====================
    $image2_name = $_FILES['image1']['name'];
    $image2_tmp = $_FILES['image1']['tmp_name'];
    $ext2 = pathinfo($image2_name, PATHINFO_EXTENSION);
    $new_image2 = uniqid() . '.' . $ext2;

    move_uploaded_file($image2_tmp, $upload_dir . $new_image2);

    // ===================== Insert =====================
    $sql = "INSERT INTO servicee (room_nm, pricee, room_img, room_img2, status) 
            VALUES ('$room_nm', '$room_price', '$new_image1', '$new_image2', '1')";

    if ($conn->query($sql) === true) {
        echo "<script>
            $(document).ready(function(){
                toastr.success('Service inserted successfully');
                setTimeout(function(){
                    window.location.href = 'service.php';
                }, 2000);
            });
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updateservice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Service</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id2" id="id2">
                    <div class="form-group col-12">
                        <label for="image">1st Image:</label>
                        <input type="file" name="image" class="form-control" placeholder="image"
                            accept=".png, .jpg, .jpeg"
                            onchange="document.getElementById('image113').src = window.URL.createObjectURL(this.files[0])">
                        <img id="image113" src="dist/img/noimage1.png" alt="New image" width="50" height="50" />
                        <img src="#" id="image122" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">
                    </div>
                    <div class="form-group col-12">
                        <label for="image">2nd Image:</label>
                        <input type="file" name="image1" class="form-control" placeholder="image"
                            accept=".png, .jpg, .jpeg"
                            onchange="document.getElementById('image114').src = window.URL.createObjectURL(this.files[0])">
                        <img id="image114" src="dist/img/noimage1.png" alt="New image" width="50" height="50" />
                        <img src="#" id="ser_image" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="text">Service Name:</label>
                        <input type="text" class="form-control" id="service_nm1" name="service_nm">
                    </div>
                    <div class="form-group">
                        <label for="text">Service Price:</label>
                        <input type="text" class="form-control" id="price1" name="pricee">
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

    include 'conn.php';

    $id = $_POST["id2"];
    $service_nm = $conn->real_escape_string($_POST["service_nm"]);
    $pricee = $conn->real_escape_string($_POST["pricee"]);
    $currentDateTime = date('Y-m-d H:i:s');

    $upload_dir = "upload/service/";

    // ================= Get Old Images =================
    $getOld = $conn->query("SELECT room_img, room_img2 FROM servicee WHERE id='$id'");
    $old = $getOld->fetch_assoc();

    $new_img1 = $old['room_img'];
    $new_img2 = $old['room_img2'];

    // ================= 1st Image =================
    if (!empty($_FILES['image']['name'])) {

        $img1_name = $_FILES['image']['name'];
        $img1_tmp = $_FILES['image']['tmp_name'];
        $ext1 = pathinfo($img1_name, PATHINFO_EXTENSION);
        $new_img1 = uniqid() . '.' . $ext1;

        if (move_uploaded_file($img1_tmp, $upload_dir . $new_img1)) {

            // delete old image
            if (!empty($old['room_img']) && file_exists($upload_dir . $old['room_img'])) {
                unlink($upload_dir . $old['room_img']);
            }

        } else {
            echo "<script>alert('1st Image not uploaded');</script>";
        }
    }

    // ================= 2nd Image =================
    if (!empty($_FILES['image1']['name'])) {

        $img2_name = $_FILES['image1']['name'];
        $img2_tmp = $_FILES['image1']['tmp_name'];
        $ext2 = pathinfo($img2_name, PATHINFO_EXTENSION);
        $new_img2 = uniqid() . '.' . $ext2;

        if (move_uploaded_file($img2_tmp, $upload_dir . $new_img2)) {

            // delete old image
            if (!empty($old['room_img2']) && file_exists($upload_dir . $old['room_img2'])) {
                unlink($upload_dir . $old['room_img2']);
            }

        } else {
            echo "<script>alert('2nd Image not uploaded');</script>";
        }
    }

    // ================= UPDATE QUERY =================
    $sql = "UPDATE servicee SET 
                room_nm='$service_nm',
                pricee='$pricee',
                room_img='$new_img1',
                room_img2='$new_img2',
                updated_at='$currentDateTime'
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            $(document).ready(function(){
                toastr.success('Updated successfully');
                setTimeout(function(){
                    window.location.href = 'service.php';
                }, 2000);
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