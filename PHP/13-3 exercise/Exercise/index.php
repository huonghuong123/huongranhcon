<DOCTYPE!>
<html>
    <head>
        <title>Exercise 1</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style type="text/css">
            .container {
                background-image: url("background2.jpg");
            }

            .horizontal-line {
                width: 100%;
                text-align: center;
                border-bottom: 1px solid #C0C0C0;
                line-height: 0.1em;
                margin: 10px 0 20px;
            }

            .horizontal-line span {
                background: #fff;
                padding: 0 10px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-6"></div>
                <div class="col-sm-4 bg-light border rounded ">
                    <div class="horizontal-line ">
                        <span class="bg-light">Đăng Nhập Với</span>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4"><a href="#" class=" col-12 btn btn-success">Facebook</a></div>
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4"><a href="#" class="col-12 btn btn-danger">Google</a></div>
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4"><a href="#" class="col-12 btn btn-primary">Phone</a></div>
                    </div>
                    <div class="horizontal-line">
                        <span class="bg-light">Hoặc</span>
                    </div>
                    <form action="index.php" method="post">
                        <input type="text" name="username" class="form-control" placeholder="username"><br><br>
                        <input type="password" name="password" class="form-control" placeholder="password"><br><br>
                        <div class="float-left"><input type="checkbox"> Nhớ mật khẩu</div>
                        <div class="float-right"><a href="#">Quên mật khẩu?</a></div><br>
                        <p>Cần Email xác minh mới ?<a href="#">Gửi lại</a></p>
                        <input type="submit" name="submit" value="Đăng nhập" class="form-control btn-success">
                        <div class="horizontal-line">
                            <span class="bg-light">Tạo tài khoản mới</span>
                        </div>
                        <input type="submit" name="submit" value="Đăng ký" class="form-control btn-success">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>