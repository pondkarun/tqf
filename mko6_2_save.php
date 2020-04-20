<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko6_2
        (
            id_mko,
            mm,
            hh,
            gg,
            oo,         
            pp
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[mm]',
        '$_POST[hh]',
        '$_POST[gg]',
        '$_POST[oo]',
        '$_POST[pp]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko6_3.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
