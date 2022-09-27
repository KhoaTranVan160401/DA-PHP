<?php

    include_once './config.php';

//Check connection was successful
 
  $dbdata = array();

  if($_GET['page']=='account'){
        //Fetch 3 rows from actor table
        $sql='select * from taikhoan';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['username'];
          $sub_array[] = $row['password'];
          $sub_array[] = '<img src="./img/'.$row['avatar'].'" style="width: 50px;height: 50px;">';
          $sub_array[] = '<a onclick="getDetails(`'.$row['username'].'`)" class="btn btn-warning">Sua</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['username'].'">Xoa</a>';

          $data[] = $sub_array;
        }
  }else if($_GET['page']=='product'){
        $sql='select * from sanpham';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['maSP'];
          $sub_array[] = $row['tenSP'];
          $sub_array[] = '<img src="./img/'.$row['hinhAnh'].'" style="width: 50px;height: 50px;">';
          $sub_array[] = $row['moTa'];
          $sub_array[] = $row['gia'];
          if($row['hienThi']==0)
            $sub_array[] ='<input type="checkbox" onchange="changeState(`'.$row['maSP'].'`,1)">';
          else  
            $sub_array[] ='<input type="checkbox" style="color:#20c997" checked="checked" onchange="changeState(`'.$row['maSP'].'`,0)">';
          
          $sub_array[] = '<a onclick="getDetails_view(`'.$row['maSP'].'`)" class="btn btn-info">Xem</a>';
          $sub_array[] = '<a onclick="getDetails(`'.$row['maSP'].'`)" class="btn btn-warning">Sua</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['maSP'].'">Xoa</a>';

          $data[] = $sub_array;
        }
    
  }else if($_GET['page']=='supplier'){
        $sql='select * from ncc';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['maCty'];
          $sub_array[] = $row['tenCty'];
          
          $sub_array[] = $row['tinh'];
          $sub_array[] = $row['dienThoai'];
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['maCty'].'`)" class="btn btn-warning">Sua</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['maCty'].'">Xoa</a>';

          $data[] = $sub_array;
        }
    
  }else if($_GET['page']=='customer'){
      $sql='select * from khachhang';
        $result = mysqli_query($conn,$sql);

        //Initialize array variable
        
    
        //Fetch into associative array
        while ( $row = mysqli_fetch_assoc($result))  {
          $sub_array = array();
          $sub_array[] = $row['maKH'];
          $sub_array[] = $row['tenKH'];
          $sub_array[] = $row['ngaySinh'];
          $sub_array[] = $row['diaChi'];
          
          $sub_array[] = $row['dienThoai'];
          $sub_array[] = $row['gioiTinh'];
          
          $sub_array[] = '<a onclick="getDetails(`'.$row['maKH'].'`)" class="btn btn-warning">Sua</a>';
          $sub_array[] = '<a  class="btn btn-danger delete" id="'.$row['maKH'].'">Xoa</a>';

          $data[] = $sub_array;
        }

    
  }



        $output=array(
          'data'=>$data,
        );
//Print array in JSON format
 echo json_encode($output);
 
?>