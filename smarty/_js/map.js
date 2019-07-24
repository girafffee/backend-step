function initMap() {
    var element = document.getElementById('map');
    var options = {
        zoom: 17,
        center: { lat: 39.614431, lng: -104.887666 }
    };

    var myMap = new google.maps.Map(element, options);
    var marker = new google.maps.Marker({
        position: { lat: 39.614431, lng: -104.887666 },
        icon: '../_imgs/marker.png',
        map: myMap
    });
};