<?php
session_start();
include '../config.php';
$username_update=$_POST['username_update'];
$password_update=$_POST['password_update'];
$avatar_update=$_POST['avatar_update'];


    
    
$sql='';
if($avatar_update==''){
    
    $sql="update `taikhoan` set `password`='$password_update' where `username`='$username_update'";
    $avatar_old = $_SESSION['user'][0]['avatar'];
    // unset($_SESSION['user']);
    // $session_array=array(
    //     'username'=>$username_update,
    //     'avatar'=>$avatar_old,
    //     'password'=>$password_update
    // );
    $_SESSION['user'][0]['password']=$password_update;
    
}else{
    $sql="update `taikhoan` set `password`='$password_update',`avatar`='$avatar_update' where `username`='$username_update'";
    // unset($_SESSION['user']);
    // $session_array=array(
    //     'username'=>$username_update,
    //     'avatar'=>$avatar_update,
    //     'password'=>$password_update
    // );
    $_SESSION['user'][0]['password']=$password_update;
    $_SESSION['user'][0]['avatar']=$avatar_update;
}
mysqli_query($conn,$sql);
 echo $sql;
 
    //$_SESSION['user'][]=$session_array;
 
?>