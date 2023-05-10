<?php


$x=5;
$f = fn(&$x)=> $x++;
echo "<h1>".$f($x)."</h1>";
echo "<h1>Valor de x $x</h1>";




echo "<h1>".$f(3)."</h1>";
echo "<h1>$x</h1>";

//funciones_01_funciones.php

//Comparación de arrays
$array1=[1,2,3];
$array2=[2=>3,1=>2,0=>1];
if ($array1==$array2)
    echo "<h1>Son iguales</h1>";
else
    echo "<h1>Son distintos</h1>";



//Variables de funcion
$suma= fn($a, $b)=>$a+$b;

echo "<h1>\$suma que es una función es de tipo </h1>".gettype($suma);


//Implementar un iterator
class Personas implements  Iterator  {
    private $nombres=[];
    private $posicion;

    public function add_persona(string $nombre){
        $this->nombres[]=$nombre;
    }
    public function current(): mixed
    {
        return $this->nombres[$this->posicion];


        // TODO: Implement current() method.
    }

    public function next(): void
    {
        if ($this->posicion<sizeof($this->nombres))
                    $this->posicion++;
        // TODO: Implement next() method.
    }

    public function key(): mixed
    {
        return $this->posicion;
        // TODO: Implement key() method.
    }

    public function valid(): bool
    {
        return $this->posicion<sizeof($this->nombres);
        // TODO: Implement valid() method.
    }

    public function rewind(): void
    {
         $this->posicion=0;
        // TODO: Implement rewind() method.
    }
}
$listado = new Personas();
$listado->add_persona("pedro1");
$listado->add_persona("pedro2");
$listado->add_persona("pedro3");
$listado->add_persona("pedro4");
foreach ($listado as $item) {
    echo "<h1>$item</h1>";
}


?>