const alunos = 
[
    'ANTONIO KACIO PEREIRA DOS SANTOS',
    'ARTHUR MORAIS LOPES DOS REIS',
    'AUGUSTO LOYOLA ALVES SANTANA',
    'BRUNO BEZERRA DA SILVA',
    'CARLOS GABRIEL LUCIO',
    'DAPHNE CARLOS CORREIA DA SILVA',
    'DIEGO FONSECA PEREIRA',
    'ENZO MATEUS GONCALVES',
    'EVELYN BEATRIZ DA SILVA',
    'FELIPE CORREIA RIBEIRO',
    'FRANCYNE LEONARDO RODRIGUES',
    'GEOVANNA ABADE DOS SANTOS',
    'GUILHERME DE PAULA PINTO WANDERLEY',
    'GUSTAVO NUNES ALVES',
    'IGOR SILVA COSTA',
    'JESSICA DA SILVA EZEQUIEL',
    'JOAO PEDRO DA SILVA COUTINHO',
    'LEONARDO OLIVEIRA COSTA LOMES',
    'LUCCAS PEREIRA FORMICKI',
    'MARCELO SANTOS ANNUNCIACAO',
    'MARIANA MARTINS DE MENEZES',
    'MATHEUS BORGES DOS SANTOS',
    'MATHEUS VITALINO DOS SANTOS',
    'NICOLE DOS SANTOS PEREIRA',
    'RAMON VIANA SOUZA',
    'RODRIGO SBEGHEN IUMATTI COLETTO',
    'ULISSES DUO GITTI FLOR',
    'VINICIUS DE LIMA OLIVEIRA',
    'VINICIUS HAGOP CASSAPIAN BARBOSA',
    'YURI JONATHAN DOMINGOS'
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
    x.innerHTML = alunos[sorteado]
    x.className = "show";
    setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);
}    



