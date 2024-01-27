<div class="row">
            <div class="row boxtitle mb">
                <h1>Danh sách hàng hóa</h1>
            </div>
            <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="keyword" id="">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php foreach($danhsach as $key => $c): ?>
                            <option value="<?php echo $c['id'] ?>"><?php echo $c['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="submit" name="listok" value="Search">
            </form>
            <div class="row formLH">
                <div class="row mb10 formDSLH">  
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Mô tả sản phẩm</th>
                                <th>Lượt xem</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($danhsachsp as $key => $b): ?>
                            <?php 
                            ?>
                                <tr>
                                    <td><input type='checkbox' name="" id=""></td>
                                    <td><?php echo $b['id'] ?></td>
                                    <td><?php echo $b['name'] ?></td>
                                    <td><img src="../img/<?php echo $b['img'] ?>" alt="" width="100px" height="100px"></td>
                                    <td><?php echo $b['price'] ?></td>
                                    <td><?php echo $b['mota'] ?></td>
                                    <td><?php echo $b['luotxem'] ?></td>
                                    <td><a href="index.php?act=suasp&id=<?php echo $b['id'] ?>"><input type='button' value='Sửa'></a>    <a href="index.php?act=xoasp&id=<?php echo $b['id'] ?>"><input type='button' value='Xóa'></a></td>
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
