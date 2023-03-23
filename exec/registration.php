<?php
include './connect.php';
if($_SESSION['user']){
    
}
$query = 'select login from users';
$login = $_POST['login'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirm_password'];
$email = $_POST['email'];
$users = mysqli_fetch_all(mysqli_query($link, "select login from users"));
$exist = false;
$msg='удача!';
foreach ($users as $key => $value){
    if ($value[0] == $login){
        $exist = true;
    }
}
if($exist){
    echo 'exist';
    die;
}
if (strlen($password)<6){
    $msg = 'Пароль менее 6 символов';
    echo $msg;
    die;
}

if ($password != $confirmpassword){
    $msg = 'Пароли не совпадают';
    echo $msg;
    die();
}
$password = md5($password);
$query = "insert into users (login, password, email) values ('$login', '$password', '$email' )";
mysqli_query($link, $query);
$_SESSION['user'] = $login;
header('location: ../src/authorisation_form.php');



?>