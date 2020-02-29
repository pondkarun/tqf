<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

include('include/condb.php');


$check = "SELECT Coursecode FROM `dbcourse_add` WHERE Coursecode = '$_POST[Coursecode]'";
$result1 = mysqli_query($condb, $check) or die("Error in query: $sql" . mysqli_error());
$num = mysqli_num_rows($result1);


if ($num > 0) {

    echo "<script>";
    echo "alert(' เข้าไปเหอะ !!!!!!!');";
    echo "window.history.back();";
    echo "</script>";
} else { {

        $sql = "INSERT INTO dbcourse_add
        (
       
            Coursecode,
            Thaisubjectname,
            Englishsubjectname,
            credit,
            Curriculumandcoursetype,
            nameteacher
  
        )
        VALUES
        (
        
        '$_POST[Coursecode]',
        '$_POST[Thaisubjectname]',
        '$_POST[Englishsubjectname]',
        '$_POST[credit]',
        '$_POST[Curriculumandcoursetype]',
        '$_POST[nameteacher]'
        
  
        )";

        $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
    }
}


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มรายวิชาสำเร็จ');";
    echo "window.location='listUser.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    //echo "alert('Error!');";
    echo "window.location='listUser.php';";
    echo "</script>";
}

?>