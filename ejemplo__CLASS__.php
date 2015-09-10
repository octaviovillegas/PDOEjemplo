<?php
/* 

Varias constantes "mágicas" de PHP
Nombre			Descripción
__LINE__		El número de línea actual en el fichero.
__FILE__		Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.
__DIR__			Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra inicial a no ser que esté en el directorio root.
__FUNCTION__	Nombre de la función.
__CLASS__		Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.
__TRAIT__		El nombre de el trait. El nombre del trait incluye el namespace si alguno fué declarado en (p.e.j. Foo\Bar).
__METHOD__		Nombre del método de la clase.
__NAMESPACE__	Nombre del espacio de nombres actual.


Véase también get_class(), get_object_vars(), file_exists() y function_exists().


*/
abstract class Humano{
        function __construct() {}

        function MetodoDelBase() {
                echo '<br>implementado Humano (__CLASS__): ' . __CLASS__ . PHP_EOL;
                echo '<br>implementado Humano(get_class()): ' . get_class($this) . PHP_EOL;
                echo PHP_EOL;
        }
}

class Alumno extends Humano {
        function metodoDeHumano() {
                echo '<br>implementado Alumno (__CLASS__): ' . __CLASS__ . PHP_EOL;
                echo '<br>implementado Alumno (get_class()): ' . get_class($this) . PHP_EOL;
                echo PHP_EOL;
        }

        function llamadoAlBase() {
        	echo "<br>llamado desde Alumno a Humano:";
                parent::MetodoDelBase();
        }
}

$a = new Alumno();

$a->MetodoDelBase();
$a->metodoDeHumano();
$a->llamadoAlBase();


/*

implementado Humano (__CLASS__): Humano 
implementado Humano(get_class()): Alumno 
implementado Alumno (__CLASS__): Alumno 
implementado Alumno (get_class()): Alumno 
llamado desde Alumno a Humano:
implementado Humano (__CLASS__): Humano 
implementado Humano(get_class()): Alumno

*/

?>