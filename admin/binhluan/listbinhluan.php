<div class="row">
            <div class="row boxtitle mb">
                <h1>Danh sách bình luận</h1>
            </div>
            <div class="row formLH">
                <div class="row mb10 formDSLH">  
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>NỘI DUNG BÌNH LUẬN</th>
                                <th>ID USER</th>
                                <th>ID PRODUCT</th>
                                <th>NGÀY BÌNH LUẬN</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($danhsachbl as $key => $b): ?>
                                <tr>
                                    <td><input type='checkbox' name="" id=""></td>
                                    <td><?php echo $b['id'] ?></td>
                                    <td><?php echo $b['noidung'] ?></td>
                                    <td><?php echo $b['iduser'] ?></td>
                                    <td><?php echo $b['idpro'] ?></td>
                                    <td><?php echo $b['ngaybinhluan'] ?></td>
                                    <td><a href="index.php?act=xoabl&id=<?php echo $b['id'] ?>"><input type='button' value='Xóa'></a></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <div class="row mb10">
                   
                </div>
            </div>
        </div>