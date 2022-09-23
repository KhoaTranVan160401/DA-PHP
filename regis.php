<?php
    include './config.php';

    $username=$_POST['username'];
    $password=$_POST['pass$password'];
    $avatar=$_POST['avatar'];
    $sql="insert into `taikhoan` values('$username','$password','$avatar')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo 'DK thanh cong';
    }




?>