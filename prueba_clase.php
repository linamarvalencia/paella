<?php
	$entero = 10;
	$float = 12.34;
	$string = "clase HCI";
	$array = array("key1", "hola", "key2", "mundo");
	$array = array("key1" => "hola", "key2" => "mundo");
	$verdadero = true;
	$falso = false;

	class StrValTest
	{
		private $miVar = "Clase1";
		public $miVar2 = "Clase2";
		public function_toString()
		{
			return __CLASS__;
		}
	}

	public function example(){
		retunr "esto es una prueba";
	}

	//comentario :D

	echo "entero".intval($entero)."<br />";
	echo "float" .intval($float)."<br />";
	echo "string".intval($string)."<br />";
	echo "boolean verdadero".intval($veradero)."<br />";
	echo "hex - dec".intval(0x165)."<br />";

	//conversion de float a decimal

	echo "foat string" .strval($float). "<br />";
	$floatString = strval($float);
	echo "Float string type" .gettype($floatString)."<br />";
	echo "array".inval($array)."<br/>";
	echo"array int" .(int)$array ."<br/ >";
	var_dump((array)new StrValTest());
	echo "<br/ >";+
	$ejemplo = (object)$float;
	var_dump($ejemplo)

	//LINA M. VALENCIA - CARLOS S. ARBOLEDA



?>