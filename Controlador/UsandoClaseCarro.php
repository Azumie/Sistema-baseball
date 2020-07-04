<?php 
ASI incluimos la clase que creamos
require_once 'ClaseCarro.php';
// para despues poder hacer un objeto de ella de esta manera pasandole por  
// parametro los datos para inicializar el objeto
$carro = new Carro("Bugati","beiron",340);
// y para acceder a los procedimientos y funiones se una la flecha

//Para acceder a un atributo que este en privado se usa un getter o un setter
$carro->setMarca("Ford");

echo $carro->getMarca();

echo $carro->getDatos();

var_dump($carro);

// ASI uso un metodo estatico, no se hace ninguna instancia 
Carro::hello();

$carrito = new Carrito();
?>