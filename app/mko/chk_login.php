<?php
session_start();
if (isset($_POST['username'])) {

    include("../../include/condb.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users  WHERE username= '" . $username . "' AND password= '" . $password . "' ";

    $result = mysqli_query($condb, $sql);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

        $_SESSION["login_id"] = $row["id"];
        $_SESSION["satatus"] = $row["satatus"];
        $_SESSION["login"] = "login";


        Header("Location: ../index/index.php");
    } else {
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
} else {


    Header("Location: login.php"); //user & password incorrect back to login again

}
