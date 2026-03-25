<?php
include 'conn.php';

if (isset($_GET['delete'], $_GET['tb'], $_GET['returnpage'], $_GET['tbc'])) {

    $id = mysqli_real_escape_string($conn, $_GET['delete']);
    $table = mysqli_real_escape_string($conn, $_GET['tb']);
    $returnPage = $_GET['returnpage'];
    $tableColumn = mysqli_real_escape_string($conn, $_GET['tbc']);

    // Image columns list
    $imageColumns = [
        'banner_image',
        'image',
        'pdf_upload',
        'category_image',
        'product_image1',
        'product_image2',
        'product_image3',
        'product_image4',
        'pdf',
        'image1',
        'image2',
        'image3',
        'image4'
    ];

    // Folder paths
    $paths = [
        "banner" => "upload/banner",
        "folder" => "upload/catalogue/image",
        "pdfupload" => "upload/catalogue/pdf",
        "product" => "upload/product",
        "service" => "upload/service"
    ];

    $imagePath = isset($paths[$table]) ? $paths[$table] : 'upload';

    // 🔹 Delete images first
    foreach ($imageColumns as $imageColumn) {

        $checkColumnSql = "SHOW COLUMNS FROM `$table` LIKE '$imageColumn'";
        $columnResult = mysqli_query($conn, $checkColumnSql);

        if ($columnResult && mysqli_num_rows($columnResult) > 0) {

            $sql = "SELECT `$imageColumn` FROM `$table` WHERE `$tableColumn` = '$id'";
            $result = mysqli_query($conn, $sql);

            if ($result && $row = mysqli_fetch_assoc($result)) {

                $fileName = $row[$imageColumn];

                if (!empty($fileName)) {
                    $fullPath = $imagePath . '/' . $fileName;

                    if (file_exists($fullPath)) {
                        unlink($fullPath); // delete file
                    }
                }
            }
        }
    }

    // 🔹 Now delete record
    $deleteSql = "DELETE FROM `$table` WHERE `$tableColumn` = '$id'";

    if ($conn->query($deleteSql) === TRUE) {
        header("Location: $returnPage");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

} else {
    echo "Missing required parameters.";
}
?>