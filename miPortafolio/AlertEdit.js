const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadomod");

if (estado === "exito") {
alert("Exito, Tu mensaje fue editado");
} else if (estado === "error") {
alert("Algo fallo, intentalo nuevamente");
}

if (estado != null) {
window.history.replaceState({}, document.title, window.location.pathname);
}