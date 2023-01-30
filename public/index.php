<?php
    require __DIR__ . '/../app/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/style.css">
    <script src="../app/js/scripts.js" defer></script>
    <title>Baigiamasis</title>
</head>
<body>
    <?php
        include('../app/views/header.php');
        include('../app/views/content.php');
        include('../app/views/footer.php');
    ?>
</body>
</html>