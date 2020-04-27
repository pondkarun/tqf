<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko6_1
        (
            id_mko,
            institutionnamee,
            campus,
            coursename,
            namesubject,           
            coursetype,
            cradit,
            responsibleteacher,
            semester
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[institutionnamee]',
        '$_POST[campus]',
        '$_POST[coursename]',
        '$_POST[namesubject]',       
        '$_POST[coursetype]',
        '$_POST[cradit]',
        '$_POST[responsibleteacher]',       
        '$_POST[semester]'
        )";

$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$last_id = mysqli_insert_id($condb);



for ($i = 0; $i < count($_POST["responsibleteacher"]); $i++) {;
    $responsibleteacher = $_POST["responsibleteacher"][$i];
    $sql = "INSERT INTO db_mko6_1_map_
        (
            id_db_mko6_1,
            responsibleteacher
        )
        VALUES
        (
        '$last_id',
        '$responsibleteacher'
        )";

    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
}




if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko6_2.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
