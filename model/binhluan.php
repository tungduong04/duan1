<?php
    
    function them_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) VALUES ('".$noidung."','".$iduser."','".$idpro."','".$ngaybinhluan."')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idpro){
        $sql = "SELECT * FROM binhluan bl INNER JOIN taikhoan tk ON bl.iduser = tk.id WHERE idpro = '".$idpro."' order by bl.id DESC";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }  

    function loadall_binhluan_admin($idpro){
        $sql = "SELECT * FROM binhluan WHERE 1";
        if($idpro > 0){
            $sql.=" AND idpro = '".$idpro."'";
        }
        $sql.=" ORDER BY id DESC";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }  

    function xoa_binhluan($id){
        $sql = "DELETE FROM binhluan WHERE id = $id";
        pdo_query($sql);
    }

?>
