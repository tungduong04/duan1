<div class="row mb">
            <div class="boxtrai mr">
                <form action="index.php?act=xacnhanhoadon" method="post">
                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">THÔNG TIN ĐẶT HÀNG</div>
                        <div class="row formLH">
                            <div class="row mb10 formDSLH">
                                <table>
                                    <!-- Đã đăng nhập -->
                                    <?php if(isset($_SESSION['user']) && ($_SESSION['user'])!=""){ ?>
                                    <?php extract($_SESSION['user']); ?>
                                    <tr>
                                        <td>Người đặt hàng</td>
                                        <td><input type="text" name="name" id="" value="<?php echo $user ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td><input type="text" name="address" id="" value="<?php echo $address ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input type="text" name="email" id="" value="<?php echo $email ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại</td>
                                        <td><input type="text" name="tel" id="" value="<?php echo $tel ?>"></td>
                                    </tr>

                                    <!-- Chưa đăng nhập -->
                                    <?php }else{ ?>
                                    <tr>
                                        <td>Người đặt hàng</td>
                                        <td><input type="text" name="name" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td><input type="text" name="address" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input type="text" name="email" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại</td>
                                        <td><input type="text" name="tel" id=""></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">PHƯƠNG THỨC THANH TOÁN</div>
                        <div class="row formLH">
                           <table>
                                <tr>
                                    <td><input type="radio" value = "1" name="pttt" id="" checked>Trả tiền khi nhận hàng</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">THÔNG TIN GIỎ HÀNG</div>
                        <div class="row formLH">
                            <div class="row mb10 formDSLH">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>HÌNH</th>
                                            <th>SẢN PHẨM</th>
                                            <th>ĐƠN GIÁ</th>
                                            <th>SỐ LƯỢNG</th>
                                            <th>THÀNH TIỀN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $tong = 0; $i=0; ?>
                                        <?php foreach(($_SESSION['mycart']) as $a): ?>
                                            <?php $thanhtien = $a[3]*$a[4]; ?>
                                            <?php $tong = $tong + $thanhtien; ?>
                                        <tr>
                                            <td><?php echo ($i+1) ?></td>
                                            <td><img src="img/<?php echo $a[2] ?>" alt="" width="50px" height="50px"></td>
                                            <td><?php echo $a[1] ?></td>
                                            <td><?php echo $a[3] ?></td>
                                            <td><?php echo $a[4] ?></td>
                                            <td><?php echo $thanhtien ?></td>
                                        </tr>
                                        <?php $i+=1; ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="5">Thành tiền</td>
                                            <td><?php echo $tong; ?></td>
                                            <input type="hidden" name="tong" value="<?php echo $tong; ?>">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Đồng ý đặt hàng" name="xacnhanhoadon">
                            
                </form>    
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
</div>