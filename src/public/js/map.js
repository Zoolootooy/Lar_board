var marker;
function initMap() {
    var latitude;
    var longitude;
    var myPos;
    if ((document.getElementById("lat").value != "") && (document.getElementById("lon").value != "")){
        latitude = parseFloat(document.getElementById("lat").value);
        longitude = parseFloat(document.getElementById("lon").value);
        console.log(latitude + "|" + longitude);
        var markerPosition = {lat:latitude, lng: longitude};
        map = new google.maps.Map(document.getElementById('map'), {
            center: markerPosition,
            zoom: 8
        });


        marker = new google.maps.Marker({
            position: markerPosition,
            map: map
        });
    }
    else {
        latitude = 53.90099900;
        longitude = 31.81277500;
        myPos = {lat:latitude, lng: longitude};
        map = new google.maps.Map(document.getElementById('map'), {
            center: myPos,
            zoom: 6
        });
    }



    google.maps.event.addListener(map, 'click', function(event) {
        placeMarker(event.latLng);
        document.getElementById("lat").value = event.latLng.lat();
        document.getElementById("lon").value = event.latLng.lng();
    });
}

function deleteMarkers(){
    marker.setMap(null);
    document.getElementById("lat").value = "";
    document.getElementById("lon").value = "";
}



function placeMarker(location) {
    if ( marker ) {
        marker.setMap(map);
        marker.setPosition(location);
    } else {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
}
