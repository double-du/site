<?php
$lang = 'pt'; // padrão
$available_langs = ['pt', 'en', 'es'];

if(isset($_GET['lang']) && in_array($_GET['lang'], $available_langs)) {
    $lang = $_GET['lang'];
    // setcookie('lang', $lang, time() + (86400 * 30), "/");
} elseif(isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $available_langs)) {
    $lang = $_COOKIE['lang'];
}

include "lang/$lang.php";
echo "<!-- including lang/$lang.php -->";
$t = $translation[$lang];
?>