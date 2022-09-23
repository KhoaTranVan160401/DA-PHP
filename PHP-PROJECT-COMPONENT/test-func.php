<?php
session_start();
include '../config.php';
$username_update=$_POST['username_update'];
$password_update=$_POST['password_update'];
$avatar_update=$_POST['avatar_update'];


    
    
$sql='';
if($avatar_update==''){
    
    $sql="update `taikhoan` set `password`='$password_update' where `username`='$username_update'";

}else{
    $sql="update `taikhoan` set `password`='$password_update',`avatar`='$avatar_update' where `username`='$username_update'";
    
}
mysqli_query($conn,$sql);
 echo $sql;
 unset($_SESSION['user']);
    $session_array=array(
        'username'=>$username_update,
        'avatar'=>$avatar_update,
        'password'=>$password_update
    );
    $_SESSION['user'][]=$session_array;
 
?>