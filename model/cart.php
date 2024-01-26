<?php

    function them_hoadon($iduser, $name, $address, $tel, $email, $pttt, $date, $total){
        $sql = "INSERT INTO bill(iduser, name, address, tel, email, pttt, date, total) VALUES ('".$iduser."','".$name."','".$address."','".$tel."','".$email."','".$pttt."','".$date."','".$total."')";
        return pdo_execute_lastid($sql);
    }

    function them_giohang($iduser , $idpro, $img, $name, $price, $soluong, $thanhtien, $idhoadon){
        $sql = "INSERT INTO cart(iduser , idpro, img, name, price, soluong, thanhtien, idhoadon) VALUES ('".$iduser ."','".$idpro."','".$img."','".$name."','".$price."','".$soluong."','".$thanhtien."','".$idhoadon."')";
        return pdo_execute($sql);
    }

    function loadone_hoadon($idhoadon){
        $sql = "SELECT * FROM bill WHERE id = $idhoadon";
        $danhsach = pdo_query_one($sql);
        return $danhsach;
    }

    function loadall_giohang($idhoadon){
        $sql = "SELECT * FROM cart WHERE idhoadon = $idhoadon";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }

    function loadall_giohang_count($idhoadon){
        $sql = "SELECT * FROM cart WHERE idhoadon = $idhoadon";
        $danhsach = pdo_query($sql);
        return sizeof($danhsach);
    }

    function loadall_hoadon($iduser){
            $sql = "SELECT * FROM bill WHERE iduser = $iduser";
        $sql.= " ORDER BY id DESC";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }

    function get_ttdh($n){
        switch($n) {
            case 0: 
                $tt = "Đơn hàng mới";
                break;
            case 1: 
                $tt = "Đang xử lý";
                break;
            case 2: 
                $tt = "Đơn giao hàng";
                break;
            case 3: 
                $tt = "Hoàn tất";
                break;
            default:
                $tt = "Đơn hàng mới";
        }
        return $tt;
    }

    function capnhat_hoadon($id, $tthd){
        $sql = "UPDATE bill SET status='".$tthd."' WHERE id = '".$id."'";
        return pdo_execute($sql);
    }

    function xoa_hoadon($id){
        $sql = "DELETE FROM bill WHERE id = $id";
        pdo_execute($sql);
    }

    function xoa_hoadon2($id){
        $sql = "DELETE FROM cart WHERE idhoadon = $id";
        pdo_execute($sql);
    }

    function loadall_thongke(){
        $sql = "SELECT danhmuc.name as tendm, danhmuc.id as iddm, COUNT(sanpham.id) as soluong, MIN(sanpham.price) as minprice, MAX(sanpham.price) as maxprice, AVG(sanpham.price) as avgprice";
        $sql.= " FROM sanpham LEFT JOIN danhmuc on danhmuc.id = sanpham.iddm";
        $sql.= " GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
        return pdo_query($sql);
    }

?>