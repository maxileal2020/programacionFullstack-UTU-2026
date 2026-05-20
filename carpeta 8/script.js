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

    


