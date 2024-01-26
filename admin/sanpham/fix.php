<div class="row">
            <div class="row boxtitle">
                <h1>Cập nhật hàng hóa</h1>
            </div>
            <div class="row formLH">
            <form action="index.php?act=capnhatsanpham" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <label for="">Mã sản phẩm</label> 
                        <br>
                        
                        <input class="tu-dong" type="text" name="masp" id="" placeholder="auto id" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        <label for="">Danh mục</label> 
                        <br>
                        
                        <select name="iddm" id="">
                            <?php foreach($danhsach as $key => $c): ?>
                            <option value="<?php echo $c['id'] ?>"><?php echo $c['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên sản phẩm</label> 
                        <br>
                        
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="row mb10">
                        <label for="">Giá sản phẩm</label> 
                        <br>
                        
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="row mb10">
                        <label for="">Hình sản phẩm</label> 
                        <br>
                        
                        <input type="file" name="anhsp" id="">
                    </div>
                    <div class="row mb10">
                        <label for="">Mô tả sản phẩm</label> 
                        <br>
                        
                        <input type="text" name="mota" id="">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value = "<?php if(isset($id) && ($id > 0)){ echo $id; } ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=sanpham"><input type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>