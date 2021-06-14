<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="theme-color" content="#121212">

  <link rel="shortcut icon" href="icon/covid19.ico" type="image/x-icon">
  <title>Provinsi indonesia COVID-19</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
  <link rel="stylesheet" href="assets/lib/Leaflet.ExtraMarkers/css/leaflet.extra-markers.min.css">
  <link rel="stylesheet" href="assets/app.css">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script src="assets/lib/Leaflet.ExtraMarkers/js/leaflet.extra-markers.min.js"></script>

  <!--Full screen Download library from github-->
  <link href='dist/leaflet.fullscreen.css' rel='stylesheet' />
  <script src='dist/Leaflet.fullscreen.min.js'></script>
</head>
<body>


  <div class="container-fluid">
        <div id="map"></div>

  
  <script>
    /* Initial Map from github*/
    var map = L.map('map', {
    fullscreenControl: {
        pseudoFullscreen: false
    }
  }).setView([-2.4058653,117.5021489],5); //Home location  screen
    var _attribution = '<a href="covid19" target="_blank">Detail info </a>'+new Date().getFullYear();
    
    /* Tile Basemap */
    //satelite google maps http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}
    var basemap = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3'],
        attribution: ' Google Maps night | ' + _attribution
    });
    basemap.addTo(map);

    var kasusrendah = L.geoJson(null, {
      pointToLayer: function (feature, latlng) {
        if (feature.properties) {
          //Library from github custom Icon point
          var lightgreenMarker = L.ExtraMarkers.icon({
            icon: 'fa-number',
            number: feature.properties.Kasus_Positif,
            markerColor: 'green-light',
            shape: 'circle',
            prefix: 'fa',
            tooltipAnchor: [15, -25]
          });
          return L.marker(latlng, {
            icon: lightgreenMarker,
            riseOnHover: true
          });
        }
      },
      onEachFeature: function (feature, layer) {
        if (feature.properties) {
          //bootstrap 4.5.1
          var content = "<div class='card'>" +
          "<div class='card-header alert-success text-center p-1' style='font-size: 16px;'><strong>Provinsi<br>" + feature.properties.PROV + "</strong></div>" +
          "<div class='card-body p-0'>" +
            "<table class='table table-responsive-sm m-0'>" +
              "<tr><th style='font-size: 16px;'><i class='far fa-sad-tear'></i> Kasus Positif</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Positif + "</th></tr>" +
              "<tr class='text-success'><th style='font-size: 16px;'><i class='far fa-smile'></i> Kasus Sembuh</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Sembuh + "</th></tr>" +
              "<tr class='text-danger'><th style='font-size: 16px;'><i class='far fa-frown'></i> Kasus Meninggal</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Meninggal + "</th></tr>" +
            "</table>" +
          "</div>";
          layer.on({
            click: function (e) {
              kasusrendah.bindPopup(content);
            },
            mouseover: function (e) {
              kasusrendah.bindTooltip(feature.properties.PROV);
            }
          });
        }
      },
      //statistic color
      filter: function(feature, layer) {
        return (feature.properties.Kasus_Positif <= 10000);
      }
    });

    var kasusagakrendah = L.geoJson(null, {
      pointToLayer: function (feature, latlng) {
        if (feature.properties) {
          var darkblueMarker = L.ExtraMarkers.icon({
            icon: 'fa-number',
            number: feature.properties.Kasus_Positif,
            markerColor: 'blue-dark',
            shape: 'circle',
            prefix: 'fa',
            tooltipAnchor: [15, -25]
          });
          return L.marker(latlng, {
            icon: darkblueMarker,
            riseOnHover: true
          });
        }
      },
      onEachFeature: function (feature, layer) {
        if (feature.properties) {
          var content = "<div class='card'>" +
          "<div class='card-header alert-primary text-center p-1' style='font-size: 16px;'><strong>Provinsi<br>" + feature.properties.PROV + "</strong></div>" +
          "<div class='card-body p-0'>" +
            "<table class='table table-responsive-sm m-0'>" +
              "<tr><th style='font-size: 16px;'><i class='far fa-sad-tear'></i> Kasus Positif</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Positif + "</th></tr>" +
              "<tr class='text-success'><th style='font-size: 16px;'><i class='far fa-smile'></i> Kasus Sembuh</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Sembuh + "</th></tr>" +
              "<tr class='text-danger'><th style='font-size: 16px;'><i class='far fa-frown'></i> Kasus Meninggal</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Meninggal + "</th></tr>" +
            "</table>" +
          "</div>";
          layer.on({
            click: function (e) {
              kasusagakrendah.bindPopup(content);
            },
            mouseover: function (e) {
              kasusagakrendah.bindTooltip(feature.properties.PROV);
            }
          });
        }
      },
      filter: function(feature, layer) {
        return (feature.properties.Kasus_Positif >= 10000 && feature.properties.Kasus_Positif <= 65000);
      }
    });

    var kasussedang = L.geoJson(null, {
      pointToLayer: function (feature, latlng) {
        if (feature.properties) {
          var orangeMarker = L.ExtraMarkers.icon({
            icon: 'fa-number',
            number: feature.properties.Kasus_Positif,
            markerColor: 'orange',
            shape: 'circle',
            prefix: 'fa',
            tooltipAnchor: [15, -25]
          });
          return L.marker(latlng, {
            icon: orangeMarker,
            riseOnHover: true
          });
        }
      },
      onEachFeature: function (feature, layer) {
        if (feature.properties) {
          var content = "<div class='card'>" +
          "<div class='card-header alert-warning text-center p-1' style='font-size: 16px;'><strong>Provinsi<br>" + feature.properties.PROV + "</strong></div>" +
          "<div class='card-body p-0'>" +
            "<table class='table table-responsive-sm m-0'>" +
              "<tr><th style='font-size: 16px;'><i class='far fa-sad-tear'></i> Kasus Positif</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Positif + "</th></tr>" +
              "<tr class='text-success'><th style='font-size: 16px;'><i class='far fa-smile'></i> Kasus Sembuh</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Sembuh + "</th></tr>" +
              "<tr class='text-danger'><th style='font-size: 16px;'><i class='far fa-frown'></i> Kasus Meninggal</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Meninggal + "</th></tr>" +
            "</table>" +
          "</div>";
          layer.on({
            click: function (e) {
              kasussedang.bindPopup(content);
            },
            mouseover: function (e) {
              kasussedang.bindTooltip(feature.properties.PROV);
            }
          });
        }
      },
      filter: function(feature, layer) {
        return (feature.properties.Kasus_Positif >= 65000 && feature.properties.Kasus_Positif <= 110000);
      }
    });

    var kasustinggi = L.geoJson(null, {
      pointToLayer: function (feature, latlng) {
        if (feature.properties) {
          var redMarker = L.ExtraMarkers.icon({
            icon: 'fa-number',
            number: feature.properties.Kasus_Positif,
            markerColor: 'red',
            shape: 'circle',
            prefix: 'fa',
            tooltipAnchor: [15, -25]
          });
          return L.marker(latlng, {
            icon: redMarker,
            riseOnHover: true
          });
        }
      },
      onEachFeature: function (feature, layer) {
        if (feature.properties) {
          var content = "<div class='card'>" +
          "<div class='card-header alert-danger text-center p-1' style='font-size: 16px;'><strong>Provinsi<br>" + feature.properties.PROV + "</strong></div>" +
          "<div class='card-body p-0'>" +
            "<table class='table table-responsive-sm m-0'>" +
              "<tr><th style='font-size: 16px;'><i class='far fa-sad-tear'></i> Kasus Positif</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Positif + "</th></tr>" +
              "<tr class='text-success'><th style='font-size: 16px;'><i class='far fa-smile'></i> Kasus Sembuh</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Sembuh + "</th></tr>" +
              "<tr class='text-danger'><th style='font-size: 16px;'><i class='far fa-frown'></i> Kasus Meninggal</th><th style='font-size: 16px;'>" + feature.properties.Kasus_Meninggal + "</th></tr>" +
            "</table>" +
          "</div>";
          layer.on({
            click: function (e) {
              kasustinggi.bindPopup(content);
            },
            mouseover: function (e) {
              kasustinggi.bindTooltip(feature.properties.PROV);
            }
          });
        }
      },
      filter: function(feature, layer) {
        return (feature.properties.Kasus_Positif > 110000);
      }
    });

    $.getJSON("geojsonOpenSource.php", function (data) {
      kasusrendah.addData(data);
      kasusagakrendah.addData(data);
      kasussedang.addData(data);
      kasustinggi.addData(data);
      var groupLayer = L.featureGroup([kasusrendah, kasusagakrendah, kasussedang, kasustinggi]);
      groupLayer.addTo(map);
      map.fitBounds(groupLayer.getBounds());
    });    

    var legend = new L.Control({position: 'bottomleft'});
    legend.onAdd = function (map) {
      this._div = L.DomUtil.create('div', 'info');
      this.update();
      return this._div;
    };
    legend.update = function () {
      this._div.innerHTML = '<h5>Statistik Indonesia</h5><svg width="32" height="20"><rect width="32" height="17" style="fill:rgb(103, 171, 57);stroke-width:0.1;stroke:rgb(0,0,0)" /><text x="12" y="13.5" font-family="Verdana" font-size="14" fill="white">1</text></svg> Positif < 10000 <br><svg width="32" height="20"><rect width="32" height="17" style="fill:rgb(24, 85, 104);stroke-width:0.1;stroke:rgb(0,0,0)" /><text x="7" y="13.5" font-family="Verdana" font-size="14" fill="white">10</text></svg> Positif 10000 - 65000<br><svg width="32" height="20"><rect width="32" height="17" style="fill:rgb(238, 138, 25);stroke-width:0.1;stroke:rgb(0,0,0)" /><text x="7" y="13.5" font-family="Verdana" font-size="14" fill="white">65</text></svg> Positif 65000 - 110000<br><svg width="32" height="20"><rect width="32" height="17" style="fill:rgb(156, 39, 43);stroke-width:0.1;stroke:rgb(0,0,0)" /><text x="2.8" y="13.5" font-family="Verdana" font-size="14" fill="white">110</text></svg> Positif > 110000<br><small>Sumber data: <a href="https://covid19.go.id" target="_blank">covid19.go.id</a></small>'
    };
    legend.addTo(map);
  </script>
</body>
</html>