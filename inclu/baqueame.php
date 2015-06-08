<?php
session_start();

// valida usuario
$dalequeva = FALSE;
$queterecontra = "dalequeva";
if (!isset($_GET['dalequeva'])) {
    //header('Location: ../index.php');
    $dalequeva = "acc restringido, puto!";
} else {
    if ($_GET['dalequeva'] == $queterecontra) {
        $dalequeva = $queterecontra;
    } else {
        $dalequeva = "acc restringido, puto!";
    }
}

// la parte loca del lenguaje
$lang = "eng";
if (!isset($_GET['lang'])) {
    if (!isset($_SESSION['lang'])) {
        $lang = $defLang;
    } else {
        $lang = $_SESSION['lang'];
    }    
} else {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    //header('Location:index.php');
}
include_once("../leng/" . $lang . ".php");

// los form
//  *- para global -* //
if (isset($_POST["envio_global"])) {
    $l_subTit = $_POST["l_subTit"];
    $l_icos['bot_inicio'] = $_POST["l_icos_inicio"];
    $l_icos['bot_prof'] = $_POST["l_icos_prof"];
    $l_icos['bot_curs'] = $_POST["l_icos_curs"];
    $l_icos['bot_cont'] = $_POST["l_icos_cont"];
    $l_cont['tel'] = $_POST["l_cont_tel"];
    
} else {
    $_POST["l_subTit"] = $l_subTit;
    $_POST["l_icos_inicio"] = $l_icos['bot_inicio'];
    $_POST["l_icos_prof"] = $l_icos['bot_prof'];
    $_POST["l_icos_curs"] = $l_icos['bot_curs'];
    $_POST["l_icos_cont"] = $l_icos['bot_cont'];
    $_POST["l_cont_tel"] = $l_cont['tel'];
}

?>
<html>
<head>
    <title>Ida y Vuelta - baqueame</title>
    <link rel="stylesheet" type="text/css" href="../inclu/micss.css" />
    <script type="text/javascript" src="../inclu/mijs.js"></script>
</head>
<body>
    <div id="d_granBaq">
        <h1 style="text-align: center;">Baqueame</h1>
        <h2><?php echo $dalequeva; ?></h2>
            <div id="d_banderitas">
                <a href="baqueame.php?dalequeva=<?php echo $queterecontra; ?>&lang=esp"><img class="im_banderitas" src="../img/flags-argentina.png" alt="espa&ntilde;ol" /></a>
                <a href="baqueame.php?dalequeva=<?php echo $queterecontra; ?>&lang=eng"><img class="im_banderitas" src="../img/flags-united_kingdom.png" alt="english" /></a>
                <!--<a href="baqueame.php?dalequeva=<?php echo $queterecontra; ?>&lang=hol"><img class="im_banderitas" src="img/flags-netherlands.png" alt="nederlands" /></a>-->
            </div>

        <input type="radio" value="global" name="archSel" size="25px" checked onclick="archiClick('global')" />global
        <input type="radio" value="inicio" name="archSel" size="25px" onclick="archiClick('inicio')" />inicio
        <input type="radio" value="profe" name="archSel" size="25px" onclick="archiClick('profe')" />sobre la profe
        <input type="radio" value="cursos" name="archSel" size="25px" onclick="archiClick('cursos')" />cursos
        <input type="radio" value="contacto" name="archSel" size="25px" onclick="archiClick('contacto')" />contacto

        <div id="d_global" class="d_pequeBaq">
            <h3 class="alcent">Edita las etiquetas globales para el 'LANG'</h3>
            <form name="formi" action="baqueame.php?dalequeva=<?php echo $queterecontra; ?>" method="post">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr><td class="alright">El subtitulo: </td>
                        <td><input type = "text" name="l_subTit" value="<?php echo($_POST["l_subTit"]); ?>" size="50px" /></td></tr>
                    <tr><td class="alright">Boton de inicio: </td>
                        <td><input type = "text" name="l_icos_inicio" value="<?php echo($_POST["l_icos_inicio"]); ?>" size="50px" /></td></tr>
                    <tr><td class="alright">Boton de la profe: </td>
                        <td><input type = "text" name="l_icos_prof" value="<?php echo($_POST["l_icos_prof"]); ?>" size="50px" /></td></tr>
                    <tr><td class="alright">Boton de curso: </td>
                        <td><input type = "text" name="l_icos_curs" value="<?php echo($_POST["l_icos_curs"]); ?>" size="50px" /></td></tr>
                    <tr><td class="alright">Boton de contacto: </td>
                        <td><input type = "text" name="l_icos_cont" value="<?php echo($_POST["l_icos_cont"]); ?>" size="50px" /></td></tr>
                    <tr><td class="alright">Abrev de 'tel': </td>
                        <td><input type = "text" name="l_cont_tel" value="<?php echo($_POST["l_cont_tel"]); ?>" size="50px" /></td></tr>
                </table>
                <input type="submit" value="salvar cambios" name="envio_global" />
            </form>
        </div>

        <div id="d_inicio" style="display: none;">
            <h3>Edita la pag de inicio para el 'LANG'</h3>
        </div>

        <div id="d_profe" style="display: none;">
            <h3>Edita la pag de la profe para el 'LANG'</h3>
        </div>

        <div id="d_cursos" style="display: none;">
            <h3>Edita la pag de cursos para el 'LANG'</h3>
        </div>

        <div id="d_contacto" style="display: none;">
            <h3>Edita la pag de contacto para el 'LANG'</h3>
        </div>
            
    </div>
</body>
