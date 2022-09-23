<?php
    session_start();
    include 'config.php';
    
    
    if(isset($_POST['username'])&&isset($_POST['password'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        //Add session
        $sql='select * from `taikhoan`';
        $list=mysqli_query($conn,$sql);
        $res='Error';
        while($row=mysqli_fetch_assoc($list)){
            if($row['username']==$username&&$row['password']==$password){
                $session_array=array(
                    'username'=>$row['username'],
                    'avatar'=>$row['avatar'],
                    'password'=>$row['password']
                );
                $_SESSION['user'][]=$session_array;

                
                if($username=='admin'){
                    $res='AD';
                    echo $res;
                    
                }else{
                    $res='User';
                    echo $res;
                    //session arr => list shopping cart or shopping heart
                    //session profile
                    
                }
                break;
                
            }
        }
        



        // if($emai=='ad@gmail.com'&&$password=='123'){
        //     echo "
        //     <script>
                                        
        //         window.location.href='index.php';
            
        //     </script>
            
        //     ";
        // }
        // if($emai=='user@gmail.com'&&$pswd=='123'){
        //     echo "
        //     <script>
                                        
        //         window.location.href='./PHP-PROJECT-COMPONENT/index.php';
            
        //     </script>
            
        //     ";
        // }

    }


?>