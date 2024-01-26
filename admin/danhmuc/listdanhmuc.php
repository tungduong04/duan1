<div class="row">
            <div class="row boxtitle">
                <h1>Danh sách loại hàng hóa</h1>
            </div>
            <div class="row formLH">
                <div class="row mb10 formDSLH">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã loại</th>
                                <th>Tên loại</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($danhsach as $key => $a): ?>
                                <tr>
                                    <td><input type='checkbox' name="" id=""></td>
                                    <td><?php echo $a['id'] ?></td>
                                    <td><?php echo $a['name'] ?></td>
                                    <td><a href="index.php?act=suadanhmuc&id=<?php echo $a['id'] ?>">
                                    <input type='button' value='Sửa'></a>  
                                      <a href="index.php?act=xoadanhmuc&id=<?php echo $a['id'] ?>">
                                      <input type='button' value='Xóa'></a></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddanhmuc"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>