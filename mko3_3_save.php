<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko3_3
        (
            coursedescription,
            discourse,
            supplementary,
            fieldwork,
            selfstudy,
            numberweek
  
        )
        VALUES
        (
        '$_POST[coursedescription]',
        '$_POST[discourse]',
        '$_POST[supplementary]',
        '$_POST[fieldwork]',
        '$_POST[selfstudy]',
        '$_POST[numberweek]'
        )";

        $result= $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_4.php';";
    echo "</script>";
} 

?>