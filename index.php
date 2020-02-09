<meta charset="utf-8">
<?php
session_start();
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;
$login = $_SESSION["login"];
if ($login == "login") {
    Header("Location: ./index2.php");
} else {
    Header("Location: app/index");
}
