<div class="row">
            <div class="row boxtitle mb">
                <h1>Danh sách khách hàng</h1>
            </div>
            <form action="index.php?act=khachhang" method="post">
                        <input type="text" name="keyword" id="">
                        <select name="role" id="">
                            <option value="0" selected>Tất cả</option>
                            
                            <option value="1">1</option>
                            <option value="2">2</option>
                            
                        </select>
                        <input type="submit" name="listok" value="Search">
            </form>
            <div class="row formLH">
                <div class="row mb10 formDSLH">  
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Id</th>
                                <th>Tên khách hàng</th>
                                <th>Mật khẩu khách hàng</th>
                                <th>Email khách hàng</th>
                                <th>Địa chỉ khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Ảnh đại diện</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($danhsachtk as $key => $b): ?>
                          
                                <tr>
                                    <td><input type='checkbox' name="" id=""></td>
                                    <td><?php echo $b['id'] ?></td>
                                    <td><?php echo $b['user'] ?></td>
                                    <td><?php echo $b['pass'] ?></td>
                                    <td><?php echo $b['email'] ?></td>
                                    <td><?php echo $b['address'] ?></td>
                                    <td><?php echo $b['tel'] ?></td>
                                    <td><?php if(isset($b['anh']) && ($b['anh'])!=""){ ?>
                                        <img src="../img/<?php echo $b['anh'] ?>" alt="" width="50px" height="50px">
                                        <?php }; ?>
                                    </td>
                                    <td><?php echo $b['role'] ?></td>
                                    <td><a href="index.php?act=suatk&id=<?php echo $b['id'] ?>"><input type='button' value='Sửa'></a>    <a href="index.php?act=xoatk&id=<?php echo $b['id'] ?>"><input type='button' value='Xóa'></a></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addtaikhoan"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>