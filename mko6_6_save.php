<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko6_6
        (
            id_mko,
            wqe,
            qwee,
            ewq,
            azz,
            xfvvv,
            qqqwe,
            moi
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[wqe]',
        '$_POST[qwee]',
        '$_POST[ewq]',
        '$_POST[azz]',
        '$_POST[xfvvv]',
        '$_POST[qqqwe]',        
        '$_POST[moi]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='listUser.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
