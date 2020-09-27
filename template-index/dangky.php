<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-end | Đăng ký</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/font-awesome/css/font-awesome.min.css">
    <style>
        h1 {
            background: url('../imgs/dangky1.png');
            background-size: cover;
            color: white;
            text-shadow: black 1px 1px 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Phần header  -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 shadow-lg my-md-5 my-sm-0 px-0">
                <h1 class="myfont text-center py-5">Đăng ký tài khoản</h1>
                <form action="" method="post" id="frm_dang_ky" name="frm_dang_ky" class="px-md-5 px-sm-0">
                    <fieldset class="mt-md-5 mt-sm-0">
                        <legend class="myfont mb-0">Phần thông tin cơ bản</legend>
                        <hr class="mt-0">
                        <div class="form-group">
                            <label for="ten">Họ và tên: </label>
                            <input type="text" name="ten" id="ten" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ngaysinh">Ngày sinh: </label>
                            <input type="date" id="ngaysinh" name="ngaysinh" class="form-control">
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Giới tính: </legend>
                                <div class="col-ms-10">
                                    <div class="form-check">
                                        <input type="radio" name="gioitinh" id="gioitinh_nam" class="form-check-input" value="1" checked>
                                        <label for="gioitinh_nam" class="form-check-label">Nam</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gioitinh" id="gioitinh_nu" class="form-check-input" value="0">
                                        <label for="gioitinh_nu" class="form-check-label">Nữ</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </fieldset>
                    <fieldset class="mt-md-5 mt-sm-0">
                        <legend class="myfont mb-0">Phần thông tin liên hệ</legend>
                        <hr class="mt-0">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email: </label>
                            <input type="mail" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dienthoai">Số điện thoại: </label>
                            <input type="tel" name="dienthoai" id="dienthoai" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa chỉ: </label>
                            <input type="text" name="diachi" id="diachi" class="form-control">
                        </div>
                    </fieldset>
                    <fieldset class="mt-md-5 mt-sm-0">
                        <legend class="myfont mb-0">Phần tài khoản</legend>
                        <hr class="mt-0">
                        <div class="form-group">
                            <label for="tendangnhap">Tên đăng nhập: </label>
                            <input type="text" name="tendangnhap" id="tendangnhap" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="matkhau">Mật khẩu: </label>
                            <input type="password" name="matkhau" id="matkhau" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nhaplaimatkhau">Nhập lại mật khẩu: </label>
                            <input type="password" name="nhaplaimatkhau" id="nhaplaimatkhau" class="form-control">
                        </div>
                    </fieldset>
                </form>
                <h1 class="py-5 m-0"></h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Phần footer  -->
    </div>
    <script src="/templateDoAn/vendor/jquery/jquery.js"></script>
    <script src="/templateDoAn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/localization/messages_vi.min.js"></script>
</body>

</html>