<?php


if (!@$_SESSION['login_id']) {
    echo "<script type='text/javascript'>";
    echo "alert('กรุณาเข้าสู่ระบบ');";
    echo "window.location='index.php';";
    echo "</script>";
    exit;
}
