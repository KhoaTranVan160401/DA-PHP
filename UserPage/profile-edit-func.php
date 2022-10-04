<?php
session_start();
include '../config2.php';
$username_update=$_POST['username_update'];
$password_update=$_POST['password_update'];
$avatar_update=$_POST['avatar_update'];


    
    
$sql='';
if($avatar_update==''){
    
    $sql="update `users` set `PASSWORD`='$password_update' where `USERNAME`='$username_update'";
    $avatar_old = $_SESSION['user'][0]['avatar'];
    // unset($_SESSION['user']);
    // $session_array=array(
    //     'username'=>$username_update,
    //     'avatar'=>$avatar_old,
    //     'password'=>$password_update
    // );
    $_SESSION['user'][0]['PASSWORD']=$password_update;
    
}else{
    $sql="update `users` set `PASSWORD`='$password_update',`IMG`='$avatar_update' where `USERNAME`='$username_update'";
    // unset($_SESSION['user']);
    // $session_array=array(
    //     'username'=>$username_update,
    //     'avatar'=>$avatar_update,
    //     'password'=>$password_update
    // );
    $_SESSION['user'][0]['PASSWORD']=$password_update;
    $_SESSION['user'][0]['IMG']=$avatar_update;
}
mysqli_query($conn,$sql);
 echo $sql;
 
    //$_SESSION['user'][]=$session_array;
 
?>