<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko3_1
        (
            id_mko,
            institutionname,
            campus,
            coursename,
            namecourse,
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
        '$_POST[id_mko]',
        '$_POST[institutionname]',
        '$_POST[campus]',
        '$_POST[coursename]',
        '$_POST[namecourse]',
        '$_POST[credit]',
        '$_POST[coursetype]',
        '$_POST[responsibleteacher]',
        '$_POST[semester]',
        '$_POST[studiedfirst]',
        '$_POST[studiedtogether]',
        '$_POST[placeofstudy]',
        '$_POST[dateofmaking]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_2.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
