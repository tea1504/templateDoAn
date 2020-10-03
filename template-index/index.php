<?php
if (session_id() === '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
         include_once( __DIR__ . '/style.php');
    ?>
</head>
<body>
    <!--      Phần header     -->
        <?php
            include_once( __DIR__ . '/../layout/header.php');
        ?>
    <!-- Drop Phần header     -->



    <!--     Phần content         -->
    
    <!--Drop Phần content         -->

    
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
                <div class="CSSgal">
                    <!-- Don't wrap targets in parent -->
                    <s id="s1"></s> 
                    <s id="s2"></s>
                    <s id="s3"></s>
                    <s id="s4"></s>

                    <div class="slider">
                    <div>
                        <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-3-1970x717.jpg">
                    </div>
                    <div class="img_silder">
                        <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-1-1970x717.jpg">
                    </div>
                    <div style="background:#e95;">
                        <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-2-1970x717.jpg">
                    </div>
                    </div>

                  <!--   <div class="prevNext">
                        <div><a href="#s4"></a><a href="#s2"></a></div>
                        <div><a href="#s1"></a><a href="#s3"></a></div>
                        <div><a href="#s2"></a><a href="#s4"></a></div>
                        <div><a href="#s3"></a><a href="#s1"></a></div>
                    </div> -->

                    <div class="bullets">
                        <a href="#s1">1</a>
                        <a href="#s2">2</a>
                        <a href="#s3">3</a>
                        <a href="#s4">4</a>
                    </div>
                </div>
        </div>
    </div>
    <!--      Phần footer     -->
        <?php
                include_once( __DIR__ . '/../layout/footer.php');
        ?>
    <!-- Drop Phần footer     -->



    <!-- Liên kết js -->
    <?php
         include_once( __DIR__ . '/script.php');
    ?>
    <!-- Liên kết js -->

</body>
</html>
