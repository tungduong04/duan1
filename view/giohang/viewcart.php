<div class="row mb">
            <div class="boxtrai mr">
                <div class=" row mb chitietsanpham formdn">
                    <div class="tieude mb10">GIỎ HÀNG</div>
                    <div class="row formLH">
                        <div class="row mb10 formDSLH">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>HÌNH</th>
                                        <th>SẢN PHẨM</th>
                                        <th>ĐƠN GIÁ</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>THÀNH TIỀN</th>
                                        <th>CHỨC NĂNG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $tong = 0; $i=0; ?>
                                    <?php foreach(($_SESSION['mycart']) as $a): ?>
                                    <?php $tong = $tong + $a[5] ?>
                                    <tr>
                                        <td><?php echo ($i+1) ?></td>
                                        <td><img src="img/<?php echo $a[2] ?>" alt="" width="50px" height="50px"></td>
                                        <td><?php echo $a[1] ?></td>
                                        <td><?php echo $a[3] ?></td>
                                        <td><?php echo $a[4] ?></td>
                                        <td><?php echo $a[5] ?></td>
                                        <td><a href="index.php?act=deletecart&idcart=<?php echo $i ?>"><input type="button" value="Xóa"></a></td>
                                    </tr>
                                    <?php $i+=1; ?>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="5">Thành tiền</td>
                                        <td><?php echo $tong; ?></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb10">
                            <a href="index.php?act=backhome"><input type="button" value="Tiếp tục mua hàng"></a>
                            <a href="index.php?act=deletecart"><input type="button" value="Xóa tất cả"></a>
                            <a href="index.php?act=hoadon"><input type="button" value="Thanh toán"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
 </div>