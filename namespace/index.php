<?php
//Requerimos los ficheros
//podríamos  usar spl_autoload_register(), pero requiría mucha programación
require "Clases/Controladores/Librerias/Privadas/A.php";
require "Clases/Controladores/Librerias/Privadas/B.php";
require "Clases/Controladores/Librerias/Privadas/C.php";
require "Clases/Controladores/Librerias/Publicas/A.php";
require "Clases/Controladores/Librerias/Publicas/B.php";
require "Clases/Controladores/Librerias/Publicas/D.php";
require "Clases/Controladores/Vistas/F.php";
require "Clases/Modelos/Mongo/Conexion.php";
require "Clases/Modelos/Mysql/Conexion.php";



$a = new Clases\Controladores\Librerias\Privadas\A();
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
