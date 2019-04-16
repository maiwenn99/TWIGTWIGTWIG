<?php

require __DIR__.'/../vendor/autoload.php';

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
$page = 'home';
if (isset($_GET['p'])){
    $page = $_GET['p'];
}

$loader = new \Twig\Loader\FilesystemLoader('../src/view/');
$twig = new \Twig\Environment($loader);

if ($page === 'home'){
    echo $twig->render('index.html.twig', ['products' => $products]);
}
