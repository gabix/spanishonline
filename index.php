<?php
require_once('config'.DIRECTORY_SEPARATOR.'config.php');

$l = new SelectorDeLenguaje();
//require_once("lenguajes/" . $l->get_lenguaje() . ".php");

$t = new Textos();
$t->LlenarConLenguaje($l->get_lenguaje())

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $t->get('title') ?></title>
    <meta name="description" content="<?= $t->get('description') ?>" />
    <meta name="keywords" content="<?= $t->get('keywords') ?>" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/micss.css" />
    <script type="text/javascript" src="js/mijs.js"></script>
</head>

<body>
    <div id="d_tarj">
        <div id="d_icos">
            <a href="#" onclick="icoclick(0); return false;" id="ico0" class="select b_ico" title="<?= $t->get('l_botInicio'); ?>">
                <img class="im_ico" src="img/House_outline_512.png" alt="<?= $t->get('l_botInicio'); ?>" /></a>
            <a href="#" onclick="icoclick(1); return false;" id="ico1" class="b_ico" title="<?= $t->get('l_botCurs'); ?>">
                <img class="im_ico" src="img/seat7.png" alt="<?= $t->get('l_botCurs'); ?>" /></a>
            <a href="#" onclick="icoclick(2); return false;" id="ico2" class="b_ico" title="<?= $t->get('l_botProf'); ?>">
                <img class="im_ico" src="img/fruit106.png" alt="<?= $t->get('l_botProf'); ?>" /></a>
            <a href="#" onclick="icoclick(3); return false;" id="ico3" class="b_ico" title="<?= $t->get('l_botCont'); ?>">
                <img class="im_ico" src="img/student72.png" alt="<?= $t->get('l_botCont'); ?>" /></a>
        </div>

        <div id="d_cont0" class="d_contenido">
            <h1><?= $t->get('title') ?></h1>
            <h3><?= $t->get('l_subTit'); ?></h3>
            <hr />
            <?= $t->get('l_inicio'); ?>
        </div>

        <div id="d_cont1" class="d_contenido" style="display:none">
            <h1><?= $t->get('title') ?></h1>
            <h3><?= $t->get('l_subTit'); ?></h3>
            <hr />
            <?= $t->get('l_curs'); ?>
        </div>

        <div id="d_cont2" class="d_contenido" style="display:none">
            <h1><?= $t->get('title') ?></h1>
            <h3><?= $t->get('l_subTit'); ?></h3>
            <hr />
            <?= $t->get('l_prof'); ?>
        </div>

        <div id="d_cont3" class="d_contenido" style="display:none">
            <h1><?= $t->get('title') ?></h1>
            <h3><?= $t->get('l_subTit'); ?></h3>
            <hr />
            <?= $t->get('l_contacto'); ?>
            <p class="p_it"><img class="im_contacto" src="img/mail-forward-3.png" alt="E-mail: " /><a href="mailto:<?= $t->get('mail') ?>?subject=Consulta%20(Ida%20y%20Vuelta%20site)">veronicahopp@gmail.com</a></p>
            <p class="p_it"><img class="im_contacto" src="img/phone-2.png" alt="<?= $t->get('l_tel'); ?>" /><?= $t->get('telefono') ?></p>
            <p class="p_it"><img class="im_contacto" src="img/skype.png" alt="Skype: " /><?= $t->get('usuario_skype') ?></p>
        </div>
        
        <div id="d_felchitas">
            <button class="b_flechitas" onclick="flechlick(-1)"><img class="im_flechitas" src="img/arrLeft.png" alt="left" /></button>
            <button class="b_flechitas" onclick="flechlick(1)"><img class="im_flechitas" src="img/arrRight.png" alt="right" /></button>
        </div>
        
        <p style="clear: both;"></p>
    </div>    
    
    <div id="d_banderitas">
        <a href="index.php?l=esp"><img class="im_banderitas" src="img/flags-spain.png" alt="espa&ntilde;ol" /></a>
        <a href="index.php?l=eng"><img class="im_banderitas" src="img/flags-united_kingdom.png" alt="english" /></a>
        <a href="index.php?l=hol"><img class="im_banderitas" src="img/flags-netherlands.png" alt="nederlands" /></a>
    </div>
    
</body>
</html>

