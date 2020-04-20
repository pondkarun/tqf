<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

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
@$gender29 = ($_POST['gender29'] == 'true') ? $_POST['gender29'] : 'false';
@$gender30 = ($_POST['gender30'] == 'true') ? $_POST['gender30'] : 'false';
@$gender31 = ($_POST['gender31'] == 'true') ? $_POST['gender31'] : 'false';
@$gender32 = ($_POST['gender32'] == 'true') ? $_POST['gender32'] : 'false';
@$gender33 = ($_POST['gender33'] == 'true') ? $_POST['gender33'] : 'false';
@$gender34 = ($_POST['gender34'] == 'true') ? $_POST['gender34'] : 'false';
@$gender35 = ($_POST['gender35'] == 'true') ? $_POST['gender35'] : 'false';
@$gender36 = ($_POST['gender36'] == 'true') ? $_POST['gender36'] : 'false';
@$gender37 = ($_POST['gender37'] == 'true') ? $_POST['gender37'] : 'false';
@$gender38 = ($_POST['gender38'] == 'true') ? $_POST['gender38'] : 'false';
@$gender39 = ($_POST['gender39'] == 'true') ? $_POST['gender39'] : 'false';
@$gender40 = ($_POST['gender40'] == 'true') ? $_POST['gender40'] : 'false';
@$gender41 = ($_POST['gender41'] == 'true') ? $_POST['gender41'] : 'false';
@$gender42 = ($_POST['gender42'] == 'true') ? $_POST['gender42'] : 'false';
@$gender43 = ($_POST['gender43'] == 'true') ? $_POST['gender43'] : 'false';
@$gender44 = ($_POST['gender44'] == 'true') ? $_POST['gender44'] : 'false';
@$gender45 = ($_POST['gender45'] == 'true') ? $_POST['gender45'] : 'false';
@$gender46 = ($_POST['gender46'] == 'true') ? $_POST['gender46'] : 'false';
@$gender47 = ($_POST['gender47'] == 'true') ? $_POST['gender47'] : 'false';
@$gender48 = ($_POST['gender48'] == 'true') ? $_POST['gender48'] : 'false';
@$gender49 = ($_POST['gender49'] == 'true') ? $_POST['gender49'] : 'false';
@$gender50 = ($_POST['gender50'] == 'true') ? $_POST['gender50'] : 'false';
@$gender51 = ($_POST['gender51'] == 'true') ? $_POST['gender51'] : 'false';
@$gender52 = ($_POST['gender52'] == 'true') ? $_POST['gender52'] : 'false';
@$gender53 = ($_POST['gender53'] == 'true') ? $_POST['gender53'] : 'false';
@$gender54 = ($_POST['gender54'] == 'true') ? $_POST['gender54'] : 'false';
@$gender55 = ($_POST['gender55'] == 'true') ? $_POST['gender55'] : 'false';
@$gender56 = ($_POST['gender56'] == 'true') ? $_POST['gender56'] : 'false';
@$gender57 = ($_POST['gender57'] == 'true') ? $_POST['gender57'] : 'false';
@$gender58 = ($_POST['gender58'] == 'true') ? $_POST['gender58'] : 'false';
@$gender59 = ($_POST['gender59'] == 'true') ? $_POST['gender59'] : 'false';
@$gender60 = ($_POST['gender60'] == 'true') ? $_POST['gender60'] : 'false';
@$gender61 = ($_POST['gender61'] == 'true') ? $_POST['gender61'] : 'false';
@$gender62 = ($_POST['gender62'] == 'true') ? $_POST['gender62'] : 'false';
@$gender63 = ($_POST['gender63'] == 'true') ? $_POST['gender63'] : 'false';
@$gender64 = ($_POST['gender64'] == 'true') ? $_POST['gender64'] : 'false';
@$gender65 = ($_POST['gender65'] == 'true') ? $_POST['gender65'] : 'false';

$id_mko = $_POST['id_mko'];





$sql = "INSERT INTO db_mko3_4
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
            gender28,
            gender29,
            gender30,
            gender31,
            gender32,
            gender33,
            gender34,
            gender35,
            gender36,
            gender37,
            gender38,
            gender39,
            gender40,
            gender41,
            gender42,
            gender43,
            gender44,
            gender45,
            gender46,
            gender47,
            gender48,
            gender49,
            gender50,
            gender51,
            gender52,
            gender53,
            gender54,
            gender55,
            gender56,
            gender57,
            gender58,
            gender59,
            gender60,
            gender61,
            gender62,
            gender63,
            gender64,
            gender65
            
  
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
        '$gender28',
        '$gender29',
        '$gender30',
        '$gender31',
        '$gender32',
        '$gender33',
        '$gender34',
        '$gender35',
        '$gender36',
        '$gender37',
        '$gender38',
        '$gender39',
        '$gender40',
        '$gender41',
        '$gender42',
        '$gender43',
        '$gender44',
        '$gender45',
        '$gender46',
        '$gender47',
        '$gender48',
        '$gender49',
        '$gender50',
        '$gender51',
        '$gender52',
        '$gender53',
        '$gender54',
        '$gender55',
        '$gender56',
        '$gender57',
        '$gender58',
        '$gender59',
        '$gender60',
        '$gender61',
        '$gender62',
        '$gender63',
        '$gender64',
        '$gender65'

        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='mko3_5.php?id_mko=$_POST[id_mko]';";
    echo "</script>";
} else {
    echo $sql;
}
