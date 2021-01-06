let datosenorden = new FormData();

const titulo = document.querySelector("#titulo");
const autor = document.querySelector("#autor");
const paginas = document.querySelector("#paginas");
const editorial = document.querySelector("#editorial");
const espacioOrden = document.querySelector(".orden");
const btn = document.querySelector("#crear");
const div = document.querySelector("main");
const divlistar = document.querySelector(".containerListar");


document.addEventListener('DOMContentLoaded',()=>{

    
    btn.addEventListener("click",()=>{
        validarFromaDta();
    })
    titulo.addEventListener("change",(e)=>{
        crearformato(e);        
    })
    autor.addEventListener("change",(e)=>{
        crearformato(e);
    })
    paginas.addEventListener("change",(e)=>{
        crearformato(e);
    })
    editorial.addEventListener("change",(e)=>{
        crearformato(e);
    })
})

function crearformato(valor){
    if(valor.target.checked){
        datosenorden.append(valor.target.value,valor.target.value);
        orderEnviar();
    }
    else{
        datosenorden.delete(valor.target.value);
        orderEnviar();
    }
    
}

function orderEnviar(){
    espacioOrden.innerHTML = '';
    for (var value of datosenorden.values()) {
        
        espacioOrden.innerHTML= espacioOrden.innerHTML + "<p value='' id='"+value+"'>"+value+"</p>";
     }

}

function validarFromaDta(){
    let numero = 0;
    for (var key of datosenorden.keys()) {
        numero +=1;
     }
     if(numero){
        
        insertdb();
     }
     else{
        crearNotificacion("Debe selecionar al menos un elemento","error");
        
    }
}
function crearNotificacion(mensaje,tipo){
    const avisoNotificacion = document.createElement("div");
   

    avisoNotificacion.classList.add(tipo ,"cuadro");
    avisoNotificacion.textContent = mensaje;
    div.insertBefore(avisoNotificacion,document.querySelector(".seleccion"));
    setTimeout(() => {
        avisoNotificacion.remove();
    }, 1500);
}

function insertdb(){
    const http = new XMLHttpRequest();

    http.open("POST","dbconexion/read.php",true);
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const response = JSON.parse(this.responseText);
            divlistar.innerHTML = '';
            for (var i=0; i< response.length; i++)
            {
                //Para obtener el objeto de tu lista
                var index = response[i]
                //Mostramos el objeto en su versión String
                let cadena = "";
                for (var key in index) {
  
                   
                    cadena = cadena +", "+ index[key];
                }
                
                var responsedefinitiva = cadena.substring(1);
                listarFormato(responsedefinitiva);
            }       
        }
    }
    http.send(datosenorden);
}

//funcion que lista los libros con el orden que se eligio
function listarFormato(ordenformato){
    let parrafo =  document.createElement('p');
    parrafo.textContent = ordenformato;
    divlistar.appendChild(parrafo);
}