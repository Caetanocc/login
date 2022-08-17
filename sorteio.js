const alunos = 
[
'CLEO VICTTOR LEAL',
'CRISTIAN GONCALVES DO NASCIMENTO SILVA',
'ELIAS DE SOUZA MENDONCA',
'FELIPE RABELO',
'FERNANDA PEREIRA MOLINA TEIXEIRA',
'GEOVANA MATOS SOUZA',
'GUILHERME MENDES SANTOS',
'GUILHERME SANCHES ROMANO',
'JACSON DOUGLAS',
'JESSICA MILENA AVALOS PUSARICO',
'JONATHAN HENRIQUE DOS SANTOS FERREIRA',
'JULLIA SILVA BARROS',
'LUANA SANTANA ANDRADE DA SILVA',
'MATHEUS SILVA OLIVEIRA',
'NICHOLAS GERADE',
'RAI DA SILVA MELLO',
'RYAN BRITO DO RAMO',
'SAMARA MONTEIRO DE JESUS',
'TAINA SOUZA ALVES'
]

let text = '<table id="t01"> ';

alunos.forEach( (element, index) => {
    text += "<tr><td>" + index + "</td>";
    text += "<td>" + element + "</td>";
    text += '<td> </td>'
    text += "</tr>";
});

text += "</table>";
document.getElementById("lista").innerHTML = text;

let qtdeAlunos = alunos.length;

let btn = document.querySelector("#btnSortear")
btn.addEventListener('click', sortear)

let sorteados = [];
function numero_aleatorio() {
    let aleatorio = Math.floor(Math.random() * qtdeAlunos);

    if (sorteados.indexOf(aleatorio) == -1)
        sorteados.push(aleatorio);

    return aleatorio
}


function sortear() {
    let sorteado = numero_aleatorio();

    text = '<table id="t02"> ';

    sorteados.forEach( element  => {
        text += "<tr><td>" + element + "</td>";
        text += "<td>" + alunos[element] + "</td>";
        text += '<td> </td>'
        text += "</tr>";
    });
    
    text += "</table>";
    document.getElementById("sorteados").innerHTML = text;

    mostrarSorteado(sorteado)

}

function mostrarSorteado(sorteado) {
    let x = document.getElementById("snackbar");
    x.innerHTML = sorteado
    x.className = "show";
    setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);
}    



