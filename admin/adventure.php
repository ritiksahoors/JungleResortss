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
    <title>Jungle Resort | Adventure</title>
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
                            <h3 class="home_color">Adventure</h3>
                            <!-- <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
                                data-target="#myModal">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add
                            </button> -->
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Adventure Image</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM adven";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><img src="upload/adventure/<?php echo $row['image']; ?>"
                                                    alt="profile image" width="50" height="50">
                                            </td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'adven';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'adventure.php';
                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update3" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn3(<?php echo $row['id']; ?>,'<?php echo $row['image']; ?>')"
                                                    data-toggle="modal" data-target="#updatebanner" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='adven', tbc='id', returnpage='adventure.php');"
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
                                        <th class="text-center">Adventure Image</th>
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
                <h4 class="modal-title text-white">Adventure</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Banner Image:</label>
                                <input type="file" class="form-control" name="image" accept="image/*" required>
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
    // Sanitize and validate inputs
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid() . '.' . $file_type;
    $upload_dir = "upload/adventure/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $target_file = $upload_dir . $new_file_name;
    if (move_uploaded_file($image_tmp, $target_file)) {
    } else {
        echo "<script>
                $(document).ready(function(){
                    toastr.error('Image Not Uploaded');
                    setTimeout(function(){
                        window.location.href = 'adventure.php';
                    }, 2000); // 2000 milliseconds = 2 seconds
                });
            </script>";
    }

    // Insert into folder table
    $sql = "INSERT INTO adven (image, status) VALUES ('$new_file_name', '1')";
    if ($conn->query($sql) === true) {
        echo "<script>
                $(document).ready(function(){
                    toastr.success('Folder inserted successfully');
                    setTimeout(function(){
                        window.location.href = 'adventure.php';
                    }, 2000); // 2000 milliseconds = 2 seconds
                });
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatebanner">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Adventure</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id3" id="id3">
                    <div class="form-group col-12">
                        <label for="image">Image:</label>
                        <input type="file" name="image" class="form-control" placeholder="image"
                            accept=".png, .jpg, .jpeg"
                            onchange="document.getElementById('image114').src = window.URL.createObjectURL(this.files[0])">
                        <img id="image114" src="dist/img/noimage1.png" alt="New image" width="50" height="50" />
                        <img src="#" id="image12" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">
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
    $image_name = $_FILES['image']['name'];

    // Update without changing the image
    $id = $_POST["id3"];
    $currentDateTime = date('Y-m-d H:i:s');
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid() . '.' . $file_type;
    $upload_dir = "upload/adventure/";

    // Retrieve the previous file name from the database
    $sql_previous_image = "SELECT image FROM adven WHERE id='$_POST[id3]'";
    $result = $conn->query($sql_previous_image);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $previous_image = $upload_dir . $row['image'];

        // Delete previous photo from the upload folder
        if (file_exists($previous_image)) {
            unlink($previous_image);
        }
    }
    $target_file = $upload_dir . $new_file_name;
    if (move_uploaded_file($image_tmp, $target_file)) {
        $sql1 = "UPDATE adven SET image='$new_file_name', update_at='$currentDateTime' WHERE id='$id'";
        if ($conn->query($sql1) == true) {
            echo "<script>
                        $(document).ready(function(){
                        toastr.success('Form submitted successfully');
                        setTimeout(function(){
                        window.location.href = 'adventure.php';
                        }, 2000); // 2000 milliseconds = 2 second
                        });
                    </script>";
        } else {
            echo $conn->error;
        }
        $conn->close();
    } else {
        echo "<script>alert('Image not uploaded');</script>";
    }

}
?>
<?php include 'common/footer.php'; ?>

</html>