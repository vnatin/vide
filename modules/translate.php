<?php
$ath = mysql_query("select * from lang ;");
if($ath)
{ 
while($author = mysql_fetch_array($ath))
if ($_GET[language] == $author[name]) {$_SESSION['language'] = $author[name];}
}

function trans($trans)   { 
  $lang = isset($_SESSION['language'])? $_SESSION['language']: "RU";
  $array = parse_ini_file("./lang/".$lang.".ini"); 
  
if ($array[$trans] == '') {echo "нет перевода <b>".$trans."</b>" ; }
else {echo $array[$trans]; }
}

// trans('PEREVOD');

function lang() {
$ath = mysql_query("select * from lang ;");
if($ath)
{ 
while($author = mysql_fetch_array($ath))
echo "<a href='?language=$author[name]'>$author[text]<img src='./img/$author[img]' width='50px'></a><br>";
}
}

function inicreate() {

$ath = mysql_query("select * from lang ;");
if($ath)
{ 
while($author = mysql_fetch_array($ath))
if ($author[id] <> '') {	
	
unlink("./lang/".$author[name].".ini");


$aths = mysql_query("select * from element_lang;");
if($aths)
{ 
while($authors = mysql_fetch_array($aths))
if ($authors[id] <> '') {
	
$fd = fopen("./lang/".$author[name].".ini", 'a') or die("не удалось открыть файл");	
	

$aths2 = mysql_query("select * from translate WHERE uid_element=$authors[id];");
if($aths2)
{ 
while($authors2 = mysql_fetch_array($aths2))

$str = $authors[name]."=".$authors2[translate].":".$authors[id]."-".$authors2[uid_element];
fwrite($fd, $str."\r\n"); // запишем в конце еще одну строку
}


}}

fclose($fd);

}}

}

inicreate();
lang();


?>



