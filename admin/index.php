<?php
    include "header.php";
    include "../model/pdo.php";
    include "../Model/danhmuc.php";
    include "../Model/sanpham.php";
    include "../Model/taikhoan.php";
    include "../Model/binhluan.php";
    include "../Model/cart.php";    



    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case "danhmuc":
                $danhsach = loadall();
                include "danhmuc/listdanhmuc.php";
                break;

            case "adddanhmuc":
                if(isset($_POST['them']) && $_POST['them']){
                    $tenloai = $_POST['tenloai'];
                    them_danhmuc($tenloai);
                }
                include "danhmuc/add.php";
                break;
            
            case "suadanhmuc":
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    $danhmuc = loadone($id);
                }

                include "danhmuc/suadanhmuc.php";
                break;
            
            case "capnhatdanhmuc":
                if(isset($_POST['sua']) && ($_POST['sua'])){
                    $id = $_POST['id'];
                    $tenloai = $_POST['tenloai'];
                    capnhat_danhmuc($tenloai, $id);
                }
                $danhsach = loadall();
                include "danhmuc/listdanhmuc.php";
                break;

            case "xoadanhmuc":
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    xoa_danhmuc($id);
                }
                // Sau khi xóa xong gọi lại danh sách
                $danhsach = loadall();
                include "danhmuc/listdanhmuc.php";
                break;

                // Sản phẩm
            case "sanpham":
                if(isset($_POST['listok']) && $_POST['listok']){
                    $keyword = $_POST['keyword'];
                    $iddm = $_POST['iddm']; 
                }else{
                    $keyword = "";
                    $iddm = 0;
                }
                $danhsach = loadall();
                $danhsachsp = loadallsp($keyword, $iddm);
                include "sanpham/list.php";
                break;

            case "addsanpham":
                if(isset($_POST['themsp']) && $_POST['themsp']){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];

                    $targetDir = "../img/";
                    $tempFile = $_FILES['anhsp']['tmp_name'];
                    $fileName = $_FILES['anhsp']['name'];
                    $targetFile = $targetDir . $fileName;
                    $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                    $allow = array("jpg","jpeg","png","gif");
                    if(in_array($imgType,$allow)){
                        move_uploaded_file($tempFile,$targetFile);
                    }
                    them_sanpham($tensp,$giasp,$mota,$fileName,$iddm);
                }
                $danhsach = loadall();
                include "sanpham/add.php";
                break;
                
            case "suasp":
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    $onesp = loadonesp($id);
                }
                $danhsachsp = loadallsp('',0);
                $danhsach = loadall();
                include "sanpham/fix.php";
                break;
            
            case "capnhatsanpham":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];

                    $targetDir = "../img/";
                    $tempFile = $_FILES['anhsp']['tmp_name'];
                    $fileName = $_FILES['anhsp']['name'];
                    $targetFile = $targetDir . $fileName;
                    $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                    $allow = array("jpg","jpeg","png","gif");
                    if(in_array($imgType,$allow)){
                        move_uploaded_file($tempFile,$targetFile);
                    }
                    capnhat_sanpham($tensp, $giasp, $mota, $fileName, $iddm, $id);
                }
                $danhsachsp = loadallsp('', 0);
                include "sanpham/list.php";
                break;

            case "xoasp":
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    xoa_sanpham($id);
                }
                // Sau khi xóa xong gọi lại danh sách
                $danhsachsp = loadallsp('', 0);
                include "sanpham/list.php";
                break;

                 // Khách hàng
            case "khachhang":
                if(isset($_POST['listok']) && $_POST['listok']){
                    $keyword = $_POST['keyword'];
                    $role = $_POST['role']; 
                }else{
                    $keyword = "";
                    $role = 0;
                }
                $danhsachtk = loadall_taikhoan($keyword,$role);
                include "khachhang/listkhachhang.php";
                break;
                case "suatk":
                    if(isset($_GET['id']) && $_GET['id'] > 0){
                        $taikhoan = loadone_taikhoan($_GET['id']);
                    }
                    // $danhsachtk = loadall_taikhoan();
                    include "khachhang/suakhachhang.php";
                    break;
                    case "capnhattaikhoan":
                        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $id = $_POST['id'];
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
        
                            $targetDir = "../img/";
                            $tempFile = $_FILES['anh']['tmp_name'];
                            $fileName = $_FILES['anh']['name'];
                            $targetFile = $targetDir . $fileName;
                            $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                            $allow = array("jpg","jpeg","png","gif");
                            if(in_array($imgType,$allow)){
                                move_uploaded_file($tempFile,$targetFile);
                            }
                            if($fileName!=""){
                                capnhat_taikhoan($user, $pass, $email, $address, $tel, $fileName, $id);
                            } else {
                                $fileName = "f48fea1fc336b10b7d26f9244e366551.jpg";
                                capnhat_taikhoan($user, $pass, $email, $address, $tel, $fileName, $id);
                            }
                        }
                        $danhsachtk = loadall_taikhoan('',0);
                        include "khachhang/listkhachhang.php";
                        break;
                    case "addtaikhoan":
                        if(isset($_POST['themtk']) && ($_POST['themtk'])){
                            $id = $_POST['id'];
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
        
                            $targetDir = "../img/";
                            $tempFile = $_FILES['anh']['tmp_name'];
                            $fileName = $_FILES['anh']['name'];
                            $targetFile = $targetDir . $fileName;
                            $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                            $allow = array("jpg","jpeg","png","gif");
                            if(in_array($imgType,$allow)){
                                move_uploaded_file($tempFile,$targetFile);
                            }
                            if($fileName!=""){
                                them_taikhoan2($user,$pass,$email,$address,$tel,$fileName);
                            } else{
                                $fileName = "f48fea1fc336b10b7d26f9244e366551.jpg";
                                them_taikhoan2($user,$pass,$email,$address,$tel,$fileName);
                            }
                        }
                        include "khachhang/addkhachhang.php";
                        break;
                    
                    case "binhluan":
                        $danhsachbl = loadall_binhluan_admin(0);
                        include "binhluan/listbinhluan.php";
                        break;
                        include "binhluan.php";
                        break;
                    case "xoabl":
                        if(isset($_GET['id']) && ($_GET['id'])>0){
                            $id = $_GET['id'];
                            xoa_binhluan($id);
                        }
                        $danhsachbl = loadall_binhluan_admin(0);
                        include "binhluan/listbinhluan.php";
                        break;
                    
                    case "hoadon":
                        if(isset($_POST['listok']) && ($_POST['listok'])){
                            $keyword = $_POST['keyword'];
                        } else{
                            $keyword = 0;
                        }
                        $listbill = loadall_hoadon(0,$keyword);
                        include "hoadon/listbill.php";
                        break;
                    case "suahd":
                        if(isset($_GET['id']) && ($_GET['id'])>0){
                            $id = $_GET['id'];
                            $onebill = loadone_hoadon($id);
                        }
                        include "hoadon/fixbill.php";
                        break;
                    
                    case "capnhathd":
                        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $id = $_POST['id'];
                            $tthd = $_POST['tthd'];
                            capnhat_hoadon($id, $tthd);
                        }
                        $listbill = loadall_hoadon(0,0);
                        include "hoadon/listbill.php";
                        break;
        
                    case "xoadh":
                        if(isset($_GET['id']) && ($_GET['id'])>0){
                            $id = $_GET['id'];
                            xoa_hoadon2($id);
                            xoa_hoadon($id);
                        }
                        $listbill = loadall_hoadon(0,0);
                        include "hoadon/listbill.php";
                        break;
        
                    case "thongke":
                        $list = loadall_thongke();
                        include "thongke/listthongke.php";
                        break;
                    case "bieudo":
                        $list = loadall_thongke();
                        include "thongke/bieudo.php";
                        break;
                    default:
                        include "home.php";
                        break;
                }
            }else {
                include "home.php";
            }
            include "footer.php";
?>