<?php
    require_once "FestivalSales.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KoolReport is an intuitive and flexible Open Source PHP Reporting Framework for faster and easier data report delivery.">
    <meta name="author" content="KoolPHP Inc">
    <meta name="keywords" content="php reporting framework">
    <link rel="shortcut icon" href="../../assets/images/bar.png">
    <title>UK Tango Festival 2019</title>

    <link href="../../assets/fontawesome/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/simpleline/simple-line-icons.min.css" rel="stylesheet">
    <link href="../../assets/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/theme/css/main.css" rel="stylesheet">


    <script type="text/javascript" src="../../assets/theme/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/theme/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include "../../helpers/nav.php"; ?>
<main class="container">
    <?php
    $festivalSales = new FestivalSales();
    $festivalSales->run()->render();
    ?>
</main>
<?php include "../../helpers/footer.php"; ?>
</body>
</html>