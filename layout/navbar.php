<style>
    a.my_nav {
        color: #dc3545 !important;
        border: 2px solid #dc3545;
        padding: 2px;
        margin: 5px 10px;
    }

    #search {
        width: 1370px;
    }

    .dot {
        position: relative;
    }

    .dot::after {
        position: absolute;
        content: "";
        height: 5px;
        width: 5px;
        transform: rotate(45deg);
        background: #9a9da0;
        right: -10px;
        top: 22px;
    }
</style>
<div class="container-fluid">
    <ul class="nav border-bottom">
        <li class="nav-item text-danger pt-2">
            <h6 class="nav-link"><i class="fa fa-phone"></i> Phone: (090) 0922299818; (090) 863954</h6>
        </li>
        <li class="nav-item text-danger pt-2">
            <h6 class="nav-link"><i class="fa fa-clock-o" aria-hidden="true"></i> We are open: Mn-Fr: 8am - 10pm</h6>
        </li>
        <li class="nav-item ml-auto ">
            <a href="" class="nav-link my_nav">Đánh giá</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link my_nav">Góp ý</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link my_nav">Đăng nhập</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link my_nav">Đăng ký</a>
        </li>
    </ul>
    <ul class="nav py-2 border-bottom">
        <a class="navbar-brand mr-3" href="#">
            <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/logo-228x30.png">
        </a>
        <form id="search" class="p-1">
            <div class="form-group row">
                <div class="col-lg-11 text-center">
                    <input class="form-control hoa-form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-lg-1 text-center pt-2">
                    <button class="btn btn-outline-success ml-auto my-btn-cir" type="submit">Search</button>
                </div>
            </div>
        </form>
        <li class="nav-item pt-2">
            <a href="" class="nav-link my_nav">
                Giỏ hàng của bạn: 0
            </a>
        </li>

    </ul>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item dropdown mx-2 dot">
                    <a class="nav-link" href="#" id="chude1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chủ đề
                    </a>
                    <div class="dropdown-menu" aria-labelledby="chude1" id="subchude1">
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                    </div>
                </li>
                <li class="nav-item dropdown mx-2 dot">
                    <a class="nav-link" href="#" id="chude2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chủ đề
                    </a>
                    <div class="dropdown-menu" aria-labelledby="chude2" id="subchude2">
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                    </div>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link" href="#" id="chude3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chủ đề
                    </a>
                    <div class="dropdown-menu" aria-labelledby="chude3" id="subchude3">
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                        <a class="dropdown-item" href="#">Sinh nhật</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
</div>