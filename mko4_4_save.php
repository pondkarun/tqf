<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko4_4
        (
            courseObjectives1,
            courseObjectives2,
            courseObjectives3
            

            )
        VALUES
        ('$_POST[courseObjectives1]',
        ('$_POST[courseObjectives2]',
        ('$_POST[courseObjectives3]'
        )";
        
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_5.php';";
    echo "</script>";
} 

?>