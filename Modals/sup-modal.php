<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel">Add a new Supplier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                    <div class="col-auto">
                        <label for="dienThoai_insert" class="visually-hidden">Ma Cong ty</label>
                        <input type="text"  class="form-control" id="maCty_insert" name="maCty_insert" placeholder="Ma Cong ty" >
                    </div>

                    <div class="col-auto">
                        <label for="tinh_insert" class="visually-hidden">Ten Cong ty</label>
                        <input type="text"  class="form-control" id="tenCty_insert" name="tenCty_insert" placeholder="Ten Cong ty" >
                    </div>

                    <div class="col-auto">
                        <label for="tinh_insert" class="visually-hidden">Tinh</label>
                        <input type="text"  class="form-control" id="tinh_insert" name="tinh_insert" placeholder="Tinh" >
                    </div>

                    <div class="col-auto">
                        <label for="dienThoai_insert" class="visually-hidden">Dien Thoai</label>
                        <input type="text"  class="form-control" id="dienThoai_insert" name="dienThoai_insert" placeholder="Dien Thoai" >
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
            <h5 class="modal-title " id="exampleModalLabel">Update Supplier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                    <div class="col-auto">
                        <label for="maCty_update" class="visually-hidden">Ma Cong ty</label>
                        <input type="text"  class="form-control" id="maCty_update" name="maCty_update" placeholder="Ma Cong ty" >
                    </div>

                    <div class="col-auto">
                        <label for="tenCty_update" class="visually-hidden">Ten Cong ty</label>
                        <input type="text"  class="form-control" id="tenCty_update" name="tenCty_update" placeholder="Ten Cong ty" >
                    </div>

                    <div class="col-auto">
                        <label for="tinh_update" class="visually-hidden">Tinh</label>
                        <input type="text"  class="form-control" id="tinh_update" name="tinh_update" placeholder="Tinh" >
                    </div>

                    <div class="col-auto">
                        <label for="dienThoai_update" class="visually-hidden">Dien Thoai</label>
                        <input type="text"  class="form-control" id="dienThoai_update" name="dienThoai_update" placeholder="Dien Thoai" >
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="Update">Save Changes</button>
                    </div>
                </form>
                
                
                
        </div>
        
    </div>
</div>
</div>