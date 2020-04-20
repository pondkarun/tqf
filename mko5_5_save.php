<?php

include('include/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$sql = "INSERT INTO db_mko5_5
        (
            id_mko,
            tay,
            taa, 
            yab,
            yty,            
            tyt
  
        )
        VALUES
        (
        '$_POST[id_mko]',   
        '$_POST[tay]',
        '$_POST[taa]',
        '$_POST[yab]',
        '$_POST[yty]',             
        '$_POST[tyt]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_6.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
