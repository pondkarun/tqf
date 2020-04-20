<?php

include('include/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$sql = "INSERT INTO db_mko4_5
        (
            id_mko,
            so,
            sosad,
            sa,
            qa,
            flow,
            ja
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[so]',
        '$_POST[sosad]',
        '$_POST[sa]',
        '$_POST[qa]',
        '$_POST[flow]',              
        '$_POST[ja]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_6.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
