<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

include('include/condb.php');
@$gender1 = ($_POST['gender1'] == 'true') ? $_POST['gender1'] : 'false';
@$gender2 = ($_POST['gender2'] == 'true') ? $_POST['gender2'] : 'false';
@$gender3 = ($_POST['gender3'] == 'true') ? $_POST['gender3'] : 'false';
@$gender4 = ($_POST['gender4'] == 'true') ? $_POST['gender4'] : 'false';
@$gender5 = ($_POST['gender5'] == 'true') ? $_POST['gender5'] : 'false';
@$gender6 = ($_POST['gender6'] == 'true') ? $_POST['gender6'] : 'false';
@$gender7 = ($_POST['gender7'] == 'true') ? $_POST['gender7'] : 'false';
@$gender8 = ($_POST['gender8'] == 'true') ? $_POST['gender8'] : 'false';
@$gender9 = ($_POST['gender9'] == 'true') ? $_POST['gender9'] : 'false';
@$gender10 = ($_POST['gender10'] == 'true') ? $_POST['gender10'] : 'false';
@$gender11 = ($_POST['gender11'] == 'true') ? $_POST['gender11'] : 'false';
@$gender12 = ($_POST['gender12'] == 'true') ? $_POST['gender12'] : 'false';
@$gender13 = ($_POST['gender13'] == 'true') ? $_POST['gender13'] : 'false';
@$gender14 = ($_POST['gender14'] == 'true') ? $_POST['gender14'] : 'false';
@$gender15 = ($_POST['gender15'] == 'true') ? $_POST['gender15'] : 'false';
@$gender16 = ($_POST['gender16'] == 'true') ? $_POST['gender16'] : 'false';
@$gender17 = ($_POST['gender17'] == 'true') ? $_POST['gender17'] : 'false';
@$gender18 = ($_POST['gender18'] == 'true') ? $_POST['gender18'] : 'false';
@$gender19 = ($_POST['gender19'] == 'true') ? $_POST['gender19'] : 'false';
@$gender20 = ($_POST['gender20'] == 'true') ? $_POST['gender20'] : 'false';
@$gender21 = ($_POST['gender21'] == 'true') ? $_POST['gender21'] : 'false';
@$gender22 = ($_POST['gender22'] == 'true') ? $_POST['gender22'] : 'false';
@$gender23 = ($_POST['gender23'] == 'true') ? $_POST['gender23'] : 'false';
@$gender24 = ($_POST['gender24'] == 'true') ? $_POST['gender24'] : 'false';
@$gender25 = ($_POST['gender25'] == 'true') ? $_POST['gender25'] : 'false';
@$gender26 = ($_POST['gender26'] == 'true') ? $_POST['gender26'] : 'false';
@$gender27 = ($_POST['gender27'] == 'true') ? $_POST['gender27'] : 'false';
@$gender28 = ($_POST['gender28'] == 'true') ? $_POST['gender28'] : 'false';


$id_mko = $_POST['id_mko'];





$sql = "INSERT INTO db_mko4_3
        (
            id_mko,
            gender1,
            gender2,
            gender3,
            gender4,
            gender5,
            gender6,
            gender7,
            gender8,
            gender9,
            gender10,
            gender11,
            gender12,
            gender13,
            gender14,
            gender15,
            gender16,
            gender17,
            gender18,
            gender19,
            gender20,
            gender21,
            gender22,
            gender23,
            gender24,
            gender25,
            gender26,
            gender27,
            gender28
            
  
        )
        VALUES
        (
        '$id_mko',
        '$gender1',
        '$gender2',
        '$gender3',
        '$gender4',
        '$gender5',
        '$gender6',
        '$gender7',
        '$gender8',
        '$gender9',
        '$gender10',
        '$gender11',
        '$gender12',
        '$gender13',
        '$gender14',
        '$gender15',
        '$gender16',
        '$gender17',
        '$gender18',
        '$gender19',
        '$gender20',
        '$gender21',
        '$gender22',
        '$gender23',
        '$gender24',
        '$gender25',
        '$gender26',
        '$gender27',        
        '$gender28'

        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko4_4.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
