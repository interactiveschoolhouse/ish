function initMap() {
    var ishLat = 42.180826;
    var ishLng = -72.362842;

    var latlng = new google.maps.LatLng(ishLat, ishLng);

    var styles = [
    {
        featureType: "landscape",
        stylers: [
        { color: '#eeddee' }
        ]
    },{
        featureType: "natural",
        stylers: [
        { hue: '#ff0000' }
        ]
    },{
        featureType: "road",
        stylers: [
        { hue: '#5500aa' },
        { saturation: -70 }
        ]
    },{
        featureType: "building",
        elementType: "labels",
        stylers: [
        { hue: '#000066' }
        ]
    },{
        featureType: "poi", //points of interest
        stylers: [
        { hue: '#0044ff' }
        ]
    }
    ];


    var myOptions = {
        zoom: 14,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        styles: styles,
        scrollwheel:  false
    };

    var map = new google.maps.Map(document.getElementById('map'), myOptions);

    var directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directionsPanel"));
    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
    });

    var ishMarker = new google.maps.Marker({
        position: {lat: ishLat, lng: ishLng},
        map: map,
        title: 'Interactive School House'
    });

    var openDirectionsContent = document.getElementById("directionsToIshContent").innerHTML;
    //"<b>" + ishMarker.getTitle() + '</b><br><a target="_blank" href="https://maps.google.com/maps?saddr=My+Location&daddr=42.180826,-72.362842">2055 Main St</a><br>Three Rivers, MA 01080<br>(413) 896-5838<br><b>Owner: </b>Nancy Roy<br><a href="mailto:interactiveschoolhouse@gmail.com">interactiveschoolhouse@gmail.com</a>';
 
    var directionsService = new google.maps.DirectionsService();

    var infowindow = new google.maps.InfoWindow({
        size: new google.maps.Size(150, 50)
    });

    google.maps.event.addListener(ishMarker, 'click', function() {
        map.setZoom(15);
        map.setCenter(ishMarker.getPosition());
        infowindow.setContent(openDirectionsContent);
        infowindow.open(map, ishMarker);
    });

}




