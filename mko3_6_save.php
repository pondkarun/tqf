<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko3_6
        (
            id_mko,
            documents,
            documentsa,
            documentsb	
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[documents]',
        '$_POST[documentsa]',
        '$_POST[documentsb]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_7.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
