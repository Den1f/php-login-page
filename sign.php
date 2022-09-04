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

$s = "select * from users where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Username Taken";
}
else
{
    $reg = "insert into users(username, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Account Created";
    header('location: login.php');
}
