( function() {

    "use strict";

    var $gmap,
        gMap,
        fInitGMap,
        fAddMarker;




    fInitGMap = function() {
        gMap = new google.maps.Map( $gmap[ 0 ], {
            "center": new google.maps.LatLng( 50.611,5.5951963 ),
            "disableDefaultUI": true,
            "scrollwheel": false,
            "zoomControl": true,
            "zoom": 16,
            "styles": [
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#a5cf8f"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#579735"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#a5cf8f"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#a5cf8f"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#c4edae"
                        }
                    ]
                }
            ]
        } );

        gMap.markers = [];
    };


    fAddMarker = function( ) {
            var gMarker;

            gMarker = new google.maps.Marker( {
                "map": gMap,
                "position": new google.maps.LatLng( 50.6127443,5.5951963 )
            } );

            gMap.markers.push( gMarker );

    };

    $( function() {

        $gmap = $( "#gmap" );

        fInitGMap();
        fAddMarker();

    } );

    $('.team__member--see').click(function () {

		var text = $(this).children('.team__member--schedule');

		if (text.is(':hidden')) {
			text.slideDown('200');

		} else {
			text.slideUp('200');

		}

	});

} )();
