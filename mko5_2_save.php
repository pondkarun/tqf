<?php

include('include/condb.php');

$sql = "INSERT INTO db_mko5_2
        (
            id_mko,
            week1,
            hrplan1,
            hrplann1,
            reason1,
            week2,
            hrplan2,
            hrplann2,
            reason2,
            week3,
            hrplan3,
            hrplann3,
            reason3,
            week4,
            hrplan4,
            hrplann4,
            reason4,
            week5,
            hrplan5,
            hrplann5,
            reason5,
            week6,
            hrplan6,
            hrplann6,
            reason6,
            week7,
            hrplan7,
            hrplann7,
            reason7,
            week9,
            hrplan9,
            hrplann9,
            reason9,
            week10,
            hrplan10,
            hrplann10,
            reason10,
            week11,
            hrplan11,
            hrplann11,
            reason11,
            week12,
            hrplan12,
            hrplann12,
            reason12,
            week13,
            hrplan13,
            hrplann13,
            reason13,
            week14,
            hrplan14,
            hrplann14,
            reason14,
            week15,
            hrplan15,
            hrplann15,
            reason15,
            week16,
            hrplan16,
            hrplann16,
            reason16,
            week17,
            hrplan17,
            hrplann17,
            reason17,
            coon1,
            coon2,
            coon3,
            coon4,
            car1,
            car2,
            radio1,
            car3,
            car4,
            radio2,
            car5,
            car6,
            radio3,
            car7,
            car8,
            radio4,
            car9,
            car10,
            radio5,
            car11,
            car12,
            radio6,
            car13,
            car14,
            radio7,
            car15,
            car16,
            radio8,
            car17,
            car18,
            radio9,
            car19,
            car20,
            radio10,
            car21,
            car22,
            radio11,
            car23,
            car24,
            radio12,
            car25,
            car26,
            car27,
            car28,
            radio14
            )


        VALUES


        ('$_POST[id_mko]',
        ('$_POST[week1]',
        ('$_POST[hrplan1]',
        ('$_POST[hrplann1]',
        ('$_POST[reason1]',
        ('$_POST[week2]',
        ('$_POST[hrplan2]',
        ('$_POST[hrplann2]',
        ('$_POST[reason2]',
        ('$_POST[week3]',
        ('$_POST[hrplan3]',
        ('$_POST[hrplann3]',
        ('$_POST[reason3]',
        ('$_POST[week4]',
        ('$_POST[hrplan4]',
        ('$_POST[hrplann4]',
        ('$_POST[reason4]',
        ('$_POST[week5]',
        ('$_POST[hrplan5]',
        ('$_POST[hrplann5]',
        ('$_POST[reason5]',
        ('$_POST[week6]',
        ('$_POST[hrplan6]',
        ('$_POST[hrplann6]',
        ('$_POST[reason6]',
        ('$_POST[week7]',
        ('$_POST[hrplan7]',
        ('$_POST[hrplann7]',
        ('$_POST[reason7]',
        ('$_POST[week9]',
        ('$_POST[hrplan9]',
        ('$_POST[hrplann9]',
        ('$_POST[reason9]',
        ('$_POST[week10]',
        ('$_POST[hrplan10]',
        ('$_POST[hrplann10]',
        ('$_POST[reason10]',
        ('$_POST[week11]',
        ('$_POST[hrplan11]',
        ('$_POST[hrplann11]',
        ('$_POST[reason11]',
        ('$_POST[week12]',
        ('$_POST[hrplan12]',
        ('$_POST[hrplann12]',
        ('$_POST[reason12]',
        ('$_POST[week13]',
        ('$_POST[hrplan13]',
        ('$_POST[hrplann13]',
        ('$_POST[reason13]',
        ('$_POST[week14]',
        ('$_POST[hrplan14]',
        ('$_POST[hrplann14]',
        ('$_POST[reason14]',
        ('$_POST[week15]',
        ('$_POST[hrplan15]',
        ('$_POST[hrplann15]',
        ('$_POST[reason15]',
        ('$_POST[week16]',
        ('$_POST[hrplan16]',
        ('$_POST[hrplann16]',
        ('$_POST[reason16]',
        ('$_POST[week17]',
        ('$_POST[hrplan17]',
        ('$_POST[hrplann17]',
        ('$_POST[reason17]',
        ('$_POST[coon1]',
        ('$_POST[coon2]',
        ('$_POST[coon3]',
        ('$_POST[coon4]',
        ('$_POST[car1]',
        ('$_POST[car2]',
        ('$_POST[radio1]',
        ('$_POST[car3]',
        ('$_POST[car4]',
        ('$_POST[radio2]',
        ('$_POST[car5]',
        ('$_POST[car6]',
        ('$_POST[radio3]',
        ('$_POST[car7]',
        ('$_POST[car8]',
        ('$_POST[radio4]',
        ('$_POST[car9]',
        ('$_POST[car10]',
        ('$_POST[radio5]',
        ('$_POST[car11]',
        ('$_POST[car12]',
        ('$_POST[radio6]',
        ('$_POST[car13]',
        ('$_POST[car14]',
        ('$_POST[radio7]',
        ('$_POST[car15]',
        ('$_POST[car16]',
        ('$_POST[radio8]',
        ('$_POST[car17]',
        ('$_POST[car18]',
        ('$_POST[radio9]',
        ('$_POST[car19]',
        ('$_POST[car20]',
        ('$_POST[radio10]',
        ('$_POST[car21]',
        ('$_POST[car22]',
        ('$_POST[radio11]',
        ('$_POST[car23]',
        ('$_POST[car24]',
        ('$_POST[radio12]',
        ('$_POST[car25]',
        ('$_POST[car26]',
        ('$_POST[radio13]',
        ('$_POST[car27]',
        ('$_POST[car28]',
       ('$_POST[radio14]'
        )";
if ($result)
    $result = $condb->query($sql); {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko5_3.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
}
