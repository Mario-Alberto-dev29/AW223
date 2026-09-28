function cambiartexto(){
document.getElementById("texto").innerHTML = "Hola, bienvenido a mi portafolio, ahora con JS"
}

function cambiarfuente(){
document.getElementById("lista").style.fontFamily = "Times New Roman";
}

function cambiarcolor() {
document.getElementById("1").style.backgroundColor = "yellow";
document.getElementById("2").style.backgroundColor = "yellow";
document.getElementById("3").style.backgroundColor = "yellow";
document.getElementById("4").style.backgroundColor = "yellow";
document.getElementById("5").style.backgroundColor = "yellow";
}

function validar()  {
if (document.getElementById("nombre").value === "")  {
alert("Error, debes ingresar un nombre");
} else {
if (document.getElementById("email").value === "") {
alert("Error, debes ingresar un Email");
} else {
alert("Datos enviados");
}    
}
}

