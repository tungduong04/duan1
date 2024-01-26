<div class="row mb">
            <div class="boxtrai mr">
                <form action="index.php?act=xacnhanhoadon" method="post">
                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">CẢM ƠN</div>
                        <div class="row formLH">
                            <div class="row mb10 formDSLH">
                                <h2>CẢM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Kiểm tra xem $listhoadon có tồn tại hay không, có phải mảng hay không -->
                    <?php extract($listhoadon); ?>
                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">MÃ ĐƠN HÀNG</div>
                        <div class="row formLH">
                           <h2>X-Shop-<?php echo $listhoadon['id']; ?></h2>
                        </div>
                    </div>

                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">THÔNG TIN ĐẶT HÀNG</div>
                        <div class="row formLH">
                            <div class="row mb10 formTTDH">
                                <table>
                                    <tr>
                                        <td>Người đặt hàng</td>
                                        <td><?php echo $listhoadon['name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td><?php echo $listhoadon['address'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $listhoadon['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại</td>
                                        <td><?php echo $listhoadon['tel'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đặt hàng</td>
                                        <td><?php echo $listhoadon['date'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">PHƯƠNG THỨC THANH TOÁN</div>
                        <div class="row formLH">
                           <h2><?php echo $listhoadon['pttt'] ?></h2>
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
                                        <?php foreach($listgiohang as $b): ?>
                                        <?php $thanhtien = $b['price'] * $b['soluong'] ?>
                                        <tr>
                                            <td><?php echo ($i+1) ?></td>
                                            <td><img src="img/<?php echo $b['img'] ?>" alt="" width="50px" height="50px"></td>
                                            <td><?php echo $b['name'] ?></td>
                                            <td><?php echo $b['price'] ?></td>
                                            <td><?php echo $b['soluong'] ?></td>
                                            <td><?php echo $thanhtien ?></td>
                                        </tr>
                                        <?php $i+=1; ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="5">Thành tiền</td>
                                            <td><?php echo $listhoadon['total'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     
                    </div>           
                </form>    
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
</div>