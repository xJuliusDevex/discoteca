function iniciarMap(){
    var coord={lat:-18.0034627, lng:-70.2393163};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom:10,
        center: coord

    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}