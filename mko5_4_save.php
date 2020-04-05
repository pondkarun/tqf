<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko5_4
        (
            id,
            save,
            cancel
            )
        VALUES
        ('$_POST[id]',
        ('$_POST[save]',
        ('$_POST[cancel]'
        )";
            if ($result)
            $result= $condb->query($sql); 
            {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_5.php';";
    echo "</script>";
} 

?>