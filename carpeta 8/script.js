console.log("Hola mundo");
let nombre = prompt("ingrese su nombre");
console.log("Hola " + nombre);

let numero = prompt("ingrese un numero");
let numero2 = prompt("ingrese otro numero");
let resultado = parseInt(numero) + parseInt(numero2);
console.log("El resultado de la suma es: " + resultado);
 
let edad = prompt("ingrese su edad");
if (edad >= 18) {
    console.log("Eres mayor de edad");
} else {
    console.log("No eres mayor de edad");
}

let numero3 = prompt("ingrese un numero para saber si es par o impar");
if (numero3 % 2 === 0) {
    console.log("El numero es par");
} else {
    console.log("El numero es impar");
}

let numero4 = parseInt(prompt("ingrese solo 1 numero de 3 para saber cual es el mayor"));
let numero5 = parseInt(prompt("ingrese segundo numero"));
let numero6 = parseInt(prompt("ingrese tercer numero"));
if (numero4 > numero5 && numero4 > numero6) {
    console.log("El numero mayor es: " + numero4);
} else if (numero5 > numero4 && numero5 > numero6) {
    console.log("El numero mayor es: " + numero5);
} else if (numero6 > numero4 && numero6 > numero5) {
    console.log("El numero mayor es: " + numero6);
}

let numero7 = parseInt(prompt("pedir nota para saber si es insuficinte, aceptable o muy bien"));
if (numero7 < 5) {
    console.log("La nota es insuficiente");
} else if (numero7 >= 5 && numero7 < 7) {
    console.log("La nota es aceptable");
} else if (numero7 >= 7 && numero7 <= 10) {
    console.log("La nota es muy bien");
}

console.log ("contador del 1 al 10");
for (let i = 1; i <= 10; i++) {
    console.log(i);
}   

console.log ("mostrar solo numeros pares del 1 al 20");
for (let i = 1; i <= 20; i++) {
    if (i % 2 === 0) {
        console.log(i);
    }
}

let numero9 = parseInt(prompt("ingresar contraseña"));
if (numero9 !== 1234) {
    console.log("Contraseña incorrecta");
} else {
    console.log("Contraseña correcta");
}

    let numero10 = parseInt(prompt("ingresar numeros, estos se sumaran hasta que se ingrese el numero 0"));
    let suma = 0;
    while (numero10 !== 0) {
        suma += numero10;
        numero10 = parseInt(prompt("ingresar numeros, estos se sumaran hasta que se ingrese el numero 0"));
    }
    console.log("La suma de los numeros ingresados es: " + suma);

  

let numero11 = parseInt(prompt("ingrese el primer numero"));
let numero12 = parseInt(prompt("ingrese el segundo numero"));
let operacion = prompt("ingrese la operacion que desea realizar: +, -, * o /");
let resultado2;
switch (operacion) {
    case "+":
        resultado2 = numero11 + numero12;
        break;
    case "-":
        resultado2 = numero11 - numero12;
        break;
    case "*":
        resultado2 = numero11 * numero12;
        break;
    case "/":
        resultado2 = numero11 / numero12;
        break;
    default:
        console.log("Operacion no valida");
}
console.log("El resultado de la operacion es: " + resultado2);



let numero13 = prompt("Ingrese una opción: 1- Saludar, 2- Mostrar fecha, 3- Mostrar número random");
switch (numero13) {
    case "1":
        console.log("Hola pibe ");
        break;
    case "2":
        console.log("La fecha de hoy es: " + new Date().toLocaleDateString());
        break;
    case "3":
        console.log("El número random es: " + Math.floor(Math.random() * 100));
        break;
    default:
        console.log("Opción no válida");
}



let numeroSecreto = Math.floor(Math.random() * 10) + 1;
let intento = parseInt(prompt("Adivina el número secreto entre 1 y 10"));
while (intento !== numeroSecreto) {
    if (intento < numeroSecreto) {
        console.log("El número secreto es mayor");
    } else {
        console.log("El número secreto es menor");
    }
    intento = parseInt(prompt("Adivina el número secreto entre 1 y 10"));
}
console.log(" Adivinaste el número secreto: " + numeroSecreto);



let contadorPares = 0;
let numeroUsuario = parseInt(prompt("Ingrese un número (ingrese 0 para finalizar)"));
while (numeroUsuario !== 0) {
    if (numeroUsuario % 2 === 0) {
        contadorPares++;
    }
    numeroUsuario = parseInt(prompt("Ingrese un número (ingrese 0 para finalizar)"));
}
console.log("La cantidad de números pares ingresados es: " + contadorPares);



let nombres = ["Juan", "Maria", "Pedro", "Ana", "Luis"];
console.log(nombres);



for (let i = 0; i < nombres.length; i++) {
    console.log(nombres[i]);
}   



let numerosArray = [5, 3, 8, 1, 4];
let numeroMayor = numerosArray[0];
let numeroMenor = numerosArray[0];


for (let i = 1; i < numerosArray.length; i++) {
    if (numerosArray[i] > numeroMayor) {
        numeroMayor = numerosArray[i];
    }
    if (numerosArray[i] < numeroMenor) {
        numeroMenor = numerosArray[i];
    }
}
console.log("El número mayor es: " + numeroMayor);
console.log("El número menor es: " + numeroMenor);



let notas = [7, 8, 5, 9, 6];
let sumaNotas = 0;
for (let i = 0; i < notas.length; i++) {
    sumaNotas += notas[i];
}
let promedio = sumaNotas / notas.length;
console.log("El promedio de las notas es: " + promedio);




let nombresArray = [];
let nombreUsuario = prompt("Ingrese un nombre (escriba 'salir' para finalizar)");
while (nombreUsuario.toLowerCase() !== "salir") {
    nombresArray.push(nombreUsuario);
    nombreUsuario = prompt("Ingrese un nombre (escriba 'salir' para finalizar)");
}
console.log("Los nombres ingresados son: " + nombresArray.join(", "));



let frutas = ["manzana", "banana", "naranja", "pera"];
console.log("El array tiene " + frutas.length + " elementos.");




let numerosArray2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
let numerosPares = [];
for (let i = 0; i < numerosArray2.length; i++) {
    if (numerosArray2[i] % 2 === 0) {
        numerosPares.push(numerosArray2[i]);
    }
}
console.log("Los números pares son: " + numerosPares.join(", "));




let frutasArray = ["manzana", "banana", "naranja", "pera"];
let frutaBuscada = prompt("Ingrese una fruta para verificar si existe en el array");
if (frutasArray.includes(frutaBuscada.toLowerCase())) {
    console.log("La fruta " + frutaBuscada + " existe en el array.");
} else {
    console.log("La fruta " + frutaBuscada + " no existe en el array.");
}



let frutasArray2 = ["manzana", "banana", "naranja", "pera"];
console.log("Array original: " + frutasArray2.join(", "));
let frutaEliminada = frutasArray2.pop();
console.log("Fruta eliminada: " + frutaEliminada);
console.log("Array después de eliminar el último elemento: " + frutasArray2.join(", "));




let frutasArray3 = ["manzana", "banana", "naranja"];
console.log("Array original: " + frutasArray3.join(", "));
let frutaAgregada = prompt("Ingrese una fruta para agregar al array");
frutasArray3.push(frutaAgregada.toLowerCase());
console.log("Array después de agregar la fruta: " + frutasArray3.join(", "));

