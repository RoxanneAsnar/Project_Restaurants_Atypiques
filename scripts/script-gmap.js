$(function() {
    $("#map").googleMap({
        zoom: 6, // Initial zoom level (optional)
        coords: [46.71801, 4.800015], // Map center (optional)
        type: "ROADMAP" // Map type (optional)
    });
    $("#map").addMarker({
        address: "44, rue de Tudelle - 45100 Orléans", // Postale Address
        title: 'L’Epicerie Orléanaise', // Title
        text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
    $("#map").addMarker({
        address: "30, rue Maurice Fonvieille 31000 Toulouse", // Postale Address
        title: "Marshall's Diner", // Title
        text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
    $("#map").addMarker({
        address: "44, quai Charles de Gaulle 69006 Lyon", // Postale Address
        title: 'La Table en Braille', // Title
        text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
    $("#map").addMarker({
        address: "9, rue Ausone 33000 Bordeaux", // Postale Address
        title: 'Koeben', // Title
        text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
    $("#map").addMarker({
        address: "2, Rue Emmanuel le Guen 35400 Saint Malo", // Postale Address
        title: 'La Baie des Pirates', // Title
        text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
    $("#map").addMarker({
        address: "12, avenue de la République 75011 Paris ", // Postale Address
        title: ' Le Dernier bar avant la fin du monde', // Title
        text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
});
var center;
$(function calculateCenter() {
    center = $("#map").getCenter();
    google.maps.event.addDomListener($("#map"), 'idle', function () {
        calculateCenter();
    });
    google.maps.event.addDomListener(window, 'resize', function () {
        map.setCenter(center);
    });
});

