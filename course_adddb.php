<meta charset="utf-8">
<?php


include('include/condb.php');

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;

$check = "SELECT Coursecode FROM `dbcourse_add` WHERE Coursecode = '$_POST[Coursecode]'";
$result1 = mysqli_query($condb, $check) or die("Error in query: $sql" . mysqli_error());
$num = mysqli_num_rows($result1);


if ($num > 0) {

    echo "<script>";
    echo "alert(' เพิ่มรายวิชาที่เปิดาสอนสำเร็จ !!!!!!!');";
    echo "window.location='listUser.php';";
    echo "</script>";
} else { {

        $sql = "INSERT INTO dbcourse_add
        (
       
            Coursecode,
            id_user,
            Thaisubjectname,
            Englishsubjectname,
            credit, 
            year,
            semester,
            Curriculumandcoursetype,
            nameteacher,
            classroom,
            examdate,
            group_class
          
  
        )
        VALUES
        (
        
        '$_POST[Coursecode]',
        '$_SESSION[login_id]',
        '$_POST[Thaisubjectname]',
        '$_POST[Englishsubjectname]',
        '$_POST[credit]', 
        '$_POST[year]',
        '$_POST[semester]',
        '$_POST[Curriculumandcoursetype]',
        '$_POST[nameteacher]',
        '$_POST[classroom]',
        '$_POST[examdate]',
        '$_POST[group]'
       
        
  
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