//Inicializamos mapa
var map = L.map('map').setView([19.842489, -90.535649], 13);

// Añadimos "Tile Layer"
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

//Funcionalidad para mostrar los puntos con click en el mapa (DESCOMENTAR EN CASO DE PRUEBAS)
//var popup = L.popup();
//function onMapClick(e) {
    //popup
        //.setLatLng(e.latlng)
        //.setContent("Hiciste click en " + e.latlng.toString())
        //.openOn(map);
//}
//map.on('click', onMapClick);

//Marcadores personalizados

var iconoAnimal = L.icon({
iconUrl:'./img/animal_footprint.png',
    iconSize:[50,50],
    popupAnchor:[0,-25]
});

//Inicialización de array markers
let markers = [];

//Se obtiene el ID del input hidden en HTML
const idAvistamiento = document.getElementById('id_avistamiento').value;


//Se agrega el marcador
fetch(`./model/mapas/avistamiento_fauna.php?id_avistamiento=${idAvistamiento}`)
    .then(response => response.json())
    .then(data => {
        data.forEach(punto => {
            // Crear un marcador por cada punto y añadirlo al mapa
            var marker= L.marker([punto.latitud, punto.longitud],{icon:iconoAnimal})
                .bindPopup(`Latitud: ${punto.latitud}<br>Longitud: ${punto.longitud}`)
                .addTo(map);
                markers.push(marker);
        });
    })
    .catch(error => console.error('Error al obtener los puntos:', error));