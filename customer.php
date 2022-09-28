<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>cms dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--JQUERY-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--JQUERY-->
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="./css/msg-custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="./table.css">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <?php include_once './includes/slidebar.php'?>



        <!-- Page Content  -->
        <div id="content">

            <?php include './includes/topbar.php'?>


            <div class="main-content">

                


                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div id="msg"></div>
                        <script src="./js/msg.js"></script>

                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Customer</h4>
                                <p class="category">Duong dan toi / back ve doashboard</p>
                            </div>
                            <!-- Button trigger modal -->
                            <?php include './Modals/cus-modal.php'?>

                           
                            <div class="card-content table-responsive">
                                <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#New">ADD</button>
                                
                                <table class="table table-hover" id="myTable">
                                    <thead class="text-primary">
                                        <tr>
                                            
                                            <th scope="col">Ma KH</th>
                                            <th scope="col">Ten KH</th>
                                            <th scope="col">Ngay Sinh</th>
                                            <th scope="col">Gioi Tinh</th>
                                            <th scope="col">Dia Chi</th>
                                            <th scope="col">Dien Thoai</th>
                                            <th scope="col">Sua</th>
                                            <th scope="col">Xoa</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody id="displayDataTable">
                                    
                                        
                                    
                                    </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>



                <?php include './includes/footer.php'?>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
      $(document).ready(function() {
            var dataTable=$('#myTable').DataTable({
                "ajax": "fetchdata.php?page=customer",
                "columns": [{
                    "data": "0"
                }, {
                    "data": "1"
                }, {
                    "data": "2"
                }, {
                    "data": "3"
                },  {
                    "data": "4"
                },  {
                    "data": "5"
                },  {
                    "data": "6"
                },  {
                    "data": "7"
                }]
            });
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
            displayData();
            // $("#live_search").keyup(function(){
            //     var input = $(this).val();

            //     if(input!=''){
            //         $.ajax({
            //             url:"cus-func.php?action=search-customer",
            //             method:"post",
            //             data:{
            //                 input:input,
            //                 displaySend:"true"
            //             },
            //             success:function(data){
            //                 $('#displayDataTable').html(data);
            //                 //$('#displayDataTable').css("dispaly","block");
            //             }
            //         })
            //     }else{
            //         displayData();
            //     }
            // })
            $(document).on('click','#Add',function(){
                
                addcustomer(dataTable);
                
            });
            $(document).on('click','#Update',function(){
                
                updateDetails(dataTable);
                
            });
            $(document).on('click','.delete',function(){
                var user_id = $(this).attr("id");
                
                
                deletecustomer(user_id,dataTable);
                
            });

        });
        function reloaddataTable(){
            
            // var refreshedDataFromTheServer = getDataFromServer();

            // var myTable = $('#maTable').DataTable();
            // myTable.clear().rows.add(refreshedDataFromTheServer).draw();
            var myTable = $('#myTable').DataTable();
            myTable.clear().rows.add(myTable.data).draw();
            console.log($("#myTable").DataTable().rows().data())
        }
        function uploadfile_for_insert(){
                            //To save file with this name
                            var file_data = $('#avatar_insert').prop('files')[0];    //Fetch the file
                            filename=file_data['name'];
                            console.log(filename);
                            var form_data = new FormData();
                            form_data.append("file",file_data);
                            form_data.append("filename",filename);

                            //Ajax to send file to upload
                            $.ajax({
                                url: "upload.php",                      //Server api to receive the file
                                        type: "POST",
                                        dataType: 'script',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: form_data,

                                    success:function(dat2){
                                        if(dat2==1) alert("Successful");
                                        else alert("Unable to Upload");
                                    }
                                });
                            }
                            function uploadfile_for_update(){
                            //To save file with this name
                            var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
                            filename=file_data['name'];
                            console.log(filename);
                            var form_data = new FormData();
                            form_data.append("file",file_data);
                            form_data.append("filename",filename);

                            //Ajax to send file to upload
                            $.ajax({
                                url: "upload.php",                      //Server api to receive the file
                                        type: "POST",
                                        dataType: 'script',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: form_data,

                                    success:function(dat2){
                                        if(dat2==1) alert("Successful");
                                        else alert("Unable to Upload");
                                    }
                                });
                            }
                            function getDetails(id){
            
            
            $.post("cus-func.php?action=getdataById",{updateid:id},function(data,status){
                var customer_id =JSON.parse(data);
                $('#maKH_update').val(customer_id.maKH);
                $('#tenKH_update').val(customer_id.tenKH);
                $('#ngaySinh_update').val(customer_id.ngaySinh);
                $('#gioiTinh_update').val(customer_id.gioiTinh);
                $('#diaChi_update').val(customer_id.diaChi);
                $('#dienThoai_update').val(customer_id.dienThoai);
                //$('#avatar_update').val(userid.avatar);

            });
            
            $('#Edit').modal('show');
            //mai code
        }
        
        function updateDetails(dataTable){
            var maKH=$('#maKH_update').val();
            var tenKH=$('#tenKH_update').val();
            var ngaySinh=$('#ngaySinh_update').val();
            var gioiTinh=$('#gioiTinh_update').val();
            var diaChi=$('#diaChi_update').val();
            var dienThoai=$('#dienThoai_update').val();
            
            console.log(1);
            $.post("cus-func.php?action=update",{
                maKH:maKH,
                tenKH:tenKH,
                ngaySinh:ngaySinh,
                gioiTinh:gioiTinh,
                diaChi:diaChi,
                dienThoai:dienThoai
                
            },function(data,status){
                
                dataTable.ajax.reload();
                $('#maKH_update').val('');
                $('#tenKH_update').val('');
                $('#ngaySinh_update').val('');
                $('#gioiTinh_update').val('');
                $('#diaChi_update').val('');
                $('#dienThoai_update').val('');
                $('#Edit').modal('hide');
                displayData();
                showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                

            });

        }
        function deletecustomer(id,dataTable){
            //mai code
            if(confirm('Ban co thuc su muon xoa '+id)){
                $.ajax({
                
                    url:"cus-func.php?action=delete",
                    type:"post",
                    data:{
                        deleteid:id
                    },
                    success:function(data,status){
                        //Toast success
                        dataTable.ajax.reload();
                        showSuccessMsg('Thanh Cong','Xoa DL thanh cong','success')
                        displayData();
                    },
                    error:function(){
                        //Toast error
                    }
                })

            }
        }

        function displayData(){
            var displayData="true";
            $.ajax({
                url:"cus-func.php?action=getdataAll",
                type:"post",
                data:{
                    displaySend:displayData
                },
                success:function(data,status){
                    $("#displayDataTable").html(data);
                }
            })

        }
        function showMessage(message){

        }


        function addcustomer(dataTable){
            try{
                

                var maKH=$('#maKH_insert').val();
                var tenKH=$('#tenKH_insert').val();
                var ngaySinh=$('#ngaySinh_insert').val();
                var gioiTinh=$('#gioiTinh_insert').val();
                var diaChi=$('#diaChi_insert').val();
                var dienThoai=$('#dienThoai_insert').val();                
                $.ajax({
                    url:"cus-func.php?action=insert",
                    type:"post",
                    data:{
                        maKH:maKH,
                        tenKH:tenKH,
                        ngaySinh:ngaySinh,
                        gioiTinh:gioiTinh,
                        diaChi:diaChi,
                        dienThoai:dienThoai
                    },
                    success:function(data,status){
                        //console.log(data)
                        dataTable.ajax.reload();

                        $('#maKH_insert').val('');
                        $('#tenKH_insert').val('');
                        $('#ngaySinh_insert').val('');
                        $('#gioiTinh_insert').val('');
                        $('#diaChi_insert').val('');
                        $('#dienThoai_insert').val('');
                        
                        $('#New').modal('hide');
                        displayData();
                        showSuccessMsg('Thanh Cong','Them DL thanh cong','success')
                    }

                })

            }catch{
                
            }
            
        }

    </script>





</body>

</html>