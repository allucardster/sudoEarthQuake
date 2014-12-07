function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyDg1K16sEI0b2_XWr2N6dsBTwj8ASXQDN0&sensor=true";
    document.body.appendChild(script);
}
loadScript();