<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko5_2
        (
            viewport,
            description,
            author
            )
        VALUES
        ('$_POST[viewport]',
        ('$_POST[description]',
        ('$_POST[author]'
        )";
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_3.php';";
    echo "</script>";
} 

?>