<?php
    include '../config2.php';
    
    if(isset($_GET['type'])&&isset($_GET['action'])){
        if($_GET['action']=='insert'||$_GET['action']=='update'){
            $id=$_POST['id'];
            $title=$_POST['title'];
            $price=$_POST['price'];
            $productImg=$_POST['productImg'];
            $number=$_POST['number'];
        }if($_GET['action']=='delete'||$_GET['action']=='getdataById'){
            $id=$_POST['id'];
        }
        $res='';
        $data= array();
        
        if($_GET['type']=='cart'){
            if($_GET['action']=='getdataAll'){
                $sql='select * from  `shopping`';
                $list=mysqli_query($conn,$sql);
                $res='';
                while($row=mysqli_fetch_assoc($list)){//fetch data
                    $id=$row['id'];
                    $productImg=$row['productImg'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $res.='
                    <div class="cart-box">
                        <img src="'.$productImg.'" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-id" style="display: none;">'.$id.'</div>
                            <div class="cart-product-title">'.$title.'</div>
                            <div class="cart-price">'.$price.'</div>
                            <input type="number" class="cart-quantity" value="1">
                        </div>
                        <!---remove-->
                        <i class="bx bxs-trash-alt cart-remove"></i>
                    </div>
                    
                    
                    ';
                    
                    
                    
                    
                }
                echo $res;
                

            }else if($_GET['action']=='getdataById'){
                $sql="select * from  `shopping` where `id`='$id'";
                $list=mysqli_query($conn,$sql);
                if(mysqli_num_rows($list)>0){
                     $res='1';
                }else{
                     $res='0';
                }
                echo $res;//
                
                

            }else if($_GET['action']=='insert'){
                $sql="INSERT INTO `shopping` (`id`, `title`, `price`, `productImg`, `number`) VALUES ('$id', '$title', '$price', '$productImg', 1)";
            

                $res=mysqli_query($conn,$sql);
                echo $sql;
                
            }else if($_GET['action']=='update'){
                $sql="UPDATE `shopping` SET `title` = '$title', `price` = '$price', `productImg` = '$productImg', `number` = '$number' WHERE `shopping`.`id` = '$id';";
                $res=mysqli_query($conn,$sql);
                
                echo $sql;
            }else if($_GET['action']=='delete'){
                $sql="DELETE FROM `shopping` WHERE `shopping`.`id` = '$id'";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }else{
                $sql="DELETE FROM `shopping` ";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }

        }else{//heart
            if($_GET['action']=='getdataAll'){
                $sql='select * from  `favorite`';
                $list=mysqli_query($conn,$sql);
                $res='';
                while($row=mysqli_fetch_assoc($list)){//fetch data
                    $id=$row['id'];
                    $productImg=$row['productImg'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $res.='
                    <div class="cart-box">
                        <img src="'.$productImg.'" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-id" style="display: none;">'.$id.'</div>
                            <div class="cart-product-title">'.$title.'</div>
                            <div class="cart-price">'.$price.'</div>
                            
                        </div>
                        <!---remove-->
                        <i class="bx bx-heart cart-heart-remove"></i>
                    </div>
                    
                    
                    ';
                    
                    
                    
                    
                }
                echo $res;

            }else if($_GET['action']=='getdataById'){
                $sql="select * from  `favorite` where `id`='$id'";
                $list=mysqli_query($conn,$sql);
                if(mysqli_num_rows($list)>0){
                     $res='1';
                }else{
                     $res='0';
                }
                echo $res;
                

            }else if($_GET['action']=='insert'){
                $sql="INSERT INTO `favorite` (`id`, `title`, `price`, `productImg`) VALUES ('$id', '$title', '$price', '$productImg')";
                $res=mysqli_query($conn,$sql);
                echo $sql;
                
            }else if($_GET['action']=='update'){
                $sql="UPDATE `favorite` SET `title` = '$title', `price` = '$price', `productImg` = '$productImg', `number` = '$number' WHERE `favorite`.`id` = '$id';";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }else{
                $sql="DELETE FROM `favorite` WHERE `favorite`.`id` = '$id'";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }

        }
    }
        // $id=$_POST['id'];
        // $title=$_POST['title'];
        // $price=$_POST['price'];
        // $productImg=$_POST['productImg'];
        // $number=$_POST['number'];
        // $res='';
        
        // if($_GET['action']=='getdataAll'){
        //     $sql='select * from  `shopping`';
        //     $list=mysqli_query($conn,$sql);
        //     $res='';
        //     while($row=mysqli_fetch_assoc($list)){
        //         $id=$row['id'];
        //         $productImg=$row['productImg'];
        //         $title=$row['title'];
        //         $price=$row['price'];
        //         $res+=`
        //         <img src="$productImg" alt="" class="cart-img">
        //         <div class="detail-box">
        //             <div class="cart-product-title">$id</div>
        //             <div class="cart-product-title">$title</div>
        //             <div class="cart-price">$price</div>
        //             <input type="number" class="cart-quantity" value="1">
        //         </div>
        //         <!---remove-->
        //         <i class='bx bxs-trash-alt cart-remove'></i>`;
        //     }
        //     echo $res;

        // }else if($_GET['action']=='insert'){
        //     $sql="insert into `shopping` values('$id','$title','$price','$productImg',1)";
        //     $res=mysqli_query($conn,$sql);
            
        // }else if($_GET['action']=='update'){
        //     $sql='update from `shopping` set `title`=$title,`price`=$price,`productImg`=$productImg where `id`=$id';
        //     $res=mysqli_query($conn,$sql);
        // }else{
        //     $sql='delete `shopping` where `id`=$id';
        //     $res=mysqli_query($conn,$sql);
        // }

?>