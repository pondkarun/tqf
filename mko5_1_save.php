<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko5_1
        (
            id_mko,
            institutionname,
            campus,
            coursename,
            cradit,
            coursetype,
            responsibleteacher,
            semester,
            semester1,            
            asd
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[institutionname]',
        '$_POST[campus]',
        '$_POST[coursename]',
        '$_POST[cradit]',
        '$_POST[coursetype]',
        '$_POST[responsibleteacher]',
        '$_POST[semester]',
        '$_POST[semester1]',
        '$_POST[asd]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_2.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
