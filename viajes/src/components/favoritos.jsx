import { useState } from 'react'
import tarjeta from "./tarjeta";

export default function favoritos() {
  const [favoritos, setFavoritos] = useState(0);

  function actualizarContador() {
    setFavoritos(total => total + 1);
  }

  return (
    <div>
      <h3>Favoritos: {favoritos}</h3>

    </div>
  );
}