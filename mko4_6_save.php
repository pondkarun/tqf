<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko4_6
        (
            story,
            courseObjectives1,
            courseObjectives2
            
            

            )
        VALUES
        ('$_POST[story]',
        ('$_POST[courseObjectives1]',
        ('$_POST[courseObjectives2]'
        )";
        
        
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_6.php';";
    echo "</script>";
} 

?>