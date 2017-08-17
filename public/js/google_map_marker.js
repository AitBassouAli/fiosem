

/**
   * ------------------------------------------------------------------------
   * Google Maps  par defaut sur fiosem
   * ------------------------------------------------------------------------
   */      
     
        function init_map() {
            var var_location = new google.maps.LatLng(31.668810,-8.037637);

            var var_mapoptions = {
                center: var_location,
                zoom: 12
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Fiosem-Marrakech"
            });

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var_marker.setMap(var_map);

        }

      
    google.maps.event.addDomListener(window, 'load', init_map);