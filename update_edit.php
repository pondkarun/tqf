<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$id = $_POST['id'];
$Coursecode = $_POST['Coursecode'];
$Thaisubjectname = $_POST['Thaisubjectname'];
$Englishsubjectname = $_POST['Englishsubjectname'];
$credit = $_POST['credit'];
$Curriculumandcoursetype = $_POST['Curriculumandcoursetype'];
$nameteacher = $_POST['nameteacher'];
$year = $_POST['year'];
$semester = $_POST['semester'];
$classroom = $_POST['classroom'];
$examdate = $_POST['examdate'];
$group_class = $_POST['group_class'];


include('include/condb.php');

$sql = "UPDATE `dbcourse_add` SET 
        `Coursecode` = '$Coursecode',
        `Thaisubjectname` = '$Thaisubjectname',
        `Englishsubjectname` = '$Englishsubjectname',
        `credit` = '$credit',
        `Curriculumandcoursetype` = '$Curriculumandcoursetype',
        `nameteacher` = '$nameteacher',
        `year` = '$year',
        `semester` = '$semester',
        `classroom` = '$classroom',
        `examdate` = '$examdate',
        `group_class` = '$group_class'
        WHERE id = '$id' ";
$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());


mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='listUser.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    // echo "alert('Error!');";
    echo "window.location='updates.php';";
    echo "</script>";
}
