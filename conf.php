<?php
$error_level = error_reporting(0);
$sait='http://localhost/';

 $dblocation = "localhost"; // Имя сервера
    $dbuser = "root";          // Имя пользователя
    $dbpasswd = "";            // Пароль
    $dbname = "odin";    //Имя базы
    $dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
    if (!$dbcnx) 
{
  echo( "<P>В настоящий момент сервер базы данных не доступен, поэтому 
            корректное отображение невозможно.</P>" );
  exit();
}
mysql_query("SET NAMES 'utf8'");
if (!@mysql_select_db($dbname, $dbcnx)) 
{
  echo( "<P>В настоящий момент база данных не доступна, поэтому
            корректное отображение невозможно.</P>" );
  exit();
}


$ath = mysql_query("select * from settings where name='version_programm';");
if($ath)
{ 
while($author = mysql_fetch_array($ath))
$version_programm = $author[value];
}

$ath = mysql_query("select * from settings where name='build_programm';");
if($ath)
{ 
while($author = mysql_fetch_array($ath))
$build_programm = $author[value];
}

$ath = mysql_query("select * from settings where name='build_project';");
if($ath)
{ 
while($author = mysql_fetch_array($ath))
$build_project = $author[value];
}

$ath = mysql_query("select * from settings where name='default_name_project';");
if($ath)
{ 
while($author = mysql_fetch_array($ath))
$default_name_project = $author[value];
}
?>