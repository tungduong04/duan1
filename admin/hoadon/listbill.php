<div class="row">
            <div class="row boxtitle mb">
                <h1>Danh sách đơn hàng</h1>
            </div>
            <form action="index.php?act=hoadon" method="post">
                        <input type="text" name="keyword" id="">
                        <input type="submit" name="listok" value="Search">
            </form>
            <div class="row formLH">
                <div class="row mb10 formDSLH">  
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Số lượng hàng</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Chức năng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listbill as $key => $b): ?>
                            <?php 
                                $countsp = loadall_giohang_count($b['id']); 
                                $ttdh = get_ttdh($b['status']);
                            ?>
                                <tr>
                                    <td><input type='checkbox' name="" id=""></td>
                                    <td><?php echo $b['id'] ?></td>
                                    <td><?php echo $b['name'] ?></td>
                                    <td><?php echo $countsp ?></td>
                                    <td><?php echo $b['total'] ?></td>
                                    <td><?php echo $ttdh ?></td>
                                    <td><a href="index.php?act=suahd&id=<?php echo $b['id'] ?>"><input type='button' value='Sửa'></a> 
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=addsanpham"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>