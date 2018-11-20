function initMap() {
    var centerLatLng = new google.maps.LatLng(59.925542, 30.315892);
    var mapOptions = {
        center: centerLatLng,
        zoom: 15
    };
 
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
 
    // Добавляем маркер
    var marker = new google.maps.Marker({
        position: centerLatLng,              
        map: map,                             
    });
}
google.maps.event.addDomListener(window, "load", initMap);
