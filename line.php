<?php
define('LINE_API', "https://notify-api.line.me/api/notify");


function notify_message($message, $token)
{
    $queryData = array('message' => $message);
    $queryData = http_build_query($queryData, '', '&');
    $headerOptions = array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                . "Authorization: Bearer " . $token . "\r\n"
                . "Content-Length: " . strlen($queryData) . "\r\n",
            'content' => $queryData
        ),
    );
    $context = stream_context_create($headerOptions);
    $result = @file_get_contents(LINE_API, false, $context);
    //$res = json_decode($result);
    //  return $res;
}
$date = date("Y/m/d h:i:s");
$str = $_GET['name'] . " ยังไม่ได้ส่ง " . $_GET['mko'] . " รหัสวิชา " . $_GET['Coursecode']; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
$token = trim("CffQsBtRaJFr80YikOIdmOGm5G7M7zSG6TvW7oQgkYC");
$res = notify_message($str, $token);
header('location:contact.php');
