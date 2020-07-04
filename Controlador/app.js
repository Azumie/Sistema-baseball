var Acedula = [],
	Anombres = [],
	Aapellidos = [],
	Ainicio = [],
	Aseño = [];
var BotonesRegistros = document.querySelector('#btnRegistrar');
// const FormularioAgregarAnotador = document.querySelector('#Agregando_Anotador');
// const TablaAnotador = document.querySelector('#tbAnotador');
// let Anotadores = [];
// const CrearItem = (cedula) => {
// 	let item = {
// 		cedula : cedula
// 	}
// 	Anotadores.push(item);
// 	return item;
// }
// let correr = CrearItem('Trotar');
BotonesRegistros.addEventListener('click', guardar_localstorege);
// const Contrasenia = "";
// function setNombre(Nombre, Contrasenia){
// 	const Nombre = Nombre;
// 	Contrasenia = Contrasenia;
// }

// function getNombre(Contraseña){
// 	LocalStorage.getItem(Contrasenia)
// }

function guardar_localstorege(){

	var cedula = document.querySelector('#Agregar_Cedula_Anotador').value;
	var Nombre = document.querySelector('#Agregar_Nombre_Anotador').value;
	var Apellido = document.querySelector('#Agregar_Apellido_Anotador').value;
	// var Inicio = document.querySelector('#Agregar_Inicio_Anotador').value;
	// var Mujer = document.querySelector('#mujer').value;

	Acedula.push(cedula);
	Anombres.push(Nombre);
	Aapellidos.push(Apellido);
	// Ainicio.push(Inicio);
	// Aseño.push(Mujer);

	localStorage.setItem("Llave", JSON.stringify(Acedula));
	localStorage.setItem("Llave", JSON.stringify(Anombres));
	localStorage.setItem("Llave", JSON.stringify(Aapellidos));
	// localStorage.setItem("Llave", JSON.stringify(Ainicio));
	// localStorage.setItem("Llave", JSON.stringify(Aseño));
}
1 , 275265416