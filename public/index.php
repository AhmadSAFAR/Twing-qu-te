<?php
require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');

$twig = new Twig\Environment($loader, ['cache' => false]);
$products = ['Whiskey', 'Rhum', 'Wine', 'Beer', 'Red Bull'];
echo $twig->render('index.html.twig',array ('products' => $products) );
?>