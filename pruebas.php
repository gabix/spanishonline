<?php
require_once('config'.DIRECTORY_SEPARATOR.'config.php');
$p = "nuevajome.php";

$h = new Hrefs();
$l = new SelectorDeLenguaje();
$l = $l->get_lenguaje();

$h->LlenarParaBootstrapTabs();
$t = new Textos($l, $h);

?>
<!DOCTYPE html>
<html lang="<?= $l ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $t->get('title') ?></title>
    <meta name="description" content="<?= $t->get('description') ?>" />
    <meta name="keywords" content="<?= $t->get('keywords') ?>" />
    <meta name="author" content="<?= $t->get('author') ?>" />

    <link rel="icon" href="favicon.ico" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/nuevajome.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?= $t->get('botProfe') ?>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/nuevajome.js"></script>
</body>
</html>