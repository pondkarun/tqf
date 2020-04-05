<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko3_6
        (
            wrapper,
            content-wrapper,
            content    
        )
        VALUES
        (
        '$_POST[wrapper]',
        '$_POST[content-wrapper]',
        '$_POST[content]'
        )";

        $result= $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_7.php';";
    echo "</script>";
} 

?>