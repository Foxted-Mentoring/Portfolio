function initialize() {
    // Create map
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
        center: new google.maps.LatLng(49.2845419, -123.1245691),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        zoom: 13,
        mapTypeControl: false,
        streetViewControl: false,
        zoomControl: false,
        backgroundColor: '#515151'
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);

    // Create map marker
    var image = './images/map-pin.png';
    var marker = new google.maps.Marker({
        position: {lat: 49.2832949, lng: -123.122801617},
        map: map,
        icon: image
    });
}