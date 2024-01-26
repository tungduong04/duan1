<div class="row">
            <div class="row boxtitle">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row formLH">
            <form action="index.php?act=capnhathd" method="post" enctype="multipart/form-data">
                <?php extract($onebill); ?>
                <?php $count = loadall_giohang_count($onebill['id']) ?>
                    <div class="row mb10">
                        <label for="">Mã đơn hàng</label> 
                        <br>
                        
                        <input class="tu-dong" type="text" name="id" id="" value="<?php echo $onebill['id'] ?>" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="">Khách hàng</label> 
                        <br>
                        
                        <input type="text" name="" id="" value="<?php echo $onebill['name'] ?>"disabled>
                    </div>
                    <div class="row mb10">
                        <label for="">Số lượng hàng</label> 
                        <br>
                        
                        <input type="text" name="" id="" value="<?php echo $count ?>"disabled>
                    </div>
                    <div class="row mb10">
                        <label for="">Giá trị đơn hàng</label> 
                        <br>
                        
                        <input type="text" name="" id="" value="<?php echo $onebill['total'] ?>"disabled>
                    </div>
                    <div class="row mb10">
                        <label for="">Tình trạng đơn hàng</label> 
                        <br>
                        <select name="tthd" id="">
                            <option value="0">Đơn hàng mới</option>
                            <option value="1">Đang xử lý</option>
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Đã giao</option>
                        </select>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php echo $onebill['id'] ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=hoadon"><input type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>

        