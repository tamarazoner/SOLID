<?php 

require __DIR__. "/vendor/autoload.php";

use src\poligonos\Quadrado;
use src\poligonos\Retangulo;


$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do retângulo: '.$retangulo->getArea().'</h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3>Área do quadrado: '.$quadrado->getArea().'</h3>';

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>LSP - Área do retângulo: '.$retangulo->getArea().'</h3>';


?>