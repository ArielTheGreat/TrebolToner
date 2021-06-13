window.onload=iniciar;


function iniciar(){
    let opcionesInformatica=["ALMACENAMIENTO","CONSOLAS","PATINES ELÉCTRICOS","REDES","TECLADOS","AURICULARES","CONTROL PRESENCIAL","PILAS","RELOJES SMARTWATCH","VENTILADORES","CABLES","DESTORNILLADORES","POWER BANK","SONIDO","CARGADORES","MONITORES LED","RATÓN","TABLETS"];
    let opcionesIluminacion=["BOMBILLA FILAMENTO LED","LED INDUSTRIAL","BOMBILLAS LED","FOCOS LED","BOMBILLAS INTELIGENTES","PANTALLA LED INTENGRADO","LAMPARAS","LINTERNAS","CASQUILLO","PLAFON LED","OTROS LED","PANEL LED","DOWNLIGHT LED (PANEL)","PROYECTORES LED EXTERIOR","TUBOS LED"];
    let opcionesPapeleria=["PAPEL","MOBILIARIO","PERIFERICOS","CONSUMIBLES IMPR.","MÁQUINAS DE OFICINA","SERVICIOS GENERALES","HARDWARE","OFICINA Y PAPELERÍA","LIFESTYLE","PAE"];
    let opcionesHigiene=["LIMPIEZA / DESINFECTANTES","MASCARILLAS","TERMOMETROS"];

    asignarDesplegables("inf","contenedor",opcionesInformatica);
    asignarDesplegables("luz","contenedor",opcionesIluminacion);
    asignarDesplegables("pap","contenedor",opcionesPapeleria);
    asignarDesplegables("esp","contenedor",opcionesHigiene);
    asignarDesplegables("inicio","formulario");
    
}

function generarApartados(arregloSinOrdenar,contenedorApartados){
    let arreglo=arregloSinOrdenar.sort();
    for(let i=0;i<arreglo.length;i++){
        let ele=document.createElement("div");
        ele.classList.add("apartado");
        ele.innerHTML=`·${arreglo[i]}`;

        document.querySelector(contenedorApartados).append(ele);
    }
    
}

function asignarDesplegables(elemento,elementoDesplegable,arreglo){
    document.querySelector(`#${elemento}`).onmouseover=()=>{
        if(arreglo){
            document.querySelector(`#${elementoDesplegable}`).innerHTML="";
            generarApartados(arreglo,`#${elementoDesplegable}`);
        };
        document.querySelector(`#${elementoDesplegable}`).style.display="flex";
    };
    
    document.querySelector(`#${elementoDesplegable}`).onmouseleave=()=>{
        if(arreglo){document.querySelector(`#${elementoDesplegable}`).innerHTML="";};
        document.querySelector(`#${elementoDesplegable}`).style.display="none";
    };
}