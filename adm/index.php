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
margin: 0;
padding: 0px;
//background: url('img/fon.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
font-size:120%;
letter-spacing: 2px;
	color: black; 		

    font-size: 16px;
    color: #0d5779;
    text-align: center;
    font-family: 'Open Sans';	
   

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
VIDE Admin
</title>
";
include"./style.css";
echo"
</head>
<body>
";
//include_once"cookie.php";


include"src/index.php";

include_once"./modules/fast_key.php";
?>



<?php

echo"
</body>
</html>";
?>
