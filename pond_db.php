<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
exit;
include('include/condb.php');
@$gender1 = ($_POST['gender1'] == 'true') ? $_POST['gender1'] : 'false';
@$gender2 = ($_POST['gender2'] == 'true') ? $_POST['gender2'] : 'false';
@$gender3 = ($_POST['gender3'] == 'true') ? $_POST['gender3'] : 'false';
@$gender4 = ($_POST['gender4'] == 'true') ? $_POST['gender4'] : 'false';
@$gender5 = ($_POST['gender5'] == 'true') ? $_POST['gender5'] : 'false';
@$gender6 = ($_POST['gender6'] == 'true') ? $_POST['gender6'] : 'false';
@$gender7 = ($_POST['gender7'] == 'true') ? $_POST['gender7'] : 'false';



$sql = "INSERT INTO db_mko3_4
        (
            gender1,
            gender2,
            gender3,
            gender4,
            gender5,
            gender6,
            gender7
            
  
        )
        VALUES
        (
        '$gender1',
        '$gender2',
        '$gender3',
        '$gender4',
        '$gender5',
        '$gender6',
        '$gender7'

        )";

$result = $condb->query($sql);


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='pond.php';";
    echo "</script>";
} else {
    echo $sql;
}
