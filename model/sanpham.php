<?php
    function them_sanpham($tensp,$giasp,$mota,$fileName,$iddm){
        $sql = "INSERT INTO sanpham(name, price, img, mota, iddm) VALUES ('".$tensp."','".$giasp."','".$fileName."','".$mota."','".$iddm."')";
        pdo_execute($sql);
    }

    function xoa_sanpham($id){
        $sql = "DELETE FROM sanpham WHERE id = $id";
        pdo_query($sql);
    }

    function loadallsp($keyword, $iddm){
        $sql = "SELECT * FROM sanpham WHERE 1";
        // Tìm sản phẩm theo tên
        if($keyword != ''){
            //$sql.= "<noi dung>" -> nối câu lệnh
            $sql.= " AND name LIKE '%".$keyword."%'";
        }
        // Tìm sản phẩm theo danh mục
        if($iddm > 0){
            $sql.= " AND iddm = '".$iddm."'";
        }
        $sql.= " order by id DESC";
        $danhsach = pdo_query($sql);
        return $danhsach;
    } 

    function loadallsp_home(){
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,9";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }  

    function loadonesp($id){
        $sql = "SELECT * FROM sanpham WHERE id = $id";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }

    function loadsp_cungloai($id,$iddm){
        $sql = "SELECT * FROM sanpham WHERE iddm = $iddm AND id <> $id ORDER BY id DESC LIMIT 0,9";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }

    function capnhat_sanpham($tensp, $giasp, $mota, $fileName, $iddm, $id){
        $sql = "UPDATE sanpham SET name='".$tensp."',price='".$giasp."',img='".$fileName."',mota='".$mota."',iddm='".$iddm."' WHERE id = $id";
        pdo_query($sql);
    }

    function toplike(){
        $sql = "SELECT * FROM sanpham order by luotxem DESC LIMIT 0,10";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }
?>