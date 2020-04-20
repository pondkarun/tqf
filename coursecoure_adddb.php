<meta charset="utf-8">
<?php


include('include/condb.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

$check = "SELECT id FROM `dbcourseteacher` WHERE course = '$_POST[course]'";
$result1 = mysqli_query($condb, $check) or die("Error in query: $sql" . mysqli_error());
$num = mysqli_num_rows($result1);


if ($num > 0) {

    echo "<script type='text/javascript'>";
    echo "alert('รหัสรายวิชาซ้ำ');";
    echo "window.location='coursecoure_add.php';";
    echo "</script>";
} else {

    $sql = "INSERT INTO dbcourseteacher
        (
       
            course,
            namesub,
            courseObjectives,
            cradit
          
  
        )
        VALUES
        (
        
        '$_POST[course]',
        '$_POST[namesub]',
        '$_POST[courseObjectives]',
        '$_POST[cradit]'
       
        
  
        )";

    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
}


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มรายวิชาสำเร็จ');";
    echo "window.location='listUsercoure.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    //echo "alert('Error!');";
    echo "window.location='listUsercoure.php';";
    echo "</script>";
}

?>