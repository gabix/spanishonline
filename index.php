<?php
require_once('config'.DIRECTORY_SEPARATOR.'config.php');

$leng = new SelectorDeLenguaje();
require_once("lenguajes/" . $leng->get_lenguaje() . ".php");
$txts = new Textos();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <title><?= $txts->get('title') ?></title>
    <meta name="description" content="<?= $txts->get('description') ?>" />
    <meta name="keywords" content="<?= $txts->get('keywords') ?>" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/micss.css" />
    <script type="text/javascript" src="js/mijs.js"></script>
</head>

<body>
    <div id="d_tarj">
        <div id="d_icos">
            <a href="#" onclick="icoclick(0); return false;" id="ico0" class="select b_ico" title="<?php echo $l_icos['bot_inicio']; ?>">
                <img class="im_ico" src="img/House_outline_512.png" alt="<?php echo $l_icos['bot_inicio']; ?>" /></a>
            <a href="#" onclick="icoclick(1); return false;" id="ico1" class="b_ico" title="<?php echo $l_icos['bot_curs']; ?>">
                <img class="im_ico" src="img/seat7.png" alt="<?php echo $l_icos['bot_curs']; ?>" /></a>
            <a href="#" onclick="icoclick(2); return false;" id="ico2" class="b_ico" title="<?php echo $l_icos['bot_prof']; ?>">
                <img class="im_ico" src="img/fruit106.png" alt="<?php echo $l_icos['bot_prof']; ?>" /></a>
            <a href="#" onclick="icoclick(3); return false;" id="ico3" class="b_ico" title="<?php echo $l_icos['bot_cont']; ?>">
                <img class="im_ico" src="img/student72.png" alt="<?php echo $l_icos['bot_cont']; ?>" /></a>
        </div>

        <div id="d_cont0" class="d_contenido">
            <h1><?= $txts->get('title') ?></h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php echo $l_inicio; ?>
        </div>

        <div id="d_cont1" class="d_contenido" style="display:none">
            <h1><?= $txts->get('title') ?></h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php echo $l_curs; ?>
        </div>

        <div id="d_cont2" class="d_contenido" style="display:none">
            <h1><?= $txts->get('title') ?></h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php echo $l_prof; ?>
        </div>

        <div id="d_cont3" class="d_contenido" style="display:none">
            <h1><?= $txts->get('title') ?></h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php echo $l_cont['html']; ?>
            <p class="p_it"><img class="im_contacto" src="img/mail-forward-3.png" alt="E-mail: " /><a href="mailto:<?= $txts->get('mail') ?>?subject=Consulta%20(Ida%20y%20Vuelta%20site)">veronicahopp@gmail.com</a></p>
            <p class="p_it"><img class="im_contacto" src="img/phone-2.png" alt="<?php echo $l_cont['tel']; ?>" /><?= $txts->get('telefono') ?></p>
            <p class="p_it"><img class="im_contacto" src="img/skype.png" alt="Skype: " /><?= $txts->get('usuario_skype') ?></p>
        </div>
        
        <div id="d_felchitas">
            <button class="b_flechitas" onclick="flechlick(-1)"><img class="im_flechitas" src="img/arrLeft.png" alt="left" /></button>
            <button class="b_flechitas" onclick="flechlick(1)"><img class="im_flechitas" src="img/arrRight.png" alt="right" /></button>
        </div>
        
        <p style="clear: both;" />
    </div>    
    
    <div id="d_banderitas">
        <a href="index.php?l=esp"><img class="im_banderitas" src="img/flags-spain.png" alt="espa&ntilde;ol" /></a>
        <a href="index.php?l=eng"><img class="im_banderitas" src="img/flags-united_kingdom.png" alt="english" /></a>
        <a href="index.php?l=hol"><img class="im_banderitas" src="img/flags-netherlands.png" alt="nederlands" /></a>
    </div>
    
</body>
</html>

