<?php


function chopExtension($filename) {
    return substr($filename, 0, strrpos($filename, '.'));
}

 ?>
