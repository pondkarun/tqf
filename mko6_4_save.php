<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko6_4
        (
            id_mko,
            coursename,
            coursetype,
            responsibleteacher
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[coursename]',
        '$_POST[coursetype]',        
        '$_POST[responsibleteacher]'
        )";

        //$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
        $result= $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko6_5.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
