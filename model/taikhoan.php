<?php

    function them_taikhoan($email,$user,$pass){
        $sql = "INSERT INTO taikhoan(user, pass, email) VALUES ('".$user."','".$pass."','".$email."')";
        pdo_execute($sql);
    }
    //admin
    function them_taikhoan2($user,$pass,$email,$address,$tel,$anh){
        $sql = "INSERT INTO taikhoan(user, pass, email, address, tel, anh) VALUES ('".$user."','".$pass."','".$email."','".$address."','".$tel."','".$anh."')";
        pdo_execute($sql);
    }

    function checkuser($user,$pass){
        $sql = "SELECT * FROM taikhoan WHERE user = '".$user."' AND pass = '".$pass."'";
        $ketqua = pdo_query_one($sql);
        // Kiểm tra tài khoản có tồn tại hay không và check vai trò của tài khoản đó
        if(is_array($ketqua)){
            return $ketqua['role'];
        }
        else{
            return 0;
        }
    }

    function checkemail($email){
        $sql = "SELECT * FROM taikhoan WHERE email = '".$email."'";
        $ketqua = pdo_query_one($sql);
        // Kiểm tra email có tồn tại hay không
        if(is_array($ketqua)){
            return $ketqua;
        }
        else{
            return 0;
        }
    }

    // Lấy thông tin tài khoản
    function getuser($user,$pass){
        $sql = "SELECT * FROM taikhoan WHERE user = '".$user."' AND pass = '".$pass."'";
        $ketqua = pdo_query_one($sql);
        return $ketqua; 
    }

    function capnhat_taikhoan($user, $pass, $email, $address, $tel,  $id){
        $sql = "UPDATE taikhoan SET user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' WHERE id = '".$id."'";
        pdo_query($sql);
    }
    
    function loadall_taikhoan($keyword, $role){
        $sql = "SELECT * FROM taikhoan WHERE 1";
        // Tìm sản phẩm theo tên
        if($keyword != ''){
            //$sql.= "<noi dung>" -> nối câu lệnh
            $sql.= " AND user LIKE '%".$keyword."%'";
        }
        // Tìm sản phẩm theo danh mục
        if($role > 0){
            $sql.= " AND role = '".$role."'";
        }
        $sql.= " order by id DESC";
        $danhsach = pdo_query($sql);
        return $danhsach;
    }  

    function loadone_taikhoan($id){
        $sql = "SELECT * FROM taikhoan WHERE id = '".$id."'";
        $danhsach = pdo_query($sql);
        return $danhsach;
    } 

?>