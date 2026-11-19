import { useState, Button } from 'react'
export default function Tarjeta({nombre, precio, ubicaciones, descripcion, anotar}) {
const[mostrar, setMostrar] = useState(false);
const[favorito, setFavorito] = useState(false);
  function marcarFavorito() {
    if (!favorito) {
      setFavorito(true);
      anotar();
    }
  }
return(

<li>
<p>{nombre}</p>
<button onClick={marcarFavorito}>Favorito</button>
<button onClick={() => setMostrar(!mostrar)}>Ver detalles</button>
{ favorito && 
<>  
<p> Marcado como favorito </p>        
</>
}
{ mostrar && 
<>  
<p> Precio: {precio} </p>    
<p> Ubicaciones: {ubicaciones} </p>    
<p> descripciones: {descripcion} </p>    
</>
}
</li>
);
}