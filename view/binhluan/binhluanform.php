<?php
    $idpro = $_REQUEST['idpro'];
    session_start();
    ob_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    include "../../model/taikhoan.php";
    include "../../model/global.php";

    $allbinhluan = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style1.css">
    <style>
        .noidungbinhluan table {
            width: 90%;
            margin-left: 5%;
        }
        .noidungbinhluan table td:nth-child(1){
            width: 50%;
        }
        .noidungbinhluan table td:nth-child(2){
            width: 50%;
        }.noidungbinhluan table td:nth-child(3){
            width: 50%;
        }
    </style>
</head>
<body>
    

                    <div class="tieude">BÌNH LUẬN</div>
                    <div class="noidungbinhluan">
                        
                    <table>
                        <?php
                            foreach($allbinhluan as $bl){
                                extract($bl);
                                echo '<tr><td>'.$noidung.'</td>';
                                echo '<tr><td>'.$iduser.'</td>';
                                echo '<tr><td>'.$ngaybinhluan.'</td></td></tr>';
                            }
                        ?>
                    </table>
                        
                    </div>
                    <div class="dnbinhluan">
                        <?php if(isset($_SESSION['user']) && ($_SESSION['user'])!=""){ ?>
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                            <input type="input" name="noidung" id="">
                            <input type="submit" value="Gửi" name="guibinhluan">
                        </form>
                        <?php }else{ ?>
                            <h2 color="red">Đăng nhập để bình luận</h2>
                        <?php } ?>
                    </div>
<?php
    if(isset($_POST['guibinhluan']) && $_POST['guibinhluan']){
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date("H:i:a d/m/Y");
        them_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
?>
</body>
</html>