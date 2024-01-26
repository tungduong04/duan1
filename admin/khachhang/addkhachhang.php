<div class="row">
            <div class="row boxtitle">
                <h1>Thêm khách hàng</h1>
            </div>
            <div class="row formLH">
                <form action="index.php?act=addtaikhoan" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <label for="">ID KHÁCH HÀNG</label> 
                        <br>
                        
                        <input class="tu-dong" type="text" name="" id="" placeholder="auto id" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        <label for="">TÊN KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="user" id="" value="">
                    </div>
                    <div class="row mb10">
                        <label for="">MẬT KHẨU KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="pass" id="" value="">
                    </div>
                    <div class="row mb10">
                        <label for="">EMAIL KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="email" id="" value="">
                    </div>
                    <div class="row mb10">
                        <label for="">ĐỊA CHỈ KHÁCH HÀNG</label> 
                        <br>
                        
                        <input type="text" name="address" id="" value="">
                    </div>
                    <div class="row mb10">
                        <label for="">SỐ ĐIỆN THOẠI</label> 
                        <br>
                        
                        <input type="text" name="tel" id="" value="">
                    </div>
                    <div class="row mb10">
                        <label for="">ẢNH ĐẠI DIỆN</label> 
                        <br>
        
                        <input type="file" name="anh" id="">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value = "">
                        <input type="submit" name="themtk" value="Thêm tài khoản">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=khachhang"><input type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>