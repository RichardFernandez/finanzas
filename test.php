<?php
require_once 'vendor/autoload.php';
$usuario = new \FinanzasPHP\Admons("ricardo", "supercodigo");

$usuario->setName("Ricardo Fernandez");

var_dump($usuario);