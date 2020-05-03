<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko4_1
        (
            id_mko,
            titutionname,
            cam,
            coursee,
            namecouree,
            credit,
            coursetype,
            responsibleteacher,
            semester,
            dateofmaking	
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[titutionname]',
        '$_POST[cam]',
        '$_POST[coursee]',
        '$_POST[namecouree]',
        '$_POST[credit]',
        '$_POST[coursetype]',
        '$_POST[responsibleteacher]',
        '$_POST[semester]',
        '$_POST[dateofmaking]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_2.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
