<?php

include('include/condb.php');

        $sql = "INSERT INTO db_mko4_1
        (
            institutionname,
            campus,
            coursename,
            credit,
            coursetype,
            studiedfirst,
            responsibleteacher,
            semester,
            dateofmaking
  
        )
        VALUES
        (
        
        '$_POST[institutionname]',
        '$_POST[campus]',
        '$_POST[coursename]',
        '$_POST[credit]',
        '$_POST[coursetype]',
        '$_POST[responsibleteacher]',
        '$_POST[semester]',
        '$_POST[studiedfirst]',
        '$_POST[dateofmaking]'
        )";

        //$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
        $result= $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_2.php';";
    echo "</script>";
} 

?>