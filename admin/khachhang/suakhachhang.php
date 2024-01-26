<div class="row">
            <div class="row boxtitle">
                <h1>Cập nhật khách hàng</h1>
            </div>
            <div class="row formLH">
                <form action="index.php?act=capnhattaikhoan" method="post" enctype="multipart/form-data">
                    <?php foreach($taikhoan as $a): ?>
                    <div class="row mb10">
                        <label for="">ID KHÁCH HÀNG</label> 
                        <br>
                        
                        <input class="tu-dong" type="text" name="" id="" placeholder="<?php echo $a['id'] ?>" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        <label for="">TÊN KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="user" id="" value="<?php echo $a['user'] ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">MẬT KHẨU KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="pass" id="" value="<?php echo $a['pass'] ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">EMAIL KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="email" id="" value="<?php echo $a['email'] ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">ĐỊA CHỈ KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="address" id="" value="<?php echo $a['address'] ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">SỐ ĐIỆN THOẠI</label> 
                        <br>
                        
                        <input type="text" name="tel" id="" value="<?php echo $a['tel'] ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">ẢNH ĐẠI DIỆN</label> 
                        <br>
                        <?php if(isset($a['anh']) && ($a['anh'])!=""){ ?>
                        <img src="../img/<?php echo $a['anh'] ?>" alt="" width="100px" height="100px">
                        <?php }; ?>
                        <input type="file" name="anh" id="">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value = "<?php echo $a['id'] ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=khachhang"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>