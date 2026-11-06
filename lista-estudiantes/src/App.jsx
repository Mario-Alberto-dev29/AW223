import Estudiante from "./components/Estudiante";
import "./App.css"
export default function App() {
  const estudiantes=[
    {id:1, nombre:"Mario", carrera:"Sistemas"},
    {id:2, nombre:"Ana", carrera:"Literatura"},
    {id:3, nombre:"Adrian", carrera:"Mecatronica"}
  ]
  return(
  <main className="contenedor">
    <h1>Registro de estudiantes</h1>
  
    <form>
    <input type="Text" placeholder="Escribe tu nombre"></input>
    <input type="Text" placeholder="Escribe tu carrera"></input>
    <button type="button">Agregar estudiante</button>
    </form>

    <h2>Estudiantes registrados</h2>
    <ul>
      {estudiantes.map((estudiante)=>(
        <Estudiante
        key = {estudiante.id}
        estudiante={estudiante}
        >
        </Estudiante>
      ))
      }
    </ul>
    <p>total de estudiantes: {estudiantes.length}</p>
  </main>
  );
}