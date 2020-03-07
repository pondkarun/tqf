<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

include('include/condb.php');


$check = "SELECT coursename FROM `db_mko3_1` WHERE coursename = '$_POST[coursename]'";
$result1 = mysqli_query($condb, $check) or die("Error in query: $sql" . mysqli_error());
$num = mysqli_num_rows($result1);


if ($num > 0) {

    echo "<script>";
    echo "alert(' เข้าไปเหอะ !!!!!!!');";
    echo "window.history.back();";
    echo "</script>";
} else { {

        $sql = "INSERT INTO db_mko3_1
        (
            institutionname,
            campus,
            coursename,
            credit,
            coursetype,
            responsibleteacher,
            semester,
            studiedfirst,
            studiedtogether,
            placeofstudy,
            dateofmaking
  
        )
        VALUES
        (
        
        '$_POST[institutionname]',
        '$_POST[campus]',
        '$_POST[coursename]',
        '$_POST[credit]',
        '$_POST[coursetype]',
        '$_POST[responsibleteacher]'
        '$_POST[semester]',
        '$_POST[studiedfirst]',
        '$_POST[studiedtogether]',
        '$_POST[placeofstudy]',
        '$_POST[dateofmaking]'
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