<?php
    session_start();
    ob_start();
    include "Model/pdo.php";
    include "Model/sanpham.php";
    include "view/header.php";
    include "Model/danhmuc.php";
    include "Model/taikhoan.php";
    include "Model/cart.php";



    // Load 9 sản phẩm mới nhất
    $spmoi = loadallsp_home();
    // Load tất cả danh mục
    $dmmoi = loadall();
    // Load top 10 yêu thích
    $toplike = toplike();
   
    // Tạo giỏ hàng
    if(!isset($_SESSION['mycart'])){ $_SESSION['mycart'] = []; };
    if(isset($_GET['act']) && ($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['timkiem']) && $_POST['timkiem']){
                    $keyword = $_POST['keyword'];
                } else {
                    $keyword = "";
                }

                if(isset($_GET['id']) && $_GET['id'] > 0){
                    // Lấy id danh mục
                    $iddm = $_GET['id'];
                } else {
                    $iddm = 0;
                }

                // Lấy tên danh mục
                $ten_danhmuc = loadone($iddm);
                $dssp = loadallsp($keyword, $iddm);
                include "view/sanpham.php";
                break;
                 
            case 'sanphamct':
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    // Sản phẩm chi tiết
                    $id = $_GET['id'];
                    $chitiet = loadonesp($id);
                    // Sản phẩm cùng loại
                    foreach ($chitiet as $a):
                    // Lấy id danh mục
                    $iddm = $a['iddm'];
                    $sp_cungloai = loadsp_cungloai($id,$iddm);
                    endforeach;
                    include "view/sanphamct.php";
                } else {
                    // include "view/home.php";
                }
                break;
                // Tài khoản
            case 'dangky':
                if(isset($_POST['dangky']) && $_POST['dangky']){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    them_taikhoan($email,$user,$pass);
                    $thongbao = "Đăng ký thành công!";
                }
                include "view/dangky.php";
                break;
                case 'dangnhap':
                    if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $role = checkuser($user,$pass);
                        $getuser = getuser($user,$pass);
                        if($role == 1){
                            $_SESSION['role'] = $role;
                            $_SESSION['user'] = $getuser;
                            // $_SESSION['thongtinuser'] = $getuser;
                            header('location: index.php');
                        } else if($role == 2){
                            $_SESSION['role'] = $role;
                            $_SESSION['user'] = $getuser;
                            // $_SESSION['thongtinuser'] = $getuser;
                            header('location: index.php');
                        } else{
                            $thongbao = "Sai tài khoản hoặc mật khẩu";
                            
                        }
                    }
                    break;

                    case 'dangxuat':
                        if(isset($_SESSION['role'])){
                            unset ($_SESSION['role']);
                            unset ($_SESSION['user']);
                            header('location: index.php');
                        }
                        break;

                    case 'capnhattaikhoan':
                        if(isset($_POST['capnhat']) && $_POST['capnhat']){
                            $email = $_POST['email'];
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
                            $id = $_POST['id'];
        
                            $targetDir = "img/";
                            $tempFile = $_FILES['anhdaidien']['tmp_name'];
                            $anh = $_FILES['anhdaidien']['name'];
                            $targetFile = $targetDir . $anh;
                            $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                            $allow = array("jpg","jpeg","png","gif");
                            if(in_array($imgType,$allow)){
                                move_uploaded_file($tempFile,$targetFile);
                            }
                            if($anh!=""){
                                capnhat_taikhoan($user, $pass, $email, $address, $tel, $anh, $id);
                            } else{
                                $anh = "f48fea1fc336b10b7d26f9244e366551.jpg";
                                capnhat_taikhoan($user, $pass, $email, $address, $tel, $anh, $id);
                            }
                            
                            // cập nhật lại cái SESSION user mới
                            $_SESSION['user'] = getuser($user,$pass);
                            header('location: index.php?act=capnhattaikhoan');
                        }
                        include "view/capnhattaikhoan.php";
                        break;
                        case 'quenmatkhau':
                            if(isset($_POST['guiemail']) && $_POST['guiemail']){
                                $email = $_POST['email'];
                                $checkemail = checkemail($email);
                                if($checkemail == 0){
                                    $thongbao = "Email không tồn tại";
                                } else{
                                    $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass']."";
                                }
                            }
                            include "view/quenmatkhau.php";
                            break;
                            // giỏ hàng
            case "themgiohang":
                if(isset($_POST['themgiohang']) && ($_POST['themgiohang'])){
                    $id = $_POST['id']; //idpro
                    $name = $_POST['name'];
                    $anh = $_POST['anh'];
                    $gia = $_POST['gia'];
                    $soluong = 1;
                    $thanhtien = $soluong * $gia;
                    // $spadd = [$id, $name, $anh, $gia, $soluong, $thanhtien];
                    $spadd = [$id, $name, $anh, $gia, $soluong, $thanhtien];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "view/giohang/viewcart.php";
                break;
            case "deletecart":
                if(isset($_GET['idcart'])){
                    //Xóa từng sp
                    $id = $_GET['idcart'];
                    //           mảng, vị trí cần xóa, xóa bao nhiêu phần tử
                    array_splice($_SESSION['mycart'],$id,1);
                } else{
                    //Xóa tất cả sp
                    $_SESSION['mycart'] = [];
                }
                header('location: index.php?act=themgiohang');
                break;
            case "hoadon":
                include "view/giohang/bill.php";
                break;
            //Tạo hóa đơn
            case "xacnhanhoadon":
                if(isset($_POST['xacnhanhoadon']) && ($_POST['xacnhanhoadon'])){
                    if(isset($_SESSION['user']) && ($_SESSION['user'])!=""){
                        $iduser = $_SESSION['user']['id'];
                    } else{
                        $iduser = 0;
                    }
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $pttt = $_POST['pttt'];
                    $date = date("H:i:a d/m/Y");
                    $total = $_POST['tong'];

                    // Làm song song 2 việc vừa tạo hóa đơn vừa tạo giỏ hàng
                    $idhoadon = them_hoadon($iduser, $name, $address, $tel, $email, $pttt, $date, $total);

                    //Thêm giỏ hàng: $_session['mycart'] & idhoadon;
                    foreach($_SESSION['mycart'] as $a){
                        them_giohang($_SESSION['user']['id'],$a[0],$a[2],$a[1],$a[3],$a[4],$a[5],$idhoadon);
                    }
                    // Sau khi đồng ý đặt hàng thì làm rỗng giỏ hàng
                    $_SESSION['mycart'] = [];

                }
                $listhoadon = loadone_hoadon($idhoadon);
                $listgiohang = loadall_giohang($idhoadon);
                include "view/giohang/billcomform.php";
                break;
                
            case "hoadoncuatoi":
                $mybill = loadall_hoadon($_SESSION['user']['id']);
                include "view/giohang/mybill.php";
                break;
            

            case'gioithieu':
                include "view/gioithieu.php";
                break;
                
            case'lienhe':
                include "view/lienhe.php";
                break;
                default:
                include "view/home.php";
                break;
    }
}else{
        include "view/home.php";

}
    include "view/footer.php";
?>