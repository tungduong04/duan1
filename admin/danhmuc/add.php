<div class="row">
            <div class="row boxtitle">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row formLH">
                <form action="index.php?act=adddanhmuc" method="post">
                    <div class="row mb10">
                        <label for="">Mã loại</label> 
                        <br>
                        
                        <input class="tu-dong" type="text" name="maloai" id="" placeholder="auto id" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        <label for="">Tên loại</label> 
                        <br>
                        
                        <input type="text" name="tenloai" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="them" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=danhmuc"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                        ?>
                </form>
            </div>
        </div>