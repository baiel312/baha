<?php
session_start();
header('location:index.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Usename Already Taken";
}else{
    $reg= " insert into usertable(name , password) values ('$name' , '$hashed_password')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>