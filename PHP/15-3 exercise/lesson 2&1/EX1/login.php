
<?php
if(isset($_POST['signin'])){
    if($_POST['name']=="lathihuong" && $_POST['password']=="123456"){
        echo "Đăng nhập thành công <br/> Chào mừng bạn ," . $_POST['name'] . "<br/> Thời gian hiện tại đang login: <br/>".date("Y-m-d h:i:sa");;

    }else{
        echo "Đăng nhập thất bại"." <a href='index.php'>Logout</a>";
    }
}
?>
