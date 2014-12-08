function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyDg1K16sEI0b2_XWr2N6dsBTwj8ASXQDN0&sensor=true";
    document.body.appendChild(script);
}
loadScript();

function getCoordenades(query) {
    
    var geocoder =  new google.maps.Geocoder();
    geocoder.geocode( { 'address': query}, function(results, status) {
        
         results = {success: 'undefined' };
        
        if (status == google.maps.GeocoderStatus.OK) {
            
            results = {
                lat: results[0].geometry.location.lat(),
                lon: results[0].geometry.location.lng(),
                success: true
            };
            //alert("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng()); 
            console.log(results);
        } else {
            results = {
                success: false
            };
            console.log(results);
            //alert("Something got wrong " + status);
        }
    });
    
}