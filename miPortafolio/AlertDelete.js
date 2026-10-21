const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadodel");

if (estado === "exito") {
alert("Exito, Tu mensaje fue eliminado");
} else if (estado === "error") {
alert("Algo fallo, intentalo nuevamente");
}

if (estado != null) {
window.history.replaceState({}, document.title, window.location.pathname);
}