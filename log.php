<?php

session_start();


$server = "localhost";
$usern = "root";
$password = "";
$database = "users";

$con = mysqli_connect($server, $usern, $password, $database);

mysqli_select_db($con, 'users');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from users where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location: welcome.php');
}
else
{
    echo "Wrong password or username!";
}
