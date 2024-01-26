<div class="row mb">
            <div class="boxtrai mr">
                <div class=" row mb chitietsanpham formdn">
                    <div class="tieude mb10">ĐĂNG KÝ TÀI KHOẢN</div>
                    <form action="index.php?act=dangky" method="post">
                        <div class="row mb10">
                            Email
                            <br>
                            <input type="email" name="email" id="">
                        </div>
                        <br>
                        <div class="row mb10">
                            Tên đăng nhập
                            <br>
                            <input type="text" name="user" id="">
                        </div>
                        <br>
                        <div class="row mb10">
                            Mật khẩu
                            <br>
                            <input type="password" name="pass" id="">
                        </div>
                        <br>
                        <div class="row mb10">
                            <input type="submit" value="Đăng ký" name="dangky">
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