<?php
include"conf.php";
if ($_GET[st] == '' AND $title == '') {echo $default_name_project;}
if ($title <> '') {echo $title;}
?>
