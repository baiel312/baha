<?php
session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $row = $result -> fetch_row();
    if (password_verify($pass,$row[1])) {
        $_SESSION['username'] = $name;
        header('location:home.php');
    } else{
        header('location:index2.php?error=true');
    }
}else{
    header('location:index.php');
}

?>