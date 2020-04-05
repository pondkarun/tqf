<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko5_2
        (
            coursename,
            coursetype,
            responsibleteacher,
            responsibleteacher1
            )
        VALUES
        ('$_POST[coursename]',
        ('$_POST[coursetype]',
        ('$_POST[responsibleteacher]',
        ('$_POST[responsibleteacher1]'
        )";
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_4.php';";
    echo "</script>";
} 

?>