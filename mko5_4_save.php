<?php

include('include/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$sql = "INSERT INTO db_mko5_4
        (
            id_mko,
            you,
            caa, 
            gam,            
            gam1
  
        )
        VALUES
        (
        '$_POST[id_mko]', 
        '$_POST[you]',
        '$_POST[caa]',
        '$_POST[gam]',             
        '$_POST[gam1]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_5.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
