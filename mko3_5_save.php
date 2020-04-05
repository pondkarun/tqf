<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko3_5
        (
            viewport,
            description,
            author
  
        )
        VALUES
        (
        '$_POST[viewport]',
        '$_POST[description]',
        '$_POST[author]'
        )";

        $result= $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_6.php';";
    echo "</script>";
} 

?>