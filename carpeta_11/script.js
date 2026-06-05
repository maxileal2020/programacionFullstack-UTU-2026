let boton = document.getElementById("boton")

let contenedor = document.getElementById("jokeContainer")

let categoria = document.getElementById("categoria")

let tipo = document.getElementById("tipo")


boton.addEventListener("click", async function(){

    let valorCategoria = categoria.value

    let valorTipo = tipo.value

    try{

        let respuesta = await fetch(`https://v2.jokeapi.dev/joke/${valorCategoria}?lang=es&type=${valorTipo}`)

        let datos = await respuesta.json()

        console.log(datos)

        if(datos.error == true){

            contenedor.innerHTML = "No se encontro un chiste para esa opcion"

            return
        }

        if(datos.type == "single"){

            contenedor.innerHTML = datos.joke

        }else{

            contenedor.innerHTML = datos.setup + "<br><br>" + datos.delivery

        }

    }catch(error){

        contenedor.innerHTML = "Ocurrio un error"

        console.log(error)

    }

})