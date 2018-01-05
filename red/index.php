<?php
session_start();
header ("Content-Type: text/html; charset=utf-8");
include"conf.php";

echo "
<html>
<head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
<link rel='icon' href='favicon.ico' type='image/x-icon'>
<style>
body 
{
background-color: gray;
font: oblique 12pt 'Arial', serif; font-stretch: condensed;	
margin: 0;
    padding: 0;
}

.left_menu
{
position: fixed;
background-color: white;
width: 14%;
top: 5px;
left: 5px;
height: 99%;
border-radius: 5px;
border-color: black;
border-style:solid;
border-width: 2px;
z-index: 1;
margin: 5px;
}

.left_window
{
position: fixed;
left: 1px;
top: 40px;
background-color: darkgrey;
height: 98%;
width: 20%;
border-color: black;
border-style:solid;
border-width: 1px;
overflow:auto; 
font-size: 80%;
}

.right_window
{
position: fixed;
right: 1px;
top: 40px;
background-color: darkgrey;
height: 98%;
width: 20%;
border-color: black;
border-style:solid;
border-width: 1px;
overflow:auto; 
overflow-y:left;
font-size: 80%;
}


.center_window
{
position: fixed;
right: 20%;
top: 40px;
background-color: darkgrey;
height: 98%;
width: 60%;
border-color: black;
border-style:solid;
border-width: 1px;
overflow:auto; 
overflow-y:left;
font-size: 80%;
}

.top_menu
{
	position: absolute;
	top: 10;
	left: 0;
	width: 100%;
	height: 20px;
	box-sizing: border-box;
	/*overflow: hidden;*/
background-color: darkgrey;
padding-left: 5px;
letter-spacing:1px;
}
.top_menu > ul
{
list-style-type: none;
}
.top_menu > ul > li
{
	display: inline-block;
	font: normal normal 12px Verdana, sans-serif;
	margin: 0 3px;
	position: relative;
}
.top_menu > ul > li > a {
	display: inline-block;
	color: inherit;
}
.top_menu > ul > li > a:after {
content: ' ►';
color: lightgray;
}
.top_menu > ul > li > a:hover {
	background-color: lightgray;
}
.top_menu > ul > li:last-child {
	margin: 3px;
	background-color: darkgrey;
	color: #ffffff;
	float: right;

}
.top_menu > ul > li > ul {
	position: absolute;
	background-color: darkgrey;
	list-style-type: none;
	border-bottom: 1px solid lightgray; 
	margin-top: 2px;
	display: none;
}
.top_menu > ul > li > ul li {
	list-style-type: none;
	border-top: 1px solid lightgray; 
}
.top_menu > ul > li > ul li > a {
	display: block;
	padding: 4px 2px;
}
.top_menu > ul > li > ul li > a:hover {
	background-color: lightgray;
}
.top_zakladki
{
position: fixed;
background-color: gray;
width: 85%;
top: 5%;
left: 15%;
height: 5%;
border-radius: 5px;
}

.center_value
{
position: relative;
background-color: red;
width: 84%;
top: 100px;
left: 15%;
height: 85%;
background-color: darkgray;
border-radius: 5px;
}

.button
{
display:inline-block;
background-color: white;
border-radius: 5px;
text-align: center;
margin: 1px;
padding: 1px;
border-style: double;
font-weight:bold;
width: 90%;
margin: 2px;
padding: 2px;
}

.button2
{
display:inline-block;
background-color: white;
border-radius: 5px;
text-align: center;
margin: 1px;
padding: 1px;
border-style: double;
font-weight:bold;

}

.stat 
{
	background-color: gray; 
	position: absolute;
	top: 0px;
	left: 0px;
	box-sizing: border-box;
	height: 14px;
	width: 100%;
	//overflow: hidden;

}
.stat p
{
text-align: right;
padding: 2px;
font: italic normal 9px Verdana, sans-serif;
letter-spacing:2px;
}
.stat span {
color: #ffffff;
}


//Меню



#table2 tr:nth-child(2n) {
    background: #f0f0f0;

   } 
#table2   tr:nth-child(1) {
    background: #0f0f0f;
    color: #fff;
   } 

#table2 th
{
background-color: darkgray;
font-weight:bold;
color: black;
}
a 
{
text-decoration: none;
color: black;
}





