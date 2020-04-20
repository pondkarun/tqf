<?php

include('include/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$sql = "INSERT INTO db_mko3_2
        (
            id_mko,
            courseObjectives1,
            courseObjectives2,
            courseObjectives3,
            courseObjectives4,
            courseObjectives5,
            coursedevelopment
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[courseObjectives1]',
        '$_POST[courseObjectives2]',
        '$_POST[courseObjectives3]',
        '$_POST[courseObjectives4]',
        '$_POST[courseObjectives5]',
        '$_POST[coursedevelopment]'
        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_3.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
