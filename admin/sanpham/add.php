<div class="row">
            <div class="row boxtitle">
                <h1>Thêm mới hàng hóa</h1>
            </div>
            <div class="row formLH">
                <form action="index.php?act=addsanpham" method="post" enctype="multipart/form-data">
                    <div class="row mb10">

                    </div>
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
                        
                        <textarea name="mota" id="" cols="30" rows="10" style="max-height: 100px; max-width: 100%"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themsp" value="Thêm mới sản phẩm">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=sanpham"><input type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>