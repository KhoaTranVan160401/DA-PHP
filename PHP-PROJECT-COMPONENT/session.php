<?php
     session_start();
    $username=$_POST['username_update'];
    $password=$_POST['password_update'];
    $avatar=$_POST['avatar_update'];
    unset($_SESSION['user']);
    $session_array=array(
        'username'=>$username,
        'avatar'=>$password,
        'password'=>$avatar
    );
    $_SESSION['user'][]=$session_array;
    
    //print_r($_SESSION['user'])
    

?>