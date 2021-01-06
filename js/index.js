const formulario =  document.querySelector("#formulario");
const eventoAjax = document.querySelector(".btnAjax");

document.addEventListener('DOMContentLoaded',()=>{
    formulario.addEventListener('submit',validarFormulario);              
    
})

function validarFormulario(e){
    const titulo = document.querySelector("#titulo");
    const autor =  document.querySelector("#autor");
    const paginas = document.querySelector("#paginas");
    const editorial = document.querySelector("#editorial");
    let numeros = /^([0-9])*$/;
    e.preventDefault();
    const infcontacto = new FormData();
    infcontacto.append('titulo',titulo.value);
    infcontacto.append('autor',autor.value);
    infcontacto.append('paginas',paginas.value);
    infcontacto.append('editorial',editorial.value);
    
     if(!titulo.value || !autor.value || !paginas.value || !editorial.value || !(numeros.test(paginas.value))){

        generarNotificacion("Todos los campos son obligatorios","error");
        return;

    }
    else{
        generarNotificacion("Se han guardado correctamente los datos","exito");
        peticionajax(infcontacto);
    }
    
}


function generarNotificacion(texto,tipo){
    const contenedor = document.querySelector(".respuesta");
    contenedor.innerHTML="";
    const exito = document.createElement("p");
    exito.classList.add(tipo);
    exito.textContent = texto;
    contenedor.appendChild(exito);
    let btn = document.querySelector("#formbtn");
    if(tipo != "error"){
        btn.disabled= true;
        setTimeout(() => {

            formulario.reset();
            exito.remove();
            btn.disabled=false;
        }, 1500);
    }
    setTimeout(() => {

    
        exito.remove();
        btn.disabled=false;
    }, 1500);
   
    
}

function peticionajax(datos){
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        }
      };
      xhttp.open("POST", "dbconexion/insertar.php", true);
      xhttp.send(datos);

}