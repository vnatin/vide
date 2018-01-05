<?php
function code_to_base($a) {
$search  = array('<?php', '?>');
$replace = array('[php]', '[/php]');
$subject = $a;
echo str_replace($search, $replace, $subject);
}

function base_to_code($a) {
$search  = array('[php]', '[/php]');
$replace = array('<?php', '?>');
$subject = $a;
echo str_replace($search, $replace, $subject);
}
?>
