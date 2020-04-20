<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko6_5
        (
            id_mko,
            bbbb,
            nnnn,
            cccc,
            ssss,
            qqqq
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[bbbb]',
        '$_POST[nnnn]',
        '$_POST[cccc]',
        '$_POST[ssss]',        
        '$_POST[qqqq]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko6_6.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
