<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "be19_cr4_taulanthoxha_biglibrary";

$connect = mysqli_connect($hostname, $username, $password, $dbname);

if(!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
