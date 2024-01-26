<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <?php if(isset($ten_danhmuc) && $ten_danhmuc != ""){ ?>
                        <?php foreach($ten_danhmuc as $l): ?>
                            <div class="tieude mb10">SANPHAM <?php echo " -- ".$l['name'];?></div>
                        <?php endforeach; ?>
                    <?php } else{ ?>
                            <div class="tieude mb10">SANPHAM</div>
                        <?php }?>
                        <div class="rowsp mb">
                            <?php foreach ($dssp as $key => $k): ?>
                            <div class="sanpham">
                                <div class="img">
                                    <img src="img/<?php echo $k['img'] ?>" alt="">
                                </div>
                                <p>$ <?php echo $k['price'] ?></p>
                                <a href="index.php?act=sanphamct&id=<?php echo $k['id'] ?>"><?php echo $k['name'] ?></a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                </div>
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
        </div>