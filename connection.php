<?php
$serverName = "thongtin";
$connectionOptions = array(
    "Database" => "YourDatabaseName",
    "Uid" => "your_username",
    "PWD" => "your_password"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>
