<?php 
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    if(file_exists('page/'.$url[0].'.php')){
        $page = 'page/'.$url[0].'.php';
        include('main.php');
    }else{
        include('login.php');
    }
?>