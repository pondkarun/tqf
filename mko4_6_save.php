<?php

include('include/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$sql = "INSERT INTO db_mko4_6
        (
            id_mko,
            story,
            courseObjectives1,           
            courseObjectives2
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[story]',
        '$_POST[courseObjectives1]',             
        '$_POST[courseObjectives2]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_7.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
