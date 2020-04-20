<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko6_3
        (
            id_mko,
            numchildr,
            balancer,
            wdropf,
            aonec,
            aoneed,
            bpluss,
            bos,
            bba,
            bbbplus,
            cplus,
            ccplusv,
            cav,
            conen,
            dplusn,
            donem,
            ddm,
            ddoner,
            ooo,
            ttt,
            yyy,
            uuu,
            cord,
            suca,
            dass,
            nahw,
            haw,
            mmml,
            jack
  
        )
        VALUES
        (
        '$_POST[id_mko]',
        '$_POST[numchildr]',
        '$_POST[balancer]',
        '$_POST[wdropf]',
        '$_POST[aonec]',
        '$_POST[aoneed]',
        '$_POST[bpluss]',
        '$_POST[bos]',
        '$_POST[bba]',
        '$_POST[bbbplus]',
        '$_POST[cplus]',
        '$_POST[ccplusv]',
        '$_POST[cav]',
        '$_POST[conen]',
        '$_POST[dplusn]',
        '$_POST[donem]',
        '$_POST[ddm]',
        '$_POST[ddoner]',
        '$_POST[ooo]',
        '$_POST[ttt]',
        '$_POST[yyy]',
        '$_POST[uuu]',
        '$_POST[cord]',
        '$_POST[suca]',
        '$_POST[dass]',
        '$_POST[nahw]',
        '$_POST[haw]',
        '$_POST[mmml]',
        '$_POST[jack]'
        )";

//$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
$result = $condb->query($sql);



if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko6_4.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
