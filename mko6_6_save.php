<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko6_6
        (
            coursename,
            coursetype,
            responsibleteacher
          )
        VALUES
        ('$_POST[coursename]',
        ('$_POST[coursetype]',
        ('$_POST[responsibleteacher]'
        )";
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko6_6.php';";
    echo "</script>";
} 

?>