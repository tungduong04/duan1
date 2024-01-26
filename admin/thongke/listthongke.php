<div class="row">
            <div class="row boxtitle mb">
                <h1>THỐNG KÊ SẢN PHẨM</h1>
            </div>
            <div class="row formLH">
                <div class="row mb10 formDSLH">  
                    <table>
                        <thead>
                            <tr>
                                <th>MÃ DANH MỤC</th>
                                <th>TÊN DANH MỤC</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>GIÁ TRUNG BÌNH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $b): ?>
                                <tr>
                                    <td><?php echo $b['iddm'] ?></td>
                                    <td><?php echo $b['tendm'] ?></td>
                                    <td><?php echo $b['soluong'] ?></td>
                                    <td><?php echo $b['maxprice'] ?></td>
                                    <td><?php echo $b['minprice'] ?></td>
                                    <td><?php echo $b['avgprice'] ?></td>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb10">
                    <!-- <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn"> -->
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
            </div>
        </div>