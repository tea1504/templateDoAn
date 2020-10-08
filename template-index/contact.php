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
    include_once(__DIR__ . '/style.php');
    ?>
</head>

<body>
    <!--      Phần header     -->
    <?php
    include_once(__DIR__ . '/../layout/navbar.php');
    ?>
    <!-- Drop Phần header     -->
    
    <!--     Phần content         -->
    
    
    <!--Drop Phần content         -->
    <!--      Phần footer     -->
    <?php
    include_once(__DIR__ . '/../layout/footer.php');
    ?>
    <!-- Drop Phần footer     -->
    <!-- Liên kết js -->
    <?php
    include_once(__DIR__ . '/script.php');
    ?>
    <!-- Liên kết js -->
</body>

</html>