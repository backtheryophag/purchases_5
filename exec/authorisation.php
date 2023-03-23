<?php
include './connect.php';
if(!is_null($_SESSION['user'])){
    header('location: ../purchases_list.php');
}else{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = md5($password);
    $query = "select * from users where login = '$login' and password = '$password'";
    $exist = mysqli_fetch_row(mysqli_query($link, $query));
    if(!is_null($exist)){
        $_SESSION['user'] = $login;
    }else{
        $_SESSION['user']=null;
        header('location: ../purchases_list.php');
    }
}


?>