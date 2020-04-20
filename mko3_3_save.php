<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko3_3
        (
            id_mko,
            jame1,
            jame2,
            jame3,
            jame4,
            jame5,
            jame6
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[jame1]',
        '$_POST[jame2]',
        '$_POST[jame3]',
        '$_POST[jame4]',
        '$_POST[jame5]',
        '$_POST[jame6]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_4.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
