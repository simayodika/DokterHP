<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_uas_tk_hp";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Koneksi Gagal";
    die();
}
