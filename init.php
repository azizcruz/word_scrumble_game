<?php

include 'config.php'; // connect to database
    
$css = 'layout/css/'; // directory to css files
$js = 'layout/js/'; // directory to js files 
$font = 'layout/fonts/'; // directory to font files
$func = 'include/functions/'; // directory to functions file
$template = 'include/templates/'; // directory to template file

// include important filesize

include $func . 'functions.php' ;
include $template . 'header.php';

?>