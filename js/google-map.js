const customIcons = {
    club1: {
        icon: 'https://s28.postimg.org/jnbs04mi5/black.png'
    },
    club2: {
        icon: 'https://s24.postimg.org/b6pwp4nlx/yellow.png'
    },
};

function initMap() {

    // Google map UI styling
    const myOptions = {
        center: new google.maps.LatLng(51.919438, 19.145136),
        zoom: 4,
        minZoom: 4,
        scrollwheel: false,
        draggable: true,
        disableDefaultUI: false,

        // Google map custom styling
        styles: [{
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#6195a0"
            }]
        }, {
            "featureType": "administrative.province",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "administrative.province",
            "elementType": "geometry.stroke",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "lightness": "0"
            }, {
                "saturation": "0"
            }, {
                "color": "#f5f5f2"
            }, {
                "gamma": "1"
            }]
        }, {
            "featureType": "landscape.man_made",
            "elementType": "all",
            "stylers": [{
                "lightness": "-3"
            }, {
                "gamma": "1.00"
            }]
        }, {
            "featureType": "landscape.natural.terrain",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#bae5ce"
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 45
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [{
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#fac9a9"
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "labels.text",
            "stylers": [{
                "color": "#4e4e4e"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#787878"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{
                "visibility": "simplified"
            }]
        }, {
            "featureType": "transit.station.airport",
            "elementType": "labels.icon",
            "stylers": [{
                "hue": "#0a00ff"
            }, {
                "saturation": "-77"
            }, {
                "gamma": "0.57"
            }, {
                "lightness": "0"
            }]
        }, {
            "featureType": "transit.station.rail",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#43321e"
            }]
        }, {
            "featureType": "transit.station.rail",
            "elementType": "labels.icon",
            "stylers": [{
                "hue": "#ff6c00"
            }, {
                "lightness": "4"
            }, {
                "gamma": "0.75"
            }, {
                "saturation": "-68"
            }]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{
                "color": "#eaf6f8"
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#c7eced"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [{
                "lightness": "-49"
            }, {
                "saturation": "-53"
            }, {
                "gamma": "0.79"
            }]
        }]

    };

    const map = new google.maps.Map(document.getElementById("map"),
        myOptions);

    const infoWindow = new google.maps.InfoWindow;

    // Connects to the genxml.php file
    downloadUrl("php/google-map/genxml.php", function(data) {
        const xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (let i = 0; i < markers.length; i++) {
            const name = markers[i].getAttribute("name");
            const address = markers[i].getAttribute("address");
            const type = markers[i].getAttribute("type");
            const point = new google.maps.LatLng(
                parseFloat(markers[i].getAttribute("lat")),
                parseFloat(markers[i].getAttribute("lng")));
            const html = "<b>" + name + "</b> <br/>" + address;
            const icon = customIcons[type] || {};
            const marker = new google.maps.Marker({
                map: map,
                position: point,
                icon: icon.icon
            });
            bindInfoWindow(marker, map, infoWindow, html);
        }
    });
}

function bindInfoWindow(marker, map, infoWindow, html) {
    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
    });
}

function downloadUrl(url, callback) {
    const request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}

function doNothing() {}
