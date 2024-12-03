var idLibroE=0
        function setValorE(valor) {
            idLibroE=valor;
            console.log(valor);}

var idLibro=0
function setValor(valor) {
	idLibro=valor;
	console.log(valor);
}
function modalf(){
    var contenedor= document.getElementById('principal');
        fetch('modal.html')
            .then(response => response.text())
            .then(data => contenedor.innerHTML=data);
}
function listar() {
	var contenedor;
	contenedor = document.getElementById('principal');
	fetch('listar.php')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function ordenar(orden) {
	var contenedor;
	contenedor = document.getElementById('pricipal');
	
	ajax = new XMLHttpRequest()
	ajax.open("GET", "listar.php?ordenar=" + orden, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}
function eliminar() {
	var contenedor;
	contenedor = document.getElementById('principal');
	fetch('delete.php?id='+idPersona)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function editar(id){
    setValorE(id);
    var contenedor;
	contenedor = document.getElementById('modal');
	fetch('update.php?id='+idLibroE)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function ejer4(){
    var contenedor;
	contenedor = document.getElementById('principal');
	fetch('ecuacion.html')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function calcular(){
    var a = parseInt.document.getElementById('a').value;
    var b = parseInt.document.getElementById('b').value;
    var c = parseInt.document.getElementById('c').value;

    var div1 = b;
    var div2 = pow(c);
    var cont1 = document.getElementById('x1');
    var cont2 = document.getElementById('x2');
    if(div1<0){
        cont1.innerHTML=div1+"i"
    }else{
        cont1.innerHTML=div1
    }
    if(div2<0){
        cont2.innerHTML=div2+"i"
    }else{
        cont2.innerHTML=div2
    }
    
}
function colores(){
  var contenedor;
	contenedor = document.getElementById('principal');
	fetch('colores.html')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);

}
function setcolor(){
    
}