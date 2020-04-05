<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko3_4
        (
            viewport,
            description,
            author
            )
        VALUES
        ('$_POST[viewport]',
        ('$_POST[description]'
        ('$_POST[author]',
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_5.php';";
    echo "</script>";
} 

?>