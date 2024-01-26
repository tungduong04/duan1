<div class="row mb">
                <div class="tieude">TAI KHOAN</div>
                <div class="noidung formdn">
                    <?php if(isset($_SESSION['role']) && ($_SESSION['role'])!=""){ ?>
                    <h2>Xin chao <?php echo ($_SESSION['user']['user']) ?></h2>
                        <?php if($_SESSION['role'] == 1){ ?>
                            <li>
                                <a href="admin/index.php">Quản trị</a>
                            </li>
                        <?php } ?>
                    <li>
                        <a href="index.php?act=hoadoncuatoi">Hóa đơn của tôi</a>
                    </li>
                    <li>
                        <a href="index.php?act=dangxuat">Dang xuat</a>
                    </li>
                    <li>
                        <a href="index.php?act=quenmatkhau">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=capnhattaikhoan">Cập nhật tài khoản</a>
                    </li>
                    <?php } else{ ?>
                    <form action="index.php?act=dangnhap" method="post">
                        <h2 class="thongbao_tk">
                            <?php
                                if(isset($thongbao) && $thongbao!=""){
                                    echo $thongbao;
                                }
                            ?>
                        </h2>
                        <div class="row mb10">
                            Tên đăng nhập
                            <br>
                            <input type="text" name="user" id="">
                        </div>
                        <br>
                        <div class="row mb10">
                            Mật khẩu
                            <br>
                            <input type="password" name="pass" id="">
                        </div>
                        <br>
                        <div class="row mb10">
                            <input type="checkbox" name="nhopass" id="ghinho">
                            <label for="ghinho">Ghi nhớ tài khoản?</label>
                        </div>
                        <br>
                        <div class="row mb10">
                            <input type="submit" value="Đăng nhập" name="dangnhap">
                        </div>
                        <br>
                        <li>
                            <a href="http://">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng kí</a>
                        </li>
                    </form>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb">
                <div class="tieude">DANH MUC</div>
                <div class="noidung2 menudanhmuc">
                    <ul>
                        <?php foreach ($dmmoi as $key => $e): ?>
                        
                        <li>
                            <a href="index.php?act=sanpham&id=<?php echo $e['id'] ?>"><?php echo $e['name']; ?></a>
                        </li>

                        <?php endforeach; ?> 

                    </ul>
                </div>
                <div class="timkiem searchbox">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="input" name="keyword" id="">
                        <input type="submit" value="Tìm kiếm" name="timkiem">
                    </form>
                </div>
            </div>
            <div class="row mb">
                <div class="tieude">TOP 10 YEU THICH</div>
                <div class="noidung row">
                    <?php foreach ($toplike as $key => $g): ?>
                    <div class="row mb10 top10">
                        <img src="img/<?php echo $g['img'] ?>" alt="">
                        <a href="index.php?act=sanphamct&id=<?php echo $g['id'] ?>"><?php echo $g['name'] ?></a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>