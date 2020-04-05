<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko3_7
        (
            Coursecode1,
            Coursecode2,
            Coursecode3,
            Coursecode4,
            Coursecode5,
        )
        VALUES
        (
        '$_POST[Coursecode1]',
        '$_POST[Coursecode2]',
        '$_POST[Coursecode3]',
        '$_POST[Coursecode4]',
        '$_POST[Coursecode5]'
        )";

        $result= $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_1.php';";
    echo "</script>";
} 

?>