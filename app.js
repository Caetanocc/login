let senha = document.getElementById("senha")
let btnEntrar = document.querySelector("#btnEntrar")

function habilitarBotao() {
   btnEntrar.disabled = false; 
   btnEntrar.style.backgroundColor = "green";
}

senha.addEventListener('blur', habilitarBotao)




