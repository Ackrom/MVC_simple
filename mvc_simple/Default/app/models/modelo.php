<?php
/*
 La clase modelo, en nuestro pequeño ejemplo de MVC, es la encargada de interactuar con la
base de datos, solo ella puede o mejor dicho, debería hacerlo.

 Como se puede apreciar la clase extiende de la clase PDO, probablemente hable de esta clase
más detenidamente en el futuro, pero de momento quedémosnos con la idea de que es una clase
que viene con PHP (dependiendo de la versión hay que activarla en el "php.ini") y que se 
encarga de interactuar "adecuadamente" con la base de datos.
*/
class Modelo extends PDO{
	//Atributos usados para conectarnos con la base de datos.
	private $tipo_de_base='pgsql';
	private $host='localhost';
	private $nombre_de_base='ejemplo';
	private $usuario='postgres';
	private $clave='superClaveSecreta';

	public function __construct() {
		 try{
			 parent::__construct($this->tipo_de_base.':host='.$this->host.'; dbname='.$this->nombre_de_base.'; port=5432',
			 $this->usuario,$this->clave);
		 }catch(PDOException $e){
			 echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
			 exit;
		 }
  	}
}

?>
