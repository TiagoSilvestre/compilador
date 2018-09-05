<?php

$atual = "a";
if (ctype_alpha($atual)) {
    echo "ehh truee";
}else {
    echo "falsianee";
}
echo '<br><br>';


$prox = '+';
if (!ctype_alpha($prox) && !is_numeric($prox)) {
echo 'firssst';
}else {
    echo 'seeecond';
}
?>