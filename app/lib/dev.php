<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function d ($var, $die = 0){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';

    if ($die) {
        die('### DEBUG ###');
    }
}