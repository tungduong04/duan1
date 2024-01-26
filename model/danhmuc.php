<?php
    function them_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(name) VALUES ('".$tenloai."')";
        pdo_execute($sql);
    }

    function xoa_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id = $id";
        pdo_query($sql);
    }

    function loadall(){
        $sql = "SELECT * FROM danhmuc order by id DESC";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }   

    function loadone($id){
        if($id > 0){
            $sql = "SELECT * FROM danhmuc WHERE id = $id";
            $danhmuc = pdo_query($sql);
            return $danhmuc;
        } else {
            return "";
        }
    }

    function capnhat_danhmuc($tenloai, $id){
        $sql = "UPDATE danhmuc SET name = '".$tenloai."' WHERE id = $id";
        pdo_query($sql);
    }

?>