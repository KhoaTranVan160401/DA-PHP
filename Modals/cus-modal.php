<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel">Add a new Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                    <div class="col-auto">
                        <label for="maKH_insert" class="visually-hidden">Ma KH</label>
                        <input type="text"  class="form-control" id="maKH_insert" name="maKH_insert" placeholder="Ma KH" >
                    </div>

                    <div class="col-auto">
                        <label for="tenKH_insert" class="visually-hidden">Ten KH</label>
                        <input type="text"  class="form-control" id="tenKH_insert" name="tenKH_insert" placeholder="Ten KH" >
                    </div>

                    <div class="col-auto">
                        <label for="ngaySinh_insert" class="visually-hidden">Ngay Sinh</label>
                        <input type="date"  class="form-control" id="ngaySinh_insert" name="ngaySinh_insert" placeholder="Ngay Sinh" >
                    </div>

                    <div class="col-auto">
                        <label for="gioiTinh_insert" class="visually-hidden">Gioi Tinh</label>
                        <input type="number"  class="form-control" id="gioiTinh_insert" name="gioiTinh_insert" placeholder="Gioi Tinh" >
                    </div>

                    <div class="col-auto">
                        <label for="diaChi_insert" class="visually-hidden">Dia Chi</label>
                        <input type="text"  class="form-control" id="diaChi_insert" name="diaChi_insert" placeholder="Dia Chi" >
                    </div>

                    <div class="col-auto">
                        <label for="dienThoai_insert" class="visually-hidden">Dien Thoai</label>
                        <input type="text"  class="form-control" id="dienThoai_insert" name="dienThoai_insert" placeholder="SDT" >
                    </div>

                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="Add">Save</button>
                    </div>
                </form>
                
                
                
        </div>
        
    </div>
</div>
</div>
<!--Modal Edit-->
<div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-warning">
            <h5 class="modal-title " id="exampleModalLabel">Update Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                    <div class="col-auto">
                        <label for="maKH_update" class="visually-hidden">Ma KH</label>
                        <input readonly="readonly" type="text"  class="form-control" id="maKH_update" name="maKH_update" placeholder="Ma KH" >
                    </div>

                    <div class="col-auto">
                        <label for="tenKH_update" class="visually-hidden">Ten KH</label>
                        <input type="text"  class="form-control" id="tenKH_update" name="tenKH_update" placeholder="Ten KH" >
                    </div>

                    <div class="col-auto">
                        <label for="ngaySinh_update" class="visually-hidden">Ngay Sinh</label>
                        <input type="date"  class="form-control" id="ngaySinh_update" name="ngaySinh_update" placeholder="Ngay Sinh" >
                    </div>

                    <div class="col-auto">
                        <label for="gioiTinh_update" class="visually-hidden">Gioi Tinh</label>
                        <input type="number"  class="form-control" id="gioiTinh_update" name="gioiTinh_update" placeholder="Gioi Tinh" >
                    </div>

                    <div class="col-auto">
                        <label for="diaChi_update" class="visually-hidden">Dia Chi</label>
                        <input type="text"  class="form-control" id="diaChi_update" name="diaChi_update" placeholder="Dia Chi" >
                    </div>

                    <div class="col-auto">
                        <label for="dienThoai_update" class="visually-hidden">Dien Thoai</label>
                        <input type="text"  class="form-control" id="dienThoai_update" name="dienThoai_update" placeholder="SDT" >
                    </div>

                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="Update">Save</button>
                    </div>
                </form>
                
                
                
        </div>
        
    </div>
</div>
</div>