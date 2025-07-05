<?php
$host = getenv('MYSQL_HOST'); "mainline.proxy.rlwy.net"
$user = getenv('MYSQL_USER'); "postgres"
$pass = getenv('MYSQL_PASSWORD'); "ChaDAAzAkWxPInGkXcpZkibxsNOtSMra"
$db   = getenv('MYSQL_DATABASE'); "railway"
$port = getenv('MYSQL_PORT') ?: 52864;

$conn = pg_connect("host=$host, user=$user, password=$pass, dbname=$db, port=$port);
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
