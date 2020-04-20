<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko4_4
        (
            id_mko,
            a,
            aa,
            aaa,
            b,
            bb,
            bbb,
            c,
            cc,
            ccc,
            d,
            dd,
            ddd,
            e	
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[a]',
        '$_POST[aa]',
        '$_POST[aaa]',
        '$_POST[b]',
        '$_POST[bb]',
        '$_POST[bbb]',
        '$_POST[c]',
        '$_POST[cc]',
        '$_POST[ccc]',
        '$_POST[d]',
        '$_POST[dd]',
        '$_POST[ddd]',
        '$_POST[e]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_5.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
