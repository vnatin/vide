<?php
$login = 'admin';
$password = 'pass';
include"./modules/language.php";
include"./modules/language_browser.php";
include"./modules/who_browser.php";
include"./modules/ip_users.php";
include"./modules/ip_server.php";
include"./modules/translate.php";

$_SESSION['login'] = $login;
$_SESSION['password'] = $password;
$_SESSION['language_browser'] = $language_browser;
$_SESSION['who_browser'] = $who_browser;
$_SESSION['ip_users'] = $ip_users;
$_SESSION['ip_server'] = $ip_server;

echo "Ваш логин <b>".$_SESSION['login']."</b><br>";
echo "Ваш пароль <b>".$_SESSION['password']."</b><br>";
echo "Ваш язык <b>".$_SESSION['language']."</b><br>";
echo "Браузер язык <b>".$_SESSION['language_browser']."</b><br>";
echo "Браузер тип <b>".$_SESSION['who_browser']."</b><br>";
echo "Ваш IP <b>".$_SESSION['ip_users']."</b><br>";
echo "Сервер IP <b>".$_SESSION['ip_server']."</b><br>";
?>
