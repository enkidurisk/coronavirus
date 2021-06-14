<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi User</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    <link rel="shortcut icon" href="icon/covid19.ico" type="image/x-icon">
    
</head>
<body>
    <div id="mapid" ></div>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: #000000;
            
        }
        #mapid{
            height: 100vh;
        }
    </style>

    <script>
        var mymap = L.map('mapid').setView([3.596265, 98.636884], 18);

        L.tileLayer('https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}', {
            //Atribut layar bawah kanan Untuk mengetahui sumber Mapbox
            attribution: 'Map data &copy; <a href="https://www.google.com/maps/">Google Maps</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.google.com/">Google </a>' + new Date().getFullYear(),
            //Zoom app
            maxZoom: 20,
            id: 'mapbox/streets-v11',
            //tileSize: 512,
            //zoomOffset: -1,
            //Access token dapat di cari di google
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymap);
        
        var marker = L.marker([3.596265, 98.636884]).addTo(mymap);
        marker.bindPopup("<b>Halo "+ navigator.appVersion   +"</b>"+"<br><br>Saya Berada Disini<br>Jalan Budi Luhur GG Aneka No Rumah 7A").openPopup();
    </script>
</body>
</html>

