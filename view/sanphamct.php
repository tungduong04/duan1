<div class="row mb">
            <div class="boxtrai mr">
                <div class=" row mb chitietsanpham">
                    <?php foreach($chitiet as $key => $ct): ?>
                    <div class="anh">
                        <img src="img/<?php echo $ct['img'] ?>  " alt="">
                    </div>
                    <div class="thongtinsanpham">
                        <ul>
                            <li>Mã HH: <?php echo $ct['id'] ?></li>
                            <li>Tên HH: <?php echo $ct['name'] ?></li>
                            <li>Đơn giá: <?php echo $ct['price'] ?></li>
                            <li>Giảm giá: 5%</li>
                        </ul>
                    </div>
                    <div class="motasanpham">
                        <p><?php echo $ct['mota'] ?></p>
                    </div>
                    
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?php echo $ct['id'] ?>});
                    });
                </script>
                <?php endforeach; ?>
                <div class="row binhluan mb" id="binhluan">
                    
                </div>
                <div class="row hangcungloai">
                    <div class="tieude">HÀNG CÙNG LOẠI</div>
                    <div class="thongtinhangcungloai">
                        <ul>
                            <?php foreach ($sp_cungloai as $key => $h): ?>
                            <li><a href="index.php?act=sanphamct&id=<?php echo $h['id'] ?>"><?php echo $h ['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
        </div>