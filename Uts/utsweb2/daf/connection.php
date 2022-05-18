<?php

session_start();
$host = "host = ec2-54-86-224-85.compute-1.amazonaws.com";
$port = "port = 5432";
$dbname = "dbname = dsvsv0vh1it7e";
$username = "user = rtioesazhgwnnf";
$password = "password = 0151392077fe9171b1352109cf9395f817f59c4fb69e79db82b049f3f1d6c288";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>