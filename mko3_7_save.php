<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko3_7
        (
            id_mko,
            Coursecode1,
            Coursecode2,
            Coursecode3,
            Coursecode4,
            Coursecode5	
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[Coursecode1]',
        '$_POST[Coursecode2]',
        '$_POST[Coursecode3]',
        '$_POST[Coursecode4]',
        '$_POST[Coursecode5]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_1.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
