/*Avaliação do módulo
●Projecto Final
○Criação de interactividades (1 de cada)
■Esconder/mostrar
■Alteração de estilo de css
■Alteração de conteúdo○Validação de um formulário
■Validação de tipos
■Campos obrigatórios
■Mensagens de erro
■Utilização de cookies
■Inclusão de uma biblioteca externa (ex. leaflet.js)
■Criação de um programa que inclua
■Controlo de fluxo
■Variáveis*/

const nome = document.getElementbyId('nome')
const password = document.getElementbyId('password')
const uname = document.getElementbyId('uname')
const email = document.getElementbyId('email')
const morada = document.getElementbyId('morada')
const codidoPostal = document.getElementbyId('codigoPostal')
const nif = document.getElementbyId('nif')
const telefone = document.getElementbyId('telefone')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) =>{
    let messages = []
    if (uname.value === '' || uname.value == null){
        messages.push('Preencher Username')
    }

    if (password.value === ''|| password.value == null ){
        messages.push('Preencher Password')
    }

    if (password.value.length <= 6){
        messages.push('Password deve ter 6 digitos')
    }

    if (password.value.length >= 16){
        messages.push('Password deve ter menos de 16 digitos')
    }
    if (morada.value === '' || morada.value == null){
        message.push('Preencher Morada')
    }

    if (email.value === '' || email.value == null){
        message.push('Preencher o email')
    }

    if (codigoPostal === '' || codigoPostal.value == null){
        message.push('Preencher Codigo Postal')
    }

    if (uname.value === 'username'){
        message.push('Username não pode ser Username')
    }

    if (password.value === 'password'){
        messages.push('password não pode ser password')
    }
    if (messages.length > 0){
        e.preventDefault() 
        errorElement.innerText = messages.join(', ')
    }
})

function esconderElemento(id) {
    document.getElementById(id).style.display = 'none';
}

function mostrarElemento(id) {
    document.getElementById(id).style.display = 'block';
}

function changeText(id) {
id.innerHTML = "Ooops pedimos desculpa mas não temos eventos marcados!";
}
 //Geolocalização
function obterLocalizacao() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(mostrarPosicao);
    } else {
        const coordenadas = document.querySelector('#coordenadas');
        coordenadas.textContent = "A GeoLocalização não é suportada neste browser.";
    }
}
function mostrarPosicao(position) {
    console.log(position);

    const coordenadas = document.querySelector('#coordenadas');

    const latitude = position.coords.latitude
    const longitude = position.coords.longitude;

    coordenadas.innerHTML = "Latitude: " + latitude +
        "<br>Longitude: " + longitude;

    const meuMapa = L.map('idmapa').setView([latitude, longitude], 18);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
     {
        maxZoom: 18,
        attribution: 'Map data &copy;' +
        '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, '
         +'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         id: 'mapbox/streets-v11',
         tileSize: 512,
         zoomOffset: -1
    }).addTo(meuMapa);

    let marker = L.marker([latitude, longitude]);
    marker.addTo(meuMapa);

    let marker2 = L.marker([38.812592, -9.202870]);
    marker.addTo(meuMapa);
    marker2.bindPopUp("<h1>Airsoft Portugal</h1>Estamos aqui para o receber!");

    var latlngs = [[38.812657, -9.202944],[38.812657, -9.202789],
                    [38.812525, -9.202789],[38.812521, -9.202936]];
    var polygon = L.polygon(latlngs , {color:'Grey'}).addTo(meuMapa); 

    let circle = L.circle([38.812592, -9.202870],{
        color:'Purple',
        fillOpacity:0.8,
        radious: 500000,
    });

    circle.addTo(meuMapa);
}

//cookies
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
      alert("Welcome again " + user);
    } else {
      user = prompt("Please enter your name:", "");
      if (user != "" && user != null) {
        setCookie("username", user, 365);
      }
    }
  }
/*function apagaCookie()
{​​​​​
document.cookie = 'utilizador=;expires=-1;path=/;';
}​​​​​*/