<?php
use controllers\controller;


$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/' or preg_match("/page/", $uri)) {
    if(isset($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = 1;
}
    Controller::get_news($page);
}

elseif (preg_match("/id/", $uri)) {
    $id = $_GET['id'];
    Controller::get_one($id);
}
else {
    header("HTTP/1.1 404 Not Found");
    exit();
}


