
<?php
if(isset($_POST['submit'])){
    if($_POST['name']=="lathihuong" && $_POST['password']=="123456"){
        echo "Đăng nhập thành công <br/> Chào mừng bạn ," . $_POST['name'] . "<br/> Thời gian hiện tại đang login: <span id='hvn'></span><br/>";

    }else{
        echo "Đăng nhập thất bại"." <a href='index.php'>Logout</a>";
    }
 }
?>
<script>
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

    document.getElementById("hvn").innerHTML = time;
</script>