function agregar() {
    let texto = document.getElementById("tarea").value;

    if (texto === "") { 
        document.getElementById("mensaje-error").textContent = "debes escribir una tarea";
        return;

    } 

    document.getElementById("mensaje-error").textContent = "";

    let nuevoElemento = document.createElement("li");
    nuevoElemento.textContent = texto;

    let botonCompletar = document.createElement("button");
    botonCompletar.textContent = "completar";

    botonCompletar.addEventListener("click", function() {
        nuevoElemento.classList.toggle("completada");

        

    });

    let botonEliminar = document.createElement("button");
    botonEliminar.textContent = "eliminar";

    botonEliminar.addEventListener("click", function() {
        nuevoElemento.remove();
    });

    nuevoElemento.appendChild(botonCompletar);
    nuevoElemento.appendChild(botonEliminar);

    document.getElementById("lista-tareas").appendChild(nuevoElemento);
    document.getElementById("tarea").value = "";
    }





document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault();
    agregar();
});

