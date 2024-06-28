<?php 
$server = "localhost";
$schema = "litw";
$user = "root";
$pwd = "root";

$connection = mysqli_connect($server, $user, $pwd, $schema);

if (!$connection) {
  die("Error connection db ...");
};

//print_r($connection);
?>