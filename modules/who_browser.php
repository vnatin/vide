<?php
$user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "Firefox") !== false) $who_browser = "Firefox";
  elseif (strpos($user_agent, "Opera") !== false) $who_browser = "Opera";
  elseif (strpos($user_agent, "Chrome") !== false) $who_browser = "Chrome";
  elseif (strpos($user_agent, "MSIE") !== false) $who_browser = "Internet Explorer";
  elseif (strpos($user_agent, "Safari") !== false) $who_browser = "Safari";
  else $who_browser = "Неизвестный";


?>
