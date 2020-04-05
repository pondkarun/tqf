<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko5_1
        (
            institutionname,
            campus,
            coursename,
            coursetype,
            responsibleteacher,
            semester,
            semester1

            
            

            )
        VALUES
        ('$_POST[institutionname]',
        ('$_POST[campus]',
        ('$_POST[coursename]',
        ('$_POST[coursetype]',
        ('$_POST[responsibleteacher]',
        ('$_POST[semester]',
        ('$_POST[semester1]'
        )";
        
        
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_2.php';";
    echo "</script>";
} 

?>