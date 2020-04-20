<?php

include('include/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$sql = "INSERT INTO db_mko4_7
        (
            id_mko,
            com,           
            comm
  
        )
        VALUES
        (
        '$_POST[id_mko]', 
        '$_POST[com]',             
        '$_POST[comm]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_1.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
