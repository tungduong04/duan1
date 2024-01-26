<div class="row mb">
            <div class="boxtrai mr">
                <div class=" row mb chitietsanpham formdn">
                    <div class="tieude mb10">CẬP NHẬT TÀI KHOẢN</div>
                    <form action="index.php?act=capnhattaikhoan" method="post" enctype="multipart/form-data">
                        <?php 
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                            }
                        ?>
                        <div class="row mb10">
                            Email
                            <br>
                            <input type="email" name="email" id="" value="<?=$email?>">
                        </div>
                        <br>
                        <div class="row mb10">
                            Tên đăng nhập
                            <br>
                            <input type="text" name="user" id="" value="<?=$user?>">
                        </div>
                        <br>
                        <div class="row mb10">
                            Mật khẩu
                            <br>
                            <input type="password" name="pass" id="" value="<?=$pass?>">
                        </div>
                        <br>
                        <div class="row mb10">
                            Địa chỉ
                            <br>
                            <input type="text" name="address" id="" value="<?=$address?>">
                        </div>
                        <br>
                        <div class="row mb10">
                            Điện thoại
                            <br>
                            <input type="text" name="tel" id="" value="<?=$tel?>">
                        </div>
                        <br>
                        <div class="row mb10">
                            Ảnh đại diện
                            <br>
                            <img src="img/<?=$anh?>" alt="" width="200px" heigh="200px">
                            <input type="file" name="anhdaidien" id="">
                        </div>
                        <br>
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" value="Cập nhật" name="capnhat">
                        </div>  
                    </form>
                    <h2 class="thongbao_tk">
                        <?php
                            if(isset($thongbao) && $thongbao!=""){
                                echo $thongbao;
                            }
                        ?>
                    </h2>
                </div>
                <div class="row binhluan mb">
                    
                </div>
                <div class="row hangcungloai">
                        
                </div>
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
        </div>