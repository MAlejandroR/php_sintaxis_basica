<?php
//Requerimos los ficheros
//podríamos  usar spl_autoload_register(), pero requiría mucha programación

require "vendor/autoload.php";

use Clases\Controladores\Librerias\Privadas\A;

$a = new A();
$b = new Clases\Controladores\Librerias\Privadas\B();
$c = new Clases\Controladores\Librerias\Privadas\C();
$a_publica = new Clases\Controladores\Librerias\Publicas\A();
$b_publica = new Clases\Controladores\Librerias\Publicas\B();
$d = new Clases\Controladores\Librerias\Publicas\D();
$f= new Clases\Controladores\Vistas\F();
$mongo = new Clases\Modelos\Mongo\Conexion();
$mysql = new Clases\Modelos\Mysql\Conexion();

echo "<h1> $a</h1>";
echo "<h1> $b</h1>";
echo "<h1> $c</h1>";
echo "<h1>$a_publica</h1>";
echo "<h1>$b_publica</h1>";
echo "<h1> $d</h1>";
echo "<h1> $f</h1>";
echo "<h1> $mongo</h1>";
echo "<h1> $mysql</h1>";
