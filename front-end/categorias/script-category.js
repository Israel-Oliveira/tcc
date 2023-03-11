var categorias = document.querySelectorAll(".categoria")

var ultimaCategoria = categorias.length - 1

console.log(ultimaCategoria)

var decisaoCategoria = ultimaCategoria%2

console.log(decisaoCategoria)


if(decisaoCategoria == 0){

    categorias[ultimaCategoria].classList.toggle("ultimoItemImpar")

}


// if(decisaoCategoria == 0){

//     console.log("AHHHHHHHHHHHHHHHHHHHHHHH")
    
//     larguraResponsivo(ultimaCategoria)

// }

// function larguraResponsivo(i){
    
//         categorias[i].classList.toggle("ultimoItemImpar")
    
// }