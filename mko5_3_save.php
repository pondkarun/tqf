<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko5_3
        (
            id_mko,
            coursename,
            coursetype,
            responsibleteacher,
            responsibleteacher1,
            ll,
            nn,
            qw,
            fram1,
            fram2,
            fram3,
            fram4,
            fram5,
            fram6,
            fram7,
            fram8,
            fram9,
            fram10,
            fram11,
            fram12,
            fram13,
            fram14,
            fram15,
            fram16,
            fram17,
            fram18,
            fram19,
            fram20,
            fram21,
            fram22,
            fram23,
            fram24,
            fram25,
            fram26,
            awe,
            awe1,
            awe2,
            awe3,
            awe4,
            awe5,
            awe6
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[coursename]',
        '$_POST[coursetype]',
        '$_POST[responsibleteacher]',
        '$_POST[responsibleteacher1]',
        '$_POST[ll]',
        '$_POST[nn]',
        '$_POST[qw]',
        '$_POST[fram1]',
        '$_POST[fram2]',
        '$_POST[fram3]',
        '$_POST[fram4]',
        '$_POST[fram5]',
        '$_POST[fram6]',
        '$_POST[fram7]',
        '$_POST[fram8]',
        '$_POST[fram9]',
        '$_POST[fram10]',
        '$_POST[fram11]',
        '$_POST[fram12]',
        '$_POST[fram13]',
        '$_POST[fram14]',
        '$_POST[fram15]',
        '$_POST[fram16]',
        '$_POST[fram17]',
        '$_POST[fram18]',
        '$_POST[fram19]',
        '$_POST[fram20]',
        '$_POST[fram21]',
        '$_POST[fram22]',
        '$_POST[fram23]',
        '$_POST[fram24]',
        '$_POST[fram25]',
        '$_POST[fram26]',
        '$_POST[awe]',
        '$_POST[awe1]',
        '$_POST[awe2]',
        '$_POST[awe3]',
        '$_POST[awe4]',
        '$_POST[awe5]',
        '$_POST[awe6]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_4.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
