const tabla = document.querySelector(".tbody");



document.addEventListener("DOMContentLoaded",()=>{
    
    leerdatos();
        
    
   
    
});



function leerdatos(){
     const httpR = new XMLHttpRequest();
    tabla.innerHTML = "";
     httpR.open("GET","dbconexion/read.php",true);

     httpR.onreadystatechange =  function(){
         if(this.readyState == 4 && this.status == 200){
            if(this.responseText){
                const datos  = JSON.parse(this.responseText);
                imprimirDatos(datos);
            }
            else
                console.log("ha ocurrido un error al cargar los datos");
         }
     }
     httpR.send();
}
function imprimirDatos(datos){
    let tr =  document.createElement("tr");
    datos.forEach(element => {
        tabla.innerHTML= tabla.innerHTML + `<tr><td>${element.titulo}</td>
                            <td>${element.autor}</td>
                            <td>${element.paginas}</td>
                            <td>${element.editorial}</td>
                            <td class="accion">
                                <button onclick="eliminar(this)" id="${element.id}">
                                    <i class="fas fa-trash-alt delete" ></i>
                                </button>
                                <button onclick="actualizar(this)" class="actualizar" id="${element.id}">
                                    <i class="fas fa-pen update "></i>
                                </button>

                            </td>
                            </tr>`;
        
    });
}
function eliminar(objeto){
    const id = objeto.getAttribute("id");
    
    let respuesta = window.confirm("Seguro que desea eliminar");
    if(respuesta){
        readdb(id);
    }
    else{
        console.log("cancelaste");
    }

}

/**aun no esta la funcionalidad de actualizar */
/*function actualizar(objeto){
    const id = objeto.getAttribute("id");
    const actualizar =  objeto.getAttribute("class");
    console.log(actualizar);
    

}*/
function readdb(id){
    let datos = new FormData();
    datos.append("id",id)
    const xhttp = new XMLHttpRequest();

    xhttp.open("POST","dbconexion/consulta.php",true);

    xhttp.onreadystatechange =  function (){
        if(this.readyState == 4  && this.status == 200 ){
            console.log(this.responseText);
        }
    }
    xhttp.send(datos);
    leerdatos();
}