
<style type="text/css">
    /* Set the size of the div element that contains the map */
    
    #map {
        height: 450px;
        /* The height is 400 pixels */
        width: 600px;
        /* The width is the width of the web page */
    }
</style>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        // '{"places":[{"address":"85 Avenue de St M&eacute;dard, 33320 Eysines","latitude":"44.86289234624658","longitude":"-0.6475183669123229","marker":"https://i.imgur.com/XtheBY3.png"}],"options":{"zoom":12,"draggable":true,"panControl":true,"zoomControl":true,"scaleControl":true,"mapTypeControl":true,"mapTypeId":"ROADMAP","apikey":"AIzaSyABef9WwJGx0kFAM6g9EpI0ZWOPxYQZXOM"},"style":[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]}],"icon":""}' > < /div>

        const uluru = {
            lat: 44.86289234624658,
            lng: -0.6475183669123229,
            address: "Holaa",

        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 20,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: "eysynes coiffeur",
            icon: "https://i.imgur.com/XtheBY3.png",
        });
    }
</script>
</head>

    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABef9WwJGx0kFAM6g9EpI0ZWOPxYQZXOM&callback=initMap&libraries=&v=weekly" async></script>