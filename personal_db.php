<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

$id = $_POST['id'];
$name = $_POST['name'];
$sername = $_POST['sername'];
$faculty = $_POST['faculty'];
$tokenline = $_POST['tokenline'];


include('include/condb.php');

$sql = "UPDATE `users` SET 
        `name` = '$name',
        `sername` = '$sername',
        `faculty` = '$faculty',
        `tokenline` = '$tokenline'

        WHERE id = '$id' ";
$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());


mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('แก้ไขสำเร็จ');";
    echo "window.location='index.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    // echo "alert('Error!');";
    echo "window.location='updates.php';";
    echo "</script>";
}
