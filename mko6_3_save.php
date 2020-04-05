<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko6_3
        (
            institutionname,
            campus,
            coursename,
            coursetype,
            responsibleteacher
            

          )
        VALUES
        ('$_POST[institutionname]',
        ('$_POST[campus]',
        ('$_POST[coursename]',
        ('$_POST[coursetype]',
        ('$_POST[responsibleteacher]'
        
        )";
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko6_4.php';";
    echo "</script>";
} 

?>