<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$id = $_POST['id'];
$course = $_POST['course'];
$namesub = $_POST['namesub'];
$courseObjectives = $_POST['courseObjectives'];
$cradit = $_POST['cradit'];

// exit;
include('include/condb.php');


$sql = "UPDATE `dbcourseteacher` SET 
        `course` = '$course',
        `namesub` = '$namesub',
        `courseObjectives` = '$courseObjectives',
        `cradit` = '$cradit'


        WHERE id = '$id' ";
$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());

// exit;
mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('แก้ไขช้อมูลสำเร็จ');";
    echo "window.location='listUsercoure.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    // echo "alert('Error!');";
    echo "window.location='listUsercoure.php';";
    echo "</script>";
}
