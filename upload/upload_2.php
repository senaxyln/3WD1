<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];
    //$destination_path = getcwd().DIRECTORY_SEPARATOR;
    $file_move = __DIR__ . '/file/' . basename($file_name);
    move_uploaded_file($file_tmp_name,  $file_move);
}
?>

<html>
<body>

<?php if($_SERVER['REQUEST_METHOD'] == "POST"){ ?>
    <h1>Upload File</h1>
    <table>
        <tr>
            <td>File Name</td>
            <td><?= $file_name ?></td>
        </tr>
        <tr>
            <td>File Type</td>
            <td><?= $file_type ?></td>
        </tr>
        <tr>
            <td>File Size</td>
            <td><?= $file_size ?></td>
        </tr>
        <tr>
            <td>File Tmp Name</td>
            <td><?= $file_tmp_name ?></td>
        </tr>
        <tr>
            <td>File Error</td>
            <td><?= $file_error ?></td>
        </tr>
        <tr>
            <td>File move</td>
            <td><?= $file_move ?></td>
        </tr>
        <tr>
            <td>gambar</td>
            <td><img src='file/<?= $file_name ?>'   alt="gambar"></td>
        </tr>
    </table>
<?php } ?>

<h1>Form Upload</h1>
<form action="7.php" method="post" enctype="multipart/form-data">
    <label> File :
        <input type="file" name="upload_file">
    </label>
    <input type="submit" value="Upload">
</form>
</body>
</html>