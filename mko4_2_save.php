<php

include('include/condb.php');

        $sql = "INSERT INTO db_mko3_2
        (
            courseObjectives1,
            courseObjectives2
            )
        VALUES
        (
        '$_POST[courseObjectives1]',
        '$_POST[courseObjectives2]'
        )";

$result= $condb->query($sql);


if ($result) {
echo "<script type='text/javascript'>";
echo "alert('บันทึกข้อมูลสำเร็จ');";
echo "window.location='mko4_3.php';";
echo "</script>";
} 

?>