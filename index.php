<?php
session_start();

include_once("inclu/lang.php");
include_once("leng/" . $lang . ".php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Spanish Online</title>
    <meta name="description" content="aprendizaje de espa&ntilde;ol, learning spanish" />
    <meta name="keywords" content="espa&ntilde;ol, spanish, learning, aprender, aprendizaje, spanish online" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="inclu/micss.css" />
    <script type="text/javascript" src="inclu/mijs.js"></script>
</head>

<body>
    <div id="d_tarj">
        <div id="d_icos">
            <a href="#" onclick="icoclick(0); return false;" id="ico0" class="select b_ico" title="<?php echo $l_icos['bot_inicio']; ?>">
                <img class="im_ico" src="img/home.png" alt="<?php echo $l_icos['bot_inicio']; ?>" /></a>
            <a href="#" onclick="icoclick(1); return false;" id="ico1" class="b_ico" title="<?php echo $l_icos['bot_curs']; ?>">
                <img class="im_ico" src="img/edit-4.png" alt="<?php echo $l_icos['bot_curs']; ?>" /></a>
            <a href="#" onclick="icoclick(2); return false;" id="ico2" class="b_ico" title="<?php echo $l_icos['bot_prof']; ?>">
                <img class="im_ico" src="img/apple.png" alt="<?php echo $l_icos['bot_prof']; ?>" /></a>
            <a href="#" onclick="icoclick(3); return false;" id="ico3" class="b_ico" title="<?php echo $l_icos['bot_cont']; ?>">
                <img class="im_ico" src="img/cont.png" alt="<?php echo $l_icos['bot_cont']; ?>" /></a>
        </div>

        <div id="d_cont0" class="d_contenido">
            <h1>Spanish Online</h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php include($l_inicio); ?>
        </div>

        <div id="d_cont1" class="d_contenido" style="display:none">
            <h1>Spanish Online</h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php include($l_curs); ?>
        </div>

        <div id="d_cont2" class="d_contenido" style="display:none">
            <h1>Spanish Online</h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php include($l_prof); ?>
        </div>

        <div id="d_cont3" class="d_contenido" style="display:none">
            <h1>Spanish Online</h1>
            <h3><?php echo $l_subTit; ?></h3>
            <hr />
            <?php include($l_cont['html']); ?>
            <p class="p_it"><img class="im_contacto" src="img/mail-forward-3.png" alt="E-mail: " /><a href="mailto:veronicahopp@gmail.com?subject=Consulta%20(Ida%20y%20Vuelta%20site)">veronicahopp@gmail.com</a></p>
            <p class="p_it"><img class="im_contacto" src="img/phone-2.png" alt="<?php echo $l_cont['tel']; ?>" />(+5411) 69089479</p>
            <p class="p_it"><img class="im_contacto" src="img/skype.png" alt="Skype: " />veronicahopp</p>
        </div>
        
        <div id="d_felchitas">
            <button class="b_flechitas" onclick="flechlick(-1)"><img class="im_flechtas" src="img/arrLeft.png" alt="left" /></button>
            <button class="b_flechitas" onclick="flechlick(1)"><img class="im_flechtas" src="img/arrRight.png" alt="right" /></button>
        </div>
        
        <p style="clear: both;" />
    </div>    
    
    <div id="d_banderitas">
        <a href="index.php?lang=esp"><img class="im_banderitas" src="img/flags-spain.png" alt="espa&ntilde;ol" /></a>
        <a href="index.php?lang=eng"><img class="im_banderitas" src="img/flags-united_kingdom.png" alt="english" /></a>
        <a href="index.php?lang=hol"><img class="im_banderitas" src="img/flags-netherlands.png" alt="nederlands" /></a>
    </div>
    
    <!--<div id="d_debug" style="margin-top: 50px;"><?php //include("inclu/midebug.php"); ?></div>-->
</body>
</html>

