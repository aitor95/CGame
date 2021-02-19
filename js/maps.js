var mapa;
var marcador;
var geocoder;
var marcador2;
function inicializar(){
    geocoder = new google.maps.Geocoder();
    var myLatlng = new google.maps.LatLng(37.192869,-3.613186);
    var mapOptions = {
          zoom:8,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    mapa = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

    google.maps.event.addListener(mapa, 'click', function (event){
        creaMarcador(event.latLng)
    });s
}

function creaMarcador(localizacion){
    // Crear marcador
       if (marcador) marcador.setMap(null);
       marcador = new google.maps.Marker({
       position: localizacion,
       draggable: true,
       map: mapa
    });
    mapa.setCenter(localizacion);
     // Rellenar X e Y
    document.formulario.latitud.value=localizacion.lat();
    document.formulario.longitud.value=localizacion.lng();

    // Modificar X e Y al mover
    google.maps.event.addListener(marcador,'drag',function(event){
        document.formulario.latitud.value=event.latLng.lat();
        document.formulario.longitud.value=event.latLng.lng();
        //mapa.setCenter(localizacion);
    });

}

function direc(){
var dire = document.getElementById("direccion").value;
geocoder.geocode( {'address': dire}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
      mapa.setCenter(results[0].geometry.location);
      creaMarcador(results[0].geometry.location);
} else {
      alert("Error: " + status);
}

});

}
