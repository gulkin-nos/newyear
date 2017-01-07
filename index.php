<?php
header('Content-Type: text/html; charset=utf-8');
require_once '/libs/config.php';
require_once '/libs/myFunctions.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой проект на новогодние праздники</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row text-center">
        <p><span class="glyphicon glyphicon-wrench">
            </span>сайт находится в стадии разработки..</p>
    </div>
    <div class="row" id="mainMenuTop">
        <?php
        getMenu($menu, false);
        ?>    
    </div>
    <?php
    if (isset($_GET['page']) && trim(strip_tags($_GET['page'])) != '') {
        $page = '/pages/' . trim(strip_tags($_GET['page'])) . '.php';
    } else {
        $page = '/pages/index.php';
    }
    require_once $page;
    ?>

</body>

