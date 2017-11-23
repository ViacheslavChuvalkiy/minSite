<?php


require "functions.php";





//$page=  !empty($_GET['page']) ? $_GET['page'] : "default";

$page= requestGet('page', 'default');
$file= "Controller/{$page}.php";



if(!file_exists($file)){
    die( '404-not found');
}


$view= $page;
$action= requestGet('action');

require $file;


ob_start();
require "Views/{$view}.phtml";
$content= ob_get_clean();




require "layout.phtml";

