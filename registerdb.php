<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

include('include/condb.php');


$check = "SELECT username FROM `users` WHERE  username = '$_POST[username]'";
$result1 = mysqli_query($condb, $check) or die("Error in query: $sql" . mysqli_error());
$num = mysqli_num_rows($result1);


if ($num > 0) {

    echo "<script>";
    echo "alert(' มีผู้ใช้ username กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
} else {

    if ($_POST['password'] != $_POST['password_con']) {
        echo "<script>";
        echo "alert(' Password ไม่ตรงกัน !');";
        echo "window.history.back();";
        echo "</script>";
    } else {

        $sql = "INSERT INTO users
        (
       
            name,
            sername,
            username,
            password,
            faculty,
            email
  
        )
        VALUES
        (
        
        '$_POST[name]',
        '$_POST[sername]',
        '$_POST[username]',
        '$_POST[password]',
        '$_POST[faculty]',
        '$_POST[email]'
        
  
        )";

        $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
    }
}


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='index.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    //echo "alert('Error!');";
    echo "window.location='index.php';";
    echo "</script>";
}

?>