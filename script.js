let usuarioGuardado = "";
let passwordGuardado = "";

function registrar(){

usuarioGuardado =
document.getElementById("nuevoUsuario").value;

passwordGuardado =
document.getElementById("nuevaPassword").value;

alert("Usuario registrado");

}

function login(){

let usuario =
document.getElementById("usuario").value;

let password =
document.getElementById("password").value;

if(usuario === usuarioGuardado && password === passwordGuardado){

document.getElementById("login").style.display="none";
document.getElementById("sistema").classList.remove("hidden");

}
else{

alert("Usuario o contraseña incorrectos");

}

}

function mostrar(seccion){

let secciones = document.querySelectorAll(".content");

secciones.forEach(function(div){
div.classList.add("hidden");
});

document.getElementById(seccion).classList.remove("hidden");

}