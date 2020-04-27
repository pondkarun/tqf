<?php

include('include/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$sql = "INSERT INTO db_mko5_6
        (
            id_mko,
            io,
            io1, 
            io2,
            io3,
            io4,            
            io5
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[io]',
        '$_POST[io1]',
        '$_POST[io2]',
        '$_POST[io3]',
        '$_POST[io4]',             
        '$_POST[io5]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='listUser.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
