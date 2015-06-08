<?php
$defLang = "eng";

$lang = $defLang;
if (!isset($_GET['lang'])) {
    if (!isset($_SESSION['lang'])) {
        $lang = $defLang;
    } else {
        $lang = $_SESSION['lang'];
    }    
} else {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    header('Location:index.php');
}
?>
