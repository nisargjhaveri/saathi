function initialize() {
    $maps = $('.panel .panel-body .map_canvas');
    $maps.each(function(index, Element) {
        $infotext = $(Element).children('.infotext');
        var map;
        //function initialize() {
        var myLatlng = new google.maps.LatLng($infotext.children('.latitude').text(), $infotext.children('.longitude').text());
        console.log($infotext.children('.latitude').text());
        var myOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(Element, myOptions);

        var marker = new google.maps.Marker({
            draggable: false,
            position: myLatlng,
            map: map,
            title: $infotext.children('.my-address').text()
        });

    });
}


function initializeView() {

    var map;
    var myLatlng = new google.maps.LatLng(document.getElementById("lat").value, document.getElementById("long").value);
    console.log(document.getElementById("lat").value);
    var myOptions = {
        zoom: 8,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var marker = new google.maps.Marker({
        draggable: true,
        position: myLatlng,
        map: map,
        title: document.getElementById("my-address").value
    });

    google.maps.event.addListener(marker, 'dragend', function (event) {


        document.getElementById("lat").value = event.latLng.lat();
        document.getElementById("long").value = event.latLng.lng();
    });

}

function init()
{

    var address = (document.getElementById('my-address'));
    var autocomplete = new google.maps.places.Autocomplete(address);
    autocomplete.setTypes(['geocode']);
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            return;
        }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    });
}

function codeAddress() {
    geocoder = new google.maps.Geocoder();
    var address = document.getElementById("my-address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            document.getElementById("lat").value=results[0].geometry.location.lat();
            document.getElementById("long").value=results[0].geometry.location.lng();
            initializeView();
        }

        else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, 'load', initializeView);
google.maps.event.addDomListener(window, 'load', init);
