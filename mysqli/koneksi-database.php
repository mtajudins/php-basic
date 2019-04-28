<?php
/*
jika masih bermain di server local atau localhost maka hostname diset localhost atau ip 127.0.0.1
jika sudah di hostingkan sesuaikan dengan nama domain hostingnya misal http://udin.com
*/
$hostname = "localhost"; 
//untuk username databasenya default root
$username = "root";
//untuk password databasenya
$password = "";
//nama database yang digunakan
$database = "test";

$connect = mysqli_connect("");
?>