.form-1 {
    /* Размер и положение */
    width: 300px;
    margin: 60px auto 30px;
    padding: 10px;
    position: relative; /* For the submit button positioning */
 
    /* Styles */
    box-shadow: 
        0 0 1px rgba(0, 0, 0, 0.3), 
        0 3px 7px rgba(0, 0, 0, 0.3), 
        inset 0 1px rgba(255,255,255,1),
        inset 0 -3px 2px rgba(0,0,0,0.25);
    border-radius: 5px;
    background: linear-gradient(#eeefef, #ffffff 10%);
}
 
.form-1 .field {
    position: relative; /* For the icon positioning */
}
.form-1 .field i {
    /* Size and position */
    left: 0px;
    top: 0px;
    position: absolute;
    height: 36px;
    width: 36px;
 
    /* Line */
    border-right: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 1px 0 0 rgba(255, 255, 255, 0.7);
 
    /* Styles */
    color: #777777;
    text-align: center;
    line-height: 42px;
    transition: all 0.3s ease-out;
    pointer-events: none;
}
.form-1 input[type=text],
.form-1 input[type=password] {
    font-family: 'Lato', Calibri, Arial, sans-serif;
    font-size: 15px;
    font-weight: 400;
    text-shadow: 0 1px 0 rgba(255,255,255,0.8);
 
    /* Size and position */
    width: 100%;
    padding: 10px 18px 10px 45px;
 
    /* Styles */
    border: none; /* Remove the default border */
    box-shadow:
        inset 0 0 5px rgba(0,0,0,0.1),
        inset 0 3px 2px rgba(0,0,0,0.1);
    border-radius: 3px;
    background: #f9f9f9;
    color: #777;
    transition: color 0.3s ease-out;
}
 
.form-1 input[type=text] {
    margin-bottom: 10px;
}
.form-1 input[type=text]:hover ~ i,
.form-1 input[type=password]:hover ~ i {
    color: #52cfeb;
}
 
.form-1 input[type=text]:focus ~ i,
.form-1 input[type=password]:focus ~ i {
    color: #42A2BC;
}
 
.form-1 input[type=text]:focus,
.form-1 input[type=password]:focus,
.form-1 button[type=submit]:focus {
    outline: none;
}
.form-1 .submit {
    /* Size and position */
    width: 65px;
    height: 65px;
    position: absolute;
    top: 17px;
    right: -25px;
    padding: 10px;
    z-index: 2;
 
    /* Styles */
    background: #ffffff;
    border-radius: 50%;
    box-shadow:
        0 0 2px rgba(0,0,0,0.1),
        0 3px 2px rgba(0,0,0,0.1),
        inset 0 -3px 2px rgba(0,0,0,0.2);
}
.form-1 .submit:after {
    /* Size and position */
    content: '';
    width: 10px;
    height: 10px;
    position: absolute;
    top: -2px;
    left: 30px;
 
    /* Styles */
    background: #ffffff;
   
}
.form-1 button {
    /* Size and position */
    width: 100%;
    height: 100%;
    margin-top: -1px;
 
    /* Icon styles */
    font-size: 1.4em;
    line-height: 1.75;
    color: white;
 
    /* Styles */
    border: none; /* Remove the default border */
    border-radius: inherit;
    background: linear-gradient(#52cfeb, #42A2BC);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.3),
        0 1px 2px rgba(0,0,0,0.35),
        inset 0 3px 2px rgba(255,255,255,0.2),
        inset 0 -3px 2px rgba(0,0,0,0.1);
 
    cursor: pointer;
}
.form-1 button:hover,
.form-1 button[type=submit]:focus {
    background: #52cfeb;
    transition: all 0.3s ease-out;
}
 
.form-1 button:active {
    background: #42A2BC;
    box-shadow:
        inset 0 0 5px rgba(0,0,0,0.3),
        inset 0 3px 4px rgba(0,0,0,0.3);
}
";


echo"
</style>
<title>
VIDE Editor
</title>
";
include"./style.css";
echo"
</head>
<body>
";
//include_once"cookie.php";

?>

<div class='stat'><p>VIDE version .beta <span>Versatile Integrated Development Environment </span></p></div>

<div class='top_menu' id="top_menu">
<ul>
<li>Структура</li>
<li><a href='?st=shablon'>Шаблоны</a></li>
<li>Функции</li>
<li><a href='?st=php'>PHP</a></li>
<li><a href='?st=css'>CSS</a></li>
<li><a href='?st=js'>JS</a>
	<ul>
	<li><a href="?fn=js">Добавить</a></li>
	</ul>
</li>
<li><a href='?st=all'>Все элементы</a></li>
<li><a href="?fn=imgall">IMAGE</a>
	<ul>
	<li><a href="?fn=img">Добавить</a></li>
	</ul>
</li>
<li><a href='?fn=all'>Файлы</a></li>
<li>Настройки</li>
<li><a href='?st=debug'>Собрать дебаг</a></li>
<li><a href='?st=release'>Собрать релиз</a></li>
<li><a href='?st=exit'>Выход</a></li>
</ul>
</div>


<div class='left_window'>left</div>
<div class='center_window'>center</div>
<div class='right_window'>right</div>




<?php

echo"
</body>
</html>";
include_once"./modules/fast_key.php";
?>
