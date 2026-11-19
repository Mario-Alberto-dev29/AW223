import { useState, Button } from 'react'
import Tarjeta from './components/Tarjeta'
import heroImg from './assets/hero.png'
import reactLogo from './assets/react.svg'
import viteLogo from './assets/vite.svg'
import './App.css'

function App() {
  const [busqueda, setBusqueda] = useState("")
  const [favoritos, setFavoritos] = useState(0)
  const lugares=[
    {id:1, nombre:"Paris", precio: "$45", ubicaciones: "Arco del triunfo", descripcion: "Por anotar"},
    {id:2, nombre:"Londres", precio: "$55", ubicaciones: "Gran puente", descripcion: "Por anotar"},
    {id:3, nombre:"Nueva York", precio: "$80", ubicaciones: "Gran manzana", descripcion: "Por anotar"}
  ]
  function actualizarContador() {
    setFavoritos(total => total + 1);
    
  }
  const filtrados = lugares.filter(filtrar);

function filtrar(lugar) {
  return lugar.nombre.toLowerCase().includes(busqueda.toLowerCase());
}

  return (
    <div>
  <input
  type="text"
  placeholder="Busca algun lugar..."
  value={busqueda}
  onChange={(e) => setBusqueda(e.target.value)}
  />    
  
  <h3>Contador de favoritos</h3>
  <p>Favoritos: {favoritos}</p>
  <ul>
    {filtrados.map((lugares)=>(
    <Tarjeta 
    key = {lugares.id}
    nombre = {lugares.nombre}
    precio = {lugares.precio}
    ubicaciones = {lugares.ubicaciones}
    descripcion = {lugares.descripcion}
    anotar={actualizarContador} 
    >        
    </Tarjeta>
    ))}
    
  </ul>
  </div>

  )
}

export default App
