<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko4_7
        (
            courseObjectives1,
            courseObjectives2
            
            

            )
        VALUES
        ('$_POST[courseObjectives1]',
        ('$_POST[courseObjectives2]'
        )";
        
        
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_1.php';";
    echo "</script>";
} 

?>