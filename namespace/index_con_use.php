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

use Clases\Controladores\Librerias\Privadas\A;
use Clases\Controladores\Librerias\Privadas\B;
use Clases\Controladores\Librerias\Privadas\C;
use Clases\Controladores\Librerias\Publicas\A as A_publica;
use Clases\Controladores\Librerias\Publicas\B as B_publica;
use Clases\Controladores\Librerias\Publicas\D;
use Clases\Controladores\Vistas\F;
use Clases\Modelos\Mongo\Conexion as Conexion_Mongo;
use Clases\Modelos\Mysql\Conexion as Conexion_Mysql;

$a = new A();
$b = new B();
$c = new C();
$a_publica = new A_publica();
$b_publica = new B_publica();
$d = new D();
$f= new F();
$mongo = new Conexion_Mongo();
$mysql = new Conexion_Mysql();

echo "<h1> $a</h1>";
echo "<h1> $b</h1>";
echo "<h1> $c</h1>";
echo "<h1>$a_publica</h1>";
echo "<h1>$b_publica</h1>";
echo "<h1> $d</h1>";
echo "<h1> $f</h1>";
echo "<h1> $mongo</h1>";
echo "<h1> $mysql</h1>";
