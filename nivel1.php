<?php
/*Tienes la siguiente definición de clase que pretende modelar al famoso personaje de Tigger de los libros "Winnie The Pooh" de A A. Milne:
Parece razonable esperar que sólo haya un objeto Tigger (después de todo, ¡él es el único!), pero la implementación actual permite tener 
múltiples objetos Tigger diferentes:

Refactorizar la clase Tigger en un Singleton considerando los siguientes puntos:

Define el método getInstance() que no tenga argumentos. Esta función es responsable de crear una instancia de la clase Tigger sólo una vez y
 devolver esta única instancia cada vez que se llama.
Imprime en pantalla múltiples veces el rugido de Tigger.
Añade un método getCounter () que devuelva el número de veces que Tigger ha realizado rugidos.*/

namespace Singleton;
class Tigger {
    private $counter;
    public static $tigger;
    
    private function __construct() {
            echo "Building character..." . PHP_EOL."</br>";
    }

    public function roar() 
    {
        echo "Grrr!" . PHP_EOL."</br>";
        $this->counter++;
    }

    public static function getInstance()
    {
        if(!isset (self::$tigger)){
            self::$tigger=new Tigger();
        }
        return self::$tigger;
    }
    public function getCounter()
    {
        
        return "Tigger ha rugido $this->counter veces";
    }
    protected function __clone() 
    { 
        
    }
}
$tigger= Tigger::getInstance();
$tigger->roar();
$tigger->roar();
$tigger->roar();
echo $tigger->getCounter();


?>