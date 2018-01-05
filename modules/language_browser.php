<?php
preg_match('/^\w{2}/',$_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);

switch (strtolower($matches[0])){
    case "ru": $language_browser="RU";break; // если русский
    case "de": $language_browser="DE";break; // если немецкий
    case "en": case "UK": case "US": $language_browser="en";break; // если английский
    case "ua": $language_browser="UA";break; // если украинский

    default: $language_browser="RU";break; // если нет совпадений, то по умолчанию, например, английский
}


?>
