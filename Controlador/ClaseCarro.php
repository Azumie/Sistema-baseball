<?php 
class Carro
{	
	// Private, public y protected funcionan de la misma manera que en Java
	// Si el atributo es private, no se podra acceder desde fuera de la clase
	// si es PROTECTED solo se puede acceder al atributo desde una clase que herede de esta
	// si es PUBLIC se puede acceder a el desde cualquier lugar
	private $marca;
	public $modelo;
	protected $velocidad;

	// asi se define el constructor
	function __construct($marca, $modelo, $velocidad)
	{
		// para usar los atributos de la clase dentro de un funcion se coloa el $this->nombre_variable; cuando hacemos esto es importante notar que el this es el que lleva el signo $ y nombre de la variable se coloca sin ese signo

		// el $this tambien se usa para acceder a los demas metodos definidos dentro de la calse
		
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->velocidad = $velocidad;
	}

	public function getDatos(){
		return 
		"<ul>
			<li>Mara: ".$this->marca."</li>
			<li>Modelo: ".$this->modelo."</li>
			<li>Velocidad: ".$this->velocidad."</li>
		</ul>";
	}
	// como se puede ver cuando se pasa un parametro a una funcion, no se le define que tipo de dato es que nos interesa recibir, es decir, se puede ennviar cualquier tipo de dato u objeto, para evitar esto se podria hacer uso de lo siguiente
	public function getCarro(Carro $carro){
		//como se puede ver, se le coloca Carro, donde carro es el tipo de dato que nos interesa recibir y luego se le coloca un nombre a la variables que entra por el parametro
	}

		//	GETTERS Y SETTERS
	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	public function getVelocidad(){
		return $this->velocidad;
	}

	public function setvelocidad($velocidad){
		$this->velocidad = $velocidad;
	}
	// Tambien se pueden definir metodos estatios, es decir, que pueden ser usados sin la necesidad de instanciar un objeto del mismo esto se haria colocando la palabra STATIC (en minuscula), antes de function
	// para usar este funcion se haria lo siguiente  		nombre_clase::nombre_metodo();
	// en este caso seria                            		Carro::hello();
	static function hello(){
		echo "<br/>
			  ello";
	}

}

// Si quisieramos crear otra clase y que esta herede de la clase que se acaba de hacer solo habra que hacer lo siguiente
class Carrito extends Carro {

	function __construct (){
		// con this accedemos a los metodos de la clase madre
		$this->setMarca('General Motors');
		echo "<br/>";
		echo $this->getMarca();
		echo $this->getDatos();
	}

}
// tambien, si se quisiera hacer una clase abstracta se le agregaria la palabra abstract antede de CLASS

// y por ultimo tambien se pueden crear clases finales, esto quiere decir que no se le podra heredar de esa clase. para implementarla, al igual que le anterior se le coloca una palabra antes de CLASS, esas palabra es final



?>