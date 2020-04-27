<?php

include('include/condb.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


// exit;
$sql = "INSERT INTO db_mko5_1
        (
            id_mko,
            institutionname,
            campus,
            coursename,
            cradit,
            coursetype,
            semester1,            
            asd,
            aii
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[institutionname]',
        '$_POST[campus]',
        '$_POST[coursename]',
        '$_POST[cradit]',
        '$_POST[coursetype]',
        '$_POST[semester1]',
        '$_POST[asd]',
        '$_POST[aii]'
        )";

$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$last_id = mysqli_insert_id($condb);



for ($i = 0; $i < count($_POST["semester"]); $i++) {;
    $semester = $_POST["semester"][$i];
    $sql = "INSERT INTO db_mko5_1_map_t
        (
            id_db_mko5_1,
            semester
        )
        VALUES
        (
        '$last_id',
        '$semester'
        )";

    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
}



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_2.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
