<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                <div class="banner mb">
                        <img src="img/1000.jpg" alt="" id="anh">
                        <div class="nut" onclick="Pre()">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="nut2" onclick="Next()">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="rowsp mb">
                    <?php foreach ($spmoi as $key => $d): ?>
                    <div class="sanpham">
                        <div class="img">
                            <img src="img/<?php echo $d['img'] ?>" alt="">
                        </div>
                        <p>$ <?php echo $d['price'] ?></p>
                        <a href="index.php?act=sanphamct&id=<?php echo $d['id'] ?>"><?php echo $d['name'] ?></a>
                        <div class="themgiohang">
                            <form action="index.php?act=themgiohang" method="post">
                                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                <input type="hidden" name="name" value="<?php echo $d['name'] ?>">
                                <input type="hidden" name="anh" value="<?php echo $d['img'] ?>">
                                <input type="hidden" name="gia" value="<?php echo $d['price'] ?>">
                                <input type="submit" value="Thêm vào giỏ hàng" name="themgiohang">
                            </form>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
        </div>