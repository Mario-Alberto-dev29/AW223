validar() {

campo1 = document.getElementById("nombre")
campo2 = document.getElementById("email")
campo3 = document.getElementById("mensaje")

if (campo1.value === "" ) {
    alert("El campo nombre es obligatorio");}
if (campo2.value === "" ) {
    alert("El campo email es obligatorio");}
if (campo3.value === "" ) {
    alert("El campo mensaje es obligatorio");}

}