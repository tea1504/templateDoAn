<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-end | Giỏ hàng</title>
    <?php include_once(__DIR__ . '/style.php') ?>
</head>

<body>
    <?php include_once(__DIR__ . '/../layout/header.php'); ?>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <table class="table table-striped table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center">
                                    Tên sản phẩm
                                </th>
                                <th class="text-center">
                                    Giá
                                </th>
                                <th class="text-center">
                                    Số lượng
                                </th>
                                <th class="text-center">
                                    Thành tiền
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle" style="width: 100px;">
                                    <a href="chitiet.php"><img src="/templateDoAn/imgs/BoHoaCrystalPearlonweb_compact.jpg" height="100px" width="100px" alt="hoa"></a>
                                </td>
                                <td class="align-middle">
                                    <a href="chitiet.php" class="text-dark myfont">Bó hoa Crystal Pear</a><br>
                                    <p>Mô tả sản phẩm</p>
                                </td>
                                <td class="align-middle text-right">
                                    130,000 VNĐ
                                </td>
                                <td class="align-middle">
                                    <input type="number" name="" id="" value="20" class="form-control">
                                </td>
                                <td class="align-middle text-right">
                                    2,600,000 VNĐ
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-danger">+</button>
                                    <button class="btn btn-success">-</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle" style="width: 100px;">
                                    <a href="chitiet.php"><img src="/templateDoAn/imgs/BoHoaCrystalPearlonweb_compact.jpg" height="100px" width="100px" alt="hoa"></a>
                                </td>
                                <td class="align-middle">
                                    <a href="chitiet.php" class="text-dark myfont">Bó hoa Crystal Pear</a><br>
                                    <p>Mô tả sản phẩm</p>
                                </td>
                                <td class="align-middle text-right">
                                    130,000 VNĐ
                                </td>
                                <td class="align-middle">
                                    <input type="number" name="" id="" value="2" class="form-control">
                                </td>
                                <td class="align-middle text-right">
                                    260,000 VNĐ
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-danger">+</button>
                                    <button class="btn btn-success">-</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle" style="width: 100px;">
                                    <a href="chitiet.php"><img src="/templateDoAn/imgs/BoHoaCrystalPearlonweb_compact.jpg" height="100px" width="100px" alt="hoa"></a>
                                </td>
                                <td class="align-middle">
                                    <a href="chitiet.php" class="text-dark myfont">Bó hoa Crystal Pear</a><br>
                                    <p>Mô tả sản phẩm</p>
                                </td>
                                <td class="align-middle text-right">
                                    130,000 VNĐ
                                </td>
                                <td class="align-middle">
                                    <input type="number" name="" id="" value="2" class="form-control">
                                </td>
                                <td class="align-middle text-right">
                                    260,000 VNĐ
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-danger">+</button>
                                    <button class="btn btn-success">-</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-right font-weight-bold">Tổng tiền</td>
                                <td class="text-right">3,120,000 VNĐ</td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
                <div class="text-right">
                    <button class="btn myfont text-danger btn-add">
                        <h1>Đặt hàng</h1>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php include_once(__DIR__ . '/../layout/footer.php'); ?>
    <?php include_once(__DIR__ . '/script.php'); ?>
</body>

</html>