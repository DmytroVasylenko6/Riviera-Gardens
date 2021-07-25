function initMap() {
    var coordinates = {lat: 46.5642009, lng: 30.8281498},

        map = new google.maps.Map(document.querySelector('#map'), {
            center: coordinates,
            zoom: 13,
            mapId: '13a9898fb94d160d',
        }),
    
        marker = new google.maps.Marker({
            position: coordinates,
            map: map,
          
        });

map.setOptions({styles: [
    {
        "featureType": "administrative.country",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff0000"
            }
        ]
    }
]});
}

initMap()