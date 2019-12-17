/**
 * Created by ELL on 20/12/2017.
 */
function initMap() {
    var uluru = {lat: -7.8651, lng: 111.4696};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}