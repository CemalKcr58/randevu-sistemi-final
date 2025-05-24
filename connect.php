<?php
$con = new mysqli("localhost", "root", "", "sistemodev");
$con->set_charset("utf8");

if ($con->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $con->connect_error);
}
?>
