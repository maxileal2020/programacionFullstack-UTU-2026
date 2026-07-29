function cambiarTexto() {
    document.getElementById("titulo").textContent = "Chau, Mundo!";
}

function cambiarparrafo() {
    document.getElementById("parrafo").textContent = "cambiado";
}

function cambiarimagen() {
    document.getElementById("imagen").src = "elon musk.jpeg";
}

function mostrartexto() {
let texto = document.getElementById("inputTexto").value;
alert(texto);
}

function cambiarcolor() {
    let color = document.getElementById("texto");
    color.classList.add("texto");
}

function sacarcolor() {

    let color = document.getElementById("texto");
    color.classList.remove("texto");
}

function modooscuro() {
    document.body.classList.toggle("oscuro");   
}

function agregarElemento() {
    let texto = document.getElementById("nuevoElemento").value;
    if (texto.trim() === "") return;

    let nuevo = document.createElement("li");
    nuevo.textContent = texto;

    document.getElementById("lista").appendChild(nuevo);
    document.getElementById("nuevoElemento").value = "";
}


