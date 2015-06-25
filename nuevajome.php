<?php
require_once('config'.DIRECTORY_SEPARATOR.'config.php');
$p = "nuevajome.php";

$h = new Hrefs();
$h->LlenarParaBootstrapTabs();

$l = new SelectorDeLenguaje();
$t = new Textos();
$t->LlenarConLenguaje($l->get_lenguaje(), $h);
?>
<!DOCTYPE html>
<html lang="<?= $l->get_lenguaje(); ?>">
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
<div id="bg">
    <img id="im_fondo" src="img/fondos/unaRaveRural.jpg" />
</div>

<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">

<!-- aca la navbar!! -->
<div class="masthead clearfix">
    <div class="inner">
        <nav>
            <h3 class="masthead-brand"><?= $t->get('title') ?></h3>
            <ul class="nav masthead-nav">
                <li class="active" id="li_home">
                    <img class="im_ico" src="img/menuIcos/blanco_casa.png" alt="<?= $t->get('l_botInicio'); ?>" />
                    <a <?= $h->get('home')?>><?= $t->get('l_botInicio'); ?></a>
                </li>
                <li id="li_cursos">
                    <img class="im_ico" src="img/menuIcos/blanco_pupitre.png" alt="<?= $t->get('l_botCursos'); ?>" />
                    <a <?= $h->get('cursos')?>><?= $t->get('l_botCursos'); ?></a>
                </li>
                <li id="li_profe">
                    <img class="im_ico" src="img/menuIcos/blanco_manzana.png" alt="<?= $t->get('l_botProfe'); ?>" />
                    <a <?= $h->get('profe')?>><?= $t->get('l_botProfe'); ?></a>
                </li>
                <li id="li_contacto">
                    <img class="im_ico" src="img/menuIcos/blanco_contacto.png" alt="<?= $t->get('l_botContacto'); ?>" />
                    <a <?= $h->get('contacto')?>><?= $t->get('l_botContacto'); ?></a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- aca las tabs!! -->
<div id="myTabContent" class="inner cover tab-content">
    <div id="d_home" class="tab-pane fade in active" role="tabpanel">
        <h1><?= $t->get('l_subTit'); ?></h1>
        <hr />
        <div class="text-justify">
<?= $t->get('l_inicio'); ?>
        </div>
    </div>

    <div id="d_cursos" class="tab-pane fade" role="tabpanel">
        <h1><?= $t->get('l_subTit'); ?></h1>
        <hr />
        <div class="text-justify">
<?= $t->get('l_cursos'); ?>
        </div>
    </div>

    <div id="d_profe" class="tab-pane fade" role="tabpanel">
        <h1><?= $t->get('l_subTit'); ?></h1>
        <hr />
        <div class="text-justify">
<?= $t->get('l_profe'); ?>
        </div>
    </div>

    <div id="d_contacto" class="tab-pane fade" role="tabpanel">
        <h1><?= $t->get('l_subTit'); ?></h1>
        <hr />
        <div class="text-justify">
<?= $t->get('l_contacto'); ?>

            <ul class="fa-ul">
                <li>
                    <i class="fa fa-envelope-square fa-2x"></i>
                    <a href="mailto:<?= $t->get('mail') ?>?subject=Consulta%20(Spanish%20Online%20site)"><?= $t->get('mail') ?></a>
                </li>
                <li>
                    <i class="fa fa-phone-square fa-2x"></i>
                    <?= $t->get('telefono') ?>
                </li>
                <li>
                    <i class="fa fa-skype fa-2x"></i>
                    <?= $t->get('usuario_skype') ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- aca el footer con las banderitas -->
<div class="mastfoot">
    <div class="inner">
        <p>
            <?= $t->get('l_lenguaje') ?>:&nbsp;&nbsp;
            <a href="<?= $p ?>?l=es"><img class="im_banderitas" src="img/flags/flags-spain.png" alt="espa&ntilde;ol" /></a>
            &middot;
            <a href="<?= $p ?>?l=en"><img class="im_banderitas" src="img/flags/flags-united_kingdom.png" alt="english" /></a>
            &middot;
            <a href="<?= $p ?>?l=nl"><img class="im_banderitas" src="img/flags/flags-netherlands.png" alt="nederlands" /></a>
        </p>
    </div>
</div>

        </div>

    </div>
</div>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/nuevajome.js"></script>
</body>
</html>